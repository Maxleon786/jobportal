<?php include('..\include\header.php');?>
<?php include('..\include\sidebar.php');?>
<?php include('..\include\sessionex.php');?>
<?php 
     $query="select * from company where cid='{$_GET['uid']}'";
     //  $query="select * from company left join admin_login ON company.cid=admin_login.id where cid='{$_GET['uid']}' AND admin_type=2";
     $result=mysqli_query($connection,$query);
     $raw=mysqli_num_rows($result);
     $data=mysqli_fetch_assoc($result);
?>
<div class="p-1 my-container active-cont">
<main role="main" class="col-md-9 ml-sm-auto col-lg-12 pt-3 px-4">
        <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="admin_dashboard.php">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="company.php">Company</a></li>
    <li class="breadcrumb-item"><a href="edit_company.php">Update Company</a></li>
</ol>
</nav>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
          <h1 class="h2">update Company</h1>
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
                    <label>Company Name:</label>
                    <input type="text" class="form-control" name="companyname" value="<?php echo $data['cname'];?>"required>
                    <label>Owner Email:</label>
                    <input type="email" class="form-control" name="email" value="<?php echo $data['admin'];?>"required>
                    <label>Description</label>
      <textarea id="my-textarea" class="form-control" name="description" rows="10">
      <?php echo $data['description'];?>
      </textarea>
                </div>
            </div>
            <!-- <input type="submit" value="submit" class="btn btn-success" name="sbtn"> -->
          <button type="submit" class="btn btn-block btn-primary mt-1" name="add">Update</button>

          </form>
        </div>
        
        </div>
    </div>
    <!-- company details add -->
    <?php 
        if(isset($_POST["add"])){
            $cid=$_GET['uid'];
           $company=$_POST["companyname"];
           $description=$_POST["description"];
           $email=$_POST["email"];
           $query="update company set cname='$company',description='$description',admin='$email' where cid=$cid";
           $result=mysqli_query($connection,$query);
            if($result){
                $msg="upadted SuccessFully!";
                $_SESSION['error']=$msg;
            }
            else 
            {
                $msg="Not updated SuccessFully!";
                $_SESSION['error']=$msg;
            }
        }
    ?>
    <!-- end -->
<?php include('..\include\footer.php');?>
<!-- admin details add -->
