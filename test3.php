<?php
//1부터 10까지 짝수의 합
$sum = 0;

for($i=1; $i<=10; $i++) {
    if($i%2==0) {
        $sum += $i;
    } //end of if
} //end of for

echo "1부터 10까지 짝수의 합은 ".$sum."입니다.";

?>
