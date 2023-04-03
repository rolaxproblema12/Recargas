<!DOCTYPE html>
<html lang="en">

<?php
    $numero = $_GET['mobileNumber'];
    $codigo = $_GET['codeRecharge'];
    $monto = str_replace(".","",$_GET['amount']);
    $merchantRef = "130502203354";
    $signature = sha1("p@s5w0Rd123" . $merchantRef . "MXN" . $monto,false);
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body onload= <?php
            //action="formPayment.php"
            echo '"ejecutarRecarga(\'' . $monto . '\',\''. $codigo .'\',\''. $numero .'\')"';
        ?>>
    <form id="formData" action="formPayment.php" metod="get">
        <input type="hidden" id="numero" name="numero" value= <?php echo '"'.$numero.'"'; ?> ><br>
        <input type="hidden" id="codigo" name="codigo" value= <?php echo '"'.$codigo.'"'; ?>><br>
        <input type="hidden" id="monto" name="monto" value= <?php echo '"'.$monto.'"'; ?>> <br>
        <input type="hidden" id="merchantRef" name="merchantRef" value=<?php echo '"'.$merchantRef.'"'; ?>><br>
        <input type="hidden" id="signature" name="signature" value=<?php echo '"'.$signature.'"'; ?>><br>
        <input type="hidden" id="requestid" name="requestid" value=""><br>
    </form>
    <script src="../js/reservaTr.js"></script>
</body>
</html>

