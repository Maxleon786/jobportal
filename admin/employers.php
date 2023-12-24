<?php include('..\include\header.php');?>
<?php include('..\include\sidebar.php');?>
<?php include('..\include\sessionex.php');?>
<?php 
        $query="select * from admin_login";
        $result=mysqli_query($connection,$query);
        $raw=mysqli_num_rows($result);
?>

<div class="p-1 my-container active-cont">
<main role="main" class="col-md-9 ml-sm-auto col-lg-12 pt-3 px-4">
        <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="admin_dashboard.php">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="employers.php">Employers</a></li>
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
           <a href="add_employer.php" class="btn btn-primary">Add Employer</a>
          </div>
 <!-- end -->

<!-- data tables -->
<div class="table-responsive">
<table id="example" class="table  table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Email</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Contact</th>
                <th>Gender</th>
                <th>Admin_type</th>
                <th>Action</th>
                
            </tr>
        </thead>
        <tbody>
        <?php
         if($raw>0){
            $sr=0;
          while($data=mysqli_fetch_assoc($result)) {
    ?>
            <tr>
                    
      <td><?php echo $data['admin_email'];?></td>
      <td><?php echo $data['first_name'];?></td>
      <td><?php echo $data['last_name'];?></td>
      <td><?php echo $data['pnumber'];?></td>
      <td><?php echo $data['gender'];?></td>
      <td><?php echo $data['admin_type'];?></td>
      <td><a href="edit_employers.php?uid=<?php echo $data['id'];?>"> <i class="fa-solid fa-pen-to-square mr-3"></i></a><a href="employers.php?did=<?php echo $data['id'];?>"><i class="fa-solid fa-trash ml-3"></i></a></td>
      
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
<?php include('..\include\footer.php');?>
