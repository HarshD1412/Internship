<?php
session_start();
if (isset($_SESSION['user'])) {
?> 
        <h1>hello</h1>
        <button onclick="window.location.href='logout.php'" type="button">logout</button>
    <?php
}else{
    ?>
    <h1>bye</h1>
    <?php
}
    ?>