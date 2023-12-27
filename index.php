<?php include('head.php') ?>

<?php 
// $qr="select * from blog left join categories on blog.category=categories.cate_id left join user on blog.author_id=user.user_id order by blog.publish_date desc limit $offset,$limit";
$query="select * from all_job LEFT JOIN company ON all_job.customer_email=company.admin";
$result=mysqli_query($connection,$query);
$raw=mysqli_num_rows($result);
?>
    <!-- navbar start-->
    
    <!-- navbar end -->

    <!-- image section start-->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <div class="carousel-indicators">
              
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
          </div>
          <div class="carousel-inner">
              <div class="carousel-item active">
                  <img src="img/slide-1.jpg" class="d-block w-100">
              </div>
              <div class="carousel-item">
                  <img src="img/slide-2.jpg" class="d-block w-100">
              </div>
              <div class="carousel-item">
                  <img src="img/slide-3.jpg" class="d-block w-100">
              </div>
              <div class="carousel-item">
                  <img src="img/slide-4.jpg" class="d-block w-100">
              </div>
              <div class="carousel-item">
                  <img src="img/slide-5.jpg" class="d-block w-100">
              </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
            
            
            <!-- image section end -->

        <!-- job search section start-->
      
        <!-- <div class="find-job-sec">
            <form action="#">
                <div class="find-job-input">
                    <div class="job-input search1">
                        <span><i class="fa-solid fa-magnifying-glass search-logo"></i></span>
                        <input type="text" class="form-control  search-input" id="inlineFormInput" placeholder="Job title, keywords, or company">
                    </div>
                    <span class="line"></span>
                    <div class="job-input search2">
                        <span><i class="fa-solid fa-location-dot search-logo"></i></span>
                        <input type="text" class="form-control search-input" id="inlineFormInputGroup" placeholder="City, state, zip code, or &quot;remote&quot;">
                    </div>
                </div>
                <div class="find-job-btn">
                    <input type="submit" name="submit" value="Find jobs">
                </div>
            </form>
          </div> -->

          <!-- job search section start-->

        <div class="find-job-sec">
            <form action="" style="box-shadow: unset !important;">
                <div class="find-job-input">
                    <div class="job-input search1">
                        <span><i class="fa-solid fa-magnifying-glass search-logo"></i></span>
                        <input type="search" class="form-control search-input" id="search" name="search-job"
                        placeholder="Job title, company" autocomplete="off">
                        <div class="auto-box">
                            <ul id="dropjobs">

                                </ul>
                        </div>
                    </div>
                    <span class="line"></span>
                    <div class="job-input search2">
                        <span><i class="fa-solid fa-location-dot search-logo"></i></span>
                        <input type="search" class="form-control search-input" id="inlineFormInputGroup"
                            name="search-location" placeholder="City, state" autocomplete="off">
                            <div class="auto-box">
                                <ul id="droplocation">
                                    
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="find-job-btn">
                    <input type="submit" name="submit" value="Find jobs">
                </div>
            </form>
        </div>

        <!-- script of search job start -->
        <script>
        $(document).ready(function ($) {
            // Function to handle input focus
            function handleInputFocus(input, autoBox, boxtype) {
                $(input).on('focus', function () {
                    $(autoBox).show();
                    // Disable the other input box
                    $(".find-job-input .search" + (boxtype === 1 ? 2 : 1) + " .search-input").prop('disabled', true);
                    // Hide the auto-box of the other input box
                    $(".find-job-input .search" + (boxtype === 1 ? 2 : 1) + " .auto-box").hide();
                }).on('blur', function () {
                    // Enable the other input box when focus is lost
                    $(".find-job-input .search" + (boxtype === 1 ? 2 : 1) + " .search-input").prop('disabled', false);
                });
            }

            // Function to handle AJAX
            function Ajax(Input, dropbox, boxtype, table) {
                $(Input).keyup(function () {
                    $.ajax({
                        url: "search.php",
                        method: "post",
                        data: {
                            "term": $(Input).val(),
                            "table": table
                        },
                        success: function (response) {
                            $(dropbox).html(response);
                        }
                    });
                    if ($(Input).val().length > 0) {
                        $(".find-job-input .search" + boxtype + " .auto-box").show();
                    } else {
                        $(".find-job-input .search" + boxtype + " .auto-box").hide();
                    }
                });

                // Call the function to handle input focus
                handleInputFocus(Input, ".find-job-input .search" + boxtype + " .auto-box", boxtype);

                $(".find-job-input .search" + boxtype + " .fa-magnifying-glass").click(function () {
                    $(".find-job-input .search" + boxtype + " .auto-box").hide();
                });

                // Handle search event to hide the auto-box when clear button is clicked
                $(".find-job-input .search" + boxtype + " .search-input").on('search', function () {
                    $(".find-job-input .search" + boxtype + " .auto-box").hide();
                });
            }

            // Set up AJAX for the first input box
            Ajax(".find-job-input .search1 .search-input", ".find-job-input .search1 #dropjobs", 1, "jobs");

            // Set up AJAX for the second input box
            Ajax(".find-job-input .search2 .search-input", ".find-job-input .search2 #droplocation", 2, "location");

        });
        // Handle click on the magnifying glass icon to hide the auto-box

        function putdata(data, view) {
            $(".find-job-input .search" + view + " .search-input").val(data);
            $(".find-job-input .search" + view + " .auto-box").hide();
        }
    </script>
        <!-- job search script section end-->
    </div>
</div>
    

    <!-- job search section start-->

</div>
<?php include('category.php')?>
<!-- jobs list -->
<?php
$query="select * from all_job LEFT JOIN company ON all_job.customer_email=company.admin  order by  post_date desc limit 6 ";
 $result=mysqli_query($connection,$query);
 $rw=mysqli_num_rows($result);
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
                <h4 class="title mb-4">Find the perfect jobs</h4>
                <p class="text-muted mb-0 para-desc">Start work with Leaping. Build responsive, mobile-first projects on the web with the world's most popular front-end component library.</p>
            </div>
        </div><!--end col-->

        <div class="col-md-4 mt-4 mt-sm-0 d-none d-md-block">
            <div class="text-center text-md-end">
                <a href="job_list.php" class="text-primary">View more Jobs <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right fea icon-sm"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></a>
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
                        <span class="text-muted d-block"><i class="fa fa-home" aria-hidden="true"></i> <a href="#" target="_blank" class="text-muted"><?php echo $data['cname'];?></a></span>
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
<!-- job list end -->
    <!-- category start -->
    <!-- <div class="sidebar">
        <div class="category-session">
            <h2 class="title ml-5">Categories</h2>
            <ul class="category-group">
              
                <li class="list"><a href="#"><h4></h4></a></li>
                
            </ul>
        </div>
    </div> -->
    <!-- category end -->
     <!-- category start -->
     <div class="cat">
        <div class="wrap">
          <i id="left" class="fa-solid fa-angle-left black"></i>
          <ul class="caro">
            <li class="card-2">
              <div class="img"><img src="img/img-1.jpg" alt="img" draggable="false"></div>
              <h2 class="black">Blanche Pearson</h2>
              <span>Sales Manager</span>
            </li>
            <li class="card-2">
              <div class="img"><img src="img/img-2.jpg" alt="img" draggable="false"></div>
              <h2 class="black">Joenas Brauers</h2>
              <span>Web Developer</span>
            </li>
            <li class="card-2">
              <div class="img"><img src="img/img-3.jpg" alt="img" draggable="false"></div>
              <h2 class="black">Lariach French</h2>
              <span>Online Teacher</span>
            </li>
            <li class="card-2">
              <div class="img"><img src="img/img-4.jpg" alt="img" draggable="false"></div>
              <h2 class="black">James Khosravi</h2>
              <span>Freelancer</span>
            </li>
            <li class="card-2">
              <div class="img"><img src="img/img-5.jpg" alt="img" draggable="false"></div>
              <h2 class="black">Kristina Zasiadko</h2>
              <span>Bank Manager</span>
            </li>
            <li class="card-2">
              <div class="img"><img src="img/img-6.jpg" alt="img" draggable="false"></div>
              <h2 class="black">Donald Horton</h2>
              <span>App Designer</span>
            </li>
          </ul>
          <i id="right" class="fa-solid fa-angle-right black"></i>
        </div>
      </div>
    <!-- category end -->
      <!-- about section starts -->
      <section id="about" class="about section-padding">
          <div class="container">
              <div class="row">
                  <div class="col-lg-4 col-md-12 col-12">
                      <div class="about-img">
                          <img src="img/about.jpg" alt="" class="img-fluid">
                      </div>
                  </div>
                  <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
                      <div class="about-text">
                            <h2>We Provide the Best Quality <br/> Services Ever</h2>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Totam, labore reiciendis. Assumenda eos quod animi! Soluta nesciunt inventore dolores excepturi provident, culpa beatae tempora, explicabo corporis quibusdam corrupti. Autem, quaerat. Assumenda quo aliquam vel, nostrum explicabo ipsum dolor, ipsa perferendis porro doloribus obcaecati placeat natus iste odio est non earum?</p>
                            <a href="#" class="btn btn-primary">Learn More</a>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!-- about section Ends -->
        <?php include('recent_job.php')?>
      <!-- team starts -->
      <section class="team section-padding" id="team">
          <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header text-center pb-5">
                        <h2>Our Team</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur <br>adipisicing elit. Non, quo.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card text-center">
                        <div class="card-body">
                            <img src="img/team-1.jpg" alt="" class="img-fluid rounded-circle">
                        <h3 class="card-title py-2 black">Jack Wilson</h3>
                        <p class="card-text black">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sequi ipsam nostrum illo tempora esse quibusdam.</p>
                        <p class="socials">
                            <i class="bi bi-twitter text-dark mx-1"></i>
                        <i class="bi bi-facebook text-dark mx-1"></i>
                        <i class="bi bi-linkedin text-dark mx-1"></i>
                        <i class="bi bi-instagram text-dark mx-1"></i>
                        </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card text-center">
                        <div class="card-body">
                            <img src="img/team-2.jpg" alt="" class="img-fluid rounded-circle">
                        <h3 class="card-title py-2 black">Jack Wilson</h3>
                        <p class="card-text black">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sequi ipsam nostrum illo tempora esse quibusdam.</p>
                        <p class="socials">
                            <i class="bi bi-twitter text-dark mx-1"></i>
                        <i class="bi bi-facebook text-dark mx-1"></i>
                        <i class="bi bi-linkedin text-dark mx-1"></i>
                        <i class="bi bi-instagram text-dark mx-1"></i>
                        </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card text-center">
                        <div class="card-body">
                            <img src="img/team-3.jpg" alt="" class="img-fluid rounded-circle">
                        <h3 class="card-title py-2 black">Jack Wilson</h3>
                        <p class="card-text black">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sequi ipsam nostrum illo tempora esse quibusdam.</p>
                        <p class="socials">
                            <i class="bi bi-twitter text-dark mx-1"></i>
                        <i class="bi bi-facebook text-dark mx-1"></i>
                        <i class="bi bi-linkedin text-dark mx-1"></i>
                        <i class="bi bi-instagram text-dark mx-1"></i>
                        </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card text-center">
                        <div class="card-body">
                            <img src="img/team-4.jpg" alt="" class="img-fluid rounded-circle">
                        <h3 class="card-title py-2 black">Jack Wilson</h3>
                        <p class="card-text black">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sequi ipsam nostrum illo tempora esse quibusdam.</p>
                        <p class="socials">
                            <i class="bi bi-twitter text-dark mx-1"></i>
                        <i class="bi bi-facebook text-dark mx-1"></i>
                        <i class="bi bi-linkedin text-dark mx-1"></i>
                        <i class="bi bi-instagram text-dark mx-1"></i>
                        </p>
                        </div>
                    </div>
                </div>
            </div>
          </div>
      </section>
      <!-- team ends -->
      <!-- Contact starts -->
      <section id="contact" class="contact section-padding">
        <div class="container mt-5 mb-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header text-center pb-5">
                        <h2>Contact Us</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur <br>adipisicing elit. Non, quo.</p>
                    </div>
                </div>
            </div>
			<div class="row m-0">
				<div class="col-md-12 p-0 pt-4 pb-4">
					<form action="#" class="bg-light p-4 m-auto">
						<div class="row">
							<div class="col-md-12">
								<div class="mb-3">
									<input class="form-control" placeholder="Full Name" required="" type="text">
								</div>
							</div>
							<div class="col-md-12">
								<div class="mb-3">
									<input class="form-control" placeholder="Email" required="" type="email">
								</div>
							</div>
							<div class="col-md-12">
								<div class="mb-3">
									<textarea class="form-control" placeholder="Message" required="" rows="3"></textarea>
								</div>
							</div><button class="btn btn-primary btn-lg btn-block mt-3 " type="button">Send Now</button>
						</div>
					</form>
				</div>
			</div>
		</div>
      </section>
      <!-- contact ends -->
      <!-- footer starts -->
      <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h4>company</h4>
                    <ul>
                        <li><a href="#">about us</a></li>
                        <li><a href="#">our services</a></li>
                        <li><a href="#">privacy policy</a></li>
                        <li><a href="#">affiliate program</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>get help</h4>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">shipping</a></li>
                        <li><a href="#">returns</a></li>
                        <li><a href="#">order status</a></li>
                        <li><a href="#">payment options</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>online shop</h4>
                    <ul>
                        <li><a href="#">watch</a></li>
                        <li><a href="#">bag</a></li>
                        <li><a href="#">shoes</a></li>
                        <li><a href="#">dress</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>follow us</h4>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
   </footer>
      <!-- footer ends -->

    <!-- back to top button start -->
    <a href="#top" class="rnd"><i class="fa-solid fa-rocket" style="color:rgb(255, 114, 114);"></i></a>
    <!-- back to top button end -->

    
   <?php include('foot.php')?>