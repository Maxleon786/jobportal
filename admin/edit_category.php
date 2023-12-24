<?php include('..\include\header.php');?>
<?php include('..\include\sidebar.php');?>
<?php include('..\include\sessionex.php');?>
<?php 
$query="select * from job_category";
$result=mysqli_query($connection,$query);
$raw=mysqli_num_rows($result);
$data=mysqli_fetch_assoc($result);
?>
<div class="p-1 my-container active-cont">
<main role="main" class="col-md-9 ml-sm-auto col-lg-12 pt-3 px-4">
        <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="admin_dashboard.php">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="company.php">category</a></li>
    <li class="breadcrumb-item"><a href="add_company.php">UPDATE category</a></li>
</ol>
</nav>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
          <h1 class="h2">Update Category</h1>
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
<div class="wrapper rounded bg-white">
        <div class="h3">Add Details</div>
        <div class="form">
            <div class="row">
                <div class="col-md-6 mt-md-0 mt-3">
                    <form action="" method="POST">
                    <label>Category Name:</label>
                    <input type="text" class="form-control" name="category" value=" <?php echo $data['category'];?>"required>
                    
                    <label>Description</label>
      <textarea id="my-textarea" class="form-control" name="description" rows="10"> <?php echo $data['des'];?></textarea>
                </div>
            </div>
            <!-- <input type="submit" value="submit" class="btn btn-success" name="sbtn"> -->
          <button type="submit" class="btn btn-block btn-primary mt-1" name="add">Updated</button>

          </form>
        </div>
        
        </div>
    </div>
    <!-- admin details add -->
    <?php 
        if(isset($_POST["add"])){
           
            $uid=$_GET['uid'];
            $category=$_POST["category"];
            $description=$_POST["description"];
            $query="update job_category set category='$category',des='$description' where id=$uid";
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
<?php include('..\include\footer.php');?>
