<?php include('header.php');?>
<?php include('sessionex.php');?>
<?php include('sidebar.php');?>
<?php 
      $id=$_GET['id'];
      $email=$_SESSION['admin_email'];
      $query="select * from job_apply   LEFT JOIN all_job ON job_apply.job_id=all_job.job_id where id=$id";
      $result=mysqli_query($connection,$query);
      $raw=mysqli_num_rows($result);
      $data=mysqli_fetch_assoc($result);
?>
<div class="container-fluid">
<main role="main" class="col-md-9 ml-sm-auto col-lg-12 pt-3 px-4">
        <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
  <li class="breadcrumb-item"><a href="admin_dashboard.php">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="applied_job.php">Applied Jobs</a></li>
    <li class="breadcrumb-item"><a href="view_applied_job.php">Job Request</a></li>
    <li class="breadcrumb-item"><a href="view_applied_job.php">Reject</a></li>
    
  </ol>
</nav>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
<h1 class="h2">Reject</h1>
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
 <!-- form add customers -->
 <div  style="width: 50%;margin-left:25%;box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;background-color:#FBFCFC;">
          <form action="" method="POST" style="margin:3%;padding:3%;" name="customer_form">
          <input type="hidden" name="id" value="<?php echo $id;?>">
  <div class="form-group">
    <label for="email">To:</label>
    <input type="email" class="form-control" id="email" name="to" value="<?php echo $data['job_seeker'];?>">
  </div>
  <div class="form-group">
    <label for="pwd">From</label>
    <input type="email" class="form-control" id="pwd" name="from">
  </div>
  
    <div class="form-group">
        <label for="my-textarea">Body:</label>
        <textarea id="my-textarea" class="form-control" name="body" rows="10"></textarea>
    </div>
  
  <button type="submit" class="btn btn-block btn-success" name="submit">Send</button>
</form>
          </div>
          </div
<?php include('footer.php');?>
