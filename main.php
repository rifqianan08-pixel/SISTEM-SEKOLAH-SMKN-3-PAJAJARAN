<?php
include "koneksi.php";

// Hitung data utama sekolah
$jml_siswa = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM siswa"));
$jml_guru  = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM guru"));
$jml_kelas = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM kelas"));
$jml_user  = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM user"));
?>

<main class="app-main">
  <!-- Header -->
  <div class="app-content-header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6">
          <h3 class="mb-0">Dashboard Sekolah</h3>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-end">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
          </ol>
        </div>
      </div>
    </div>
  </div>

  <!-- Content -->
  <div class="app-content">
    <div class="container-fluid">
      <div class="row">

        <!-- Siswa -->
        <div class="col-lg-3 col-6">
          <div class="small-box text-bg-info">
            <div class="inner">
              <h3><?= $jml_siswa ?></h3>
              <p>Data Siswa</p>
            </div>
            <i class="bi bi-people-fill small-box-icon"></i>
            <a href="?menu=siswa" class="small-box-footer">
              Lihat Data <i class="bi bi-arrow-right-circle"></i>
            </a>
          </div>
        </div>

        <!-- Guru -->
        <div class="col-lg-3 col-6">
          <div class="small-box text-bg-success">
            <div class="inner">
              <h3><?= $jml_guru ?></h3>
              <p>Data Guru</p>
            </div>
            <i class="bi bi-person-badge-fill small-box-icon"></i>
            <a href="?menu=guru" class="small-box-footer">
              Lihat Data <i class="bi bi-arrow-right-circle"></i>
            </a>
          </div>
        </div>

        <!-- Kelas -->
        <div class="col-lg-3 col-6">
          <div class="small-box text-bg-warning">
            <div class="inner">
              <h3><?= $jml_kelas ?></h3>
              <p>Data Kelas</p>
            </div>
            <i class="bi bi-door-open-fill small-box-icon"></i>
            <a href="?menu=kelas" class="small-box-footer">
              Lihat Data <i class="bi bi-arrow-right-circle"></i>
            </a>
          </div>
        </div>

        <!-- User -->
        <div class="col-lg-3 col-6">
          <div class="small-box text-bg-danger">
            <div class="inner">
              <h3><?= $jml_user ?></h3>
              <p>User Login</p>
            </div>
            <i class="bi bi-shield-lock-fill small-box-icon"></i>
            <a href="?menu=user" class="small-box-footer">
              Lihat Data <i class="bi bi-arrow-right-circle"></i>
            </a>
          </div>
        </div>

      </div>
      
    <div class="row mt-4">

      <!-- Chart -->
      <div class="col-md-6">
        <div class="card shadow-sm border-0">
          <div class="card-header bg-white">
            <div class="d-flex justify-content-center align-items-center">
              GRAFIK DATA SEKOLAH
            </div>
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
            <div class="d-flex justify-content-center align-items-center">
              INFORMASI
            </div>
          </div>
          <div class="card-body">
            <p>
              <ul>
                <li>📊 Dashboard<br>
                  Menampilkan informasi ringkas dan akses utama ke layanan akademik sekolah.
                </li>
                <li>👨‍🏫 Data Guru<br>
                  Menyajikan informasi dan pengelolaan data tenaga pendidik SMKN 3 Pajajaran.                  
                </li>
                <li>👨‍🎓 Data Siswa<br>
                  Menyediakan data peserta didik sebagai bagian dari administrasi akademik sekolah.              
                </li>
                <li>📝 Nilai<br>
                  Menampilkan dan mengelola hasil penilaian akademik siswa.           
                </li>
                <li>📑 Laporan<br>
                  Menyediakan laporan akademik sebagai dokumentasi dan evaluasi pembelajaran.          
                </li>
              </ul>
            </p>
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
      data: [<?= $jml_siswa ?>, <?= $jml_guru ?>, <?= $jml_kelas ?>],
      backgroundColor: [
        '#16bed8ff',
        '#198754',
        '#ffc107'
      ]
    }]
  },
  options: {
    plugins: {
      legend: {
        display: false   // 🔥 legend biru HILANG
      }
    }
  }
});
    </script>

      

    </div>
  </div>
</main>
