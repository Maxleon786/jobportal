
<?php include('head.php') ?>

<!------ Include the above in your HEAD tag ---------->

<div class="wrapper fadeInDown mt-5">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <!-- <img src="https://www.b-cube.in/wp-content/uploads/2014/05/aditya-300x177.jpg" id="icon" alt="User Icon" /> -->
      <h1>Signup</h1>
    </div>

    <!-- Login Form -->
    <form action="" method="POST">
      <input type="text" id="login" class="fadeIn second" name="email" placeholder="email">
      <input type="text" id="password" class="fadeIn third" name="password" placeholder="password">
      <input type="text" id="text" class="fadeIn third" name="first_name" placeholder="first Name">
      <input type="text" id="text" class="fadeIn third" name="last_name" placeholder="Last Name">
      <input type="date" id="dob" name="dob" class="form-control" placeholder="Enter Your Date Of Birth..." required autofocus>
      <input type="Number" id="mobile_number" name="mobile_number" class="form-control" placeholder="Enter Your Mobile Number..." required autofocus>
      <input type="submit" class="fadeIn fourth" value="Singup" name="submit">
    </form>
    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="login.php">have a Account</a>
    </div>

  </div>
</div>
<?php include('foot.php') ?>
<?php 
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $dob = $_POST['dob'];
    $mobile_number = $_POST['mobile_number'];
    $query="INSERT INTO jobseeker VALUES (id,'$email', '$password', '$first_name', '$last_name', '$dob', '$mobile_number')";
    $result= mysqli_query($connection,$query );
    if ($query) {
       // echo "<script>alert('Now You Can Login!');</script>";
       
    } else {
        //echo "<script>alert('Some Error Please Try Again!');</script>";
    }
}
?>
<!-- signup.php end -->