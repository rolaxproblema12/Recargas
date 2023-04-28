<!DOCTYPE html>

<?php
    if( isset($_GET['monto']) ){
        $monto = $_GET['monto'];
    }
    if( isset($_GET['monto_fomato']) ){
      $monto_fomato = $_GET['monto_fomato'];
    }
    if( isset($_GET['requestid']) ){
        $requestid = $_GET['requestid'];
    }
    if( isset($_GET['merchantRef']) ){
      $merchantRef = $_GET['merchantRef'];
    }
    if( isset($_GET['signature']) ){
      $signature = $_GET['signature'];
    } 
    if( isset($_GET['transid']) ){
      $transid = $_GET['transid'];
    } 
?>

<html lang="en">
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

<script>
  sessionStorage.setItem('requestid_global', <?php echo "'".$requestid."'"; ?> );
</script>

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
            <h2 class="text-primary d-flex align-items-center m-0"><span class="text-3 text-dark mr-1">Monto de recarga: </span><?php echo "$". $monto_fomato; ?></h2>
          </div>
          <div class="col-md-6">
            <p class="text-md-right pb-0 mb-0">Transaction ID: <span class="text-body">25246584</span></p>
          </div>
        </div>
        <hr class="m-0">
        <div class="p-4">
          <h3 class="text-6 mb-4">¿Quieres pagar ahora?</h3>
          <div class="row">
            <div class="col-md-4 col-lg-3">

            </div>
            <div class="col-md-8 col-lg-9">
              <div class="tab-content my-3" id="myTabContentVertical">
                <div class="tab-pane fade show active" id="firstTab" role="tabpanel" aria-labelledby="first-tab">
                  <div class="row">
                    <div class="col-lg-8">
                      <!-- START FORM PAYMENT -->
                    
                      <form id="purchase-card-PurchaseCard-form" action="callbackPayment.php" method="post">
                        <!--
                        <h2>Merchant Login</h2>
                        <label for="merchant_id" class="required">Merchant Id <span class="required">*</span></label> <br/>
                        <input class="form-control" name="merchant_id" id="merchant_id" type="text" value="sandbox" /><br/>

                        <label for="password" class="required">Password <span class="required">*</span></label><br/>
                        <input class="form-control" name="password" id="password" type="text" value="RZIuVE3NySIP9fQ" /><br/>
                        -->
                        <h2>Card Information</h2>
                        <label for="first_name" class="required">First Name <span class="required">*</span></label><br/>
                        <input class="form-control" name="first_name" id="first_name" type="text" value="Michael" /><br/>

                        <label for="last_name" class="required">Last Name <span class="required">*</span></label><br/>
                        <input class="form-control" name="last_name" id="last_name" type="text" value="Winslow" /><br/>

                        <label for="card_number" class="required">Card Number <span class="required">*</span></label><br/>
                        <input class="form-control" name="card_number" id="card_number" type="text" value="4597723679422665" /><br/>

                        <label for="expiry_date_month" class="required">Expiration Date <span class="required">*</span></label><br/>
                        <div class="container">
                          <div class="row">
                            <div class="col-sm">
                              <select class="form-control" name="expiry_date_month" id="expiry_date_month">
                                <option value="">-choose month-</option>
                                <option value="01">(01) January</option>
                                <option value="02">(02) February</option>
                                <option value="03">(03) March</option>
                                <option value="04">(04) April</option>
                                <option value="05">(05) May</option>
                                <option value="06">(06) June</option>
                                <option value="07">(07) July</option>
                                <option value="08">(08) August</option>
                                <option value="09">(09) September</option>
                                <option value="10">(10) October</option>
                                <option value="11">(11) November</option>
                                <option value="12" selected="selected">(12) December</option>
                              </select>
                            </div>
                            <div class="col-sm">
                              <select class="form-control" name="expiry_date_year" id="expiry_date_year">
                                <option value="">-choose year-</option>
                                <option value="23">2023</option>
                                <option value="24" selected="selected">2024</option>
                                <option value="25">2025</option>
                                <option value="26">2026</option>
                                <option value="27">2027</option>
                                <option value="28">2028</option>
                                <option value="29">2029</option>
                                <option value="30">2030</option>
                                <option value="31">2031</option>
                                <option value="32">2032</option>
                                <option value="33">2033</option>
                                <option value="34">2034</option>
                                <option value="35">2035</option>
                                <option value="36">2036</option>
                                <option value="37">2037</option>
                                <option value="38">2038</option>
                                <option value="39">2039</option>
                                <option value="40">2040</option>
                                <option value="41">2041</option>
                                <option value="42">2042</option>
                              </select>
                            </div>
                          </div>
                        </div>
                        <br/>

                        <label for="cv2" class="required">CVV/ CV2 <span class="required">*</span></label><br/>
                        <input class="form-control" name="cv2" id="cv2" type="text" maxlength="4" value="123" />
                        
                        <!--
                        <label for="amount" class="required">Amount <span class="required">*</span></label><br/>
                        -->
                        <input class="form-control" name="amount" id="amount" type="hidden" value= <?php echo '"' . str_replace(".","",$monto_fomato) . '"' ?> readonly/><br/>

                        <label for="currency_code" class="required">Currency Code <span class="required">*</span></label><br/>
                        <select class="form-control" name="currency_code" id="currency_code">
                          <option value="AED">AED</option>
                          <option value="AFN">AFN</option>
                          <option value="ALL">ALL</option>
                          <option value="AMD">AMD</option>
                          <option value="ANG">ANG</option>
                          <option value="AOA">AOA</option>
                          <option value="ARS">ARS</option>
                          <option value="AUD">AUD</option>
                          <option value="AWG">AWG</option>
                          <option value="AZN">AZN</option>
                          <option value="BAM">BAM</option>
                          <option value="BBD">BBD</option>
                          <option value="BDT">BDT</option>
                          <option value="BGN">BGN</option>
                          <option value="BHD">BHD</option>
                          <option value="BIF">BIF</option>
                          <option value="BND">BND</option>
                          <option value="BOB">BOB</option>
                          <option value="BOV">BOV</option>
                          <option value="BRL">BRL</option>
                          <option value="BSD">BSD</option>
                          <option value="BTN">BTN</option>
                          <option value="BWP">BWP</option>
                          <option value="BYR">BYR</option>
                          <option value="BZD">BZD</option>
                          <option value="CAD">CAD</option>
                          <option value="CDF">CDF</option>
                          <option value="CHE">CHE</option>
                          <option value="CHF">CHF</option>
                          <option value="CHW">CHW</option>
                          <option value="CLF">CLF</option>
                          <option value="CLP">CLP</option>
                          <option value="CNY">CNY</option>
                          <option value="COP">COP</option>
                          <option value="COU">COU</option>
                          <option value="CRC">CRC</option>
                          <option value="CUC">CUC</option>
                          <option value="CUP">CUP</option>
                          <option value="CVE">CVE</option>
                          <option value="CZK">CZK</option>
                          <option value="DJF">DJF</option>
                          <option value="DKK">DKK</option>
                          <option value="DOP">DOP</option>
                          <option value="DZD">DZD</option>
                          <option value="EGP">EGP</option>
                          <option value="ERN">ERN</option>
                          <option value="ETB">ETB</option>
                          <option value="EUR">EUR</option>
                          <option value="FJD">FJD</option>
                          <option value="FKP">FKP</option>
                          <option value="GBP">GBP</option>
                          <option value="GEL">GEL</option>
                          <option value="GHS">GHS</option>
                          <option value="GIP">GIP</option>
                          <option value="GMD">GMD</option>
                          <option value="GNF">GNF</option>
                          <option value="GTQ">GTQ</option>
                          <option value="GYD">GYD</option>
                          <option value="HKD">HKD</option>
                          <option value="HNL">HNL</option>
                          <option value="HRK">HRK</option>
                          <option value="HTG">HTG</option>
                          <option value="HUF">HUF</option>
                          <option value="IDR">IDR</option>
                          <option value="ILS">ILS</option>
                          <option value="INR">INR</option>
                          <option value="IQD">IQD</option>
                          <option value="IRR">IRR</option>
                          <option value="ISK">ISK</option>
                          <option value="JMD">JMD</option>
                          <option value="JOD">JOD</option>
                          <option value="JPY">JPY</option>
                          <option value="KES">KES</option>
                          <option value="KGS">KGS</option>
                          <option value="KHR">KHR</option>
                          <option value="KMF">KMF</option>
                          <option value="KPW">KPW</option>
                          <option value="KRW">KRW</option>
                          <option value="KWD">KWD</option>
                          <option value="KYD">KYD</option>
                          <option value="KZT">KZT</option>
                          <option value="LAK">LAK</option>
                          <option value="LBP">LBP</option>
                          <option value="LKR">LKR</option>
                          <option value="LRD">LRD</option>
                          <option value="LSL">LSL</option>
                          <option value="LTL">LTL</option>
                          <option value="LVL">LVL</option>
                          <option value="LYD">LYD</option>
                          <option value="MAD">MAD</option>
                          <option value="MDL">MDL</option>
                          <option value="MGA">MGA</option>
                          <option value="MKD">MKD</option>
                          <option value="MMK">MMK</option>
                          <option value="MNT">MNT</option>
                          <option value="MOP">MOP</option>
                          <option value="MRO">MRO</option>
                          <option value="MUR">MUR</option>
                          <option value="MVR">MVR</option>
                          <option value="MWK">MWK</option>
                          <option value="MXN">MXN</option>
                          <option value="MXV">MXV</option>
                          <option value="MYR">MYR</option>
                          <option value="MZN">MZN</option>
                          <option value="NAD">NAD</option>
                          <option value="NGN">NGN</option>
                          <option value="NIO">NIO</option>
                          <option value="NOK">NOK</option>
                          <option value="NPR">NPR</option>
                          <option value="NZD">NZD</option>
                          <option value="OMR">OMR</option>
                          <option value="PAB">PAB</option>
                          <option value="PEN">PEN</option>
                          <option value="PGK">PGK</option>
                          <option value="PHP">PHP</option>
                          <option value="PKR">PKR</option>
                          <option value="PLN">PLN</option>
                          <option value="PYG">PYG</option>
                          <option value="QAR">QAR</option>
                          <option value="RON">RON</option>
                          <option value="RSD">RSD</option>
                          <option value="RUB">RUB</option>
                          <option value="RWF">RWF</option>
                          <option value="SAR">SAR</option>
                          <option value="SBD">SBD</option>
                          <option value="SCR">SCR</option>
                          <option value="SDG">SDG</option>
                          <option value="SEK">SEK</option>
                          <option value="SGD">SGD</option>
                          <option value="SHP">SHP</option>
                          <option value="SLL">SLL</option>
                          <option value="SOS">SOS</option>
                          <option value="SRD">SRD</option>
                          <option value="SSP">SSP</option>
                          <option value="STD">STD</option>
                          <option value="SYP">SYP</option>
                          <option value="SZL">SZL</option>
                          <option value="THB">THB</option>
                          <option value="TJS">TJS</option>
                          <option value="TMT">TMT</option>
                          <option value="TND">TND</option>
                          <option value="TOP">TOP</option>
                          <option value="TRY">TRY</option>
                          <option value="TTD">TTD</option>
                          <option value="TWD">TWD</option>
                          <option value="TZS">TZS</option>
                          <option value="UAH">UAH</option>
                          <option value="UGX">UGX</option>
                          <option value="USD" selected="selected">USD</option>
                          <option value="USN">USN</option>
                          <option value="UYU">UYU</option>
                          <option value="UZS">UZS</option>
                          <option value="VEF">VEF</option>
                          <option value="VND">VND</option>
                          <option value="VUV">VUV</option>
                          <option value="WST">WST</option>
                          <option value="XAF">XAF</option>
                          <option value="XAG">XAG</option>
                          <option value="XAU">XAU</option>
                          <option value="XBA">XBA</option>
                          <option value="XCD">XCD</option>
                          <option value="XDR">XDR</option>
                          <option value="XFU">XFU</option>
                          <option value="XOF">XOF</option>
                          <option value="XPD">XPD</option>
                          <option value="XPF">XPF</option>
                          <option value="XPT">XPT</option>
                          <option value="XTS">XTS</option>
                          <option value="XXX">XXX</option>
                          <option value="YER">YER</option>
                          <option value="ZAR">ZAR</option>
                          <option value="ZMK">ZMK</option>
                          <option value="ZWL">ZWL</option>
                        </select>
                        <br/>

                        <!--
                        <h2>Contact Information</h2>
                        <label for="email_address">Email Address</label><br/>
                        <input name="email_address" id="email_address" type="text" value="michaeln@live.net" /><br/>

                        <label for="phone_number">Phone</label><br/>
                        <input name="phone_number" id="phone_number" type="text" value="815-244-3090" /><br/>
                        -->
                        
                        <h2>Billing Address</h2>
                        <label for="address1" class="required">Address Line 1 <span class="required">*</span></label><br/>
                        <input class="form-control" name="address1" id="address1" type="text" value="4926 Emeral Dreams Drive" /><br/>

                        <label for="address2">Address Line 2</label><br/>
                        <input class="form-control" name="address2" id="address2" type="text" /><br/>

                        <label for="city" class="required">City <span class="required">*</span></label><br/>
                        <input class="form-control" name="city" id="city" type="text" value="Mount Carroll" /><br/>

                        <label for="province" class="required">Province <span class="required">*</span></label><br/>
                        <input class="form-control" name="province" id="province" type="text" value="IL" /><br/>

                        <label for="postal_code" class="required">Postal Code <span class="required">*</span></label><br/>
                        <input class="form-control" name="postal_code" id="postal_code" type="text" maxlength="10" value="61053" /><br/>
                        
                        <label for="country_code" class="required">Country <span class="required">*</span></label><br/>
                        <select class="form-control" name="country_code" id="country_code"><br/>
                          <option value="AF">Afghanistan</option>
                          <option value="AL">Albania</option>
                          <option value="DZ">Algeria</option>
                          <option value="AS">American Samoa</option>
                          <option value="AD">Andorra</option>
                          <option value="AO">Angola</option>
                          <option value="AI">Anguilla</option>
                          <option value="AQ">Antarctica</option>
                          <option value="AG">Antigua and Barbuda</option>
                          <option value="AR">Argentina</option>
                          <option value="AM">Armenia</option>
                          <option value="AW">Aruba</option>
                          <option value="AU">Australia</option>
                          <option value="AT">Austria</option>
                          <option value="AZ">Azerbaijan</option>
                          <option value="BS">Bahamas</option>
                          <option value="BH">Bahrain</option>
                          <option value="BD">Bangladesh</option>
                          <option value="BB">Barbados</option>
                          <option value="BY">Belarus</option>
                          <option value="BE">Belgium</option>
                          <option value="BZ">Belize</option>
                          <option value="BJ">Benin</option>
                          <option value="BM">Bermuda</option>
                          <option value="BT">Bhutan</option>
                          <option value="BO">Bolivia, Plurinational State of</option>
                          <option value="BA">Bosnia and Herzegovina</option>
                          <option value="BW">Botswana</option>
                          <option value="BV">Bouvet Island</option>
                          <option value="BR">Brazil</option>
                          <option value="IO">British Indian Ocean Territory</option>
                          <option value="BN">Brunei Darussalam</option>
                          <option value="BG">Bulgaria</option>
                          <option value="BF">Burkina Faso</option>
                          <option value="BI">Burundi</option>
                          <option value="KH">Cambodia</option>
                          <option value="CM">Cameroon</option>
                          <option value="CA">Canada</option>
                          <option value="CV">Cape Verde</option>
                          <option value="KY">Cayman Islands</option>
                          <option value="CF">Central African Republic</option>
                          <option value="TD">Chad</option>
                          <option value="CL">Chile</option>
                          <option value="CN">China</option>
                          <option value="CX">Christmas Island</option>
                          <option value="CC">Cocos (Keeling) Islands</option>
                          <option value="CO">Colombia</option>
                          <option value="KM">Comoros</option>
                          <option value="CG">Congo</option>
                          <option value="CD">Congo, the Democratic Republic of the</option>
                          <option value="CK">Cook Islands</option>
                          <option value="CR">Costa Rica</option>
                          <option value="CI">Côte d&#039;Ivoire</option>
                          <option value="HR">Croatia</option>
                          <option value="CU">Cuba</option>
                          <option value="CY">Cyprus</option>
                          <option value="CZ">Czech Republic</option>
                          <option value="DK">Denmark</option>
                          <option value="DJ">Djibouti</option>
                          <option value="DM">Dominica</option>
                          <option value="DO">Dominican Republic</option>
                          <option value="EC">Ecuador</option>
                          <option value="EG">Egypt</option>
                          <option value="SV">El Salvador</option>
                          <option value="GQ">Equatorial Guinea</option>
                          <option value="ER">Eritrea</option>
                          <option value="EE">Estonia</option>
                          <option value="ET">Ethiopia</option>
                          <option value="FK">Falkland Islands (Malvinas)</option>
                          <option value="FO">Faroe Islands</option>
                          <option value="FJ">Fiji</option>
                          <option value="FI">Finland</option>
                          <option value="FR">France</option>
                          <option value="GF">French Guiana</option>
                          <option value="PF">French Polynesia</option>
                          <option value="TF">French Southern Territories</option>
                          <option value="GA">Gabon</option>
                          <option value="GM">Gambia</option>
                          <option value="GE">Georgia</option>
                          <option value="DE">Germany</option>
                          <option value="GH">Ghana</option>
                          <option value="GI">Gibraltar</option>
                          <option value="GR">Greece</option>
                          <option value="GL">Greenland</option>
                          <option value="GD">Grenada</option>
                          <option value="GP">Guadeloupe</option>
                          <option value="GU">Guam</option>
                          <option value="GT">Guatemala</option>
                          <option value="GG">Guernsey</option>
                          <option value="GN">Guinea</option>
                          <option value="GW">Guinea-Bissau</option>
                          <option value="GY">Guyana</option>
                          <option value="HT">Haiti</option>
                          <option value="HM">Heard Island and McDonald Islands</option>
                          <option value="VA">Holy See (Vatican City State)</option>
                          <option value="HN">Honduras</option>
                          <option value="HK">Hong Kong</option>
                          <option value="HU">Hungary</option>
                          <option value="IS">Iceland</option>
                          <option value="IN">India</option>
                          <option value="ID">Indonesia</option>
                          <option value="IR">Iran, Islamic Republic of</option>
                          <option value="IQ">Iraq</option>
                          <option value="IE">Ireland</option>
                          <option value="IM">Isle of Man</option>
                          <option value="IL">Israel</option>
                          <option value="IT">Italy</option>
                          <option value="JM">Jamaica</option>
                          <option value="JP">Japan</option>
                          <option value="JE">Jersey</option>
                          <option value="JO">Jordan</option>
                          <option value="KZ">Kazakhstan</option>
                          <option value="KE">Kenya</option>
                          <option value="KI">Kiribati</option>
                          <option value="KP">Korea, Democratic People&#039;s Republic of</option>
                          <option value="KR">Korea, Republic of</option>
                          <option value="KW">Kuwait</option>
                          <option value="KG">Kyrgyzstan</option>
                          <option value="LA">Lao People&#039;s Democratic Republic</option>
                          <option value="LV">Latvia</option>
                          <option value="LB">Lebanon</option>
                          <option value="LS">Lesotho</option>
                          <option value="LR">Liberia</option>
                          <option value="LY">Libyan Arab Jamahiriya</option>
                          <option value="LI">Liechtenstein</option>
                          <option value="LT">Lithuania</option>
                          <option value="LU">Luxembourg</option>
                          <option value="MO">Macao</option>
                          <option value="MK">Macedonia, the former Yugoslav Republic of</option>
                          <option value="MG">Madagascar</option>
                          <option value="MW">Malawi</option>
                          <option value="MY">Malaysia</option>
                          <option value="MV">Maldives</option>
                          <option value="ML">Mali</option>
                          <option value="MT">Malta</option>
                          <option value="MH">Marshall Islands</option>
                          <option value="MQ">Martinique</option>
                          <option value="MR">Mauritania</option>
                          <option value="MU">Mauritius</option>
                          <option value="YT">Mayotte</option>
                          <option value="MX" selected = "selected">Mexico</option>
                          <option value="FM">Micronesia, Federated States of</option>
                          <option value="MD">Moldova, Republic of</option>
                          <option value="MC">Monaco</option>
                          <option value="MN">Mongolia</option>
                          <option value="ME">Montenegro</option>
                          <option value="MS">Montserrat</option>
                          <option value="MA">Morocco</option>
                          <option value="MZ">Mozambique</option>
                          <option value="MM">Myanmar</option>
                          <option value="NA">Namibia</option>
                          <option value="NR">Nauru</option>
                          <option value="NP">Nepal</option>
                          <option value="NL">Netherlands</option>
                          <option value="AN">Netherlands Antilles</option>
                          <option value="NC">New Caledonia</option>
                          <option value="NZ">New Zealand</option>
                          <option value="NI">Nicaragua</option>
                          <option value="NE">Niger</option>
                          <option value="NG">Nigeria</option>
                          <option value="NU">Niue</option>
                          <option value="NF">Norfolk Island</option>
                          <option value="MP">Northern Mariana Islands</option>
                          <option value="NO">Norway</option>
                          <option value="OM">Oman</option>
                          <option value="PK">Pakistan</option>
                          <option value="PW">Palau</option>
                          <option value="PS">Palestinian Territory, Occupied</option>
                          <option value="PA">Panama</option>
                          <option value="PG">Papua New Guinea</option>
                          <option value="PY">Paraguay</option>
                          <option value="PE">Peru</option>
                          <option value="PH">Philippines</option>
                          <option value="PN">Pitcairn</option>
                          <option value="PL">Poland</option>
                          <option value="PT">Portugal</option>
                          <option value="PR">Puerto Rico</option>
                          <option value="QA">Qatar</option>
                          <option value="RE">Réunion</option>
                          <option value="RO">Romania</option>
                          <option value="RU">Russian Federation</option>
                          <option value="RW">Rwanda</option>
                          <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
                          <option value="KN">Saint Kitts and Nevis</option>
                          <option value="LC">Saint Lucia</option>
                          <option value="PM">Saint Pierre and Miquelon</option>
                          <option value="VC">Saint Vincent and the Grenadines</option>
                          <option value="WS">Samoa</option>
                          <option value="SM">San Marino</option>
                          <option value="ST">Sao Tome and Principe</option>
                          <option value="SA">Saudi Arabia</option>
                          <option value="SN">Senegal</option>
                          <option value="RS">Serbia</option>
                          <option value="SC">Seychelles</option>
                          <option value="SL">Sierra Leone</option>
                          <option value="SG">Singapore</option>
                          <option value="SK">Slovakia</option>
                          <option value="SI">Slovenia</option>
                          <option value="SB">Solomon Islands</option>
                          <option value="SO">Somalia</option>
                          <option value="ZA">South Africa</option>
                          <option value="GS">South Georgia and the South Sandwich Islands</option>
                          <option value="SS">South Sudan</option>
                          <option value="ES">Spain</option>
                          <option value="LK">Sri Lanka</option>
                          <option value="SD">Sudan</option>
                          <option value="SR">Suriname</option>
                          <option value="SJ">Svalbard and Jan Mayen</option>
                          <option value="SZ">Swaziland</option>
                          <option value="SE">Sweden</option>
                          <option value="CH">Switzerland</option>
                          <option value="SY">Syrian Arab Republic</option>
                          <option value="TW">Taiwan, Province of China</option>
                          <option value="TJ">Tajikistan</option>
                          <option value="TZ">Tanzania, United Republic of</option>
                          <option value="TH">Thailand</option>
                          <option value="TL">Timor-Leste</option>
                          <option value="TG">Togo</option>
                          <option value="TK">Tokelau</option>
                          <option value="TO">Tonga</option>
                          <option value="TT">Trinidad and Tobago</option>
                          <option value="TN">Tunisia</option>
                          <option value="TR">Turkey</option>
                          <option value="TM">Turkmenistan</option>
                          <option value="TC">Turks and Caicos Islands</option>
                          <option value="TV">Tuvalu</option>
                          <option value="UG">Uganda</option>
                          <option value="UA">Ukraine</option>
                          <option value="AE">United Arab Emirates</option>
                          <option value="GB">United Kingdom</option>
                          <option value="US">United States</option>
                          <option value="UM">United States Minor Outlying Islands</option>
                          <option value="UY">Uruguay</option>
                          <option value="UZ">Uzbekistan</option>
                          <option value="VU">Vanuatu</option>
                          <option value="VE">Venezuela, Bolivarian Republic of</option>
                          <option value="VN">Viet Nam</option>
                          <option value="VG">Virgin Islands, British</option>
                          <option value="VI">Virgin Islands, U.S.</option>
                          <option value="WF">Wallis and Futuna</option>
                          <option value="EH">Western Sahara</option>
                          <option value="YE">Yemen</option>
                          <option value="ZM">Zambia</option>
                          <option value="ZW">Zimbabwe</option>
                        </select>
                        
                        <h2>Order Information</h2> 
                        <label for="trans_id" class="required">Trans Id <span class="required">*</span></label><br/>
                        <input class="form-control" name="trans_id" id="trans_id" type="text" value=<?php echo '"' . $transid . '"'; ?> /><br/>

                        <label for="customer_id" class="required">Customer Id <span class="required">*</span></label><br/>
                        <input class="form-control" name="customer_id" id="customer_id" type="text" value="10" /><br/>

                        <label for="customer_ip_address" class="required">Customer Ip <span class="required">*</span></label><br/>
                        <input class="form-control" name="customer_ip_address" id="customer_ip_address" type="text" value="139.59.117.119" /><br/>
                        
                        <input name="requestid" id="requestid" type="hidden"  value= <?php echo '"' . $requestid . '"'; ?> />
                        <br/>

                        <input class="btn btn-success" type="submit" value= "Pagar"><br/>
                      </form>
                      <?php echo 'Request ID: ' . $requestid; ?>
                     <!-- END FORM PAYMENT -->
                    </div>
                    <div class="col-lg-4 mt-lg-0 mt-4">
                      <p>Aceptamos todas las tarjetas</p>
                      <ul class="payments-types mb-3">
                        <li><a href="#" target="_blank"> <img data-toggle="tooltip" src="../images/payment/visa.png" alt="visa" title="Visa"></a></li>
                        <li><a href="#" target="_blank"> <img data-toggle="tooltip" src="../images/payment/discover.png" alt="discover" title="Discover"></a></li>
                        <li><a href="#" target="_blank"> <img data-toggle="tooltip" src="../images/payment/american.png" alt="american express" title="American Express"></a></li>
                        <li><a href="#" target="_blank"> <img data-toggle="tooltip" src="../images/payment/mastercard.png" alt="discover" title="Discover"></a></li>
                      </ul>
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


</body>
</html>