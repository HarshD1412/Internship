<?php

$conn = mysqli_connect("localhost","root","","harsh","3308");
if(!$conn){
    echo "cant connect database".mysqli_connect_error($conn);
    exit;
}

$username = $_POST['username'];
$password = $_POST['password'];

$query = "INSERT INTO users(username,password) VALUES ('$username','$password');";
$result = mysqli_query($conn,$query);

if(!$result){
    echo"Query issue.".mysqli_error($conn);
}

else {
     echo "<script>alert('Successfully registered!');
     window.location.href = 'http://localhost/Internship/index.php';
     </script>";
     
}

?>