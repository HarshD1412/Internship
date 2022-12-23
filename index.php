<html>
    <head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</head>
<body>
<?php
session_start();
if(isset($_SESSION['user'])){
?>
<form method="get" action="<?=$_SERVER['PHP_SELF'];?>">
<label for="name"><b>name</b></label>
            <input type="text" placeholder="name" class="name" id="names" name="name" required><br><br>
            <button type="button" id="showdata" class="btn btn-primary" data-bs-target="#exampleModal" data-bs-toggle="modal">open</button>
</form>

<h1>this is logged in page</h1>
<button type="button" class="btn btn-primary" data-bs-target="#exampleModal" data-bs-toggle="modal">
	logout</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <script>
    jQuery(document).ready(function(){
        jQuery("#showdata").on('click',function(){
            var inputtagvalue = jQuery('#names').val();
            console.log(inputtagvalue);
            jQuery('.modal-body').html(inputtagvalue);
        });
        });
        </script>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="window.location.replace('login.php')" >Close</button>
        <button type="button" class="btn btn-primary" onclick="window.location.replace('login.php')" >logout</button>
      </div>
    </div>
  </div>
</div>
<?php
} else {
    ?>
<h1>This is not the login page</h1>
<?php
}
?>
</body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

 
</html>
