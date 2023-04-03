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

    switch
?>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Callback</title>
    </head>
    <body>
    <form method="post" action="https://test.dg-gw.co.uk/orion/tester/TestReturn.aspx" id="form1"> 
        <input type="text" name="TransactionID" id="TransactionID" value=<?php echo '"'.$TransactionID.'"'; ?>/> <br>
        <input type="text" name="MerchantRef" id="MerchantRef" value=<?php echo '"'.$MerchantRef.'"'; ?> /> <br>
        <input type="text" name="TransTypeID" id="TransTypeID" value=<?php echo '"'.$TransTypeID.'"'; ?>/> <br>
        <input type="text" name="Currency" id="Currency" value=<?php echo '"'.$Currency.'"'; ?>/> <br>
        <input type="text" name="Amount" id="Amount" value=<?php echo '"'.$Amount.'"'; ?>/> <br>
        <input type="text" name="BusinessCase" id="BusinessCase" value=<?php echo '"'.$BusinessCase.'"'; ?>/> <br>
        <input type="text" name="Descriptor" id="Descriptor" value=<?php echo '"'.$Descriptor.'"'; ?>/> <br>
        <input type="text" name="Bank" id="Bank" value=<?php echo '"'.$Bank.'"'; ?>/> <br> 
        <input type="text" name="ResponseCode" id="ResponseCode" value=<?php echo '"'.$ResponseCode.'"'; ?>/> <br>
        <input type="text" name="ResponseDescription" id="ResponseDescription" value=<?php echo '"'.$ResponseDescription.'"'; ?>/> <br>
        <input type="text" name="BankCode" id="BankCode" value=<?php echo '"'.$BankCode.'"'; ?>/> <br>
        <input type="text" name="BankDescription" id="BankDescription" value=<?php echo '"'.$BankDescription.'"'; ?>/> <br>
        <button type="submit" >GO</button>
    </form>        
    </body>
</html>