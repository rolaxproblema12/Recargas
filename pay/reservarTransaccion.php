<!DOCTYPE html>
<html lang="en">

<?php
    if( isset($_POST['mobileNumber']) && isset($_POST['codeRecharge']) && isset($_POST['amount'])){
        $numero = $_POST['mobileNumber'];
        $codigo = $_POST['codeRecharge'];
        $monto = str_replace(".","",$_POST['amount']);
        $monto_fomato = $_POST['amount'];
    }
    else{
        header('Location: ../index.html');
        exit;
    }
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body onload= <?php echo '"ejecutarRecarga(\'' . $monto . '\',\''. $codigo .'\',\''. $numero .'\')"'; ?> >
    <form method="post" id="formData" action="formPayment.php" enctype="application/x-www-form-urlencoded">
        <input type="hidden" id="numero" name="numero" value= <?php echo '"'.$numero.'"'; ?> ><br>
        <input type="hidden" id="codigo" name="codigo" value= <?php echo '"'.$codigo.'"'; ?>><br>
        <input type="hidden" id="monto" name="monto" value= <?php echo '"'.$monto.'"'; ?>> <br>
        <input type="hidden" id="monto_fomato" name="monto_fomato" value= <?php echo '"'.$monto_fomato.'"'; ?>> <br>
        <input type="hidden" id="requestid" name="requestid" value=""><br>
        <input type="hidden" id="transid" name="transid" value=""><br>
    </form>
    <script src="../js/reservaTr.js"></script>
</body>
</html>

