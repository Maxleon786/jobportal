<?php include('header.php');?>
<?php include('sessionex.php');?>
<?php include('sidebar.php');?>
<?php 
    $query="select * from all_job";
    $result=mysqli_query($connection,$query);
    $data=mysqli_fetch_assoc($result);
;?>
<div class="container-fluid">
<main role="main" class="col-md-9 ml-sm-auto col-lg-12 pt-3 px-4">
        <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="admin_dashboard.php">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="all_jobs.php">All jobs</a></li>
    <li class="breadcrumb-item"><a href="add_jobs.php">Post job</a></li>
</ol>
</nav>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
          <h1 class="h2">Post Job</h1>
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
                    <label>Job Title</label>
                    <input type="text" class="form-control" name="job_title"  value="<?php echo $data['job_title'];?>"required>
                    
                </div>
                <div class="col-md-6 mt-md-0 mt-3">
                    
                    <label>Keyword</label>
                    <input type="text" class="form-control" name="keyword"required>
                    
                </div>
            </div>
            <div class="form-group">
      <label for="my-textarea">Description</label>
      <textarea id="my-textarea" class="form-control" name="description" rows="10"><?php echo $data['description'];?></textarea>
    </div>
                <div class="col-md-6 mt-md-0 mt-3">
                    
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mt-md-0 mt-3">
                <div class=" my-md-2 my-3">
                <label>Category</label>
                <select id="sub" required name="category">
                    <option value="" selected hidden>Choose Option</option>
                    <option value="1">abc</option>
                    <option value="2">kbc</option>
                </select>
                
            </div>
                    <div class=" my-md-2 my-3">
                <label>State</label>
                <select id="sub" required name="state">
                    <option value="" selected hidden>Choose Option</option>
                    <option value="1"><?php echo $data['state'];?></option>
                   
                </select>
                
            </div>
                </div>
                <div class="col-md-6 mt-md-0 mt-3">
                <div class=" my-md-2 my-3">
                <label>Country</label>
                <select id="sub" required name="country">
                    <option value="" selected hidden>Choose Option</option>
                    <option value="1"><?php echo $data['contri'];?></option>
                  
                </select>
                
            </div>

                    <div class=" my-md-2 my-3">
                <label>City</label>
                <select id="sub" required name="city">
                    <option value="" selected hidden>Choose Option</option>
                    <option value="1"><?php echo $data['city'];?></option>
                   
                </select>
                
                
            </div>
                </div>
                
            </div>
            
            <!-- <input type="submit" value="submit" class="btn btn-success" name="sbtn"> -->
          <button type="submit" class="btn btn-block btn-danger mt-1" name="add">Update</button>

          </form>
        </div>
        
   
    </div>
    <?php 
        if(isset($_GET['uid']))
        {
          $uid=$_GET['uid'];
        }
 ?>
    
    <?php 
        if(isset($_POST["add"])){
            $login_email=$_SESSION['admin_email'];
            $job_title=$_POST["job_title"];
            $description=$_POST["description"];
            $country=$_POST["country"];
            $state=$_POST["state"];
            $city=$_POST["city"];
            $category=$_POST["category"];
            $keyword=$_POST["keyword"];
            $query="update all_job set job_title='$job_title',description='$description',contri='$country',state='$state',city='$city',category='$category' where job_id=$uid";
            $result=mysqli_query($connection,$query);
            if($result){
                $msg="job updated SuccessFully!";
                $_SESSION['error']=$msg;
            }
            else 
            {
                $msg="job not update SuccessFully!";
                $_SESSION['error']=$msg;
            }

        }
    ?>
    <!-- end -->
<?php include('footer.php');?>
