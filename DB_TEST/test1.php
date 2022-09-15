<?php
//1. mysql 접속
include('./db_conn.php');

$conn = mysqli_connect($host, $id, $pw, $db);
if($conn) {
    echo "connected!!!";
} else {
    echo "failed!!!";
}

//2. 원하는 작업하기(쿼리 날리기)
//$query = "insert into book values(6, '인문학', '조래정', 'a@gmail.com', '오계절')";
$query = "update book set title='aaa' where id=5";
mysqli_query($conn, $query);
echo "수정되었습니다.";

//3. mysql 종료
mysqli_close($conn);
?>