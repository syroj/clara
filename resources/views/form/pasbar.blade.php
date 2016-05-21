@extends('template.logged')
@section('content')
<div class="row">
  <div class="col-md-8 col-md-offset-2">
    <div class="box box-primary">
      <div class="box-header">
        <h3><b>Pasien Baru</b></h3>
      </div>
      <div class="box-body">
        <form class="form-horizontal" action="{{url('pasbar')}}" method="POST">

            <div class="form-group">
              <label class="control-label col-md-3">Id Keluarga</label>
              <div class="col-md-7">
                <input type="text" class="form-control" name="fam_id" placeholder="id keluarga">
              </div>
              <a href="#" class="btn btn-primary"><span class="glyphicon glyphicon-search"></span></a>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">No. RM</label>
              <div class="col-md-8">
                <input type="text" class="form-control" name="mr" placeholder="no rm" value="{{$mr+1}}" readonly="true">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Nama</label>
              <div class="col-md-8">
                <input type="text" class="form-control" name="nama" placeholder="Nama">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Tgl Lahir</label>
              <div class="col-md-8">
                <input type="text" class="form-control" name="tanggal_lahir" placeholder="12-09-2007">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Gender</label>
              <div class="col-md-8">
                <select class="form-control" name="gender">
                  <option value="">=Pilih=</option>
                  <option value="Pria">Pria</option>
                  <option value="Wanita">Wanita</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Alamat</label>
              <div class="col-md-8">
                <input type="text" class="form-control" name="alamat" placeholder="Alamat">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Telp</label>
              <div class="col-md-8">
                <input type="text" class="form-control" name="telp" placeholder="No. Telp">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Pekerjaan</label>
              <div class="col-md-8">
                <input type="text" class="form-control" name="pekerjaan" placeholder="Pekerjaan">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">St. Pernikahan</label>
              <div class="col-md-8">
                <select class="form-control" name="pernikahan">
                  <option value="">=Pilih=</option>
                  <option value="Belum Menikah">Belum Menikah</option>
                  <option value="Menikah">Menikah</option>
                  <option value="Janda">Janda</option>
                  <option value="Duda">Duda</option>
                  <option value="Lainnya">Lainnya</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Gol. Darah</label>
              <div class="col-md-8">
                <select class="form-control" name="gol_darah">
                  <option value="">=Pilih=</option>
                  <option value="A">A</option>
                  <option value="B">B</option>
                  <option value="AB">AB</option>
                  <option value="O">O</option>
                </select>
              </div>
            </div>

          <div class="col-md-12 ">
            <div class="box-footer">
              <div class="pull-right">
                <button type="submit" class="btn btn-primary">Simpan</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
