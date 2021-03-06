<?php
function smstext($text,$phone){
    $curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://portal-otp.smsmkt.com/api/send-message',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_HTTPHEADER => array(
            "Content-Type: application/json",
            "api_key:".env('SMSMKT_API_KEY'),
            "secret_key:".env('SMSMKT_API_SECRET'),
        ),
        CURLOPT_POSTFIELDS =>json_encode(array(
        "message"=>$text,
        "phone"=>$phone,
        "sender"=>"CARPARTSNV",
        )),
    ));
    $response = curl_exec($curl);
    curl_close($curl);
    // echo $response;
    $response = json_decode($response,true);
    return $response;
}