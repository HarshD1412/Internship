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