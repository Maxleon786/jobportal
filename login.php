<?php include('head.php') ?>
<?php ob_start(); ?>
<!------ Include the above in your HEAD tag ---------->

<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <!-- <img src="https://www.b-cube.in/wp-content/uploads/2014/05/aditya-300x177.jpg" id="icon" alt="User Icon" /> -->
      <h4>Login</h4>
    </div>

    <!-- Login Form -->
    <form action="" method="POST">
      <input type="text" id="login" class="fadeIn second" name="email" placeholder="username">
      <input type="text" id="password" class="fadeIn third" name="password" placeholder="password">
      <input type="submit" class="fadeIn fourth" value="Log In" name="sign">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="singup.php">create a Account</a>
    </div>

  </div>
</div>
<?php 
    if(isset($_POST["sign"])){
        $email=$_POST['email'];
        $password=$_POST['password'];
        $query="select * from jobseeker where email='$email' and password='$password'";
        $result=mysqli_query($connection,$query);
        $raw=mysqli_num_rows($result);
        echo $raw;
        if($raw>0){
            $_SESSION['email']=$email;
            $_SESSION['password']=$password;
            header("location:index.php");
            echo  $_SESSION['password'];
        }
        else{
           header("location:login.php");
        }
      }
?>
<?php include('foot.php') ?>
