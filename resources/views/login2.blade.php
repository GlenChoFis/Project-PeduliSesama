<!DOCTYPE html>
<html lang="en">
  <head>
    <title>PeduliSesama</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Overpass:300,400,400i,600,700" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">

    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">

    <link rel="stylesheet" href="assets/css/aos.css">

    <link rel="stylesheet" href="assets/css/ionicons.min.css">

    <link rel="stylesheet" href="assets/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="assets/css/jquery.timepicker.css">


    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/icomoon.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">

  </head>
  <body style="overflow-y:hidden ">

    <div class="hero-wrap" style="background-image: url('assets/images/bg_7.jpg');" >
        <div class="container">
            <div class="row ">
                <div class="col-md-6" style="padding-left:180px">
                    <div class="card">
                        <form onsubmit="event.preventDefault()" class="box" style="border-radius:30px; background:#c4c4c4b5; padding-bottom:20px; padding-top:30px">
                        <!-- <h1>Login</h1>  -->
                        <a class="text"  style="color:rgb(75, 75, 75)"> Masukkan e-mail dan password!</a>
                            <input type="text" name="" placeholder="Ketik e-mail Anda">
                            <input type="password" name="" placeholder="Password">

                           {{-- <button type="button" class="btn btn-primary" name="" href="/" style="padding:14px; border-radius:20px">Login</button> --}}
                           <input type="submit" name="" value="Login" href="#">
                                <div class="col-md-12" style="padding-top:10px">
                                    <a style="color:rgb(65, 65, 65)">Login with :</a>
                                    <br>
                                    <ul class="social-network social-circle">
                                        <!-- <li><a href="#" class="icoFacebook" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#" class="icoTwitter" title="Twitter"><i class="fab fa-twitter"></i></a></li> -->

                                            <li><a href="{{ route('google.redirect') }}" class="icoGoogle" title="Google +"><i class="fab fa-google-plus"></i></a></li>

                                    </ul>
                                </div>
                                <a class="text" href="/lupapass" style="color:rgb(65, 65, 65)">Lupa password?</a>
                                <a class="forgot text" href="/daftar" style="color:rgb(0, 34, 255)">Daftar</a>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>







  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/jquery.easing.1.3.js"></script>
  <script src="assets/js/jquery.waypoints.min.js"></script>
  <script src="assets/js/jquery.stellar.min.js"></script>
  <script src="assets/js/owl.carousel.min.js"></script>
  <script src="assets/js/jquery.magnific-popup.min.js"></script>
  <script src="assets/js/aos.js"></script>
  <script src="assets/js/jquery.animateNumber.min.js"></script>
  <script src="assets/js/bootstrap-datepicker.js"></script>
  <script src="assets/js/jquery.timepicker.min.js"></script>
  <script src="assets/js/scrollax.min.js"></script>
  <script src="assets/https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="assets/js/google-map.js"></script>
  <script src="assets/js/main.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>

  </body>
</html>
