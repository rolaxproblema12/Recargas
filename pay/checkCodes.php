<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
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
                echo "Pago realizado con exito <br>";

                if($codigoTransaccion != 0){//si el codigo de transaccion es diferente de 0 (no se realizo la recarga correctamente)
                    echo "Recarga no exitosa, ejecuta reembolzo <br>";
                    $transid =  $_SESSION['trans_id'];
                    echo "transid: " . $transid . '<br>';
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
                        header('Location: ../index.html');
                        exit;
                    }
                    else{
                        $data = json_decode($response);
                        echo utf8_decode($response) . "<br>";
                        //Recupera el codigo status del reenvolzo
                        if (isset($data->status_code)) {
                            $refund_codigo_status = $data->status_code;
                            echo "Codigo status reembolzo: " . $refund_codigo_status . "<br>";
                        }
                        //Recupera mensaje del status del reenvolzo
                        if (isset($data->message)) {
                            $refund_mensaje = $data->message;
                            echo "mensaje reembolzo: " . $refund_mensaje . "<br>";
                        }
                        echo "reembolzo terminado<br>";

                        $_SESSION['codigoReenvolzo'] = $refund_codigo_status;
                        $_SESSION['mensajeReenvolzo'] = $refund_mensaje;

                        header('Location: finish.php');
                        exit;
                    }
                }
                else{//sino -> finaliza el proceso
                    echo "Recarga exitosa <br>";
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
                echo "Pago no realizado con exito<br\>";
                $_SESSION['codigoPago'] = $codigoPago;
                $_SESSION['mensaje'] = $message;
                $_SESSION['codigoRecarga'] = 'NA';

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