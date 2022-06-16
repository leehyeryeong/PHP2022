<?php
    $num = $_POST['multi_num'];
    $result = 0;
    for($i = 1; $i <= 9; $i++) {
        $result = $num * $i;
        echo $num."*".$i."=".$result."<br/>";
    }
?>
