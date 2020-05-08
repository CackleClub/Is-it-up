<?php
$url = $_GET['i'];
$url_sanitized = filter_var ( $url, FILTER_SANITIZE_URL);

if($url == null){
    echo " ";
}
else{
    $ch = curl_init($url_sanitized);

curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

curl_exec($ch);
if(curl_error($ch)) {
    echo 'this site is down D:';
}else{
    echo 'it is up!!!';
}
//curl_close($ch);
}
?>