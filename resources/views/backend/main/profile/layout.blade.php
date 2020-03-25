
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
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
  <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.css') }}">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <!-- jQuery 3 -->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('js/jquery-ui.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset('js/bootstrap.min.js') }}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<style>
  .active{
    color : #333;
  }

  .select2-container .select2-selection--single {
    box-sizing: border-box;
    cursor: pointer;
    display: block;
    height: 34px;
    user-select: none;
    -webkit-user-select: none;
}
</style>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

  <header class="main-header">
    <nav class="navbar navbar-static-top" style="background-color: #222d32">
      <div class="container">
        <div class="navbar-header">
          <a href="{{ route('home') }}" class="navbar-brand"><b>Admin</b>LTE</a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          
        </div>
        <!-- /.navbar-collapse -->
        <!-- Navbar Right Menu -->
   
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
            <div class="col-md-12" style="height: 300px;width:100%;background-color:#333">
               
            </div>
            <div class="col-md-12" style="width:100%;margin-top:-130px;">
                  <div class="cus_img_middle">
                  <img id="profileImg" src="{{ asset('images/users/'.Auth::user()->userInfo->avatar) }}"  style="    height: 150px;
                  width: 150px; border-radius: 50%; z-index: -1"/>
                      <div  class="cus_inside_img_middle">
                        <span class="fa fa-camera"></span>
                        <span id="uploadButton">Cập nhật</span>
                      </div>
                  </div>
                  <div class="cus_name">
                  <h2>{{ Auth::user()->name }}</h2>
                  </div>
            </div>
        </div>
        <form id="myForm" method="post" enctype="multipart/form-data" >
          <input type="file" id="fileUpload" name="image" style="display: none">
        </form>
        <div class="row" style="margin-top: 10px; ">
          <nav class="navbar ">
            <div class="container-fluid">
              <ul class="nav navbar-nav">
                <li><a {{ strpos($_SERVER['REQUEST_URI'], 'index')          !== false ? "class=active" : "" }} href="{{ route('backend.profile.index') }}"          style="font-size: 18px">Thông tin cá nhân</a></li>
                <li><a {{ strpos($_SERVER['REQUEST_URI'], 'timeline')       !== false ? "class=active" : "" }} href="{{ route('backend.profile.timeline') }}"       style="font-size: 18px">Dòng thời gian</a></li>
                <li><a {{ strpos($_SERVER['REQUEST_URI'], 'editprofile')    !== false ? "class=active" : "" }} href="{{ route('backend.profile.editprofile') }}"    style="font-size: 18px">Chỉnh sửa</a></li>
                <li><a {{ strpos($_SERVER['REQUEST_URI'], 'changepassword') !== false ? "class=active" : "" }} href="{{ route('backend.profile.changepassword') }}" style="font-size: 18px">Đổi mật khẩu</a></li>
              </ul>
            </div>
          </nav>
        </div>
        @yield('content')
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


</body>
<!-- AdminLTE App -->
<script src="{{ asset('js/adminlte.min.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('js/dashboard.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('js/demo.js') }}"></script>
<!-- DATE PICKER -->
<script src="{{ asset('js/bootstrap-datepicker.js') }}"></script>
<script type="text/javascript">
  $('#datepicker').datepicker({
        autoclose: true,
        format: 'yyyy-mm-dd'
      })

  $("#uploadButton").click(function(){
    $("#fileUpload").trigger("click");
  })

  // $('input[type="file"]'). change(function(e){
  //   var fileName = e. target. files[0]. name;
  //   console.log('The file' + fileName);
  //   $.ajax({
  //     headers: {
  //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  //     },
  //     url : "{{ route('backend.profile.uploadimgAjax') }}",
  //     type : "post",
  //     data : {
  //       imgName : fileName,             
  //     },
  //     success : function ($result){
  //       console.log($result);
  //     }
  //     });
  // })

  $('input[type="file"]'). change(function(e){
    e.preventDefault();    
    var formData = new FormData(document.getElementById("myForm"));
    

    $.ajax({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
        url : "{{ route('backend.profile.uploadimgAjax') }}",
        type: 'POST',
        data: formData, 
        success: function (result) {
          console.log(result);
          $("#profileImg").attr("src",`{{ asset('images/users/${result}')}}`);
        },
        cache: false,
        contentType: false,
        processData: false
    });
});
</script>  
</html>
