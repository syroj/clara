@extends('template.logged')
@section('content')
<div class="row">
  <div class="col-md-8 col-md-offset-2">
    <div class="box box-primary">
      <div class="box-header">
        <b>Daftar User Baru</b>
      </div>
      <form class="form-horizontal" action="index.html" method="post">
        <div class="box-body">
          <div class="form-group">
            <label class="label-control col-md-2 col-md-offset-1">Code</label>
            <div class="col-md-2">
              <input type="text" name="code" id="code" class="form-control" value="" readonly="true">
            </div>
          </div>
          <div class="form-group">
            <label class="label-control col-md-2 col-md-offset-1">Nama</label>
            <div class="col-md-2">
              <select class="form-control" name="prefix" id="prefix">
                <option value="">=Gelar=</option>
                <option value="dr.">dr.</option>
                <option value="Ns.">Ns.</option>
                <option value="">kosong</option>
              </select>
            </div>
            <div class="col-md-4">
              <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama Lengkap">
            </div>
            <div class="col-md-2">
              <input type="text" name="gelar" id="gelar" class="form-control" placeholder="Ex: M.Biomed">
            </div>
          </div>
            <div class="form-group">
              <label class="label-control col-md-2 col-md-offset-1">Email</label>
              <div class="col-md-4">
                <input type="text" name="email" id="email" class="form-control" placeholder="Email">
              </div>
            </div>
            <div class="form-group">
              <label class="label-control col-md-2 col-md-offset-1">Password</label>
              <div class="col-md-4">
                <input type="password" name="password" id="password" class="form-control" placeholder="Password">
              </div>
              <div class="col-md-4">
                <input type="password" name="re-password" id="re-password" class="form-control" placeholder="ulangi password">
              </div>
            </div>
            <div class="form-group">
              <label class="label-control col-md-2 col-md-offset-1">Tgl Lahir</label>
              <div class="col-md-4">
                <input type="text" name="tanggal_lahir" id="tanggal_lahir" placeholder="Ex: 1998-12-09" class="form-control">
              </div>
            </div>
            <div class="form-group">
              <label class="label-control col-md-2 col-md-offset-1">Alamat</label>
              <div class="col-md-4">
                <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Alamat">
              </div>
              <div class="col-md-4">
                <input type="text" name="telp" id="telp" class="form-control" placeholder="No.Telp">
              </div>
            </div>
            <div class="form-group">
              <label class="label-control col-md-2 col-md-offset-1">Jobdesk</label>
              <div class="col-md-4">
                <select class="form-control" id="rules" name="rules">
                  <option value="dokter">Dokter</option>
                  <option value="perawat">Perawat</option>
                  <option value="bidan">Bidan</option>
                  <option value="apoteker">Apoteker</option>
                  <option value="laboratorium">Laboratorium</option>
                  <option value="radiologi">Radiologi</option>
                  <option value="kasir">kasir</option>
                </select>
              </div>
              <label class="label-control col-md-1">Divisi</label>
              <div class="col-md-3">
                <select class="form-control" id="divisi" name="divisi">
                  <option value="umum">Umum</option>
                  <option value="anak">Anak</option>
                  <option value="ipd">Penyakit Dalam</option>
                  <option value="ortopedi">Ortopedi</option>
                  <option value="farmsi">farmasi</option>
                  <option value="Penunjang">Penunjang</option>
                  <option value="Staf">Staf</option>
                </select>
              </div>
            </div>

        </div>
        <div class="box-footer">
          <button type="submit" name="button" id="AddUser" class="btn btn-default pull-right">Simpan</button>
        </div>
      </form>
    </div>

  </div>
</div>
@endsection
