<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>E-Klinik</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="{{asset('/lte')}}/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!--web md icon -->
    <link rel="stylesheet" href="{{asset('/packages')}}/webfont-medical-icons/wfmi-style.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('/lte')}}/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{asset('/lte')}}/dist/css/skins/_all-skins.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <!-- ADD THE CLASS sidedar-collapse TO HIDE THE SIDEBAR PRIOR TO LOADING THE SITE -->
  <body class="hold-transition skin-blue sidebar-collapse sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">

      <header class="main-header">
        <!-- Logo -->
        <a href="{{url('/home')}}" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><i class="glyphicon glyphicon-home"></i></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><i>e-</i>Klinik</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- User Account Menu -->
              @if (Auth::guest())
              <li class=""><a href="{{url('/')}}">Login</a></li>
              <li><a href="{{url('/daftar')}}">Register</a></li>
              @else
              <li class="dropdown user user-menu">
                <!-- Menu Toggle Button -->
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <!-- The user image in the navbar-->
                  <img src="{{asset('/lte/dist/img/user2.jpg')}}" class="user-image" alt="User Image">
                  <!-- hidden-xs hides the username on small devices so only the image appears. -->
                  <span class="hidden-xs">{{Auth::user()->name}}</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- The user image in the menu -->
                  <li class="user-header">
                    <img src="{{asset('/lte/dist/img/user2.jpg')}}" class="img-circle" alt="User Image">
                    <p>
                      {{Auth::user()->name }} <br>{{Auth::user()->rules}}
                      <small>Member since {{Auth::user()->created_at}}</small>
                    </p>
                  </li>
                  <!-- Menu Body -->

                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-right">
                      <a href="{{url('/logout')}}" class="btn btn-default btn-flat">Log out</a>
                    </div>
                  </li>
                </ul>
              </li>
              @endif
            </ul>
          </div>
        </nav>
      </header>

      <!-- =============================================== -->

      <!-- Left side column. contains the sidebar -->
      @if (Auth::guest())

      @else
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="{{asset('/lte')}}/dist/img/user2.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p>{{Auth::user()->name}}</p>
              <a href="#">[{{Auth::user()->rules}}]</a><br>
            </div>
          </div>

          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="treeview">
              <a href="{{url('/home')}}">
                <i class="glyphicon glyphicon-home "></i> <span>Home</span>
              </a>
            </li>
            <li class="treeview">
              <a href="{{url('/profile')}}">
                <i class="glyphicon glyphicon-user"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <a href="#widget" data-toggle="modal" data-target="#widget">
                <i class="glyphicon glyphicon-th"></i> <span>Menu</span>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="glyphicon glyphicon-wrench"></i><span>Setting</span>
                </a>
            </li>
            <li class="#">
              <a href="{{url('/logout')}}">
                <i class="glyphicon glyphicon-log-out"></i>
                <span>Logout</span>
              </a>
            </li>

          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>
      @endif
      <!-- =============================================== -->

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">

        <!-- Main content -->
        <section class="content">
@yield('content')
        <div class="modal fade" id="widget" tabindex="-1" role="dialog" aria-labeledby="widget">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              </div>
              <div class="modal-body">
                @include('widget.quick_access')
              </div>
            </div>

          </div>
        </div>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

      <footer class="main-footer">
        <div class="container">
          <div class="pull-right hidden-xs">
            <b>Version</b> 1.1.0
          </div>
          <strong>Copyright &copy; {{date('Y')}} <a href="#">Clara Apps</a>.</strong> All rights reserved.
        </div><!-- /.container -->
      </footer>

      <!-- Control Sidebar -->

      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="{{asset('/lte')}}/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="{{asset('/lte')}}/bootstrap/js/bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="{{asset('/lte')}}/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="{{asset('/lte')}}/plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('/lte')}}/dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{asset('/lte')}}/dist/js/demo.js"></script>
    <script src="{{asset('/script/kpkm.js')}}"></script>
  </body>
</html>
