<?php include('header.php');?>
<?php include('sessionex.php');?>
<?php include('sidebar.php');?>
<main class="content px-3 py-2">
                <div class="container-fluid">
<main role="main" class="col-md-9 ml-sm-auto col-lg-12 pt-3 px-4">
        <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="admin_dashboard.php">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="employers.php">Employers</a></li>
    <li class="breadcrumb-item"><a href="add_employer.php">Add Employer</a></li>
</ol>
</nav>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
          <h1 class="h2">Add Employer</h1>
          <!-- messages display -->
          <?php if(isset($_SESSION['error'])){?>
          <div class="alert alert-success" role="alert">
            <?php   
                $message=$_SESSION['error'];
                echo $message;
                unset($_SESSION['error']);
            ?>
</div>
<?php }?>
          </div>
          <!-- end -->
          <div class="wrapper1 rounded bg-white">
        <div class="h3">Add Details</div>
        <div class="form">
            <div class="row">
                <div class="col-md-6 mt-md-0 mt-3">
                    <form action="" method="POST">
                    <label>First Name</label>
                    <input type="text" class="form-control" name="fname"required>
                </div>
                <div class="col-md-6 mt-md-0 mt-3">
                    <label>Last Name</label>
                    <input type="text" class="form-control" name="lname"required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mt-md-0 mt-3">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password" required>
                </div>
                <div class="col-md-6 mt-md-0 mt-3">
                    <label>Gender</label>
                    <div class="d-flex align-items-center mt-2">
                        <label class="option">
                            <input type="radio" name="radio">Male
                            <span class="checkmark"></span>
                        </label>
                        <label class="option ms-4">
                            <input type="radio" name="radio">Female
                            <span class="checkmark"></span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mt-md-0 mt-3">
                    <label>Email</label>
                    <input type="email" class="form-control" name="ctemail" required>
                </div>
                <div class="col-md-6 mt-md-0 mt-3">
                    <label>Phone Number</label>
                    <input type="number" class="form-control" name="pnumber" required>
                </div>
            </div>
            <div class=" my-md-2 my-3">
                <label>Admin Type</label>
                <select id="sub" required name="admin_type">
                    <option value="" selected hidden>Choose Option</option>
                    <option value="1">Admin</option>
                    <option value="2">Co-Admin</option>
                </select>
            </div>
            <!-- <input type="submit" value="submit" class="btn btn-success" name="sbtn"> -->
          <button type="submit" class="btn btn-block btn-default" name="add">Submit</button>

          </form>
        </div>
        </div>
        </div>
          </main>
          <?php include('footer.php');?>
    <!-- admin details add -->
    <?php 
        if(isset($_POST["add"])){
            $email=$_POST["ctemail"];
            $password=$_POST["password"];
            $fname=$_POST["fname"];
            if(isset($_POST['radio'])){
                $gender=$_POST["radio"];
            }
            else{
                $gender="";
            }
            $pnumber=$_POST["pnumber"];
            $lname=$_POST["lname"];
            $admin_type=$_POST["admin_type"];
            $query="insert into admin_login values(id,'$email','$pnumber','$gender','$password','$fname','$lname','$admin_type')";
            $result=mysqli_query($connection,$query);
            if($result){
                $msg="data submited SuccessFully!";
                $_SESSION['error']=$msg;
            }
            else 
            {
                $msg="data submited SuccessFully!";
                $_SESSION['error']=$msg;
            }
        }
    ?>
    <!-- end -->

