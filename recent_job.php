<?php include('connection.php')?>
<?php
$query="select * from all_job LEFT JOIN company ON all_job.customer_email=company.admin  order by  post_date desc limit 5";
 $result=mysqli_query($connection,$query);
 $rw=mysqli_num_rows($result);
// $qr2="select * from blog order by publish_date desc limit 5";
// $result2=mysqli_query($cn,$qr2);
?>
<section class="ftco-section bg-light">
			<div class="container">
				<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading mt-3">Recently Added Jobs</span>
            <h2 class=""><span>Recent</span> Jobs</h2>
          </div>
        </div>
				<div class="row">
          <!-- search data display -->
          <?php
              if($raw=mysqli_num_rows($result)>0){
               while($data=mysqli_fetch_assoc($result)){?>
					<div class="col-md-12 ftco-animate mt-2">

            <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">

              <div class="mb-4 mb-md-0 mr-5 ">
                <div class="job-post-item-header d-flex align-items-center">
                  <h2 class="mr-3 text-black h3"><?php echo $data['job_title'];?></h2>
                  <div class="badge-wrap">
                   <span class="bg-primary text-white badge py-2 px-3"><?php echo $data['city'];?></span>
                  </div>
                </div>
                <div class="job-post-item-body d-block d-md-flex">
                  <div class="mr-3"><span class="icon-layers"></span> <a href="#"><?php echo $data['cname'];?></a></div>
                  <div><span class="icon-my_location"></span> <span><?php echo $data['contri'];?>,<?php echo $data['state'];?>,<?php echo $data['city'];?></span></div>
                </div>
              </div>
                  <!-- job id -->
              <div class="ml-auto d-flex">
                <a href="apply_form.php?jid=<?php echo $data['job_id']?>" class="btn btn-primary py-2 mr-1">Apply Job</a>
                	<span class="icon-heart"></span>
                </a>
              </div>
            </div>
          </div><!-- end -->
        <?php } }
          else{?>
                <h5 class="text-center">NO RECORD FOUND</h5>
         <?php }
        ?>
          <!--  -->
          <!--  -->
           <!-- end -->
				</div>