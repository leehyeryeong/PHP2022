<!-- 1. strlen(문자열): 글자 길이 -->
<?php
$str = "PHP is a popular language";
echo "글자 길이: ".strlen($str);
echo "<br />";
?>

<!-- 2. strpos(전체 문자열, 찾을 문자열): 글자 위치 -->
<?php
$str = "abcdefghijklmn";
$findme = "e";
echo "findme의 위치: ".strpos($str, $findme);
echo "<br />";
?>

<!-- 3. strcmp(문자열, 문자열): 글자 비교(같으면 0, 다르면 1) -->
<?php
$str1 = "Hello PHP";
$str2 = "Hello php";
if(strcmp($str1, $str2)==0) {
    echo $str1."과 ".$str2."는 같습니다.";
} else {
    echo $str1."과 ".$str2."는 다릅니다.";
}
echo "<br />";
?>

<!-- 4. substr(전체 문자열, 시작 위치, [추출 길이]): 글자 추출 -->
<?php
$str = "hello php welcome";
//시작 위치 5에서 5개 추출하기: -php-
$sub = substr($str, 5, 5);
echo "추출한 문자는 ".$sub."입니다.";
echo "<br />";
?>

<!-- 5. strtolower(문자열): 소문자로 바꿔줌 -->
<?php
$str = "Marry Had A Little Lamb and She LOVED It SO";
//소문자로 출력
echo strtolower($str);
echo "<br />";
?>

<!-- 6. strtoupper(문자열): 대문자로 바꿔줌 -->
<?php
$str = "Marry Had A Little Lamb and She LOVED It SO";
//대문자로 출력
echo strtoupper($str);
echo "<br />";
?>

<!-- 7. explode(구분자, 문자열): 문자열을 배열로 만들어 주는 것 -->
<?php
$str = "pizza1 pizza2 pizza3 pizza4 pizza5";
//explode 함수 써서 배열의 값을 출력
$arr = explode(" ", $str);
foreach($arr as $element) {
    echo $element." ";
} //end of foreach
echo "<br />";
?>
<?php
$str = "one|two|three|four|five";
//explode 함수 써서 배열의 값을 출력
$arr = explode("|", $str);
foreach($arr as $element) {
    echo $element." ";
} //end of foreach
echo "<br />";
?>

<!-- 8. implode(구분자, 배열): 배열을 문자열로 만들어 주는 것 -->
<?php
$array = array("lastname", "email", "phone");
//implode 함수를 써서 문자열로 출력
$str = implode(", ", $array);
echo "implode 실행 결과: ".$str;
echo "<br />";
?>

<!-- 9. str_replace(원본 문자열, 변경 완료될 문자열, 대상 문자열): 문자열 치환 -->
<?php
$txt = "you should study php";
$result = str_replace("should", "could", $txt);
echo "변경 전 문자열: ".$txt."<br />";
echo "변경 후 문자열: ".$result."<br />";
?>
