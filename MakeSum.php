<?php
$oklad = $_POST["Oklad"];
$days = $_POST["Days_count"];
$proof = $_POST["isProf"];
$res = $_REQUEST["res"];

//$isprof = $_POST['isProf'];
$sum=0;
if ($oklad){
    if($oklad<=1000){
      $sum = $oklad;
    }else if($oklad<1000 && $oklad>5000){
        $persent = $oklad/100*10;
        $sum = $oklad-$persent;
    }else{
        $persent=$oklad/100*20;
        $sum=$oklad-$persent;
    }
}

echo  '<p>Ваш параметр дорівнює: </p>';
echo $sum;
?>