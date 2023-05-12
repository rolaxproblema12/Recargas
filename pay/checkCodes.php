<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <link rel="stylesheet" type="text/css" href="../css/stylesheet.css" />
    </head>
    <body>

    <?php
        session_start();
        if(isset($_POST["ResponseCodePago"]) && isset($_POST["ResponseCodeTransaccion"]) && isset($_POST["messagePago"])){
            $codigoPago = $_POST["ResponseCodePago"];
            $message = $_POST["messagePago"];
            $codigoTransaccion = $_POST["ResponseCodeTransaccion"];//Finaliza Recarha

            //Verifica si se realizo el cobro con tarjeta
            if($codigoPago == "0" || $codigoPago == "1"){//se realizo el pago
                //verifica el codigo de la transaccion (RECARGA)
                echo "<p class = 'checkCodesPay'>Pago realizado con exito <p>";

                if($codigoTransaccion != 0){//si el codigo de transaccion es diferente de 0 (no se realizo la recarga correctamente)
                    echo "<p class = 'checkCodesPay'> Recarga no exitosa, ejecuta reembolzo <p>";
                    $transid =  $_SESSION['trans_id'];
                    echo "<p class = 'checkCodesPay'> transid: " . $transid . '<p>';
                    //realiza un reembolzo
                    //Credenciales de Comerciante
                    $merchant_id = "sandbox";
                    $password = "RZIuVE3NySIP9fQ";

                    $data = array(  'merchant_id' => $merchant_id, 
                            'password' => $password,  
                            'int_trans_id' => '1681960472', 
                            'trans_id' => '1681960472', 
                            'refund_reason' => '4' 
                        );
                
                    $ch = curl_init();
                    curl_setopt($ch, CURLOPT_URL, 'https://api.peak-pay.com/refund');
                    curl_setopt($ch, CURLOPT_POST, 1);
                    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                    $response = curl_exec($ch);
                    curl_close($ch);
                    
                    if($response == false){
                        echo 'Sin respuesta del API';
                        $_SESSION['sinRespuesta'] = '0';
                        
                        header('Location: finish.php');
                    }
                    else{
                        $data = json_decode($response);
                        echo utf8_decode($response) . "<br>";
                        $_SESSION['RequestReembolzo'] = utf8_decode($response);
                        //Recupera el codigo status del reenvolzo
                        if (isset($data->status_code)) {
                            $refund_codigo_status = $data->status_code;
                            echo "<p class = 'checkCodesPay'> Codigo status reembolzo: " . $refund_codigo_status . "<p>";
                        }
                        //Recupera mensaje del status del reenvolzo
                        if (isset($data->message)) {
                            $refund_mensaje = $data->message;
                            echo "<p class = 'checkCodesPay'> mensaje reembolzo: " . $refund_mensaje . "<p>";
                        }
                        echo "<p class = 'checkCodesPay'> reembolzo terminado<p>";

                        $_SESSION['codigoReenvolzo'] = $refund_codigo_status;
                        $_SESSION['mensajeReenvolzo'] = $refund_mensaje;
                        
                        header('Location: finish.php');
                        exit;
                    }
                }
                else{//sino -> finaliza el proceso
                    echo "<p class = 'checkCodesPay'> Recarga exitosa <p>";
                    $_SESSION['codigoPago'] = $codigoPago;
                    $_SESSION['mensaje'] = $message;
                    $_SESSION['codigoRecarga'] = $codigoTransaccion;
                    
                    header('Location: finish.php');
                    exit;
                }
            }
            else{//no se realizo el pago
                //Si el pago no se realizo correctamente, (cualquier valor de codigo diferente de 0 o 1)
                //no se realiza el proceso "Procesar Transaccion", se recibe una cadena vacia para el codigo de transaccion mandando unicamente el codigo de pago
                //Esto se ve en el archivo callbackPaymen.php
                echo "<p class = 'checkCodesPay'> Pago no realizado con exito<p\>";
                
                $_SESSION['codigoPago'] = $codigoPago;
                $_SESSION['mensaje'] = $message;
                $_SESSION['codigoRecarga'] = "NA";
                
                header('Location: finish.php');
                exit;
            }
        }
        else{
            header('Location: ../index.html');
            exit;
        }
    ?>

    </body>
</html>