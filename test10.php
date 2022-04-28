<?php
//100~999 사이에 7의 배수의 개수와 합을 구하세요.
$count = 0;
$sum = 0;

for($i=100; $i<=999; $i++) {
    if($i%7==0) {
        $count++;
        $sum += $i;
    } //end of if
} //end of for

echo "100~999 사이에 7의 배수는 ".$count."개 있습니다.<br/>";
echo "100~999 사이에 7의 배수의 합은 ".$sum."입니다.<br/>";

?>
