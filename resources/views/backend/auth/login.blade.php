<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../backend/auth/carowsel/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="../backend/auth/carowsel/owl.theme.default.min.css">
	<link rel="stylesheet" type="text/css" href="../backend/auth/css/docs.theme.min.css">
	<link rel="stylesheet" type="text/css" href="../backend/auth/css/main.css">
</head>
<body>
	<div class="body1" style="background: linear-gradient(to bottom, #FFB88C, #DE6262);background-repeat: no-repeat;width: 100%;">
	    <div class="container loginAdmin" style="padding: 70px 50px;">
	        <div class="row" style="background-color: white;border-radius: 15px;">
	            <div class="col-md-5 formlogin" style="padding-top: 20px;">
	                <div style="text-align: center;">
	                    <span style="font-weight: bold;font-size: 25px;color: #DE6262;">My Stock v2
	                  </span>
	                    <hr style="width: 100px;height: 5px;background: #FEB58A;border-radius: 3px;margin-left: auto; margin-right: auto;">
	                </div>
	                <form method="POST" action="{{ route('login') }}">
	                	@csrf
	                    <div class="form-group">
	                        <label style="font-size: 14px;" for="exampleInputEmail1">Email</label>
	                        <input type="email" style="border-radius: 5px;" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="{{ old('email') }}" placeholder="Nhập email">
	                   </div>
	                   <div class="form-group">
	                        <label style="font-size: 14px;"  for="exampleInputPassword1">Mật khẩu</label>
	                        <input type="password" style="border-radius: 5px;" required class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
	                     </div>
	                     <div>
	                        <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
	                        </div>
	                    <a href="#" style="margin-top: 10px;" class="btn btn-block btn-danger">
	                        <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
	                    </a>
	                </form>
	                
	            </div>
	            <div class="col-md-7 img" style="padding-right: 0px;padding-left: 0px;">
	                <div class="carousel-inner img1 fadeOut owl-carousel owl-theme">
	                  <div class="carousel-item active">
	                    <img class="d-block w-100" src="../backend/auth/images/imgAdmin.jpg" alt="First slide">
	                  </div>
	                  <div class="carousel-item">
	                    <img class="d-block w-100" src="../backend/auth/images/imgAdmin1.jpg" alt="Second slide">
	                  </div>
	                  <div class="carousel-item">
	                    <img class="d-block w-100" src="../backend/auth/images/imgAdmin2.png" alt="Third slide">
	                  </div>
	                </div>
	            </div>
	        </div>
	    </div>
	 </div>
	<script type="text/javascript" src="../backend/auth/js/jquery.min.js"></script>
	<script type="text/javascript" src="../backend/auth/carowsel/owl.carousel.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<script>
      jQuery(document).ready(function($) {
        $('.fadeOut').owlCarousel({
          items: 1,
          animateOut: 'fadeOut',
          loop: true,
          margin: 10,
        });
      });
    </script>
</body>
</html>