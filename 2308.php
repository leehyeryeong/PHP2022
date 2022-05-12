<?php
//1. 리턴 타입 x 매개 변수 x
//함수 생성
function add() {
    echo (10+20+30)."<br />";
}
//함수 호출
add();

//2. 리턴 타입 x 매개 변수 o
//함수 생성
function add2($x, $y, $z) {
    echo $x+$y+$z."<br />";
}
//함수 호출
add(10, 20, 30);

//3. 리턴 타입 o 매개 변수 x
//함수 생성
function add3() {
    return (10+20+30);
}
//함수 호출
$result = add();
echo $result;

//4. 리턴 타입 o 매개 변수 o
//함수 생성
function add4($x, $y, $z) {
    return $x+$y+$z;
}
//함수 호출
echo (add(10, 20, 30));

?>
