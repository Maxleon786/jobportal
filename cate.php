<?php include('head.php'); ?>
<?php 
$id=$_GET['cid'];
// $qr="select * from blog left join categories on blog.category=categories.cate_id left join user on blog.author_id=user.user_id where cate_id=$id";
$query="select * from all_job LEFT JOIN job_category ON all_job.category=job_category.id where id=$id";
//order by use to display latest post on top
$result=mysqli_query($connection,$query);
$rw=mysqli_num_rows($result);
$data=mysqli_fetch_assoc($result);


?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


		<!-- partial -->
      

        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <div style="margin-top:80px">
<div class="container mt-5 pt-4">
    <div class="row align-items-end mb-4 pb-2">
        <div class="col-md-8">
            <div class="section-title text-center text-md-start">
                <h4 class="title mb-4">Result: <?php echo $data['category'] ;?></h4>
                <p class="text-muted mb-0 para-desc">Start work with Leaping. Build responsive, mobile-first projects on the web with the world's most popular front-end component library.</p>
            </div>
        </div><!--end col-->

        <div class="col-md-4 mt-4 mt-sm-0 d-none d-md-block">
            <div class="text-center text-md-end">
                <a href="#" class="text-primary">View more Jobs <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right fea icon-sm"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></a>
            </div>
        </div><!--end col-->
    </div><!--end row-->
    
    <div class="row">
    <?php
    
              if($raw=mysqli_num_rows($result)>0){
               while($data=mysqli_fetch_assoc($result)){?>
        <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
            <div class="card border-0 bg-light rounded shadow">
                <div class="card-body p-4">
                    <span class="badge rounded-pill bg-primary float-md-end mb-3 mb-sm-0"><?php echo $data['type'];?></span>
                    <h5><?php echo $data['job_title'];?></h5>
                    <div class="mt-3">
                        <span class="text-muted d-block"><i class="fa fa-home" aria-hidden="true"></i> <a href="#" target="_blank" class="text-muted"><?php //echo $data['cname'];?></a></span>
                        <span class="text-muted d-block"><i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo $data['city'];?>, <?php echo $data['state'];?></span>
                          <span class="text-muted d-block mt-1">Upto ₹<?php echo $data['salary'];?> a Month</span>
                    </div>
                    
                    <div class="mt-3">
                        <a href="job_details.php?jid=<?php echo $data['job_id'];?>" class="btn btn-primary">View Details</a>
                    </div>
                </div>
            </div>
             
        </div><!--end col-->
       <?php } }
          else{?>
                <h5 class="text-center">NO RECORD FOUND</h5>
         <?php }
        ?>
       
       
        <div class="col-12 mt-4 pt-2 d-block d-md-none text-center">
            <a href="#" class="btn btn-primary">View more Jobs <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right fea icon-sm"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></a>
        </div><!--end col-->
    </div><!--end row-->
</div>
</div>

			<?php include('foot.php'); ?>
			