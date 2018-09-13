<?php
$username = "pidewap@gmail.com";
$password = "pidewap321";
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL,"http://exnaid.com/login.html");
curl_setopt($curl, CURLOPT_POST, 1);
curl_setopt($curl, CURLOPT_POSTFIELDS, "email=" .$username. "&password=" .$password. "&naelogin=Masuk");
curl_exec ($curl);
curl_close ($curl);
?>
