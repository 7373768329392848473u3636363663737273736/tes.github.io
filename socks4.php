<?php

/*
* U KNOW LAH HEHEHE :V 
* by Angga Kurniawan (g4rzk)
*/

    $url = "https://api.proxyscrape.com/?request=displayproxies&proxytype=socks4&country=all";
    $ch = curl_init(); 
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($ch);
    curl_close($ch);
    $replace = preg_replace("/\s+/", "<br>", $output);
    echo $replace;

?>
