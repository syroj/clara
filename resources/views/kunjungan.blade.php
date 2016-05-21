@extends('template.logged')
@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="box box-primary">
      <div class="box-header">
        <form class="form">
          <div class="col-md-2 pull-right">
            <input type="text" name="search" class="form-control" placeholder="Search..">
          </div>
        </form>
        <a href="{{url('/pasien')}}" class="btn btn-default"><span class="glyphicon glyphicon-plus"></span></a>
      </div>
      <div class="box-body">
@if(count($Patients)>0)
        <table class="table table-bordered">
          <thead>
            <th>Tgl Kunjungan</th>
            <th>RM</th>
            <th>Nama</th>
            <th>Gender</th>
            <th>Tgl Lahir</th>
            <th>Alamat</th>
            <th>Status</th>
            <th>Tujuan</th>
            <th></th>
          </thead>
          @foreach($Patients as $p)
          <tbody>
            <td>{{$p->tanggal}}</td>
            <td>{{$p->mr}}</td>
            <td>{{$p->nama}}</td>
            <td>{{$p->gender}}</td>
            <td>{{$p->tgl_lahir}}</td>
            <td>{{$p->alamat}}</td>
            @if($p->status=="menunggu")
            <td><span class="badge bg-green">{{$p->status}}</span></td>
            @elseif($p->status=="periksa")
            <td><span class="badge bg-yellow">{{$p->status}}</span></td>
            @else
            <td><span class="badge bg-red">{{$p->status}}</span></td>
            @endif
            <td>{{$p->tujuan}}</td>
            <td style="text-align:center;">
              @if(Auth::user()->rules=="admin")
                <a href="{{url('/visite/'.$p->mr.'/delete')}}" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
              @else
                <a href="#" class="btn btn-default"><span class="glyphicon glyphicon-user"> Detail</span></a>
              @endif
            </td>
          </tbody>
          @endforeach
        </table>
        {!!$Patients->links()!!}
@else
        <center>
          <h3>Tidak Ada Data Kunjungan</h3>
        </center>
@endif
      </div>
      <div class="box-footer">

      </div>
    </div>
  </div>
</div>
@endsection
