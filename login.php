<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
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
      
          <button type="submit" name="submit" class="btn btn-primary">login</button>
         
        </div>
</form>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
</body>
</html>
<?php
if(isset($_POST['submit'])){
  $conn = mysqli_connect("localhost","root","","harsh","3308");
if(!$conn){
    echo "cant connect database".mysqli_connect_error($conn);
    exit;
}
$username = $_POST['username'];
$password = $_POST['password'];

if($username=="" or $password==""){
    echo "<script>alert('fields cant be empty');
    window.location.href = 'http://localhost/Internship/index.php';
    </script>";
}

$query="SELECT username,password FROM users WHERE username='$username'";
$result=mysqli_query($conn,$query);
$row = mysqli_fetch_assoc($result);

if(!$row){
    echo "<script>alert('empty');
    window.location.href = 'http://localhost/Internship/index.php';
    </script>";
}

else if($username!=$row['username'] or $password!=$row['password']){
    echo "<script>alert('mismatch');
    window.location.href = 'http://localhost/Internship/index.php';
    </script>";
}
else if($username==$row['username'] and $password==$row['password']){
    $_SESSION['user'] = $username;
    echo "<script>alert('succesful');
    window.location.href = 'http://localhost/Internship/index.php';
    </script>";
}
}
?>
