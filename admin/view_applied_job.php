<?php include('..\include\header.php');?>
<?php include('..\include\sidebar.php');?>
<?php include('..\include\sessionex.php');?>
<?php 
      $id=$_GET['id'];
      $email=$_SESSION['admin_email'];
      $query="select * from job_apply   LEFT JOIN all_job ON job_apply.job_id=all_job.job_id where id=$id";
      $result=mysqli_query($connection,$query);
      $raw=mysqli_num_rows($result);  
?>
<div class="p-1 my-container active-cont">
<main role="main" class="col-md-9 ml-sm-auto col-lg-12 pt-3 px-4">
        <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
  <li class="breadcrumb-item"><a href="admin_dashboard.php">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="applied_job.php">Applied Jobs</a></li>
    <li class="breadcrumb-item"><a href="view_applied_job.php">Job Request</a></li>
  </ol>
</nav>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
<h1 class="h2">Job Request</h1>
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
 <!-- end  -->
 <!-- table print data -->
<form action="" style="width:80%;margin-left:10%;box-shadow: rgba(0, 0, 0, 0.05) 0px 6px 24px 0px, rgba(0, 0, 0, 0.08) 0px 0px 0px 1px;padding:10px;">
   
   <!-- <th scope="col">mobile</th> -->
 <?php
     
      if($raw>0){
         $sr=0;
       while($data=mysqli_fetch_assoc($result)) {
        
 ?>
 <div class="form-group">
 <tr>
     <td><label for="">Job Title:</label><?php echo $data['job_title'];?></td>
 </tr>
 </div>
 <div class="form-group">
 <tr>
     <td> <label for="">Description:</label><?php echo $data['description'];?> <?php echo $data['lname'];?></td>
 </tr>
 </div>
 <div class="form-group">
 <tr>
     <td> <label for="">Job seeker name:</label><?php echo $data['fname'];?> <?php echo $data['lname'];?></td>
 </tr>
 </div>
 <div class="form-group">
 <tr>
     <!-- change email  -->
 <td> <label for="">Job seeker Email:</label><?php echo $data['job_seeker'];?></td>
 </tr>
 </div>
 <div class="form-group">
 <tr>
     <!-- change email  -->
 <td> <label for="">Mobile Number:</label><?php echo $data['mobile_no'];?></td>
 </tr>
 </div>
 <div class="form-group">
 <tr><td> <label for="">job seeker File: </label><a href="http://localhost/index.php?/upload/<?php echo $data['file'];?>">File Download</a></td></tr>
 </div>
    <a href="send_email.php?id=<?php echo $id;?>" class="btn btn-success">Accept</a>
     <a href="reject.php?id=<?php echo $id;?>" class="btn btn-danger">Reject</a>
  <?php }}; ?>
  </form>
 
       </div>
     </main>
   </div>
 </div>

<?php include('..\include\footer.php');?>
