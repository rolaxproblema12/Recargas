<!DOCTYPE html>
<?php
    $TransactionID = $_POST["TransactionID"];
    $MerchantRef = $_POST["MerchantRef"];
    $TransTypeID = $_POST["TransTypeID"];
    $Currency = $_POST["Currency"];
    $Amount = $_POST["Amount"];
    $BusinessCase = $_POST["BusinessCase"];
    $Descriptor = $_POST["Descriptor"];
    $Bank = $_POST["Bank"];
    $ResponseCode = $_POST["ResponseCode"];
    $ResponseDescription = $_POST["ResponseDescription"];
    $BankCode = $_POST["BankCode"];
    $BankDescription = $_POST["BankDescription"];
?>
<html lang="es">
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
<body onload="ejecutartranssacion(sessionStorage.getItem('requestid_global'))">
    <form method="post" action="https://test.dg-gw.co.uk/orion/tester/TestReturn.aspx" id="form1"> 
        <input type="hidden" name="TransactionID" id="TransactionID" value=<?php echo '"'.$TransactionID.'"'; ?>/> <br>
        <input type="hidden" name="MerchantRef" id="MerchantRef" value=<?php echo '"'.$MerchantRef.'"'; ?> /> <br>
        <input type="hidden" name="TransTypeID" id="TransTypeID" value=<?php echo '"'.$TransTypeID.'"'; ?>/> <br>
        <input type="hidden" name="Currency" id="Currency" value=<?php echo '"'.$Currency.'"'; ?>/> <br>
        <input type="hidden" name="Amount" id="Amount" value=<?php echo '"'.$Amount.'"'; ?>/> <br>
        <input type="hidden" name="BusinessCase" id="BusinessCase" value=<?php echo '"'.$BusinessCase.'"'; ?>/> <br>
        <input type="hidden" name="Descriptor" id="Descriptor" value=<?php echo '"'.$Descriptor.'"'; ?>/> <br>
        <input type="hidden" name="Bank" id="Bank" value=<?php echo '"'.$Bank.'"'; ?>/> <br> 
        <input type="hidden" name="ResponseCode" id="ResponseCode" value=<?php echo '"'.$ResponseCode.'"'; ?>/> <br>
        <input type="hidden" name="ResponseDescription" id="ResponseDescription" value=<?php echo '"'.$ResponseDescription.'"'; ?>/> <br>
        <input type="hidden" name="BankCode" id="BankCode" value=<?php echo '"'.$BankCode.'"'; ?>/> <br>
        <input type="hidden" name="BankDescription" id="BankDescription" value=<?php echo '"'.$BankDescription.'"'; ?>/> <br>
    </form> 
    <form id="form-codigos" action="finish.php">
        <input type="hidden" name="ResponseCodePago" id="ResponseCodePago" value=<?php echo '"'. $ResponseCode. '"' ?> /> <br>
        <input type="hidden" name="ResponseCodeTransaccion" id="ResponseCodeTransaccion" value=""/> <br>
        <!-- <button type="submit">Go</button> -->
    </form>

    <div class="center">  
          <div class="loader"></div>
    </div>

    <style>
        .center{
            width: 100%;
            padding: 5% 0;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .loader {
      border: 16px solid #f3f3f3; /* color de borde */
      border-top: 16px solid #002fff; /* color de borde superior */
      border-radius: 50%; /* forma circular */
      width: 220px; /* ancho */
      height: 220px; /* altura */
      animation: spin 2s linear infinite; /* animación */
    }
    
    @keyframes spin {
      0% { transform: rotate(0deg); }
      100% { transform: rotate(360deg); }
    }
    </style>
    <script src="../js/terminarTr.js"></script> 
</body>
