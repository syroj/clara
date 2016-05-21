
@extends('template.logged')
@section('content')
<div class="login-box">
  <div class="box primary">
  <div class="box-header">
    <h4>Silahkan Login</h4>
  </div>
  <form class="form form-horizontal" action="{{url('/login')}}" method="post">
    {!! CSRF_field() !!}
    <div class="box-body">
      <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
        <label class="col-md-4 control-label" for="email">Email :</label>
        <div class="col-md-8">
          <input type="text" name="email" class="form-control" placeholder="E-mail">
          @if ($errors->has('email'))
              <span class="help-block">
                  <strong>{{ $errors->first('email') }}</strong>
              </span>
          @endif
        </div>
      </div>
      <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
        <label class="col-md-4 control-label" for="Password">Password :</label>
        <div class="col-md-8">
          <input type="password" name="password" class="form-control" placeholder="Password">
          @if ($errors->has('password'))
              <span class="help-block">
                  <strong>{{ $errors->first('password') }}</strong>
              </span>
          @endif
        </div>
      </div>
    </div>
    <div class="form-group">
        <div class="col-md-6 col-md-offset-4">
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="remember"> Remember Me
                </label>
            </div>
        </div>
    </div>
    <div class="box-footer">
      <button type="submit" class="btn btn-default pull-right" name="button"><span class="glyphicon glyphicon-lock"></span>  Log in</button>
    </div>
  </form>
  </div>
</div>
@endsection
