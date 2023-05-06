<html lang="en">
<?php
    if(isset($_POST["ResponseCodePago"]) && isset($_POST["ResponseCodeTransaccion"]) && isset($_POST["messagePago"])){
      $codigoPago = $_POST["ResponseCodePago"];
      $codigoTransaccion = $_POST["ResponseCodeTransaccion"];
      $message = $_POST["messagePago"];
    }
    else{
      header('Location: ../index.html');
      exit;
    }
?>
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
<link href="../images/favicon.png" rel="icon" />

<title>Quickai - downloaded from themelock.com - Recharge & Bill Payment, Booking HTML5 Template</title>
<meta name="description" content="Quickai - Recharge & Bill Payment, Booking HTML5 Template">
<meta name="author" content="harnishdesign.net">

<!-- Web Fonts
============================================= -->
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900' type='text/css'>

<!-- Stylesheet
============================================= -->
<link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="../vendor/font-awesome/css/all.min.css" />
<link rel="stylesheet" type="text/css" href="../vendor/owl.carousel/assets/owl.carousel.min.css" />
<link rel="stylesheet" type="text/css" href="../vendor/owl.carousel/assets/owl.theme.default.min.css" />
<link rel="stylesheet" type="text/css" href="../css/stylesheet.css" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">

</head>
<body>
<!-- Preloader -->
<div id="preloader"><div data-loader="dual-ring"></div></div><!-- Preloader End -->

<!-- Document Wrapper   
============================================= -->
<div id="main-wrapper">

  <!-- Header
  ============================================= -->
  <header id="header">
    <div class="container">
      <div class="header-row">
        <div class="header-column justify-content-start"> 
          
          <!-- Logo
          ============================================= -->
          <div class="logo">
          	<a href="../index.html" title="Quickai - HTML Template"><img src="../images/logo.png" alt="Quickai" width="127" height="29" /></a>
          </div><!-- Logo end -->
          
        </div>
        
        <div class="header-column justify-content-end">
        
          <!-- Primary Navigation
          ============================================= -->
          <nav class="primary-menu navbar navbar-expand-lg">
            <div id="header-nav" class="collapse navbar-collapse">
              <ul class="navbar-nav">
			  <li class="dropdown active"> <a class="dropdown-toggle" href="#">Inicio</a>

                </li>
                <li class="dropdown"> <a class="dropdown-toggle" href="#">Recargas de tiempo aire</a> 
                  <!--<ul class="dropdown-menu">
                      <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Mobile</a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="../index.html">Layout 1</a></li>
                          <li><a class="dropdown-item" href="../index-2.html">Layout 2</a></li>
                        </ul>
                      </li>
                      <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">DTH</a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="../recharge-bill-dth.html">Layout 1</a></li>
                          <li><a class="dropdown-item" href="../recharge-bill-dth-2.html">Layout 2</a></li>
                        </ul>
                      </li>
                      <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Data Card</a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="../recharge-bill-datacard.html">Layout 1</a></li>
                          <li><a class="dropdown-item" href="../recharge-bill-datacard-2.html">Layout 2</a></li>
                        </ul>
                      </li>
                      <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Broadband</a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="../recharge-bill-broadband.html">Layout 1</a></li>
                          <li><a class="dropdown-item" href="../recharge-bill-broadband-2.html">Layout 2</a></li>
                        </ul>
                      </li>
                      <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Landline</a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="../recharge-bill-landline.html">Layout 1</a></li>
                          <li><a class="dropdown-item" href="../recharge-bill-landline-2.html">Layout 2</a></li>
                        </ul>
                      </li>
                      <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Cable TV</a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="../recharge-bill-cabletv.html">Layout 1</a></li>
                          <li><a class="dropdown-item" href="../recharge-bill-cabletv-2.html">Layout 2</a></li>
                        </ul>
                      </li>
                      <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Electricity</a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="../recharge-bill-electricity.html">Layout 1</a></li>
                          <li><a class="dropdown-item" href="../recharge-bill-electricity-2.html">Layout 2</a></li>
                        </ul>
                      </li>
                      <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Metro</a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="../recharge-bill-metro.html">Layout 1</a></li>
                          <li><a class="dropdown-item" href="../recharge-bill-metro-2.html">Layout 2</a></li>
                        </ul>
                      </li>
                      <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Gas</a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="../recharge-bill-gas.html">Layout 1</a></li>
                          <li><a class="dropdown-item" href="../recharge-bill-gas-2.html">Layout 2</a></li>
                        </ul>
                      </li>
                      <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Water</a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="../recharge-bill-water.html">Layout 1</a></li>
                          <li><a class="dropdown-item" href="../recharge-bill-water-2.html">Layout 2</a></li>
                        </ul>
                      </li>
                      <li><a class="dropdown-item" href="../recharge-plans.html">Recharge Plans</a></li>
                      <li><a class="dropdown-item" href="../payment.html">Payment</a></li>
                    </ul>-->
                </li>
                <li class="dropdown dropdown-mega"> <a class="dropdown-toggle" href="#">¿Necesitas ayuda?</a> 
                  <!-- <ul class="dropdown-menu">
                    <li>
                      <div class="dropdown-mega-content">
                        <div class="row">
                          <div class="col-lg"> <span class="sub-title">Hotels</Span>
                            <ul class="dropdown-mega-submenu">
                              <li><a class="dropdown-item" href="../booking-hotels.html">Home Layout 1</a></li>
                              <li><a class="dropdown-item" href="../booking-hotels-2.html">Home Layout 2</a></li>
                              <li><a class="dropdown-item" href="../booking-hotels-list.html">Hotel List</a></li>
                              <li><a class="dropdown-item" href="../booking-hotels-grid.html">Hotel Grid</a></li>
                              <li><a class="dropdown-item" href="../booking-hotels-details.html">Hotel Details</a></li>
                            </ul>
                          </div>
                          <div class="col-lg"> <span class="sub-title">Flights</Span>
                            <ul class="dropdown-mega-submenu">
                              <li><a class="dropdown-item" href="../booking-flights.html">Home Layout 1</a></li>
                              <li><a class="dropdown-item" href="../booking-flights-2.html">Home Layout 2</a></li>
                              <li><a class="dropdown-item" href="../booking-flights-one-way.html">One Way Trip List</a></li>
                              <li><a class="dropdown-item" href="../booking-flights-round-trip.html">Round Trip List</a></li>
                              <li><a class="dropdown-item" href="../booking-flights-confirm-details.html">Confirm Details</a></li>
                            </ul>
                          </div>
                          <div class="col-lg"> <span class="sub-title">Trains</Span>
                            <ul class="dropdown-mega-submenu">
                              <li><a class="dropdown-item" href="../booking-trains.html">Home Layout 1</a></li>
                              <li><a class="dropdown-item" href="../booking-trains-2.html">Home Layout 2</a></li>
                              <li><a class="dropdown-item" href="../booking-trains-list.html">Trains List</a></li>
                              <li><a class="dropdown-item" href="../booking-trains-confirm-details.html">Confirm Details</a></li>
                            </ul>
                          </div>
                          <div class="col-lg"> <span class="sub-title">Bus</Span>
                            <ul class="dropdown-mega-submenu">
                              <li><a class="dropdown-item" href="../booking-bus.html">Home Layout 1</a></li>
                              <li><a class="dropdown-item" href="../booking-bus-2.html">Home Layout 2</a></li>
                              <li><a class="dropdown-item" href="../booking-bus-list.html">Bus List</a></li>
                              <li><a class="dropdown-item" href="../booking-bus-confirm-details.html">Confirm Details</a></li>
                            </ul>
                          </div>
                          <div class="col-lg"> <span class="sub-title">Other</Span>
                            <ul class="dropdown-mega-submenu">
                              <li><a class="dropdown-item" href="../payment.html">Payment</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul> -->
                </li>
<!-- 				<li class="dropdown"> <a class="dropdown-toggle" href="#">Features</a>
                  <ul class="dropdown-menu">
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Headers</a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="../index.html">Light Version (Default)</a></li>
                        <li><a class="dropdown-item" href="../index-4.html">Dark Version</a></li>
						<li><a class="dropdown-item" href="../index-5.html">Primary Version</a></li>
						<li><a class="dropdown-item" href="../index-8.html">Transparent</a></li>
						<li><a class="dropdown-item" href="../page-header-custom-background-with-transparent-header.html">Transparent with border</a></li>
                      </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Navigation DropDown</a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="../index.html">Light Version (Default)</a></li>
                        <li><a class="dropdown-item" href="../index-3.html">Dark Version</a></li>
						<li><a class="dropdown-item" href="../index-6.html">Primary Version</a></li>
                      </ul>
                    </li>
					<li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Page Headers</a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="../page-header-left-alignment.html">Left Alignment</a></li>
                        <li><a class="dropdown-item" href="../page-header-center-alignment.html">Center Alignment</a></li>
						<li><a class="dropdown-item" href="../page-header-light.html">Light Version</a></li>
						<li><a class="dropdown-item" href="../page-header-dark.html">Dark Version</a></li>
						<li><a class="dropdown-item" href="../page-header-primary.html">Primary Version</a></li>
						<li><a class="dropdown-item" href="../page-header-custom-background.html">Custom Background</a></li>
						<li><a class="dropdown-item" href="../page-header-custom-background-with-transparent-header.html">Custom Background 2</a></li>
                      </ul>
                    </li>
                    <li><a class="dropdown-item" href="../layout-boxed.html">Layout Boxed</a></li>
                  </ul>
                </li> -->
<!--                 <li class="dropdown"> <a class="dropdown-toggle" href="#">Pages</a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../about-us.html">About Us</a></li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Login/Signup</a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="../login-signup.html">Page</a></li>
                        <li><a class="dropdown-item" data-toggle="modal" data-target="#login-signup" href="#">Dialog Popup</a></li>
                      </ul>
                    </li>
                    <li><a class="dropdown-item" href="../profile.html">My Profile</a></li>
                    <li><a class="dropdown-item" href="../orders.html">Orders</a></li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Elements</a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="../elements.html">Elements</a></li>
                        <li><a class="dropdown-item" href="../elements-2.html">Elements 2</a></li>
                      </ul>
                    </li>
                    <li><a class="dropdown-item" href="../faq.html">Faq</a></li>
                    <li><a class="dropdown-item" href="../support.html">Support</a></li>
                    <li><a class="dropdown-item" href="../contact-us.html">Contact Us</a></li>
                  </ul>
                </li> -->
                <li class="login-signup ml-lg-2"><a class="pl-lg-4 pr-0" data-toggle="modal" data-target="#login-signup" href="#" title="Login / Sign up">Inicar / Registro <span class="d-none d-lg-inline-block"><i class="fas fa-user"></i></span></a></li>
              </ul>
            </div>
          </nav><!-- Primary Navigation end --> 
          
          
        </div>
        
        <!-- Collapse Button
        ============================================= -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#header-nav"> <span></span> <span></span> <span></span> </button>
      </div>
    </div>
  </header><!-- Header end -->
  
  	<!-- Page Header
    ============================================= -->
    <section class="page-header page-header-text-light bg-secondary">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-8">
            <h1>Pagar</h1>
          </div>
          <div class="col-md-4">
            <ul class="breadcrumb justify-content-start justify-content-md-end mb-0">
              <li><a href="../index.html">inicio</a></li>
              <li class="active">Pago</li>
            </ul>
          </div>
        </div>
      </div>
    </section><!-- Page Header end -->
    
  <!-- Content
  ============================================= -->
  <div id="content">
    <div class="container">
      <div class="bg-light shadow-md rounded">
        <div class="row align-items-center p-4">
          <div class="col-md-6">
            <h2 class="text-primary d-flex align-items-center m-0"><span class="text-3 text-dark mr-1"> Terminando recarga</h2>
          </div>
        </div>
        <hr class="m-0">
        <div class="p-4">
          <div class="row">
            <div class="col-md-10 col-lg-12">
              <div class="tab-content my-3" id="myTabContentVertical">
                <div class="tab-pane fade show active" id="firstTab" role="tabpanel" aria-labelledby="first-tab">
                  <div class="row">
                    <div class="col-lg-8">

                    <?php
                        echo "Codigo Pago: " . $codigoPago . "<br>";
                        echo "Codigo Transaccion: " . $codigoTransaccion . "<br>";


                        if( ($codigoPago == "0" || $codigoPago == "1") && $codigoTransaccion == "0"){
                            echo '
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>Recarga exitosa!</strong> Tu recarga ha sido realizada con exito.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            ';
                        }
                        else if($codigoPago != "0" && $codigoPago != "1"){
                            echo '
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>Ha ocurrido un error!</strong> ' . $message .'
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            ';
                        }
                    ?>

                    

                    </div>
                    <div class="col-lg-4 mt-lg-0 mt-4">
                      <div class="card bg-light-3 p-3">
                        <p class="mb-2">Valoramos tus datos</p>
                        <p class="text-1 mb-0">We will not sell or distribute your contact information. Read our <a href="#">Privacy Policy</a>.</p>
                        <hr>
                        <p class="mb-2">Metodo de pago</p>
                        <p class="text-1 mb-0">Do not hesitate to reach our <a href="#">support team</a> if you have any queries.</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="secondTab" role="tabpanel" aria-labelledby="second-tab">
                  <div class="row">
                    <div class="col-md-8"> <img class="img-fluid" src="../images/paypal-logo.png" alt="Paypal Logo" title="Pay easily, fast and secure with PayPal.">
                      <p class="lead">Pay easily, fast and secure with PayPal.</p>
                      <p class="text-info mb-4"><i class="fas fa-info-circle"></i> You will be redirected to PayPal to complete your payment securely.</p>
                      <button class="btn btn-primary d-flex align-items-center" type="submit"><i class="fab fa-paypal fa-2x mr-2"></i> Pay via PayPal</button>
                    </div>
                    <div class="col-md-4 mt-md-0 mt-4">
                      <div class="card bg-light-3 p-3">
                        <p class="mb-2">We value your Privacy.</p>
                        <p class="text-1 mb-0">We will not sell or distribute your contact information. Read our <a href="#">Privacy Policy</a>.</p>
                        <hr>
                        <p class="mb-2">Billing Enquiries</p>
                        <p class="text-1 mb-0">Do not hesitate to reach our <a href="#">support team</a> if you have any queries.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div><!-- Content end -->
  
  <!-- Footer
  ============================================= -->
  <footer id="footer">
    <section class="section bg-light shadow-md pt-4 pb-3">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-md-3">
            <div class="featured-box text-center">
              <div class="featured-box-icon"> <i class="fas fa-lock"></i> </div>
              <h4>Pagos 100% seguros</h4>
              <p>Moving your card details to a much more secured place.</p>
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="featured-box text-center">
              <div class="featured-box-icon"> <i class="fas fa-thumbs-up"></i> </div>
              <h4>Pago confiable</h4>
              <p>100% Payment Protection. Easy Return Policy.</p>
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="featured-box text-center">
              <div class="featured-box-icon"> <i class="fas fa-bullhorn"></i> </div>
              <h4>Rewwards</h4>
              <p>Invite a friend to sign up and earn up to $100.</p>
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="featured-box text-center">
              <div class="featured-box-icon"> <i class="far fa-life-ring"></i> </div>
              <h4>Soporte 24/7</h4>
              <p>We're here to help. Have a query and need help ? <a href="#">Click here</a></p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="container mt-4">
      <div class="row">
        <div class="col-md-4 mb-3 mb-md-0">
          <p>Pagos</p>
          <ul class="payments-types">
            <li><a href="#" target="_blank"> <img data-toggle="tooltip" src="../images/payment/visa.png" alt="visa" title="Visa"></a></li>
            <li><a href="#" target="_blank"> <img data-toggle="tooltip" src="../images/payment/discover.png" alt="discover" title="Discover"></a></li>
            <li><a href="#" target="_blank"> <img data-toggle="tooltip" src="../images/payment/paypal.png" alt="paypal" title="PayPal"></a></li>
            <li><a href="#" target="_blank"> <img data-toggle="tooltip" src="../images/payment/american.png" alt="american express" title="American Express"></a></li>
            <li><a href="#" target="_blank"> <img data-toggle="tooltip" src="../images/payment/mastercard.png" alt="discover" title="Discover"></a></li>
          </ul>
        </div>
        <div class="col-md-4 mb-3 mb-md-0">
          <p>suscríbete</p>
          <div class="input-group newsletter">
            <input class="form-control" placeholder="YIngresa tu emial" name="newsletterEmail" id="newsletterEmail" type="text">
            <span class="input-group-append">
            <button class="btn btn-secondary" type="submit">Enviar</button>
            </span> </div>
        </div>
        <div class="col-md-4 d-flex align-items-md-end flex-column">
          <p>Siguenos</p>
          <ul class="social-icons">
            <li class="social-icons-facebook"><a data-toggle="tooltip" href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
            <li class="social-icons-twitter"><a data-toggle="tooltip" href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
            <li class="social-icons-google"><a data-toggle="tooltip" href="http://www.google.com/" target="_blank" title="Google"><i class="fab fa-google"></i></a></li>
            <li class="social-icons-linkedin"><a data-toggle="tooltip" href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
            <li class="social-icons-youtube"><a data-toggle="tooltip" href="http://www.youtube.com/" target="_blank" title="Youtube"><i class="fab fa-youtube"></i></a></li>
            <li class="social-icons-instagram"><a data-toggle="tooltip" href="http://www.instagram.com/" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="footer-copyright">
        <ul class="nav justify-content-center">
          <li class="nav-item"> <a class="nav-link active" href="#">Nosotros</a> </li>
          <li class="nav-item"> <a class="nav-link" href="#">Faq</a> </li>
          <li class="nav-item"> <a class="nav-link" href="#">Contacto</a> </li>
          <li class="nav-item"> <a class="nav-link" href="#">Suporte</a> </li>
          <li class="nav-item"> <a class="nav-link" href="#">Términos de uso</a> </li>
          <li class="nav-item"> <a class="nav-link" href="#">Aviso de privacidad</a> </li>
        </ul>
        <p class="copyright-text">Copyright © 2022 <a href="#">vadaxi</a>. All Rights Reserved.</p>
      </div>
    </div>
  </footer><!-- Footer end -->
  
</div><!-- Document Wrapper end -->

<!-- Back to Top
============================================= -->
<a id="back-to-top" data-toggle="tooltip" title="Back to Top" href="javascript:void(0)"><i class="fa fa-chevron-up"></i></a>

<!-- Modal Dialog - Login/Signup
============================================= -->
<div id="login-signup" class="modal fade" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content p-sm-3">
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
        <ul class="nav nav-tabs" role="tablist">
          <li class="nav-item"> <a id="login-tab" class="nav-link active text-4" data-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="true">Login</a> </li>
          <li class="nav-item"> <a id="signup-tab" class="nav-link text-4" data-toggle="tab" href="#signup" role="tab" aria-controls="signup" aria-selected="false">Sign Up</a> </li>
        </ul>
        <div class="tab-content pt-4">
          <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
            <form id="loginForm" method="post">
              <div class="form-group">
                <input type="email" class="form-control" id="loginMobile" required placeholder="Mobile or Email ID">
              </div>
              <div class="form-group">
                <input type="password" class="form-control" id="loginPassword" required placeholder="Password">
              </div>
              <div class="row mb-4">
                <div class="col-sm">
                  <div class="form-check custom-control custom-checkbox">
                    <input id="remember-me" name="remember" class="custom-control-input" type="checkbox">
                    <label class="custom-control-label" for="remember-me">Remember Me</label>
                  </div>
                </div>
                <div class="col-sm text-right"> <a class="justify-content-end" href="#">Forgot Password ?</a> </div>
              </div>
              <button class="btn btn-primary btn-block" type="submit">Login</button>
            </form>
          </div>
          <div class="tab-pane fade" id="signup" role="tabpanel" aria-labelledby="signup-tab">
            <form id="signupForm" method="post">
              <div class="form-group">
                <input type="text" class="form-control" data-bv-field="number" id="signupEmail" required placeholder="Email ID">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" id="signupMobile" required placeholder="Mobile Number">
              </div>
              <div class="form-group">
                <input type="password" class="form-control" id="signuploginPassword" required placeholder="Password">
              </div>
              <button class="btn btn-primary btn-block" type="submit">Signup</button>
            </form>
          </div>
          <div class="d-flex align-items-center my-4">
            <hr class="flex-grow-1">
            <span class="mx-2">OR</span>
            <hr class="flex-grow-1">
          </div>
          <div class="row">
            <div class="col-12 mb-3">
              <button type="button" class="btn btn-block btn-outline-primary">Login with Facebook</button>
            </div>
            <div class="col-12">
              <button type="button" class="btn btn-block btn-outline-danger">Login with Google</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div><!-- Modal Dialog - Login/Signup end -->

<!-- Script -->
<script src="../vendor/jquery/jquery.min.js"></script>
<script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../vendor/owl.carousel/owl.carousel.min.js"></script> 
<script src="../js/theme.js"></script>

<script>
  console.log('Numero: ' + sessionStorage.getItem('numero'));
  console.log('Codigo: ' + sessionStorage.getItem('producto'));
  console.log('Success: ' + sessionStorage.getItem('success'));
  console.log('Error: ' + sessionStorage.getItem('error'));
  console.log('Message: ' + sessionStorage.getItem('message'));
</script>

</body>
</html>