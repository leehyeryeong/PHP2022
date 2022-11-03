<?php
$_idx = $_POST['a'];
$_uid = $_POST['uid'];
$_upassword = $_POST['upassword'];
$_uname = $_POST['uname'];
$_utel = $_POST['utel'];
$_uemail = $_POST['uemail'];
$_ucity = $_POST['sel'];

//디비접속
include('./db_conn.php');
$query = "select * from member_join where id=$_idx";
$result=mysqli_query($conn, $query);
$re=mysqli_fetch_row($result);
echo "password: ".$re[2]."<br/>";
echo "사용자 입력 password: ".$_upassword;

if($re[2]==$_upassword){
    $query = "update member_join set uid='$_uid', uname='$_uname', utel='$_utel', uemail='$_uemail', ucity='$_ucity' where id=$_idx";
    mysqli_query($conn, $query);
    echo "<script>alert('데이터가 추가되었습니다');</script>";
}else{
    echo "<script>alert('비밀번호 오류');history.go((-1);</script>";
}
mysqli_close($conn);
?>
<meta http-equiv="refresh" content="0; url=http://localhost/member">