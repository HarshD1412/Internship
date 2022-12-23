<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
  <div class="text-center w-50 h-100 mx-auto">
<form class="w-75" action="<?=$_SERVER['PHP_SELF'];?>" method="post">



  
       <div class="mb-3">
        
          <label for="username" class="form-label"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" class="form-control" id="username" name="username" required><br><br>

          <label for="password" class="form-label"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" class="form-control" id="password" name="password" required><br><br>
      
          <button type="submit" name="register" class="btn btn-primary">register</button>
         
        </div>
</form>
</div>
</body>
</html>
<?php

if(isset($_POST['register'])){
  $conn = mysqli_connect("localhost","root","","harsh","3308");
if(!$conn){
    echo "cant connect database".mysqli_connect_error($conn);
    exit;
}

$username = $_POST['username'];
$password = $_POST['password'];



$query="SELECT username,password FROM users WHERE username='$username'";
$result=mysqli_query($conn,$query);
$row = mysqli_fetch_assoc($result);

if($username!=$row['username']){
  $query = "INSERT INTO users(username,password) VALUES ('$username','$password');";
$result = mysqli_query($conn,$query);
    echo "<script>alert('sucessfully register please login');

    window.location.href = 'http://localhost/Internship/login.php';
    </script>";
}
else if($username==$row['username']){

    echo "<script>alert('already a  user please login');
    window.location.href = 'http://localhost/Internship/login.php';
    </script>";
}
}

?>
