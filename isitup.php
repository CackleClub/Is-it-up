<?php
$url = $_GET['i'];

$options = null;
if($url == null){
    echo " ";
}
else{
$checkCount = 0;
    $fp = @fSockOpen($url,80,$errno,$errstr,1);
       if(is_resource($fp)){
        if($fp) { 
            $status=0; 
            fclose($fp); 
            echo filter_var ( $url, FILTER_SANITIZE_STRING).' Is Up!'; 
        }
    }
    else{
        echo filter_var ( $url, FILTER_SANITIZE_STRING).' Is Down!'; 

    }
}
?>