@section('content')
	<legend>Detail Anggota</legend>

	<table class="table">
		<thead>
			<tr>
				<th>ID Anggota</th>
				<th> : {{$anggota->id_ang}}</th>
			</tr>

			<tr>
				<th>Nama Anggota</th>
				<th> : {{$anggota->nama_ang}}</th>
			</tr>

			<tr>
				<th>JK</th>
				<th> : {{$anggota->jeniskelamin}}</th>
			</tr>

			<tr>
				<th>Tempat, Tanggal Lahir</th>
				<th> : {{$anggota->tempat_lahir.', '.$anggota->tanggal_lahir}}</th>
			</tr>

			<tr>
				<th>Murobbi</th>
				<th> : {{$anggota->murobbi}}</th>
			</tr>

			<tr>
				<th>Alamat</th>
				<th> : {{$anggota->alamat}}</th>
			</tr>

			<tr>
				<th>No. HP</th>
				<th> : {{$anggota->no_hp}}</th>
			</tr>

			<tr>
				<th>Pekerjaan</th>
				<th> : {{$anggota->pekerjaan}}</th>
			</tr>

			<tr>
				<th>Pendidikan Terakhir</th>
				<th> : {{$anggota->pendidikan_terakhir}}</th>
			</tr>

			<tr>
				<th>Hobby</th>
				<th> : {{$anggota->hobby}}</th>
			</tr>

			<tr>
				<th>Kafaah</th>
				<th> : {{$anggota->kafaah}}</th>
			</tr>

			<tr>
				<th>Nama Pasangan</th>
				<th> : {{$anggota->nama_pasangan}}</th>
			</tr>

			<tr>
				<th>Jumlah Anak</th>
				<th> : {{$anggota->jumlah_anak}}</th>
			</tr>

			<tr>
				<th>ID Status</th>
				<th> : {{$anggota->id_status}}</th>
			</tr>

			<tr>
				<th>Tanggal Masuk</th>
				<th> : {{$anggota->tgl_masuk}}</th>
			</tr>

			<tr>
				<th>Kelompok</th>
				<th> : {{$anggota->id_kel}}</th>
			</tr>
		</thead>
	</table>

	<hr>

	<div class="well">
		<a href="{{URL::to('admin/anggota')}}" class="btn btn-default">Kembali</a>
	</div>
@stop