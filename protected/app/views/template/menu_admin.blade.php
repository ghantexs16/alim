<nav class="navbar navbar-static-top">
          <div class="container-fluid">
          <div class="navbar-header">
            <a href="{{URL::to('admin/home')}}" class="navbar-brand"><b>Sistem</b> Informasi Keuangan</a>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
              <i class="fa fa-bars"></i>
            </button>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="{{URL::to('admin/home')}}">Beranda</span></a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Master <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="{{URL::to('admin/siswa')}}"><i class="fa fa-circle-o"></i> Siswa</a></li>
                  <li><a href="{{URL::to('admin/guru')}}"><i class="fa fa-circle-o"></i> Guru</a></li>
                </ul>
              </li>

              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Keuangan<span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="{{URL::to('admin/group_jenis')}}"><i class="fa fa-circle-o"></i> Group Jenis</a></li>
                  <li><a href="{{URL::to('admin/jenis_pembayaran')}}"><i class="fa fa-circle-o"></i> Jenis Pembayaran</a></li>
                  <li class="divider"></li>
                  <li><a href="{{URL::to('admin/tabungan')}}"><i class="fa fa-circle-o"></i> Tabungan Siswa</a></li>
                  <li><a href="{{URL::to('admin/pembayaran_siswa')}}"><i class="fa fa-circle-o"></i> Pembayaran Siswa</a></li>
                  <li class="divider"></li>
                  <li><a href="{{URL::to('admin/pemasukan_lain')}}"><i class="fa fa-circle-o"></i> Pemasukan Lain</a></li>
                  <li><a href="{{URL::to('admin/pengeluaran_lain')}}"><i class="fa fa-circle-o"></i> Pengeluaran Lain</a></li>
                </ul>
              </li>

              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Laporan<span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="{{URL::to('admin/kelompok')}}"><i class="fa fa-circle-o"></i> Kelompok</a></li>
                  <li><a href="{{URL::to('laporan/pembayaran_bebas_siswa')}}"><i class="fa fa-circle-o"></i> Pembayaran</a></li>
                  <li><a href="{{URL::to('laporan/pembayaran_bulanan_siswa')}}"><i class="fa fa-circle-o"></i> Pembayaran Bulanan</a></li>
                  <li><a href="{{URL::to('laporan/pemasukan_lain')}}"><i class="fa fa-circle-o"></i> Pemasukan Lain</a></li>
                  <li><a href="{{URL::to('laporan/pengeluaran')}}"><i class="fa fa-circle-o"></i> Pengeluaran</a></li>
                  <li><a href="{{URL::to('cetak/kas')}}" target="new target"><i class="fa fa-circle-o"></i> Kas</a></li>
                </ul>
              </li>

            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li>
                <a href="{{URL::to('admin/setting')}}">Setting</a>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{Sentry::getUser()->username}} <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li class="divider"></li>
                  <li><a href="{{URL::to('logout')}}">Logout</a></li>
                </ul>
              </li>
            </ul>
          </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
