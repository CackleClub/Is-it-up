<?php
$url = $_GET['i'];


if($url == null){
    echo " ";
}
else{
    $fp = @fSockOpen($url,80,$errno,$errstr,1);
       if(is_resource($fp)){
            fclose($fp); 
            echo filter_var ( $url, FILTER_SANITIZE_STRING).' Is Up!'; 
        }
    
    else{
        echo filter_var ( $url, FILTER_SANITIZE_STRING).' Is Down!'; 

    }
}
?>