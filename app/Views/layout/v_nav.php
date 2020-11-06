<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
  
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <ul class="sidebar-menu" data-widget="tree">
        <?php if(session()->get('level') == 1){ ?>
        <li>
          <a href="admin">
            <i class="fa fa-fire"></i> <span>Dashboard Admin 1</span>
            </span>
          </a>
        </li>
        <li>
          <a href="auth/logout">
            <i class="fa fa-fire"></i> <span>Dashboard Admin 2</span>
            </span>
          </a>
        </li>
        <?php } ?>

        <?php if(session()->get('level') == 2){ ?>
        <li>
          <a href="pengadopsi">
            <i class="fa fa-fire"></i> <span>Dashboard Pengadopsi 1</span>
            </span>
          </a>
        </li>
        <li>
          <a href="auth/logout">
            <i class="fa fa-power-off"></i> <span>Logout</span>
            </span>
          </a>
       </li>
        <?php } ?>
        <?php if(session()->get('level') == 3){ ?>
        <li>
          <a href="mitra">
            <i class="fa fa-fire"></i> <span>Dahboard Mitra</span>
            </span>
          </a>
        </li>
        <li>
          <a href="auth/logout">
            <i class="fa fa-power-off"></i> <span>Logout</span>
            </span>
          </a>
        </li>
        <?php } ?>
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <h3 class="m-0 text-dark" style="font-weight: 200;">Welcome, <?= session('nama_belakang');?></h3>
      <div class="breadcrumb">
        <p style="opacity: 0.8;"><?= date('D, d-m-Y');?></p>
      </div>
    </section>

    <!-- Main content -->
    <section class="content">