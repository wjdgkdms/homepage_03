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
