<?php
$sn_cnt = $_POST['sn_cnt'];
$sn_price = 2000;
$result = 0;

if($sn_cnt>10) {
    $sn_price = 1500;
}

$result = $sn_price*$sn_cnt;

echo "과자 ".$sn_cnt."개를 ".$result."원에 샀습니다.";
?>
