@extends('template.logged')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    welcome {{Auth::user()->name}} You are logged in as {{Auth::user()->rules}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
