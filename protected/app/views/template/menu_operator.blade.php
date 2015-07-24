<nav class="navbar navbar-static-top">
  <div class="container-fluid">
  <div class="navbar-header">
    <a href="../../index2.html" class="navbar-brand"><b>Admin</b>LTE</a>
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
      <i class="fa fa-bars"></i>
    </button>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse" id="navbar-collapse">
    <ul class="nav navbar-nav">
      <li><a href="{{URL::to('sis_operator/home')}}">Beranda</a></li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Master <span class="caret"></span></a>
        <ul class="dropdown-menu" role="menu">
          <li><a href="{{URL::to('sis_operator/profile_sekolah')}}"><i class="fa fa-circle-o"></i> Profile Sekolah</a></li>
          <li><a href="{{URL::to('sis_operator/rombel')}}"><i class="fa fa-circle-o"></i> Rombel</a></li>
          <li><a href="{{URL::to('sis_operator/ptk')}}"><i class="fa fa-circle-o"></i> Tenaga Pendidik</a></li>
          <li><a href="{{URL::to('sis_operator/peserta_didik')}}"><i class="fa fa-circle-o"></i> Peserta Didik</a></li>
          <li><a href="{{URL::to('sis_operator/sarana')}}"><i class="fa fa-circle-o"></i> Sarana Prasarana</a></li>
        </ul>
      </li>
      <li><a href="{{URL::to('sis_operator/users')}}">Users</a></li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Laporan <span class="caret"></span></a>
        <ul class="dropdown-menu" role="menu">
          <li><a href="{{URL::to('sis_operator/sekolah')}}"><i class="fa fa-circle-o"></i> Profile Sekolah</a></li>
          <li><a href="{{URL::to('sis_operator/data_ptk')}}"><i class="fa fa-circle-o"></i> Tenaga Pendidik</a></li>
          <li><a href="{{URL::to('sis_operator/sarana')}}"><i class="fa fa-circle-o"></i> Sarana Prasarana</a></li>
        </ul>
      </li>
    </ul>
    <form class="navbar-form navbar-left" role="search">
      <div class="form-group">
        <input type="text" class="form-control" id="navbar-search-input" placeholder="Search">
      </div>
    </form>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#">Link</a></li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{Sentry::getUser()->username}} <span class="caret"></span></a>
        <ul class="dropdown-menu" role="menu">
          <li><a href="#">Action</a></li>
          <li><a href="#">Another action</a></li>
          <li><a href="#">Something else here</a></li>
          <li class="divider"></li>
          <li><a href="{{URL::to('logout')}}">Keluar</a></li>
        </ul>
      </li>
    </ul>
  </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
