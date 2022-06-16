<?php
$name = $_POST['uname'];
$Kr_score = $_POST['Kr_score'];
$Eg_score = $_POST['Eg_score'];
$Mt_score = $_POST['Mt_score'];
$result = $Kr_score+$Eg_score+$Mt_score;
$avg = $result/3;

echo "이름: ".$name."<br/>";
echo "국어: ".$Kr_score."<br/>";
echo "영어: ".$Eg_score."<br/>";
echo "수학: ".$Mt_score."<br/>";
echo "총점: ".$result."<br/>";
echo "평균: ".$avg."<br/>";
?>
