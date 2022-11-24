<?php
    $f_name = $_FILES['userfile']['name'];
    $f_type = $_FILES['userfile']['type'];
    $f_size = $_FILES['userfile']['size'];
    $f_tmpname = $_FILES['userfile']['tmpname'];

    echo "파일 이름: ".$f_name;
    echo "파일 타입: ".$f_type;
    echo "파일 사이즈: ".$f_size;
    echo "빈 파일 이름: ".$f_tmpname;
?>