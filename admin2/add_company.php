<?php 
ob_start();
?>
<?php include('header.php');?>
<?php include('sessionex.php');?>
<?php include('sidebar.php');?>
<div class="container-fluid">
<main role="main" class="col-md-9 ml-sm-auto col-lg-12 pt-3 px-4">
        <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="admin_dashboard.php">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="company.php">Company</a></li>
    <li class="breadcrumb-item"><a href="add_company.php">Add Company</a></li>
</ol>
</nav>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
          <h1 class="h2">Add Company</h1>
          <!-- messages display -->
         
<?php if(isset($_SESSION['error'])){
 
   ?>
   <div class="alert alert-warning alert-dismissible fade show" role="alert" style="">
  <strong> <?php echo $_SESSION['error'];?></strong> 
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
   <?php unset($_SESSION['error']);
}?>
<script>
    setTimeout(() => {
       let alert=document.querySelector(".alert");
       alert.remove();
    },10000);
</script>
          </div>
          <!-- end -->
          <div class="wrapper1 rounded bg-white">
        <div class="h3">Add Details</div>
        <div class="form">
            <div class="row">
                <div class="col-md-6 mt-md-0 mt-3">
                    <form action="" method="POST">
                    <label>Company Name:</label>
                    <input type="text" class="form-control" name="companyname"required>
                    <label>Owner Email:</label>
                    <input type="text" class="form-control" name="email"required>
                    <label>Description</label>
      <textarea id="my-textarea" class="form-control" name="description" rows="10"></textarea>
                </div>
            </div>
            <!-- <input type="submit" value="submit" class="btn btn-success" name="sbtn"> -->
          <button type="submit" class="btn btn-block btn-primary mt-1" name="add">Add</button>
          </div>
          </form>
        </div>
    </div>
    <!-- admin details add -->
    <?php 
        if(isset($_POST["add"])){
            $company=$_POST["companyname"];
            $description=$_POST["description"];
            $email=$_POST["email"];
            $query="insert into company values(cid,'$company','$description','$email')";
            $result=mysqli_query($connection,$query);
            if($result){
                $msg="data submited SuccessFully!";
                $_SESSION['error']=$msg;
                header("location:add_company.php");
            }
            else 
            {
                $msg="data submited SuccessFully!";
                $_SESSION['error']=$msg;
                header("location:add_company.php");
            }
        }
    ?>
    <!-- end -->
<?php include('footer.php');?>
