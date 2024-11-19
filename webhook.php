<?php

function triggerGoogleChatNotification($text)
{    
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://chat.googleapis.com/v1/spaces/AAAARoy5d1g/messages?key=AIzaSyDdI0hCZtE6vySjMm-WEfRq3CPzqKqqsHI&token=akQwIhkyeHmDQH4h5ARCl3NKVtvfm7WaeMj1j7IU8WI', // replace WEBHOOK_LINK with your webhook url
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


triggerGoogleChatNotification("Joesoe");

?>
