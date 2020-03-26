
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Top Navigation</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap/dist/css/bootstrap.min.css') }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('css/font-awesome/css/font-awesome.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ asset('css/Ionicons/css/ionicons.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('css/AdminLTE.min.css') }}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{ asset('css/skins/_all-skins.min.css') }}">

  <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

  <header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a href="{{ url('') }}" class="navbar-brand"><b>Admin</b>LTE</a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          
        </div>
        <!-- /.navbar-collapse -->
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- User Account Menu -->
            <li class="dropdown user user-menu">
              <!-- Menu Toggle Button -->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <!-- The user image in the navbar-->
                @if(Illuminate\Support\Facades\Auth::user()->userInfo->avatar != null)
                  <img src="{{ asset('images/users/'.Illuminate\Support\Facades\Auth::user()->userInfo->avatar) }}" class="user-image" alt="User Image">
                  @else
                  <img src="{{ asset('images/users/noavatar.png' )}}" class="user-image" alt="User Image">
                  @endif
                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                <span class="hidden-xs">
                  @if( Illuminate\Support\Facades\Auth::user()->userInfo->fullname != null )
                 {{ Illuminate\Support\Facades\Auth::user()->userInfo->fullname }} 
                 @else
                  {{ Illuminate\Support\Facades\Auth::user()->name }} 
                  @endif
                </span>
              </a>
              <ul class="dropdown-menu">
                <!-- The user image in the menu -->
                <li class="user-header">
                  @if(Illuminate\Support\Facades\Auth::user()->userInfo->avatar != null)
                    <img src="{{ asset('images/users/'.Illuminate\Support\Facades\Auth::user()->userInfo->avatar) }}" class="img-circle" alt="User Image">
                    @else
                    <img src="{{ asset('images/users/noavatar.png' )}}" class="img-circle" alt="User Image">
                    @endif

                  <p>
                    Alexander Pierce - Web Developer
                    <small>Member since Nov. 2012</small>
                  </p>
                </li>
                <!-- Menu Body -->
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                  <a href="{{ route('backend.profile.index') }}" class="btn btn-default btn-flat">Cá nhân</a>
                  </div>
                  <div class="pull-right">
                    <a class="btn btn-default btn-flat" href="{{ route('logout') }}"
                          onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                          <i class="fas fa-sign-out-alt"></i> {{ __('Logout') }}
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                      </form>
                  </div>
                </li>
              </ul>
            </li>
          </ul>
        </div>
        <!-- /.navbar-custom-menu -->
      </div>
      <!-- /.container-fluid -->
    </nav>
  </header>
  <!-- Full Width Column -->
  <div class="content-wrapper">
    <div class="container">
      <!-- Main content -->
      <section class="content">
       <div class="row">
         <div class="col-md-3 custom_box">
            <div class="custom_content_box">
                <div class="custom_image_box">
                  <img src="{{ asset('images/home_icon/product.png')}}" alt="" width=100 height="100">
                </div>
                <a href="{{ url('/products')}}" class="custom_title">Danh mục sản phẩm</a>
            </div>
         </div>
         <div class="col-md-3 custom_box">
            <div class="custom_content_box">
                <div class="custom_image_box">
                  <img src="{{ asset('images/home_icon/category.png')}}" alt="" width=100 height="100">
                </div>
                <a href="{{ url('/categories')}}" class="custom_title" >Danh mục loại SP</a>
            </div>
          </div>
           <div class="col-md-3 custom_box">
            <div class="custom_content_box">
                <div class="custom_image_box">
                    <img src="{{ asset('images/home_icon/provider.png')}}" alt="" width=100 height="100"/>
                </div>
                <a href="{{ url('/providers')}}" class="custom_title" >Danh mục cung cấp</a>
            </div>
          </div>
          <div class="col-md-3 custom_box">
            <div class="custom_content_box">
                <div class="custom_image_box">
                    <img src="{{ asset('images/home_icon/bill.png')}}" alt="" width=100 height="100"/>
                </div>
                <a href="{{ url('/bills')}}" class="custom_title" >Danh mục hóa đơn</a>
            </div>
          </div> 

          <div class="col-md-3 custom_box">
            <div class="custom_content_box">
                <div class="custom_image_box">
                    <img src="{{ asset('images/home_icon/customer.png')}}" alt="" width=100 height="100"/>
                </div>
                <a href="{{ url('/customers')}}" class="custom_title" >Danh mục khách hàng</a>
            </div>
          </div>
          <div class="col-md-3 custom_box">
            <div class="custom_content_box">
                <div class="custom_image_box">
                      <img src="{{ asset('images/home_icon/account.png')}}" alt="" width=100 height="100"/ >
                </div>
                <a href="{{ url('/users')}}" class="custom_title" >Danh mục tài khoản</a>
            </div>
          </div>

          <div class="col-md-3 custom_box">
            <div class="custom_content_box">
                <div class="custom_image_box">
                      <img src="{{ asset('images/home_icon/config.png')}}" alt="" width=100 height="100"/ >
                </div>
              <a href="{{ route('backend.profile.index') }}" class="custom_title" >Tài khoản</a>
            </div>
          </div>
       </div>
        <!-- /.box -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="container">
      <div class="pull-right hidden-xs">
        <b>Version</b> 2.4.13
      </div>
      <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE</a>.</strong> All rights
      reserved.
    </div>
    <!-- /.container -->
  </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('js/jquery-ui.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('js/adminlte.min.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('js/dashboard.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('js/demo.js') }}"></script>
</body>
</html>
