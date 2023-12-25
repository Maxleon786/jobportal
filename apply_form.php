<?php include('head.php') ?>
<?php include('session_valid.php');
    ob_start();
?>
<?php
$query="select * from jobseeker";
 $result=mysqli_query($connection,$query);
$data=mysqli_fetch_assoc($result);
?>
<div style="margin-top:80px;box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;">
<div class="container rounded bg-white mt-5 mb-5 " >
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold"><?php echo $data['fname'];?> <?php echo $data['lname'];?></span><span class="text-black-50"><?php echo $_SESSION['email'];?></span><span> </span></div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Job Apply</h4>
                </div>
                <?php 
    $jobid=$_GET['jid'];
  ?>
<?php 
   $query="select * from all_job where job_id='$jobid'";
   $result=mysqli_query($connection,$query);
   $raw=mysqli_num_rows($result);
    $data=mysqli_fetch_assoc($result);
?>
            <form action="" method="post" action="blog_single.php" enctype="multipart/form-data" >

                <div class="row mt-2">
                    
                    <div class="col-md-6"><label class="labels">Name</label><input type="text" class="form-control" placeholder="first name" value="" name="fname"></div>
                    <div class="col-md-6"><label class="labels">Surname</label><input type="text" class="form-control" value="" placeholder="Last name" name="lname"></div>
                </div>
                <div class="row mt-3">
                    <!-- hidden -->
                <input type="hidden" class="form-control" name="job_seeker" value="<?php echo $_SESSION['email'];?>">
                <input type="hidden" class="form-control" name="job_id" value="<?php echo $data['job_id'];?>">
                    <!--hidden  -->
                <div class="col-md-12"><label class="labels">Mobile Number</label><input type="number" class="form-control" placeholder="enter phone number" value="" name="number"></div>
                    <div class="col-md-12"><label class="labels">Email Address</label><input type="text" class="form-control" placeholder="enter email" value="<?php echo $_SESSION['email']?>"></div>
                    <div class="col-md-12"><label class="labels">Date Of Birth</label><input type="date" class="form-control" placeholder="enter date of birth" value="" name="dob"></div>
                    <div class="col-md-12"><label class="labels">Resume/Cv</label><input type="file" class="form-control" placeholder="" value="" name="file"></div>
                    <div class="col-md-12"><label class="labels">Postcode</label><input type="text" class="form-control" placeholder="enter address line 2" value=""></div>
                    <div class="col-md-12"><label class="labels">State</label><input type="text" class="form-control" placeholder="enter address line 2" value=""></div>
                    <div class="col-md-12"><label class="labels">Area</label><input type="text" class="form-control" placeholder="enter address line 2" value=""></div>
                    <div class="col-md-12"><label class="labels">Email ID</label><input type="text" class="form-control" placeholder="enter email id" value=""></div>
                    <div class="col-md-12"><label class="labels">Education</label><input type="text" class="form-control" placeholder="education" value=""></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6"><label class="labels">Country</label><input type="text" class="form-control" placeholder="country" value=""></div>
                    <div class="col-md-6"><label class="labels">State/Region</label><input type="text" class="form-control" value="" placeholder="state"></div>
                </div>
                <!-- <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button">Save Profile</button></div> -->
               
                <div class="mt-5 text-center">
                <input type="submit" class="btn btn-primary profile-button" name="submit" value="apply Now">
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center experience"><span>Edit Experience</span><span class="border px-3 p-1 add-experience"><i class="fa fa-plus"></i>&nbsp;Experience</span></div><br>
                <div class="col-md-12"><label class="labels">Experience in Designing</label><input type="text" class="form-control" placeholder="experience" value=""></div> <br>
                <div class="col-md-12"><label class="labels">Additional Details</label><input type="text" class="form-control" placeholder="additional details" value=""></div>
            </div>
</form>
        </div>
    </div>
</div>
</div>
</div>
</div>
<?php include('foot.php') ?>
<!-- collect user data from form -->
<?php 
    if(isset($_POST["submit"])){
        // print_r($_POST);
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $dob=$_POST['dob'];
        $number=$_POST['number'];
        $jobseeker=$_POST['job_seeker'];
        $jobid=$_POST['job_id'];
        $filename=$_FILES['file']['name'];
        $tmpname=$_FILES['file']['tmp_name'];
        $destination="admin\upload./".$filename;
        // same job checking
        $query="select * from  job_apply where job_seeker='$jobseeker' AND job_id=$jobid";
        $result=mysqli_query($connection,$query);
        $raw=mysqli_num_rows($result);
        if($raw>0){
            header("location:index.php");
            // you allready job applied
        }
        else{
          move_uploaded_file($tmpname,$destination);
          $query="insert into job_apply values(id,'$fname','$lname','$dob','$filename',$jobid,'$jobseeker',$number)";
          $result=mysqli_query($connection,$query);
          // job apply succesfully
        }
        // end
    }
?>