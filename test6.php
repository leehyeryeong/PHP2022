<?php
//test5.php를 switch-case로 작성
$score = 87;

switch($score-($score/10)) {
    case 100: echo "A"; break;
    case 90: echo "B"; break;
    case 80: echo "C"; break;
    case 70: echo "D"; break;
    default: echo "F"; break;
} //end of switch

?>
