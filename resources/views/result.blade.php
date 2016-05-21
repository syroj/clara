@extends('template.logged')
@section('content')
@if(count($Patients)>0)
<div class="box box-deafault">
  <div class="box-header">
    <b><h4>Hasil Pencarian Untuk "{{$search}}"</h4></b>
  </div>
  <div class="box-body">
    <form class="" action="{{url('/add_visite')}}" method="post">
      <table class="table table-bordered">
        <thead>
          <th>MR</th>
          <th>Nama</th>
          <th>Gender</th>
          <th>Tgl Lahir</th>
          <th>Alamat</th>
          <th>Tujuan</th>
          <th></th>
        </thead>
@foreach($Patients as $p)
        <tbody>
        <td>{{$p->mr}}</td><input type="hidden" name="mr" value="{{$p->mr}}">
        <td>{{$p->nama}}</td><input type="hidden" name="nama" value="{{$p->nama}}">
        <td>{{$p->gender}}</td><input type="hidden" name="gender" value="{{$p->gender}}">
        <td>{{$p->tanggal_lahir}}</td><input type="hidden" name="tanggal_lahir" value="{{$p->tanggal_lahir}}">
        <td>{{$p->alamat}}</td><input type="hidden" name="alamat" value="{{$p->alamat}}">
        <td><select class="form-control" name="tujuan">
          <option value=""></option>
          <option value="Poli Umum">Poli Umum</option>
          <option value="Poli Anak">Poli Anak</option>
          <option value="Poli Kandungan">Poli Kandungan</option>
          <option value="Poli Ortopedi">Poli Ortopedi</option>
          <option value="Poli IPD">Poli IPD</option>
          <option value="Laboratorium">Laboratorium</option>
          <option value="Radiologi">Radiologi</option>
          <option value="Farmasi">Farmasi</option>
        </select></td>
        <td class="pull-right">
          <a href="{{url('/pasien/'.$p->mr)}}" class="btn btn-default"><span class="glyphicon glyphicon-user"></span></a>
          <button type="submit" name="button" class="btn btn-default"><span class="glyphicon glyphicon-file"></span></button>
        </td>
        </tbody>
@endforeach
      </table>
    </form>
  </div>
</div>
@else
<div class="callout callout-info">
  <center>
    <h1>404</h1>
    <small>Data Tidak Ditemukan</small>
  </center>
</div>
@endif
@endsection
