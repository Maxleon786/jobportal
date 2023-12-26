<?php
    if(isset($_SESSION['admin_email'])){

    }
    else{
    header("location:login.php");
    }
?>