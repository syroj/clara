@extends('template.logged')
@section('content')
<div class="box box-primary">
  <div class="box-header">
    <div class="row">
      <div class="col-md-3">
        <b style="font-size:2em;">List Pasien</b>
      </div>
      <div class="col-md-3 pull-right">
        <form class="form" action="{{url('/search')}}" method="post">
          <input type="text" name="search" class="form-control" placeholder="Cari Pasien">
        </form>
      </div>
    </div>
  </div>
  <div class="box-body">
    <table class="table table-bordered" id="list_pasien">
      <thead>
        <th>RM</th>
        <th>Nama</th>
        <th>Gender</th>
        <th>Tgl Lahir</th>
        <th>Alamat</th>
        <th>Opsi</th>
      </thead>
      @foreach($Patients as $p)
      <tbody>
        <td>{{$p->mr}}</td>
        <td><a href="{{url('/pasien/'.$p->mr)}}"data-toggle="tooltip" data-placement="top" title="Profil pasien">{{$p->nama}}</a></td>
        <td>{{$p->gender}}</td>
        <td>{{$p->tanggal_lahir}}</td>
        <td>{{$p->alamat}}</td>
        <td>
          <center>
          @if(Auth::user()->rules=="admin")
          <a href="{{url('/pasien/'.$p->mr)}}" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="Profil pasien"><span class="glyphicon glyphicon-user"></span></a>
          <a href="{{url('/pasien/'.$p->mr.'/edit')}}" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="Edit" data-mr="{{$p->mr}}"><span class="glyphicon glyphicon-pencil"></span></a>
          @else
          <a href="{{url('/pasien/'.$p->mr)}}" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="Profil pasien"><span class="glyphicon glyphicon-user"></span></a>
        </center>
      </td>
      @endif
      </tbody>
      @endforeach
    </table>
    {!! $Patients->links()!!}
  </div>
</div>
@endsection
