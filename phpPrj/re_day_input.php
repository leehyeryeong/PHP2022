<?php
$day = $_POST['day'];
switch($day%7) {
    case 1: echo $day."일은 월요일입니다."; break;
    case 2: echo $day."일은 화요일입니다."; break;
    case 3: echo $day."일은 수요일입니다."; break;
    case 4: echo $day."일은 목요일입니다."; break;
    case 5: echo $day."일은 금요일입니다."; break;
    case 6: echo $day."일은 토요일입니다."; break;
    case 7: echo $day."일은 일요일입니다."; break;
}
?>
