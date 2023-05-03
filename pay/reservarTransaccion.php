<!DOCTYPE html>
<html lang="en">

<?php
    $numero = $_POST['mobileNumber'];
    $codigo = $_POST['codeRecharge'];
    $monto = str_replace(".","",$_POST['amount']);
    $monto_fomato = $_POST['amount'];
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body onload= <?php echo '"ejecutarRecarga(\'' . $monto . '\',\''. $codigo .'\',\''. $numero .'\')"'; ?> >
    <form id="formData" action="formPayment.php" metod="post">
        <input type="text" id="numero" name="numero" value= <?php echo '"'.$numero.'"'; ?> ><br>
        <input type="text" id="codigo" name="codigo" value= <?php echo '"'.$codigo.'"'; ?>><br>
        <input type="text" id="monto" name="monto" value= <?php echo '"'.$monto.'"'; ?>> <br>
        <input type="text" id="monto_fomato" name="monto_fomato" value= <?php echo '"'.$monto_fomato.'"'; ?>> <br>
        <input type="text" id="requestid" name="requestid" value=""><br>
        <input type="text" id="transid" name="transid" value=""><br>
        <input type="submit" value="GO"><br>
    </form>
    <script src="../js/reservaTr.js"></script>
</body>
</html>

