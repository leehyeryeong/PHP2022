<?php
//로그인이 안 되었을 경우
if(!isset($_COOKIE['userid'])||!isset($_COOKIE['userpass'])) {
    echo "<meta http-equiv='refresh' content='0;url=login.php'>";
}

//로그인 이 되었을 경우
//...님 반갑습니다.
$_userid = $_COOKIE['userid'];
$_password = $_COOKIE['userpass'];

echo "<p>".$_userid."님 반갑습니다</p>";

?>
<a href="logout.php">로그아웃</a>