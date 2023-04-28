<!DOCTYPE html>
<?php
    $merchant_id = "sandbox";
    $password = "RZIuVE3NySIP9fQ";
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $card_number = $_POST["card_number"];
    $expiry_date_month = $_POST["expiry_date_month"];
    $expiry_date_year = $_POST["expiry_date_year"];
    $cv2 = $_POST["cv2"];
    $amount = $_POST["amount"];
    $currency_code = $_POST["currency_code"];
    $address1 = $_POST["address1"];
    $address2 = $_POST["address2"];
    $city = $_POST["city"];
    $province = $_POST["province"];
    $postal_code = $_POST["postal_code"];
    $country_code = $_POST["country_code"];
    $trans_id = $_POST["trans_id"];
    $customer_id = $_POST["customer_id"];
    $customer_ip_address = $_POST["customer_ip_address"]; 
    $requestid = $_POST["requestid"]; 

    //Consume API
    $data = array(  'merchant_id' => $merchant_id, 
                    'password' => $password, 
                    'first_name' => $first_name, 
                    'last_name' => $last_name, 
                    'card_number' => $card_number, 
                    'expiry_date_month' => $expiry_date_month, 
                    'expiry_date_year' => $expiry_date_year, 
                    'cv2' => $cv2, 
                    'amount' => $amount, 
                    'currency_code' => $currency_code, 
                    'address1' => $address1, 
                    'address2' => $address2, 
                    'city' => $city, 
                    'province' => $province, 
                    'postal_code' => $postal_code, 
                    'country_code' => $country_code, 
                    'trans_id' => $trans_id, 
                    'customer_id' => $customer_id, 
                    'customer_ip_address' => $customer_ip_address 
                );
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://api.peak-pay.com/purchase');
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);
    
    if($response == false){
        echo("Error :(");
    }
    else{
        $data = json_decode($response);
        $text = utf8_decode($response);
        echo($text);

        echo "<br/>";
        echo "<br/>";
        echo "<br/>";

        if (isset($data->status_code)) {
            $valor = $data->status_code;
            echo("status: " . $valor);
            echo "<br/>";
        }
        if (isset($data->message)) {
            $valor2 = $data->message;
            echo("message: " . $valor2);
            echo "<br/>";
        }
    }
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
<body 
    <?php
        echo 'onload=\'ejecutartranssacion("' . $requestid . '")\'';
    ?>
>

    <form id="form-codigos" action="finish.php">
        <input type="text" name="ResponseCodePago" id="ResponseCodePago" value=<?php echo '"'. $valor. '"' ?> /> <br>
        <input type="text" name="ResponseCodeTransaccion" id="ResponseCodeTransaccion" value=""/> <br>
        <!-- <button type="submit">Go</button> -->
    </form>

    <div class="center">  
          <div class="loader"></div>
    </div>
    <!-- 
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
    -->
    <script src="../js/terminarTr.js"></script> 
</body>
