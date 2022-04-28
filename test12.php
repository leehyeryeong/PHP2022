<?php
//1부터 30까지 짝수와 홀수의 합을 각각 구하세요.
$evensum = 0;
$oddsum = 0;

for($i=1; $i<=30; $i++) {
    if($i%2==0) {
        $evensum += $i;
    } else {
        $oddsum += $i;
    } //end of if
} //end of for

echo "1부터 30까지 짝수의 합은 ".$evensum."입니다.<br/>";
echo "1부터 30까지 홀수의 합은 ".$oddsum."입니다.<br/>";

?>
