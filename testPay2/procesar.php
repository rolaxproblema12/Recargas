<?php
    $data = array('merchant_id' => 'value1', 'password' => 'value2');
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://api.example.com');
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);
?>