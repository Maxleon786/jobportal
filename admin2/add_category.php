<?php include('header.php');?>
<?php include('sessionex.php');?>
<?php include('sidebar.php');?>
<div class="container-fluid">
<main role="main" class="col-md-9 ml-sm-auto col-lg-12 pt-3 px-4">
        <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="admin_dashboard.php">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="company.php">category</a></li>
    <li class="breadcrumb-item"><a href="add_company.php">Add category</a></li>
</ol>
</nav>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
          <h1 class="h2">Add Category</h1>
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
                    <label>Category Name:</label>
                    <input type="text" class="form-control" name="category"required>
                    
                    <label>Description</label>
      <textarea id="my-textarea" class="form-control" name="description" rows="10"></textarea>
                </div>
            </div>
            <!-- <input type="submit" value="submit" class="btn btn-success" name="sbtn"> -->
          <button type="submit" class="btn btn-block btn-primary mt-1" name="add">Add</button>

          </form>
        </div>
        
        </div>
    </div>
    <!-- admin details add -->
    <?php 
        if(isset($_POST["add"])){
            $category=$_POST["category"];
            $description=$_POST["description"];
            $query="insert into job_category(`category`,`des`) values('$category','$description')";
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
<?php include('footer.php');?>
