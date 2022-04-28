<?php
//1부터 100까지의 정수 중에서 4의 배수만 출력하되, 한 줄에 8개씩만 출력
$count = 0;

for($i=1; $i<=100; $i++) {
    if($i%4==0) {
        echo $i." ";
        $count++;
    } //end of if
    if($count%8==0) {
        echo "<br/>";
    } //end of if
} //end of for

?>
