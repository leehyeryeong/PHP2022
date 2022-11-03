<?php
$idx = $_GET['a'];
echo "a: ".$idx;
include('./db_conn.php');
$query = "select * from member_join where id=$idx;";
$result = mysqli_query($conn,$query);
$re = mysqli_fetch_row($result);
//echo $re[0]."|".$re[1]."|".$re[2];
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>join.html</title>
  </head>
  <body>
    <h1>수정</h1>
    <hr/>
    <form method="post" action="update.php">
        <div class="form-floating mb-3 col-sm-3">
            <label for="exampleFormControlInput1" class="form-label">아이디</label>
            <input type="id" class="form-control" id="id" name="uid" value="<?php echo $re[1]?>" placeholder="">
        </div>
        <div class="form-floating mb-3 col-sm-3">
            <label for="exampleFormControlInput1" class="form-label">비밀번호</label>
            <input type="password" class="form-control" id="password" name="upassword" value="<?php echo $re[2]?>" placeholder="">
        </div>
        <div class="form-floating mb-3 col-sm-3">
            <label for="exampleFormControlInput1" class="form-label">이름</label>
            <input type="name" class="form-control" id="name" name= "uname" value="<?php echo $re[3]?>"placeholder="">
        </div>
        <div class="form-floating mb-3 col-sm-3">
            <label for="exampleFormControlInput1" class="form-label">전화번호</label>
            <input type="pnum" class="form-control" id="tel" name= "utel" value="<?php echo $re[4]?>" placeholder="">
        </div>
        <div class="form-floating mb-3 col-sm-3">
            <label for="exampleFormControlTextarea1" class="form-label">이메일</label>
            <input type="email" class="form-control" id="email" name= "uemail" value="<?php echo $re[5]?>" placeholder="">
        </div>
        <div class="form-floating mb-3 col-sm-3">
            <!-- <label for="exampleFormControlTextarea1" class="form-label"></label> -->
            <select name="sel" class="form-select" aria-label="Default select example">
                <option selected>거주지</option>
                <option value="seoul">서울</option>
                <option value="incheon">인천</option>
                <option value="kyunggi">경기</option>
                <option value="busan">부산</option>
                <option value="daegu">대구</option>
                <option value="jeju">제주</option>
            </select>
        </div>
        <input type="hidden" name="a" value="<?php echo $re[0]?>">
        <button type="submit" class="btn btn-light">수정완료</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>