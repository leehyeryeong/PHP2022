<?php
//쿠키 삭제
setcookie("userid", '', time()-1);
setcookie("userpass", '', time()-1);
?>
<meta http-equiv="refresh" content="0; url=login.php">