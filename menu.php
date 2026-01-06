<ul class="nav nav-pills nav-sidebar flex-column"
    data-widget="treeview"
    role="menu"
    data-accordion="false">

  <!-- Dashboard -->
  <li class="nav-item">
    <a href="dashboard.php" class="nav-link">
      <i class="nav-icon bi bi-speedometer2"></i>
      <p>Dashboard</p>
    </a>
  </li>

  <!-- Master Data -->
  <li class="nav-item has-treeview">
    <ul class="nav nav-treeview">
      <li class="nav-item">
        <a href="?menu=siswa" class="nav-link">
          <i class="bi bi-people-fill nav-icon"></i>
          <p>Data Siswa</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="?menu=guru" class="nav-link">
          <i class="bi bi-person-badge-fill nav-icon"></i>
          <p>Data Guru</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="?menu=kelas" class="nav-link">
          <i class="bi bi-door-open-fill nav-icon"></i>
          <p>Data Kelas</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="?menu=nilai" class="nav-link">
          <i class="bi bi-journal-text nav-icon"></i>
          <p>Data Nilai</p>
        </a>
      </li>
    </ul>
  </li>

  <!-- Laporan -->
  <li class="nav-item has-treeview">
    <ul class="nav nav-treeview">
      <li class="nav-item">
        <a href="?menu=lap_siswa" class="nav-link">
          <i class="bi bi-file-person-fill nav-icon"></i>
          <p>Laporan Siswa</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="?menu=lap_guru" class="nav-link">
          <i class="bi bi-file-person nav-icon"></i>
          <p>Laporan Guru</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="?menu=lap_nilai" class="nav-link">
          <i class="bi bi-file-spreadsheet-fill nav-icon"></i>
          <p>Laporan Nilai</p>
        </a>
      </li>
    </ul>
  </li>

  <!-- User -->
  <li class="nav-item">
    <a href="?menu=user" class="nav-link">
      <i class="nav-icon bi bi-person-lock"></i>
      <p>User Login</p>
    </a>
  </li>

  <!-- Logout -->
  <li class="nav-item">
    <a href="logout.php" class="nav-link text-danger">
      <i class="nav-icon bi bi-box-arrow-right"></i>
      <p>Logout</p>
    </a>
  </li>
</ul>
