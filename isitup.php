<?php
$url = $_GET['i'];
$url_sanitized = filter_var ( $url, FILTER_SANITIZE_STRING);

if($url == null){
    echo " ";
}
else{
    $fp = @fSockOpen($url_sanitized,80,$errno,$errstr,1);
    $fpssl = @fSockOpen($url,443,$errno,$errstr,1);
       if(is_resource($fp)){
            fclose($fp); 
            echo $url_sanitized.' Is Up!'; 
        }
        elseif(is_resource($fpssl)) {
            fclose($fp); 
            echo $url_sanitized.' Is Up!';
        }
        else{
        echo $url_sanitized.' Is Down!'; 
        }
}
?>