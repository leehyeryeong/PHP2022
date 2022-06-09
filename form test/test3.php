<?php
$u_id = $_POST['id'];
echo "아이디는 ".$u_id."입니다.<br/>";
$pw = $_POST['pass'];
echo "비밀번호는 ".$pw."입니다.<br/>";
$u_name = $_POST['name'];
echo "이름은 ".$u_name."입니다.<br/>";
$email = $_POST['e-mail'];
echo "이메일은 ".$email."입니다.<br/>";
$tel = $_POST['telname'];
echo "전화번호는 ".$tel."입니다.<br/>";
for($i=0; $i<count($_POST['sports']); $i++) {
    $a = $_POST['sports'][$i];
    echo "선택하신 취미는 ".$a."<br/>";
}
$gender = $_POST['gender'];
echo "성별은 ".$gender."입니다.";
?>
