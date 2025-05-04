<aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
      <?php if(isset($_SESSION['username'])): ?>
        <img src="../public/paob_assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <?php else: ?>
        <img src="public/paob_assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <?php endif ?>
      <span class="brand-text">PAOB Mobile</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <?php if(isset($_SESSION['username'])): ?>
          <a href="logout.php" class="btn btn-block border border-dark font-weight-bold"><i class="fas fa-user"></i> Logout</a>
        <?php else: ?>
          <a href="view/login.php" class="btn btn-block border border-dark font-weight-bold" target="_blank"><i class="fas fa-user"></i> Login as Admninistrator</a>
        <?php endif ?>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <?php if(isset($_SESSION['username'])): ?>
              <a href="" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p class="text-uppercase">Daftar OSIS</p>
              </a>
            <?php else: ?>
              <a href="index.php?route=cek" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p class="text-uppercase">Daftar OSIS</p>
              </a>
            <?php endif ?>
          </li>
          <li class="nav-item">
            <?php if(!isset($_SESSION['username'])): ?>
              <a href="index.php?route=panduan" class="nav-link">
                <i class="nav-icon fas fa-book"></i>
                <p class="text-uppercase">Panduan</p>
              </a>
            <?php endif ?>
          </li>
          <li class="nav-item">
            <?php if(isset($_SESSION['username'])): ?>
              <a href="../index.php" class="nav-link">
                <i class="nav-icon fas fa-arrow-right-from-bracket"></i>
                <p class="text-uppercase">Keluar</p>
              </a>
            <?php else: ?>
              <a href="index.php" class="nav-link">
                <i class="nav-icon fas fa-arrow-right-from-bracket"></i>
                <p class="text-uppercase">Keluar</p>
              </a>
            <?php endif ?>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>