
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Admin-Pengolahan Data A.L.I.M</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    {{HTML::style('assets/lte/bootstrap/css/bootstrap.min.css')}}
    {{HTML::style('assets/lte//plugins/datatables/dataTables.bootstrap.css')}}
    {{HTML::style('assets/lte/dist/css/AdminLTE.min.css')}}
    {{HTML::style('assets/lte/dist/css/skins/_all-skins.min.css')}}
  </head>
  <body class="skin-blue">
    <div class="wrapper">
      
      <header class="main-header">
        <a href="#" class="logo"><b>PKS</b> PINANG</a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              
            </div>
            <div class="pull-left info">
              <p>{{Sentry::getUser()->username}}</p>

              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- search form -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MENU</li>
            <li>
              <a href="{{URL::to('admin/home')}}">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-files-o"></i>
                <span>Data Grup</span>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{URL::to('admin/jenjang')}}"><i class="fa fa-bar-chart-o"></i> Jenjang</a></li>
                <li><a href="{{URL::to('admin/kelompok')}}"><i class="fa fa-table"></i>Kelompok</a></li>
                <li><a href="{{URL::to('admin/anggota')}}"><i class="fa fa-table"></i>Anggota</a></li>
              </ul>
            </li>
            <li><a href="{{URL::to('admin/agenda')}}"><i class="fa fa-table"></i>Data Agenda Kegiatan</strong></a></li>
            <li><a href="{{URL::to('admin/users')}}"><i class="fa fa-table"></i>Data User</a></li>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-files-o"></i>
                <span>Grafik</span>
              </a>
              <ul class="treeview-menu">
                <li><a href="http://localhost/jkt/alim/panel/ibadah/add"><i class="fa fa-bar-chart-o"></i> Grafik Per Orang</a></li>
                <li><a href="http://localhost/jkt/alim/panel/ibadah"><i class="fa fa-bar-chart-o"></i> Grafik Per Kelompok</a></li>
              </ul>
            </li>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-files-o"></i>
                <span>SPK Kenaikan Jenjang</span>
              </a>
              <ul class="treeview-menu">
                <li><a href="http://localhost/jkt/alim/panel/ibadah/add"><i class="fa fa-qrcode"></i> Hitung Kenaikan Jenjang</a></li>
              </ul>
            </li>
            <li><a href="{{URL::to('logout')}}"><i class="fa fa-qrcode"></i> Keluar</a></li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">

              <div class="box">

                <div class="box-body">
                  @yield('content')
                </div>
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 2.0
        </div>
        <strong>All right reserved. Modified by: Ayu Dian Prasetiati. 2011-31-129. Skripsi. 2015.
      </footer>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.3 -->
    {{HTML::script('assets/lte/plugins/jQuery/jQuery-2.1.3.min.js')}}
    {{HTML::script('assets/lte/bootstrap/js/bootstrap.min.js')}}
    {{HTML::script('assets/lte/plugins/datatables/jquery.dataTables.js')}}
    {{HTML::script('assets/lte/plugins/datatables/dataTables.bootstrap.js')}}
    {{HTML::script('assets/lte/plugins/slimScroll/jquery.slimscroll.min.js')}}
    {{HTML::script('assets/lte/plugins/fastclick/fastclick.min.js')}}
    {{HTML::script('assets/lte/dist/js/app.min.js')}}
    <!-- page script -->
    <script type="text/javascript">
      $(function () {
        $("#data").dataTable();
        $('#data2').dataTable({
          "bPaginate": true,
          "bLengthChange": false,
          "bFilter": false,
          "bSort": true,
          "bInfo": true,
          "bAutoWidth": false
        });
      });
    </script>

  </body>
</html>
