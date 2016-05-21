@extends('profil.pasien')
@section('pasien')
<div class="nav-tabs-custom" id="identitas">
  <ul class="nav nav-tabs">
    <li class="active"><a href="#id" data-toggle="tab">Identitas</a></li>
    <li><a href="#jaminan" data-toggle="tab">Jaminan</a></li>
    <li><a href="#kontak" data-toggle="tab">Kontak</a></li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane active" id="id">
      @foreach($Patients as $pt)
      <table class="table table-bordered">
        <tr>
          <td><b>Kode Keluarga</b></td>
          <td>{{$pt->fam_id}}</td>
          <td><b>No.RM</b></td>
          <td>{{$pt->mr}}</td>
        </tr>
        <tr>
          <td><b>Nama</b></td>
          <td>{{$pt->nama}}</td>
          <td><b>Gender</b></td>
          <td>{{$pt->gender}}</td>
        </tr>
        <tr>
          <td><b>No. Telp</b></td>
          <td colspan="3">{{$pt->telp}}</td>
        </tr>
        <tr>
          <td><b>Alamat</b></td>
          <td colspan="3">{{$pt->alamat}}</td>
        </tr>
        <tr>
          <td><b>Pekerjaan</b></td>
          <td>{{$pt->pekerjaan}}</td>
          <td><b>St.Pernikahan</b></td>
          <td>{{$pt->pernikahan}}</td>
        </tr>
        <tr>
          <td><b>Gol. Darah</b></td>
          <td colspan="3">
            {{$pt->gol_darah}}
          </td>
        </tr>
        <tr>
          <td colspan="4">
            <a href="#edit_id" data-toggle="modal" data-target="#edit_id" class="btn btn-primary pull-right" style="margin-right:20px;"><span class="glyphicon glyphicon-pencil"></span> Edit</a>
          </td>
        </tr>
      </table>
      @endforeach
    </div><!-- /.tab-pane -->
    <div class="tab-pane" id="jaminan">
      <hr>
      <p style="margin-bottom:5px;">
        Tambah Jaminan:
      </p>
      <form class="form-inline" action="{{url('/add_jamkes')}}" method="post">
        <center>
          <table>
            <td><input type="text" name="mr" placeholder="No.MR" class="form-control" style="margin-right:5px;" value="{{$mr}}" readonly="true"></td>
            <td>
              <select class="form-control" name="nama_asuransi" style="margin-right:5px;">
                @foreach($di as $di)
                <option value="{{$di->nama}}">{{$di->nama}}</option>
                @endforeach
              </select>
            </td>
            <td><input type="text" name="status" placeholder="Status Asuransi"  class="form-control" style="margin-right:5px;"></td>
            <td><button type="submit" name="button" class="btn btn-default"><span class="glyphicon glyphicon-plus"></span></button></td>
          </table>
        </center>
      </form>
      <hr>
      <table class="table table-hover">
        @if(count($insurances)>0)
        <thead>
          <th>Asuransi</th>
          <th>Status</th>
          <th>Option</th>
        </thead>
        @foreach($insurances as $i)

        <tbody>
          <td>{{$i->nama_asuransi}}</td>
          <td>{{$i->status}}</td>
          <td class="pull-right">
            <a href="{{url('/')}}" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></a>
            @if(Auth::user()->rules=="admin")
            <a href="#edit_jamkes" data-toggle="modal" data-id="{{$i->id}}" data-target="#edit_jamkes" class="btn btn-default"><span class="glyphicon glyphicon-pencil"></span></a>
            <a href="{{url('/del_jam_id/'.$i->id)}}" class="btn btn-default"><span class="glyphicon glyphicon-trash"></span></a>
            @endif
          </td>
        </tbody>
        @endforeach

        @else
        <div class="callout callout-danger">
          <h4 style="text-align:center;">Belum Ada Asuransi</h4>
        </div>
        @endif
      </table>
    </div>
    <div class="tab-pane" id="kontak">
      kontak
    </div>
  </div><!-- /.tab-content -->
</div><!-- nav-tabs-custom -->
<div class="modal fade" id="edit_id" tabindex="-1" role="dialog" aria-labeledby="edit_id">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        Edit Identitas Pasien
      </div>
      @foreach($Patients as $x)
      <form class="form" action="{{url('/edit_pasien')}}" method="post">
        <div class="modal-body">
          <table class="table table-bordered">
            <tr>
              <td><b>Kode Keluarga</b></td>
              <td><input class="form-control" type="text" name="fam_id" value="{{$x->fam_id}}"></td>
              <td><b>No.RM</b></td>
              <td><input class="form-control" type="text" name="mr" value="{{$x->mr}}" readonly="true"></td>
            </tr>
            <tr>
              <td><b>Nama</b></td>
              <td><input class="form-control" type="text" name="nama" value="{{$x->nama}}"></td>
              <td><b>Gender</b></td>
              <td>
                <select class="form-control" name="gender">
                  <option value="{{$x->gender}}">{{$x->gender}}</option>
                  <option value="Pria">Pria</option>
                  <option value="Wanita">Wanita</option>
                </select>
              </td>
            </tr>
            <tr>
              <td><b>No. Telp</b></td>
              <td colspan="3"><input class="form-control" type="text" name="telp" value="{{$x->telp}}"></td>
            </tr>
            <tr>
              <td><b>Alamat</b></td>
              <td colspan="3"><input class="form-control" type="text" name="alamat" value="{{$x->alamat}}"></td>
            </tr>
            <tr>
              <td><b>Pekerjaan</b></td>
              <td><input class="form-control" type="text" name="pekerjaan" value="{{$x->pekerjaan}}"></td>
              <td><b>St.Pernikahan</b></td>
              <td>
                <select class="form-control" name="pernikahan">
                  <option value="{{$x->pernikahan}}">{{$x->pernikahan}}</option>
                  <option value="Belum Menikah">Bemlum Menikah</option>
                  <option value="Menikah">Menikah</option>
                  <option value="Janda">Janda</option>
                  <option value="Duda">Duda</option>
                </select>
              </td>
            </tr>
            <tr>
              <td><b>Gol. Darah</b></td>
              <td colspan="3">
                <select class="form-control" name="gol_darah">
                  <option value="{{$x->gol_darah}}">{{$x->gol_darah}}</option>
                  <option value="A">A</option>
                  <option value="B">B</option>
                  <option value="AB">AB</option>
                  <option value="O">O</option>
                </select>
              </td>
            </tr>
          </table>

        </div>
        <div class="modal-footer">
          <button type="submit" name="button">Simpan</button>
        </div>
      </div>
      </form>
      @endforeach
  </div>
</div>
<div class="modal fade" id="edit_jamkes" tabindex="-1" role="dialog" aria-labeledby="edit_jamkes">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        Edit Jaminan
      </div>
      <form class="form" action="edit_jamkes_id" method="post">
        <div class="modal-body">
          <table class="table">
            <tr>
              <td><input type="text" name="id" class="form-control" id="id" value=""></td>
              <td><input type="text" name="nama_asuransi" class="form-control" id="nama_asuransi" value=""></td>
              <td><input type="text" name="status" class="form-control" id="status" value=""></td>
            </tr>
            <tr>
              <td colspan="3">
                <button type="submit" class="btn btn-default pull-right" name="button"><span class="glyphicon glyphicon-floppy-disk"> Simpan</span></button>
              </td>
            </tr>
          </table>
        </div>
      </form>
    </div>
  </div>
</div>
<div class="modal fade" id="edit_kontak" tabindex="-1" role="dialog" aria-labeledby="edit_kontak">
  <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <p>
            Edit Kontak
          </p>
        </div>
        <div class="modal-body">
          <table class="table table-bordered">
            <tr>
              <td><input type="text" name="nama_kontak" id="nama_kontak"></td>
              <td><input type="text" name="hubungan" id="hubungan"></td>
            </tr>
            <tr>
              <td colspan="2">
                <button type="submit" class="btn btn-default" name="button"><span class="glyphicon glphicon-floppy-disk"></span></button>
              </td>
            </tr>
          </table>
        </div>
        <div class="modal-footer">

        </div>
      </div>
  </div>
</div>
@endsection
