<?php include('..\include\header.php');?>
<?php include('..\include\sidebar.php');?>
<?php include('..\include\sessionex.php');?>
<?php 
      $email=$_SESSION['admin_email'];
      $query="select * from all_job where customer_email='$email'";
      $result=mysqli_query($connection,$query);
      $raw=mysqli_num_rows($result);
?>

<div class="p-1 my-container active-cont">
<main role="main" class="col-md-9 ml-sm-auto col-lg-12 pt-3 px-4">
        <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="admin_dashboard.php">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="all_jobs.php">All Jobs</a></li>
  </ol>
</nav>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
          <h1 class="h2">Employers</h1>
          <?php if(isset($_SESSION['error'])){?>
          <div class="alert alert-success" role="alert">
            <?php   
                $message=$_SESSION['error'];
                echo $message;
                unset($_SESSION['error']);
            ?>
</div>
<?php }?>
           <a href="add_jobs.php" class="btn btn-primary">Post Job</a>
          </div>
 <!-- end -->

<!-- data tables -->
<div class="table-responsive">
<table id="example" class="table  table-bordered" style="width:100%">
        <thead>
        <tr>
      <th scope="col">Admin Email</th>
      <th scope="col">Job Title</th>
      <th scope="col">Description</th>
      <th scope="col">Country</th>
      <th scope="col">State</th>
      <th scope="col">City</th>
      <th scope="col">Keyword</th>
      <th scope="col">Category</th>
      <th scope="col" class="text-center">Action</th>
    </tr>
        </thead>
        <tbody>
        <?php
         if($raw>0){
            $sr=0;
          while($data=mysqli_fetch_assoc($result)) {
    ?>
    <tr>
    <td><?php echo $data['customer_email'];?></td>
      <td><?php echo $data['job_title'];?></td>
      <td><?php echo $data['description'];?></td>
      <td><?php echo $data['contri'];?></td>
      <td><?php echo $data['state'];?></td>
      <td><?php echo $data['city'];?></td>
      <td><?php //echo $data['keyword'];?></td>
      <td><?php echo $data['category'];?></td>
      <td><a href="edit_job.php?uid=<?php echo $data['job_id'];?>"><i class="fa-solid fa-pen-to-square mr-3"></a><a href="all_jobs.php?did=<?php echo $data['job_id'];?>"><i class="fa-solid fa-trash ml-3"></a></td>
        </tr>
            <?php }}; ?>
        </tbody>
        <tfoot>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </tfoot>
    </table>
    </div>
    </div>
<!-- end datatables -->
<!-- delete querry -->
<!-- delete querry -->
<?php 
        if(isset($_GET['did'])){
           $id=$_GET['did'];
           $query="delete from all_job where job_id=$id";
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
<?php include('..\include\footer.php');?>
