<?php
//setcookie(쿠키 변수, 변수에 들어갈 값, 시간)
setcookie("myCookie", "kim", time()+3600);
echo $_['myCookie'];
?>

<?php
session_start();
$_SESSION['city'] = 'seaoul';
$_SESSION['id'] = 'userid';
?>