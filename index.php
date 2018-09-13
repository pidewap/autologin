<?php
$ch = curl_init();
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_URL,"http://peed.wapka.mobi/login_site.xhtml?do_id=0&wu_login=lagu&wu_heslo=pidewap321&wu_autologin=1&log_submit=Log+in&hash=6780ed6b82719c825f4668c0d18739");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_COOKIEJAR, 'cookie-name.txt');  
curl_setopt($ch, CURLOPT_COOKIEFILE, 'cookie-name.txt');
$hasil=curl_exec($ch);
curl_close ($ch);
echo $hasil;
?>
