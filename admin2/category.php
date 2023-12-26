<?php include('header.php');?>
<?php include('sessionex.php');?>
<?php include('sidebar.php');?>
<?php 
    $query="select * from job_category";
    $result=mysqli_query($connection,$query);
    $raw=mysqli_num_rows($result);
?>

<div class="container-fluid">
<main role="main" class="col-md-9 ml-sm-auto col-lg-12 pt-3 px-4">
        <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="admin_dashboard.php">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="category.php">Category</a></li>
  </ol>
</nav>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
          <h1 class="h2">Company</h1>
          <?php if(isset($_SESSION['error'])){?>
          <div class="alert alert-success" role="alert">
            <?php   
                $message=$_SESSION['error'];
                echo $message;
                unset($_SESSION['error']);
            ?>
</div>
<?php }?>
           <a href="add_category.php" class="btn btn-primary">Add category</a>
          </div>
 <!-- end -->

<!-- data tables -->
<div class="table-responsive">
<table id="example" class="table  table-bordered" style="width:100%">
        <thead>
            <tr>
            <th>Category Name</th>
                <th>Description</th>
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
                    
        <td><?php echo $data['category'];?></td>
      <td><?php echo $data['des'];?></td>
      <!-- <td><?php //echo $data['admin_email'];?></td> -->
      <td><a href="edit_category.php?uid=<?php echo $data['id'];?>"> <i class="fa-solid fa-pen-to-square mr-3"></i></a><a href="category.php?did=<?php echo $data['id'];?>"><i class="fa-solid fa-trash ml-3"></i></a></td>
      
            </tr>
           
            <?php }}; ?>
        </tbody>
        <tfoot>
            <tr>
                <th>Category Name</th>
                <th>Description</th>
                <th>Action</th>
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
           $query="delete from company where cid=$id";
           $result=mysqli_query($connection,$query);
           if($result){
            $msg="data deleted SuccessFully!";
            $_SESSION['error']=$msg;
        }
        else 
        {
            $msg="data not deleted SuccessFully!";
            $_SESSION['error']=$msg;
        }
        }
    ?>
<?php include('footer.php');?>
