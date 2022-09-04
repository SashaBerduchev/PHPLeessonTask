<?php
$long = $_POST['ArraLong'];

$arr =  getArray($long);

console_log($arr);

echo '<pre>';
print_r($arr);
echo '</pre>';


function getArray($long){
    $arr = [];
    for ($i=0; $i<$long; $i++){
        $arr[$i] = $i*$i;
    }
    return $arr;
}

function console_log( $data ){
    echo '<script>';
    echo 'console.log('. json_encode( $data ) .')';
    echo '</script>';
}
