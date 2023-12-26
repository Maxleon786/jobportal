<?php include('header.php');?>
<?php include('sessionex.php');?>
<?php include('sidebar.php');?>

<?php 
        $email=$_SESSION['admin_email'];
        $query="select * from job_apply   LEFT JOIN all_job ON job_apply.id=all_job.job_id where customer_email='$email'";
        $result=mysqli_query($connection,$query);
        $raw=mysqli_num_rows($result);
        ?>

<div class="container-fluid">
<main role="main" class="col-md-9 ml-sm-auto col-lg-12 pt-3 px-4">
        <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="admin_dashboard.php">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="applied_job.php">Applied jobs</a></li>
  </ol>
</nav>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
          <h1 class="h2">Applied Jobs</h1>
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

<!-- data tables -->
<div class="table-responsive">
<table id="example" class="table  table-bordered" style="width:100%">
        <thead>
            <tr>
        <th scope="col">Job Title</th>
      <th scope="col">Description</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Action</th>
                
            </tr>
        </thead>
        <tbody>
        <?php
         if($raw>0){
            $sr=0;
          while($data=mysqli_fetch_assoc($result)) {
    ?>
            <tr>
                    
     
     <td><?php echo $data['job_title'];?></td>
      <td><?php echo $data['description'];?></td>
      <td><?php echo $data['fname'];?>,<?php echo $data['lname'];?></td>
      <td><?php echo $data['job_seeker'];?></td>
      <td><a href="view_applied_job.php?id=<?php echo $data['id'];?>"><i class="fa-solid fa-eye mr-1"></i>view </a></td>
      
            </tr>
           
            <?php }}; ?>
        </tbody>
        <tfoot>
            <tr>
            <th scope="col">Job Title</th>
      <th scope="col">Description</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
            </tr>
        </tfoot>
    </table>
    </div>
    </div>
<!-- end datatables -->
<!-- delete querry -->
<?php 
        if(isset($_GET['did'])){
           $id=$_GET['did'];
           $query="delete from admin_login where id=$id";
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
<?php include('footer.php');?>
