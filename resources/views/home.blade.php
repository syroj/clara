@extends('template.logged')
@section('content')
    <div class="row">
      <div class="col-md-4">
        <div class="box box-primary">
          <div class="box-header">
            <b>Search</b><span class="glyphicon glyphicon-search pull-right"></span>
          </div>
          <form class="form" method="post" action="{{url('/search/')}}">
            <div class="box-body">
              <div class="col-md-11 ">
                <input type="text" name="search" class="form-control" id="search" placeholder="Cari Pasien..">
              </div>
              <div class="col-md-1">
                <button type="submit" class="btn btn-default pull-right"><span class="glyphicon glyphicon-search"></span></button>
              </div>
            </div>
          </form>
          <!--
          <div class="box-body">
            <input type="text" name="searc" id="search" class="form-control" placeholder="Cari Pasien">
          </div>
        -->
        </div>
        @include('widget/quick_access')
        <div class="box box-default">
          <div class="box-header">
            <b>Dokter Hari Ini</b>
          </div>
          <div class="box-body">
            <table class="table table-bordered">
              <thead>
                <th>Nama</th>
                <th>kode</th>
                <th>Poli</th>
              </thead>
              <tbody>
                <td>Fika Ekayanti</td>
                <td>jkv75</td>
                <td>Umum</td>
              </tbody>
            </table>
          </div>
        </div>

      </div>
      <div class="col-md-8">
        <div class="box box-default" id="tampil">
          <div class="box-header">
            <div class="btn-group pull-right">
              @if(Auth::user()->rules=='admin')
              <a href="#" class="btn btn-default"><span class="glyphicon glyphicon-pencil"></span></a>
              <a href="{{url('/home')}}" class="btn btn-default" id="refresh"><span class="glyphicon glyphicon-refresh"></span></a>
              @else
              <a href="{{url('/home')}}" class="btn btn-default" id="refresh"><span class="glyphicon glyphicon-refresh"></span></a>
              @endif
            </div>

            <b>Daftar Tunggu</b> <span class="badge bg-green"> {{$count}}</span>

          </div>
          <div class="box-body">
            @if($count>0)
            <table class="table table-bordered">
              <thead>
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
                <td>{{$p->mr}}</td>
                <td><a href="{{url('/pasien/'.$p->mr)}}">{{$p->nama}}</a></td>
                <td>{{$p->gender}}</td>
                <td>{{$p->tgl_lahir}}</td>
                <td>{{$p->alamat}}</td>
                <td><span class="badge bg-green">{{$p->status}}</span></td>
                <td>{{$p->tujuan}}</td>
                <td style="text-align:center;">
                  @if(Auth::user()->rules=="admin")
                    <a href="{{url('/visite/'.$p->id.'/delete')}}" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
                  @else
                    <a href="{{url('/panggil_pasien/'.$p->mr)}}" class="btn btn-default"><span class="glyphicon glyphicon-check"> Panggil</span></a>
                  @endif
                </td>
              </tbody>
              @endforeach
              @else
              <center><h1>404</h1>
              <h4>Belum Ada Kunjungan Hari ini</h4>
              </center>
              <div class="box-footer">
              <small>Lihat Riwayat Kunjungan <a href="{{url('/visite')}}">Selengkapnya</a>...</small>
              </div>
              @endif
            </table>
            {!!$Patients->links()!!}
          </div>
        </div>
      </div>
    </div>
@endsection
