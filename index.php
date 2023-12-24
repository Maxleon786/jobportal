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
      </div>


        <!-- image section end -->

        <!-- job search section start-->
      
        <div class="find-job-sec">
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
          </div>

    

    <!-- job search section start-->

</div>
<?php include('category.php')?>
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