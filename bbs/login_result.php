<?php
//접속
include('./db_conn.php');

//uid, upass의 값을 가져오기
$_userid = $_POST['uid'];
$_userpass = $_POST['upass'];

$query="select * from member_join where uid='$useid' && upassword='$upassword'";
$result=mysqli_query($conn, $query);
$count=mysqli_num_rows($result);
if($count==0) {
    echo "<script>alert('비밀번호, 아이디 입력 오류');history.go(-1);</script>";
} else {
    setcookie('userid', $userid, time()+3600);
    echo "1";
    setcookie('userpass', $userpass, time()+3600);
    echo "2";
    echo "<meta http-equiv='refresh' content='0;url=write.html'>";
}

if($_userid!=$a||$_userpass!=$b) {
    echo "아이디 비밀번호가 잘못되었습니다.";
} else {
    setcookie("userid", $_userid, time()+3600);
    setcookie("userpass", $_userpass, time()+3600);
}

?>