<?php

function triggerGoogleChatNotification($text)
{    
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => 'WEBHOOK_LINK', // replace WEBHOOK_LINK with your webhook url
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => '{"text" : "' . $text . '"}',
        CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json'
        ),
    ));
    
    curl_exec($curl);
    curl_close($curl);
}


triggerGoogleChatNotification("Hi");

?>