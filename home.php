<div class="app-main">
  <div class="container-fluid mt-4">

    <!-- Judul -->
    <div class="row mb-4">
      <div class="col">
        <h3 class="fw-semibold">Dashboard</h3>
        <p class="text-muted">Ringkasan data sistem sekolah</p>
      </div>
    </div>

    <?php
    $jml_siswa = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM siswa"));
    $jml_guru  = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM guru"));
    $jml_kelas = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM kelas"));
    ?>

    <?php
    $nama = $_SESSION['username'] ?? 'User';
    $role = $_SESSION['role'] ?? 'Admin';

    $jam = date("H");
    if ($jam < 11) {
      $salam = "Selamat Pagi";
    } elseif ($jam < 15) {
      $salam = "Selamat Siang";
    } elseif ($jam < 18) {
      $salam = "Selamat Sore";
    } else {
      $salam = "Selamat Malam";
    }
    ?>

    <div class="row mb-4">
      <div class="col-12">
        <div class="card shadow-sm border-0 bg-primary text-white">
          <div class="card-body">
            <h4 class="mb-1"><?= $salam ?> 👋</h4>
            <h5 class="fw-bold"><?= htmlspecialchars($nama) ?></h5>
            <p class="mb-0">
              Anda login sebagai <b><?= htmlspecialchars($role) ?></b><br>
              Sistem Informasi Sekolah
            </p>
          </div>
        </div>
      </div>
    </div>


    <!-- Statistik -->
    <div class="row g-3">
      
      <!-- Siswa -->
      <div class="col-md-4">
        <div class="card shadow-sm border-0">
          <div class="card-body d-flex align-items-center">
            <div class="me-3 text-primary fs-1">
              <i class="bi bi-people-fill"></i>
            </div>
            <div>
              <h6 class="mb-0 text-muted">Jumlah Siswa</h6>
              <h3 class="fw-bold"><?= $jml_siswa ?></h3>
            </div>
          </div>
        </div>
      </div>

      <!-- Guru -->
      <div class="col-md-4">
        <div class="card shadow-sm border-0">
          <div class="card-body d-flex align-items-center">
            <div class="me-3 text-success fs-1">
              <i class="bi bi-person-badge-fill"></i>
            </div>
            <div>
              <h6 class="mb-0 text-muted">Jumlah Guru</h6>
              <h3 class="fw-bold"><?= $jml_guru ?></h3>
            </div>
          </div>
        </div>
      </div>

      <!-- Kelas -->
      <div class="col-md-4">
        <div class="card shadow-sm border-0">
          <div class="card-body d-flex align-items-center">
            <div class="me-3 text-warning fs-1">
              <i class="bi bi-door-open-fill"></i>
            </div>
            <div>
              <h6 class="mb-0 text-muted">Jumlah Kelas</h6>
              <h3 class="fw-bold"><?= $jml_kelas ?></h3>
            </div>
          </div>
        </div>
      </div>

    </div>

    <?php
    $jml_siswa = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM siswa"));
    $jml_guru  = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM guru"));
    $jml_kelas = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM kelas"));
    ?>

    <div class="row mt-4">

      <!-- Chart -->
      <div class="col-md-6">
        <div class="card shadow-sm border-0">
          <div class="card-header bg-white">
            <h5 class="mb-0">Grafik Data Sekolah</h5>
          </div>
          <div class="card-body">
            <canvas id="chartSekolah"></canvas>
          </div>
        </div>
      </div>

      <!-- Info -->
      <div class="col-md-6">
        <div class="card shadow-sm border-0">
          <div class="card-header bg-white">
            <h5 class="mb-0">Informasi</h5>
          </div>
          <div class="card-body">
            <p>Dashboard ini menampilkan ringkasan data:</p>
            <ul>
              <li>Total Siswa</li>
              <li>Total Guru</li>
              <li>Total Kelas</li>
            </ul>
            <p class="text-muted">Data diambil langsung dari database.</p>
          </div>
        </div>
      </div>

    </div>

    <!-- Chart Script -->
    <script>
    const ctx = document.getElementById('chartSekolah');

    new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ['Siswa', 'Guru', 'Kelas'],
        datasets: [{
          label: 'Jumlah Data',
          data: [<?= $jml_siswa ?>, <?= $jml_guru ?>, <?= $jml_kelas ?>],
          backgroundColor: [
            '#0d6efd',
            '#198754',
            '#ffc107'
          ]
        }]
      },
      options: {
        responsive: true,
        plugins: {
          legend: { display: false }
        }
      }
    });
    </script>

  </div>
</div>
