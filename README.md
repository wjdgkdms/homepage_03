# homepage_03
//회원가입창
<!DOCTYPE html>
<html lang="ko">
     <head>
        <meta charset="UTF-8">
        <title>s21319_table</title>
   <link rel = "stylesheet" href ="./LOG/style.css">
</head>
<body>
<h1><a href="join.php">Join</a></h1> <h3 align="right"><a href="index.php">home</a></h3>
<hr>
<form method="post" action="databaselog.php">
    <div>
            <div class="int-area">
                <input type="text" name="id" id="id"
                autocomplete="off" required>
                <label for="id"> ID </label>
            </div>
            <div class="int-area">
                <input type="password" name="pw" id="pw"
                autocomplete="off" required>
                <label for="pw"> PASSWORD </label>
            </div>
            <div class = "btn-area">
                <input type="submit" value="회원가입">
            </div>
    </div>
    </form>
</body>
</html>
//회원가입한 회원들의 데이터베이스
<!DOCTYPE html>
<html>
  <head></head>
  <body>
  <?php
    $id = $_POST[ 'id' ];
    $pw = $_POST[ 'pw' ];

   
    $conn=mysqli_connect('localhost','root','050407','silver','3307');
    $query ="INSERT INTO log VALUES( '".$id."','".$pw."')";
    mysqli_query($conn,$query);
    $sql = "select * from log where id='$id' and pw='$pw'";


    
      echo"<script> alert('회원가입이 완료되었습니다.'); location.href='./login.php'; </script>";
    ?>

</body>
</html>
