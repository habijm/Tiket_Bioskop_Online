<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Setitik</title>
  <link rel="shortcut icon" type="image/png" href="<?php echo base_url() ?>/asset/admin/images/logos/logo.png" />
  <link rel="stylesheet" href="<?php echo base_url() ?>/asset/admin/css/styles.min.css" />

</head>

<body>
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a class="text-nowrap logo-img">
            <h1><b> Admin Setitik </b></h1>
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Home</span>
            </li>
            <li class="sidebar-item">
              <div class="sidebar-link" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu"><?php echo anchor('admin/home', 'DASHBOARD'); ?></span>
              </div>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">MASTER DATA</span>
            </li>
             <li class="sidebar-item">
              <div class="sidebar-link" aria-expanded="false">
                <span>
                  <i class="ti ti-user "></i>
                </span>
                <span class="hide-menu"><?php echo anchor('admin/iklan', 'TAMPILAN IKLAN'); ?></span>
              </div>
            </li>
            <li class="sidebar-item">
              <div class="sidebar-link" aria-expanded="false">
                <span>
                  <i class="ti ti-user "></i>
                </span>
                <span class="hide-menu"><?php echo anchor('admin/customer', 'DATA CUSTOMER'); ?></span>
              </div>
            </li>
            <li class="sidebar-item">

              <div class="sidebar-link" aria-expanded="false">
                <span>
                  <i class="ti ti-file-description "></i>
                </span>
                <span class="hide-menu"><?php echo anchor('admin/news_cat', 'KATEGORI FILM'); ?></span>
              </div>
            </li>
             <li class="sidebar-item">

              <div class="sidebar-link" aria-expanded="false">
                <span>
                  <i class="ti ti-file-description "></i>
                </span>
                <span class="hide-menu"><?php echo anchor('admin/kursi', 'DATA KURSI '); ?></span>
              </div>
            </li>
            <li class="sidebar-item">
              <div class="sidebar-link" aria-expanded="false">
                <span>
                  <i class="ti ti-typography "></i>
                </span>
                <span class="hide-menu"><?php echo anchor('admin/about', 'HALAMAN ABOUT'); ?></span>
              </div>
            </li>
            <li class="sidebar-item">
              <div class="sidebar-link" aria-expanded="false">
                <span>
                  <i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-film" viewBox="0 0 16 16">
                      <path d="M0 1a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V1zm4 0v6h8V1H4zm8 8H4v6h8V9zM1 1v2h2V1H1zm2 3H1v2h2V4zM1 7v2h2V7H1zm2 3H1v2h2v-2zm-2 3v2h2v-2H1zM15 1h-2v2h2V1zm-2 3v2h2V4h-2zm2 3h-2v2h2V7zm-2 3v2h2v-2h-2zm2 3h-2v2h2v-2z" />
                    </svg></i>
                </span>
                <span class="hide-menu"><?php echo anchor('admin/news', 'DATA FILM'); ?></span>
              </div>
            </li>
            <li  class="sidebar-item">

              <div class="sidebar-link" aria-expanded="false">
                <span>
                  <i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-building-fill" viewBox="0 0 16 16">
                      <path d="M3 0a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h3v-3.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5V16h3a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1H3Zm1 2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1Zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1Zm3.5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5ZM4 5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1ZM7.5 5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5Zm2.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1ZM4.5 8h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5Zm2.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1Zm3.5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5Z" />
                    </svg></i>
                </span>
                <span class="hide-menu"><?php echo anchor('admin/theater', 'DATA THEATER'); ?></span>
              </div>

            </li>



            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">TRANSAKSI</span>
            </li>
            </li>
            <li class="sidebar-item">

              <div class="sidebar-link" aria-expanded="false">
                <span>
                  <i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-credit-card-fill" viewBox="0 0 16 16">
                      <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v1H0V4zm0 3v5a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7H0zm3 2h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-1a1 1 0 0 1 1-1z" />
                    </svg></i>
                </span>
                <span class="hide-menu"><?php echo anchor('admin/transaksi', '  DATA TRANSAKSI'); ?></span>
              </div>

            </li>

            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">BANTUAN</span>
            </li>
            </li>
            <li class="sidebar-item">

              <div class="sidebar-link" aria-expanded="false">
                <span>
                  <i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-left-text-fill" viewBox="0 0 16 16">
                      <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H4.414a1 1 0 0 0-.707.293L.854 15.146A.5.5 0 0 1 0 14.793V2zm3.5 1a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 2.5a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 2.5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5z" />
                    </svg></i>
                </span>
                <span class="hide-menu"><?php echo anchor('admin/komentar', 'KOMENTAR'); ?></span>
              </div>

            </li>


            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">AUTH</span>
            </li>

            <li class="sidebar-item">
              <div class="sidebar-link" aria-expanded="false">
                <span>
                  <i class="ti ti-logout"></i>
                </span>
                <span class="hide-menu"><?php echo anchor('admin/login/logout', 'LOGOUT'); ?></span>
              </div>


            </li>
          </ul>

        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>


    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-light">
          <ul class="navbar-nav">
            <li class="nav-item d-block d-xl-none">
              <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                <i class="ti ti-menu-2"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-icon-hover" href="javascript:void(0)">
                <i class="ti ti-bell-ringing"></i>
                <div class="notification bg-primary rounded-circle"></div>
              </a>
            </li>
          </ul>
          <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
              <li class="nav-item dropdown">
                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown" aria-expanded="false">
                  <img src="<?php echo base_url() ?>/asset/admin/images/profile/user-1.jpg" alt="" width="35" height="35" class="rounded-circle">
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                  <div class="message-body">
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-user fs-6"></i>
                      <p class="mb-0 fs-3">My Profile</p>
                    </a>
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-mail fs-6"></i>
                      <p class="mb-0 fs-3">My Account</p>
                    </a>

                    </a>
                    <span class="btn btn-outline-primary mx-3 mt-2 d-block"><?php echo anchor('admin/login/logout', 'LOGOUT'); ?></span>

                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!--  Header End -->
      <div class="container-fluid">
        <!--  Row 1 -->
        <div class="row">


          <?php echo $konten; ?>
        </div>
      </div>
    </div>







    <div class="py-6 px-6 text-center">

      <footer>
        <p>Page rendered in <strong>{elapsed_time}<strong> seconds. <?php echo (ENVIRONMENT === 'development') ? 'Codeigniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
      </footer>
    </div>
  </div>

  <script src="<?php echo base_url() ?>/asset/admin/libs/jquery/dist/jquery.min.js"></script>
  <script src="<?php echo base_url() ?>/asset/admin/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url() ?>/asset/admin/js/sidebarmenu.js"></script>
  <script src="<?php echo base_url() ?>/asset/admin/js/app.min.js"></script>
  <script src="<?php echo base_url() ?>/asset/admin/libs/apexcharts/dist/apexcharts.min.js"></script>
  <script src="<?php echo base_url() ?>/asset/admin/libs/simplebar/dist/simplebar.js"></script>
  <script src="<?php echo base_url() ?>/asset/admin/js/dashboard.js"></script>
</body>