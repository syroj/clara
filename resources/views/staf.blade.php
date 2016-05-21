@extends('template.logged')
@section('content')
<div class="box box-default">
  <div class="box-header">
    Daftar Staf
  </div>
  <div class="box-body">
    <table class="table table-bordered">
      <thead>
        <th>Kode</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Alamat</th>
        <th>Telp</th>
        <th>Rules</th>
        <th>Divisi</th>
        <th>Status</th>
        <th>option</th>
      </thead>
      @foreach($staf as $s)
      <tbody>
        <td>{{$s->kode}}</td>
        <td>{{$s->name}}</td>
        <td>{{$s->email}}</td>
        <td>{{$s->alamat}}</td>
        <td>{{$s->telp}}</td>
        <td>{{$s->rules}}</td>
        <td>{{$s->divisi}}</td>
        <td>{{$s->status}}</td>
        <td>
          <div class="btn-group pull-right">
            @if($s->status!='aktif')
            <a href="#" class="btn btn-default"><span class="glyphicon glyphicon-lock"></span></a>
            @endif
            <a href="#" class="btn btn-default"><span class="glyphicon glyphicon-user"></span></a>
            <a href="#" class="btn btn-default"><span class="glyphicon glyphicon-pencil"></span></a>
            <a href="#" class="btn btn-default"><span class="glyphicon glyphicon-trash"></span></a>
          </div>
        </td>
      </tbody>
      @endforeach
    </table>
  </div>
</div>
@endsection
