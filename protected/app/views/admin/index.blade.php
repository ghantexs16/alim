@section('content')
  <h1 class="page-header">
               Selamat Datang <small>di Halaman Admin</small>
            </h1>


            <ul class="nav nav-pills">
                                <li class="active"><a href="#home-pills" data-toggle="tab">Home</a>
                                </li>
                                <li class=""><a href="#settings-pills" data-toggle="tab">Help</a>
                                </li>
                            </ul>

                            <div class="tab-content">
                                <div class="tab-pane fade active in" id="home-pills">
                                    <h4><strong>A.L.I.M</strong></h4>
                                    <p>ALIM atau Aplikasi Laporan Ibadah Mingguan ini merupakan aplikasi laporan ibadah mingguan anggota PKS Kecamatan Pinang yang dibuat berbasis online dengan tujuan supaya lebih memudahkan Murobbi dalam proses pengolahan data laporan sehingga data dapat dilaporkan dimana saja dengan menggunakan fasilitas internet, baik melalui PC/Laptop maupun Gadget dan tentunya data akan lebih terupdate.</p>
                                </div>
                                <div class="tab-pane fade" id="settings-pills">
                                <h4><strong>Petunjuk Menu</strong></h4>
                                    <div class="row">
                        <div class="panel-body">
                            <div class="panel-group" id="accordion">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" class="collapsed">Data Grup</a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse" style="height: 0px;">
                                        <div class="panel-body">
                                           Menu ini berisikan pengolahan data grup/kelompok ibadah yang terdiri dari buat grup baru, edit grup, delete grup, tambah anggota, edit anggota, delete anggota, dan input laporan ibadah anggota.
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Data Agenda Kegiatan</a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse" style="height: auto;">
                                        <div class="panel-body">
                                            Menu ini berisikan pengolahan data untuk menambahkan agenda pada tampilan front end (user).
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" class="collapsed">Data User</a>
                                        </h4>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            Menu ini berisikan pengolahan data untuk menambahkan hak akses pada user.
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour" class="collapsed">Grafik</a>
                                        </h4>
                                    </div>
                                    <div id="collapseFour" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            Menu ini akan menampilkan grafik yang terdiri dari grafik per anggota, dan grafik per grup.
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive" class="collapsed">SPK Kenaikan Jenjang</a>
                                        </h4>
                                    </div>
                                    <div id="collapseFive" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            Menu ini berisikan Sistem Penunjang Keputusan yang digunakan untuk membantu/menunjang dalam memutuskan apakah anggota sudah dapat naik ke jenjang yang lebih tinggi atau belum.
                                        </div>
                                    </div>
                                </div>
                            </div>
@stop