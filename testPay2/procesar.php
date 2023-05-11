<?php
    $data = array(  'merchant_id' => $_POST['merchant_id'], 
                    'password' => $_POST['password'] , 
                    'trans_id' => $_POST['trans_id'], 
                    'int_trans_id' => $_POST['int_trans_id'],
                    'website_id' => $_POST['website_id']
                );
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://api.peak-pay.com/get-purchase-status');
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
            // Utilizar el valor de la propiedad
        }
    }
?>