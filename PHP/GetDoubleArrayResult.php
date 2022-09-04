<?php

$row = $_POST['Row'];
$column = $_POST['Column'];

$arr = getMatrix($row, $column);
console_log($arr);

echo '<pre>';
print_r($arr);
echo '</pre>';

function getMatrix($row, $column){
    $arr = [];
    for ($i=0; $i<$row; $i++){
        $arrrtesst = [];
        for ($j=0; $j<$column; $j++){
            $arrrtesst[$j] = $j*$j+$i*$i;
        }
        $arr[$i] = $arrrtesst;
    }

    return $arr;
}

function console_log( $data ){
    echo '<script>';
    echo 'console.log('. json_encode( $data ) .')';
    echo '</script>';
}