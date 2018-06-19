<?php

/* our simple php ping function */
function ping($host)
{
    exec(sprintf('ping -c 5 -W 5 %s |tail -1|awk \'{print$4}\'|cut -d\'/\' -f 2', escapeshellarg($host)), $res, $rval);
//    print_r($res);
    return $res[0]; 
//     return $rval === 0;
}
/* fopen file */
$filename = "host";
/*check file  */
if(file_exists($filename)){
    $file = fopen($filename, "r");
    if($file != NULL){
        while (!feof($file)) {
    /* check if the host is up
          $host can also be an ip address */
//            $host = '8.8.8.8';
            $host = fgets($file);
//            if (feof($file)){
            if (false === $host){
                break;// continue is bad.
            }
//            echo $host;
//            $time = ping($host);
            $arry[0] = gethostbyname($_SERVER['HOSTNAME']);
            $arry[1] = gethostbyname($host); 
            $arry[2] = ping($host);
            print_r($arry);
        }
        fclose($file);
    }
}


?>
