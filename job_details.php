<?php include('head.php'); ?>
<?php
$id=$_GET['jid'];
$query="select * from all_job LEFT JOIN company ON all_job.customer_email=company.admin where job_id=$id";
 $result=mysqli_query($connection,$query);
 $rw=mysqli_num_rows($result);
 $data=mysqli_fetch_assoc($result);
?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/4.4.95/css/materialdesignicons.css">

		<!-- partial -->
        <div style="margin-top:80px">
        </div>
		<div class="main-panel">
			<div class="container">
				<div class="row">
					<div class="col-md-4 grid-margin stretch-card">
						<div class="card">
							<div class="profile-card">

								<div class="profile-header">

									<div class="cover-image">
										<img src="https://cdn.pixabay.com/photo/2019/10/19/14/16/away-4561518_960_720.jpg" class="img img-fluid">
									</div>
									<div class="user-image">
										<img src="https://scontent.fslv1-1.fna.fbcdn.net/v/t1.0-1/p240x240/71764978_543119796448430_5969446522109034496_n.jpg?_nc_cat=105&_nc_oc=AQnoaTQx8fxeyzbIbtQyvZXghFdEQl-ds6NQr_13xAXuGmWnigS1zJHTuH8sKv5e9-TSN3KRAuptCtwM-LlwxidP&_nc_ht=scontent.fslv1-1.fna&oh=52752a53e6b91980d3f9bf227064a95d&oe=5E5A25B9" class="img ">
									</div>
								</div>

								<div class="profile-content">
									<div class="profile-name"> <?php echo $data['admin'];?></div>
									<div class="profile-designation"><?php echo $data['cname'];?></div>
									<p class="profile-description"><?php echo $data['des'];?>.</p>
									<ul class="profile-info-list">
										<a href="" class="profile-info-list-item"><i class="mdi mdi-eye"></i>Timeline</a>
										<a href="" class="profile-info-list-item"><i class="mdi mdi-bookmark-check"></i>Saved</a>
										<a href="" class="profile-info-list-item"><i class="mdi mdi-movie"></i>Medias</a>
										<a href="" class="profile-info-list-item"><i class="mdi mdi-account"></i>About</a>

									</ul>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-8 grid-margin stretch-card">
						<div class="card">
							<div class="card-body">
								<p class="card-title font-weight-bold">Job details</p>
								<hr>
								<p class="card-description">Job Information</p>
								<ul class="about">
									<li class="about-items"><i class="mdi mdi-account icon-sm "></i><span class="about-item-name">Job Title:</span><span class="about-item-detail"><?php echo $data['job_title'];?></span></li>
									<li class="about-items"><i class="mdi mdi-mail-ru icon-sm "></i><span class="about-item-name">Type:</span><span class="about-item-detail"><?php echo $data['type'];?></span> </li>
									<li class="about-items"><i class="fa-sharp fa-solid fa-money-bill-wave"></i><span class="about-item-name">Salary:</span><span class="about-item-detail"> ₹<?php echo $data['salary'];?></span></li>
									<li class="about-items"><i class="mdi mdi-format-align-left icon-sm "></i><span class="about-item-name">Description:</span><span class="about-item-detail"><?php echo $data['description'];?>.</span> </li>
									
                       <li class="about-items"><i class="mdi mdi-trophy-variant-outline icon-sm "></i><span class="about-item-name">Badges:</span><span class="about-item-detail">
                       <button type="button" class="btn btn-success btn-rounded btn-icon">
                        <i class="mdi mdi-star text-white"></i>
                      </button>  
                        <button type="button" class="btn btn-info btn-rounded btn-icon">
                        <i class="mdi mdi-check text-white"></i>
                      </button>
                       <button type="button" class="btn btn-danger btn-rounded btn-icon">
                        <i class="mdi mdi-check text-white"></i>
                      </button>
                      </span> <a href="" class="about-item-edit">View</a></li>
                      
								</ul>
								<p class="card-description">Contact Information</p>
								<ul class="about">
									<li class="about-items"><i class="mdi mdi-phone icon-sm "></i><span class="about-item-name">Phone:</span><span class="about-item-detail">+9779861106179</span></li>
									<li class="about-items"><i class="mdi mdi-map-marker icon-sm "></i><span class="about-item-name">Address:</span><span class="about-item-detail"><?php echo $data['address'];?></span> </li>
									<li class="about-items"><i class="mdi mdi-email-outline icon-sm "></i><span class="about-item-name">Email:</span><span class="about-item-detail"><a href=""><?php echo $data['admin'];?></a></span> </li>
									<li class="about-items"><i class="mdi mdi-web icon-sm "></i><span class="about-item-name">Site:</span><span class="about-item-detail"><a href="google.com">www.google.com</a></span> </li>
								</ul>
								<p class="card-description">Basic Information</p>
								<ul class="about">
									<li class="about-items"><i class="mdi mdi-cake icon-sm "></i><span class="about-item-name">Birthday:</span><span class="about-item-detail">Aug 3 , 1998</span><a href="" class="about-item-edit">Edit</a></li>
									<li class="about-items"><i class="mdi mdi-account icon-sm "></i><span class="about-item-name">Gender:</span><span class="about-item-detail">Male</span> <a href="" class="about-item-edit">Edit</a></li>
									<li class="about-items"><i class="mdi mdi-clipboard-account icon-sm "></i><span class="about-item-name">Profession:</span><span class="about-item-detail">Student</span> <a href="" class="about-item-edit">Edit</a></li>
									<li class="about-items"><i class="mdi mdi-water icon-sm "></i><span class="about-item-name">Blood Group:</span><span class="about-item-detail">AB+</span> <a href="" class="about-item-edit">Edit</a></li>
									<li class="about-items"><i class="mdi mdi-human-male-female icon-sm "></i><span class="about-item-name">Relationship Status:</span><span class="about-item-detail">Single</span> <a href="" class="about-item-edit">Edit</a></li>
									<li class="about-items btn btn-primary"><a href="apply_form.php?jid=<?php echo $data['job_id']; ?>" class="text-white">Apply Now</a></li>
								</ul>

							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- content-wrapper ends -->
			<!-- partial:partials/_footer.html -->
			<!-- partial -->
		</div>
        </div>
		<?php include('foot.php'); ?>
		