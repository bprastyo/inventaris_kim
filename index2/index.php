<?php include_once"../session.php";
include_once"header.php"; ?>

                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="../logout.php" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->

            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <section class="sidebar">
          <div class="user-panel">
            <div class="pull-left image">
              <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p><?php echo $_SESSION['username'];?></p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- search form -->

          <ul class="sidebar-menu">
            <li class="header">MAIN MENU</li>


            <li class="treeview">
              <a href="#">
                <i class="fa fa-edit"></i> <span>Permintaan</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="javascript:void(0)" onclick="permintaan()"><i class="fa fa-circle-o"></i>Permintaan Keluar</a></li>
                <li><a href="javascript:void(0)" onclick="pembelian_kel()"><i class="fa fa-circle-o"></i>Permintaan Masuk</a></li>
                <!--<li><a href="javascript:void(0)" onclick="permintaan_tam()"><i class="fa fa-circle-o"></i>Tambah</a></li>-->
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-table"></i> <span>Laporan</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="javascript:void(0)" onclick="laporan_keluar()"><i class="fa fa-circle-o"></i>Laporan Keluar</a></li>
                <li><a href="javascript:void(0)" onclick="laporan_masuk()"><i class="fa fa-circle-o"></i>Laporan Masuk</a></li>
                <li><a href="javascript:void(0)" onclick="laporan_do()"><i class="fa fa-circle-o"></i>Laporan Do</a></li>
              </ul>
            </li>
            <li>
              <a href="JavaScript:void(0)" onclick="user()">
                <i class="fa fa-user"></i> <span>User</span>
                <small class="label pull-right bg-red"></small>
              </a>
            </li>

          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>



      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div id="isi"><!--isi-->
        <section class="content-header">
          <h1>

          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>
        <br>
        <div class="profil">
        <div class="logo">
        <img src="logo.gif" class="img-circle">
        </div>
        <div class="text">
        PT. KARYA INOVASI MANDIRI
        <h3>Sistem pengadaan sperpart Air Conditioner (AC)</h3>
        </div>
      </div>
    </div>
</div>
      </div><!--isi-->
      </div>
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>sariatul</b> masrifah
        </div>
        <strong>Copyright &copy; 2016 .</strong> PT.KIM Rembang
      </footer>

      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <script src="bootstrap/js/jquery-ui.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="dist/js/app.min.js"></script>
    <script src="bootstrap/js/proses.js"></script>
  </body>
</html>
