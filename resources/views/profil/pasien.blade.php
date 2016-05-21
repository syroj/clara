@extends('template.logged')
@section('content')
<div class="col-md-3">
  <div class="box box-default">

      <div class="box-body">
        @foreach ($Patients as $p)
        <center>
        <img src="{{url('/lte/dist/img/user3.jpg')}}" alt="User Image" class="profile-user-img" style="margin-top:5px; margin-bottom:10px;"/><br>
        <a href="#">Ganti..</a>
        </center>
        <table class="table table-hover" style="margin-bottom:5px; margin-top:5px;">
          <tr>
            <td>Nama</td>
            <td>{{$p->nama}}</td>
          </tr>
          <tr>
            <td>No. MR</td>
            <td>{{$p->mr}}</td>
          </tr>
          <tr>
            <td>Tgl Lahir</td>
            <td>{{$p->tanggal_lahir}}</td>
          </tr>
        </table>
        <ul class="list-group list-group-unbordered">
          <li class="list-group-item"><a href="{{url('/pasien/'.$p->mr)}}" id="identitas">Identitas</a> <span class="glyphicon glyphicon-user pull-right"style="margin-right:10px;"></span></li>
          <li class="list-group-item"><a href="{{url('/pasien/'.$p->mr.'/keluarga')}}" id="keluarga">Keluarga</a> <span class="fa fa-users pull-right"style="margin-right:10px;"></span></li>
          <li class="list-group-item"><a href="{{url('/pasien/'.$p->mr.'/kunjungan')}}" id="kunjungan">Kunjungan</a> <span class="glyphicon glyphicon-import pull-right"style="margin-right:10px;"></span></li>
          <li class="list-group-item"><a href="{{url('/pasien/'.$p->mr.'/mr')}}" id="mr">Rekam Medis</a> <span class="glyphicon glyphicon-list-alt pull-right"style="margin-right:10px;"></span></li>
          <li class="list-group-item"><a href="{{url('/pasien/'.$p->mr.'/terapi')}}" id="terapi">Riwayat Pengobatan</a> <span class="fa fa-medkit pull-right"style="margin-right:10px;"></span></li>
          <li class="list-group-item"><a href="{{url('/pasien/'.$p->mr.'/problem')}}" id="masalah">Daftar Masalah</a> <span class="icon-information-us pull-right"style="margin-right:10px;"></span></li>
          <li class="list-group-item"><a href="{{url('/pasien/'.$p->mr.'/alergi')}}" id="alergi">Alergi</a> <span class="icon-i-genetics pull-right" style="margin-right:10px;"></span></li>
          <li class="list-group-item"><a href="{{url('/pasien/'.$p->mr.'/observasi')}}" id="observasi">Observasi</a> <span class="glyphicon glyphicon-search pull-right"style="margin-right:10px;"></span></li>
          <li class="list-group-item"><a href="{{url('/pasien/'.$p->mr.'/notes')}}" id="notes">Notes</a> <span class="fa fa-file-excel-o pull-right"style="margin-right:10px;"></span></li>
        </ul>
        @endforeach
      </div>
  </div>
</div>
<div class="col-md-9">
  <div class="box box-default">
    <div class="box-body" id="dataPasien">
      <div id="widget">
        @yield('pasien')
      </div>
    </div>
  </div>
</div>
<div class="clearfix"></div>
@endsection
