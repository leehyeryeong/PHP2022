<!-- 1. strlen(문자열): 글자 길이 -->
<?php
$str = "PHP is a popular language";
echo "글자 길이: ".strlen($str);
?>
<br />

<!-- 2. strpos(전체 문자열, 찾을 문자열): 글자 위치 -->
<?php
$str = "abcdefghijklmn";
$findme = "e";
echo "findme의 위치: ".strpos($str, $findme);
?>
<br />

<!-- 3. strcmp(문자열, 문자열): 글자 비교(같으면 0, 다르면 1) -->
<?php
$str1 = "Hello PHP";
$str2 = "Hello php";
if(strcmp($str1, $str2)==0) {
    echo $str1."과 ".$str2."는 같습니다.";
} else {
    echo $str1."과 ".$str2."는 다릅니다.";
}
?>
<br />

<!-- 4. substr(전체 문자열, 시작 위치, [추출 길이]): 글자 추출 -->
<?php
$str = "hello php welcome";
//시작 위치 5에서 5개 추출하기:-php-
$sub = substr($str, 5, 5);
echo "추출한 문자는 ".$sub."입니다.";
?>
<br />
