<head>

	
	<link rel="stylesheet" href="css/owl.carousel.min.css"> 
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/style.css"/>

	<!-- Main Stylesheets
	<link rel="stylesheet" href="css/style.css"/>
	<link rel="stylesheet" href="css/main.css"> -->
	
</head>
<?php
session_start();
	if(isset($_SESSION['user']) && !empty($_SESSION['user']) && isset($_SESSION['username']) && !empty($_SESSION['username'])&& isset($_SESSION['status']) && $_SESSION['status']==true && isset($_SESSION['account']) && $_SESSION['account']=='sponsor')
	{
		header("location:account.php");
    }

	else if(isset($_SESSION['user']) && !empty($_SESSION['user']) && isset($_SESSION['username']) && !empty($_SESSION['username'])&& isset($_SESSION['status']) && $_SESSION['status']==true && isset($_SESSION['account']) && $_SESSION['account']=='student')
	{
		header("location:student.php");
    }
	else{
		
	$_SESSION=array();
	session_destroy();
		//header("location:index.php");
	}

 include("inc/header.php"); 

 ?>

<!--
	<div style="top:-5px;"  class="">
	<div class="carousel-inner" id="myCarousel">
		<div class="item active ">
			<div class='slideItem1'></div>
			<div class="carousel-caption cpt">
				<h3 class="animation animated-item-1 caption-heading">We are a child-centred digital learning platform offering lessons and
resources aligned to the Uganda Primary School Curriculum.</h3>
			</div>
		</div>

		<div class="item">
			<div class='slideItem2'></div>
		<div class="carousel-caption cpt">
				<h3 class="caption-heading">We are bringing learning alive in the classrooms. Our lessons and
resources have been developed by the teachers for the teachers.</h3>		
      </div>
		</div>
		<div class="item">
			<div class='slideItem3'></div>
		<div class="carousel-caption cpt">
			<h3 class="caption-heading">Re-imagine what is possible for your child's education.
No matter where your child is with their schoolwork – Kampala Smart
School can help.</h3>			
      </div>
		</div>
		<div class="item">
			<div class='slideItem4'></div>
		<div class="carousel-caption cpt">
			<h3 class="caption-heading">Here at Kampala Smart School, we are excited to help your child
learn. Our engaging lessons also ensure that your child will have fun
in the process.</h3>
      </div>
		</div>
		
		<div class="item">
			<div class='slideItem5'></div>
		<div class="carousel-caption cpt">
			<h3 class="caption-heading">1st runner-up of Uganda Communications Commission 2016 ACIA Award under Digital Content.  
			<b>Kampala Smart School</b> improves your school & pupil’s grades with over 3000 lessons and activities across the subjects.</h3>
      </div>
		</div>

		<div class="item">
			<div class='slideItem6'></div>
		<div class="carousel-caption cpt">
			<h3 class="caption-heading">Kampala Smart School was the winner  
			in the Uganda Registration Services Bureau, Intellectual Property 2017 Awards under the Education Category</h3>
      </div>
		</div>

	</div>


	
</div>
-->

	<!-- <div style="top:-5px;" id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
	<ol class="carousel-indicators">
		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		<li data-target="#myCarousel" data-slide-to="1"></li>
		<li data-target="#myCarousel" data-slide-to="2"></li>
		<li data-target="#myCarousel" data-slide-to="3"></li>
		<li data-target="#myCarousel" data-slide-to="4"></li>
		<li data-target="#myCarousel" data-slide-to="5"></li>
		
	</ol>

	<div class="carousel-inner">
		<div class="item active ">
			<div class='slideItem1'></div>
			<div class="carousel-caption cpt">
				<br style="clear:both;">
				<br style="clear:both;">
				<h3 class="caption-heading">
					We are...
				</h3>
				<p>an innovative education platform 
					that uses smart approaches to create impactful
					 learning experiences and solutions for the young 
					 people that are growing up in the fast changing world.</p>
				<div class="cc-controls">
					<a data-toggle="modal" data-target="#accountPop" class="btn-lg-custom"href="#"><i class="fa fa-pencil"> </i> Register</a>
					&nbsp;
					&nbsp;
					&nbsp;
					<a class="tryDemo" href="#">Try our demo</a>
				</div>
			</div>
		</div>

		<div class="item">
			<div class='slideItem2'></div>
		<div class="carousel-caption cpt">
				<br style="clear:both;">
				<br style="clear:both;">
				<h3 class="caption-heading">Bringing learning alive...</h3>
				<p>in the classrooms. Our lessons and resources have been developed by 
					the teachers for the teachers.</p>	
					<div class="cc-controls">
						<a data-toggle="modal" data-target="#accountPop" class="btn-lg-custom"href="#">Get started</a>
						&nbsp;
					&nbsp;
					&nbsp;
						<a href="./pricing.php">See our pricing</a>
					</div>	
      </div>
		</div>
		<div class="item">
			<div class='slideItem3'></div>
		<div class="carousel-caption cpt">
		<br style="clear:both;">
				<br style="clear:both;">
			<h3 class="caption-heading">Re-imagine...</h3>
			<p>what is possible for your child's education.
			<br>No matter where your child is with their schoolwork – Kampala Smart
			School can help.</p>
			<div class="cc-controls">
						<a data-toggle="modal" data-target="#accountPop" class="btn-lg-custom"href="#">Sign in</a>
						&nbsp;
					&nbsp;
					&nbsp;
						<a data-toggle="modal" data-target="#accountPop" href="#">Register</a>
					</div>			
      </div>
		</div>
		<div class="item">
			<div class='slideItem4'></div>
		<div class="carousel-caption cpt">
		<br style="clear:both;">
				<br style="clear:both;">
			<h3 class="caption-heading">We are excited...</h3>
			<p>to help your child
learn. <br> Our engaging lessons also ensure that your child will have fun
in the process.</p>
<div class="cc-controls">
						<a data-toggle="modal" data-target="#downloadModal" class="btn-lg-custom"href="#">Download the app</a>
						&nbsp;
					&nbsp;
					&nbsp;
						<a data-toggle="modal" data-target="#sendMessageModal" href="#">Contact us</a>
					</div>
      </div>
		</div>
		
		<div class="item">
			<div class='slideItem5'></div>
		<div class="carousel-caption cpt">
		<br style="clear:both;">
				<br style="clear:both;">
			<h3 class="caption-heading">1st runner-up...</h3>
			<p>in the Uganda Communications Commission 2016 ACIA Award under Digital Content.  
			<b>Kampala Smart School</b> improves your school & pupil’s grades with over 
			3000 lessons and activities across the subjects.</p>
			<div class="cc-controls">
						<a data-toggle="modal" data-target="#accountPop" class="btn-lg-custom"href="#">Register today</a>
						&nbsp;
					&nbsp;
					&nbsp;
						<a href="#testimonial">Testimonials</a>
					</div>
      </div>
		</div>

		<div class="item">
			<div class='slideItem6'></div>
		<div class="carousel-caption cpt">
		<br style="clear:both;">
				<br style="clear:both;">
			<h3 class="caption-heading">Intellectual Property 2017 Awards winner</h3>
			<p>Kampala Smart School was the winner  
			in the Uganda Registration Services Bureau, Intellectual Property 
			2017 Awards under the Education Category</p>
			<div class="cc-controls">
						<a class="btn-lg-custom" target="_blank" href="https://twitter.com/kampalasmartsch"><i class="fa fa-twitter"> </i> Follows us</a>
						&nbsp;
					&nbsp;
					&nbsp;
						<a href="./about.php">Read more about us</a>
					</div>
      </div>
		</div>

	</div>
			<div>
			
			<!--
			<span class="carousel-left-btn fa fa-chevron-left" aria-hidden="true" style="background-color:#e53e30; color:#fff; line-height:50px; text-align:center; border-radius:50%; width:50px; height:50px;" ></span>
			-->
<!--			<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev" style="z-index:995;">
			<span class="fa fa-chevron-left" aria-hidden="true" style="position:absolute; left:20%; top:45%; background-color:#e53e30; color:#fff; line-height:50px; text-align:center; border-radius:50%; width:50px; height:50px;" ></span>
			<span class="sr-only">Previous</span>
			</a>

			<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next" style="z-index:995;">
			<span class="fa fa-chevron-right" aria-hidden="true" style="position:absolute; right:20%; top:45%; background-color:#e53e30; color:#fff; line-height:50px; text-align:center; border-radius:50%; width:50px; height:50px;" ></span>
			<span class="sr-only">Next</span>
			</a>
		
			</div>	
</div>

 -->
    <!-- slider -->
    <section class="home">
        <img src="./img/kss_mockup.png" alt="" class="home-right-image">
		<div class="slider" >
			<div class="slide">
				<div class="container">
					<div class="caption">
						<h2><span>We are</span></h2>
						<h2 style="font-size: 40px;">an award winning</h2>
						<p>
							student-centred innovative learning platform that creates
							new learning models to serve children, teachers and families
							from kindergarten through high school with distinctive
							pathways in non-traditional learning environments.
						</p>
						<a data-target="#accountPop" data-toggle="modal" class="site-btn register" >Register Now</a>
						<a data-target="#accountPop" data-toggle="modal" class="site-btn" style="padding: 10px !important; background-color: blue !important" >Already Member</a>
					</div>
				</div>
			</div>
			<div class="slide active">
				<div class="container">
					<div class="caption">
						<h2><span>Our students</span></h2>
						<h2 style="font-size: 40px;">achieve success</h2>
						<p>
							for their whole self through a completely personalised
							educational experience, centered on our one-to-one approach:
							one student and one teacher.
						</p>
						<a data-target="#accountPop" data-toggle="modal" class="site-btn register">Register Now</a>
						<a data-target="#accountPop" data-toggle="modal" class="site-btn sb-c2" style="padding: 10px !important; background-color: blue !important">Already Member</a>

					</div>
				</div>
			</div>
			<div class="slide">
				<div class="container">
					<div class="caption">
						<h2>
							<span style="font-size: 50px;">Traditional school</span>
						</h2>
						<h2 style="font-size: 40px;">may not suit</h2>
						<p>
							every child, and often students’ particular needs are not
							adequately met. At Kampala Smart School, we use an
							innovative education model centered on competency-based
							learning.
						</p>
						<a data-target="#accountPop" data-toggle="modal" class="site-btn register">Register Now</a>
						<a data-target="#accountPop" data-toggle="modal" class="site-btn sb-c2" style="padding: 10px !important; background-color: blue !important">Already Member</a>

					</div>
				</div>
			</div>
		</div>

		<!-- controls  -->
		<div class="controls">
			<div class="prev">&lt;</div>
            <div class="next">&gt;</div>
		</div>

		<!-- indicators -->
		<div class="indicator">
		
	</section>
    <!-- slider close -->

	<!-- Intro section -->
	<section class="intro-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="">
						<h2 style="text-align:center;font-size:38px;margin-bottom:30px;">OUR MISSION</h2>
					</div>
				</div>
				
				<div class="col-lg-12" style="text-align:center">
					<p style="font-size:25px;color:#000000">To unlock the true learning potential of each student using innovative approaches.</p>
					<a href="#" class="site-btn">Try it now</a>
				</div>
			</div>
		</div>
	</section>
	<!-- Intro section end -->
	
	    <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center">
          <div class="col-md-12 heading-section text-center  mb-5">
          	
            <h2 class="mb-2">OUR VALUES</h2>
          </div>
        </div>
		<br><br>
        <div class="row d-flex">
          <div class="col-md-6 col-lg-4 d-flex align-self-stretch ">
            <div class="media block-6 services d-block text-center">
            	<div class="icon d-flex justify-content-center align-items-center mb-4">
				<span><i class="fa fa-lightbulb-o" aria-hidden="true"></i></span>
				</div>
              <div class="media-body values py-md-4">
                <h3> Innovation</h3>
                <p> We imagine, create, devise and design.</p>
              </div>
            </div>      
          </div>
          
          <div class="col-md-6 col-lg-4 d-flex align-self-stretch">
            <div class="media block-6 services d-block text-center">
            	<div class="icon d-flex justify-content-center align-items-center mb-4">
				<span><i class="fa fa-search-plus" aria-hidden="true"></i></span>
				</div>
              <div class="media-body  values  py-md-4">
                <h3 class="hea-3">Curiosity</h3>
                <p class="p-3">We are lifelong learners.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-6 col-lg-4 d-flex align-self-stretch ">
            <div class="media block-6 services d-block text-center">
            	<div class="icon d-flex justify-content-center align-items-center mb-4">
				<span><i class="fa fa-heart-o" aria-hidden="true"></i></span>
				</div>
              <div class="media-body values py-md-4">
                <h3 class="hea-31">Grit</h3>
                <p class="p-31">We don’t quit.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-6 col-lg-4 d-flex align-self-stretch">
            <div class="media block-6 services d-block text-center">
            	<div class="icon d-flex justify-content-center align-items-center mb-4">
				<span><i class="fa fa-plus-square" aria-hidden="true"></i></span>
				</div>
              <div class="media-body py-md-4 values ">
                <h3>Empathy</h3>
                <p>We seek to understand before we judge.</p>
              </div>
            </div>      
          </div>

          <div class="col-md-6 col-lg-4 d-flex align-self-stretch">
            <div class="media block-6 services d-block text-center">
            	<div class="icon d-flex justify-content-center align-items-center mb-4">
				<span><i class="fa fa-flask" aria-hidden="true"></i></span>
				</div>
              <div class="media-body py-md-4 values ">
                <h3>Experiential</h3>
                <p>We apply knowledge in a real-world context.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-6 col-lg-4 d-flex align-self-stretch">
            <div class="media block-6 services d-block text-center">
            	<div class="icon d-flex justify-content-center align-items-center mb-4">
				<span><i class="fa fa-check" aria-hidden="true"></i></span>
				</div>
              <div class="media-body py-md-4 values ">
                <h3 class="hea-32">Accountability</h3>
                <p class="p-32 ml-5">We follow through on tasks.</p>
              </div>
            </div>      
          </div>

        </div>
    	</div>
    </section>
	
	
	<div class="site-section block-13" id="testimonials-section" style="background-color: #38b6ff;">
      <div class="container">
        
        <div class="text-center mb-5">
          <div class="block-heading-1">
            <h2>Awards and Recognitions</h2>
          </div>
        </div>

        <div class="owl-carousel nonloop-block-13">
          <div>
            <div class="block-testimony-1 text-center">
                <img src="img/AWARDS_RECOGNITIONS/MTN_INNOVATION_AWARD_LOGO.png" alt="Image" >
              <blockquote class="mb-4 custom-design">
                <p>&ldquo; 2017 MTN Innovation <br> Education Category <br> ( Nominee)  &rdquo;</p>
              </blockquote>              
            </div>
          </div>

          <div>
            <div class="block-testimony-1 text-center">

                <img src="img/AWARDS_RECOGNITIONS/URSB_AWARD.png" alt="Image" >
              <blockquote class="mb-4 custom-design">
                <p>&ldquo; 2017  Intellectual Property  Awards- Uganda Registration Services Bureau  (URSB), Education Category (Winner)  &rdquo;</p>
              </blockquote>              
            </div>
          </div>

          <div>
            <div class="block-testimony-1 text-center">

                <img src="img/AWARDS_RECOGNITIONS/UCC_AWARD.png" alt="Image" >
              <blockquote class="mb-4 custom-design">
                <p>&ldquo; 2016  ACIA Awards -Uganda Communications Commission (UCC) Digital Content ( 1st Runner-up)  &rdquo;</p>
              </blockquote>              
            </div>
          </div>


        </div>

      </div>
    </div>

	<!-- Concept section -->
	<section class="concept-section spad" id="homeschooling">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="section-title">
						<h2 style="font-size: 3.5rem;color: #38b6ff;">Home <br>Schooling <br> Programme</h2>
					</div>
				</div>
				<div class="col-lg-6">
					<p>We design a customized homeschooling pathway for your child based on any of the four curricula with the aim of reigniting your child's 
					passion for learning.
</p>
					<ul style="margin-left: 2rem; font-size: 16px !important">
						<li>
							The English National Curriculum
						</li>
						<li>
						Cambridge Assessments International Education
						</li>
						<li>
						Pearson Edexcel Curriculum
						</li>
						<li>
						The Uganda National School Curriculum
						</li>
						<li>
						Singapore Maths
						</li>
					</ul>
<p>

					We prepare students for International Assessments such as IGCSE, SAT, IELTS, EDEXCEL, Cambridge AS & A Level.
				We will develop a flexible learning schedule that allows a student to take lessons at our Learning Lab or at home.Our students sit for final Examinations with British Council Examination Centre as private candidates or with any other 
				school that registers private candidates.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-3 col-sm-6">
					<div class="concept-item">
						<img src="img/cambridge.jpg" alt="">
						
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="concept-item">
						<img src="img/edexcel.jpg" alt="">
						
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="concept-item">
						<img src="img/IELTS.jpg" alt="">
						
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="concept-item">
						<img src="img/SAT.jpg" alt="">
						
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Concept section end -->

	<!-- Subscription section -->
	<section class="subscription-section spad" id="online-learning">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="sub-text">
						<h2>Online learning</h2>
						<h3>Start a free trial now</h3>
						<p style="color:#fff;font-size:18px;opacity:1;">Online learning delivers the same high-quality experience you'd expect from a traditional classroom but with a number of additional 
							benefits. Sign up/Login to our Learning Application to access digital lessons from Primary one to Primary Seven 
							aligned to the Uganda Primary School Curriculum.</p>
						<a data-target="#accountPop" data-toggle="modal" class="site-btn" id="contact-section">Try it now</a>
					</div>
				</div>
				<div class="col-lg-6">
					<ul class="sub-list" style="background-image: url('img/STUDENT_LEARNING_ON_COMPUTER.jpg'); height:400px;">

					</ul>
				</div>
			</div>
		</div>
	</section>
	<!-- Subscription section end -->

    <div class="site-section bg-light" >
      <div class="container">
        <div class="row">
          <div class="col-12 text-center mb-5"  data-aos-delay="">
            <div class="block-heading-1">
              <h2 style="color:#38b6ff; font-size: 4rem" >Smart Tutor</h2>
			  <br><br>
			  <span> Location is no longer a limitation. No matter where you live, we can find the perfect tutor for your child.  Our Smart Tutors are 
			  qualified, friendly, vetted and mentored for highest quality. </span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 mb-5"  data-aos-delay="100">
              <p class="text-center">
                <h2 class="text-center">BOOK A SMART TUTOR </h2>
              </p>
			  <span style="font-size: 14px !important"> 
			  An experienced tutor is just a click away. Register here to get matched to one.
			  </span>
			  <!-- <br/> -->
			  <br/> 
			  <br>
            <form action="book_tutor.php" method="POST">
              <div class="form-group row">
                <div class="col-md-6 mb-4 mb-lg-0">
                  <input name="class" required type="text" class="form-control form-control-lg" placeholder="Class">
                </div>
                <div class="col-md-6">
                  <input name="curri" type="text" required  class="form-control form-control-lg" placeholder="Curriculum">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <input name="email" type="email" required class="form-control form-control-lg" placeholder="Email address">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <input name="name" type="text" required class="form-control form-control-lg" placeholder="Your Name">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <input name="loc" type="text" required class="form-control form-control-lg" placeholder="Location...">
                </div>
              </div>
			  
			  <div class="form-group row">
                <div class="col-md-12">
                  <input name="phone" type="number" required class="form-control form-control-lg" placeholder="Phone Number">
                </div>
              </div>
			  
              <div class="form-group row">
                <div class="col-md-6 ml-auto">
                  <input type="submit" class="btn btn-md site-btn text-white py-3 px-5 "  style="width: 262px !important;padding: 10px !important;" value="Register Now">
                </div>
              </div>
            </form>
          </div>
		  
		  
          <div class="col-lg-6 ml-auto" style="border-left:1px dotted grey;" data-aos-delay="200">
		    <p class="text-center">
                <h2 class="text-center">BECOME A SMART TUTOR</h2>
            </p>
			<span style="font-size: 14px"> 
			  Teach your favourite subject. Register here.
			</span>
			<br><br>
		
			
            <form action="be_tutor.php" method="post">
              <div class="form-group row">
                <div class="col-md-6 mb-4 mb-lg-0">
                  <input name="qualifi" required type="text" class="form-control form-control-lg" placeholder="Qualification">
                </div>
                <div class="col-md-6">
                  <input type="text" name="subject" required class="form-control form-control-lg" placeholder="Subject">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <input type="email" class="form-control form-control-lg" name="email" required placeholder="Email address">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <input type="text" class="form-control form-control-lg" placeholder="Your Name " name="name" required>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <input type="text" class="form-control form-control-lg" placeholder="Location..." name="loc" required>
                </div>
              </div>
			  
			  <div class="form-group row">
                <div class="col-md-12">
                  <input type="number" class="form-control form-control-lg" placeholder="Phone Number" required name="phone">
                </div>
              </div>
			  
              <div class="form-group row">
                <div class="col-md-6 ml-auto">
                  <input type="submit" class="btn btn-block site-btn text-white py-3 px-5" style="padding: 10px !important;" value="Apply Now" id="ftco-appointment">
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
	
	
	<section class="ftco-appointment ftco-section ftco-no-pt ftco-no-pb img" style="background-image: url(img/bg_2.jpg);">
		<div class="overlay"></div>
    	<div class="container">
    		<div class="row d-md-flex justify-content-end">
    			<div class="col-md-12 col-lg-6 half p-3 py-5 pl-lg-5 ">
    				<h2 class="mb-4">Send a Message &amp; Get in touch!</h2>
    				<form action="sendMail.php" method="POST" class="appointment">
    					<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<input type="text" name="fname" class="form-control" placeholder="Your Name" required>
								</div>
							</div>
							<div class="col-md-6">
							<div class="form-group">
								<input type="text" class="form-control" name="email" placeholder="Email" required>
							</div>
							</div>
							<div class="col-md-12">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="phone number (optional)" name="phone">
							</div>
							</div>
						<div class="col-md-12">
							<div class="form-group">
								<textarea name="msg" cols="30" rows="7" class="form-control" placeholder="Message" required></textarea>
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<input type="submit" value="Send message" class="btn btn-primary py-3 px-4" style="font-size: 14px">
							</div>
						</div>
    					</div>
	          </form>
    			</div>
    		</div>
    	</div>
    </section>	

	<!--  -->


	<!-- Bootstrap => JS, Popper.js, and jQuery -->
    <script src="js/jquery-3.2.1.min.js"></script>    
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.slicknav.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/aos.js"></script>
	<script src="js/scroll.js"></script>
	<script src="js/script.js"></script>
	<script async="" src="https://drv.tw/inc/wd.js"></script>
	
	<?php //require("inc/modal.php")	?>
	

<!-- <div id="testimonial" class="jumbotron feedBack">
	<div class="container">
	<h3 class="animation animated-item-1 text-center">What our amazing students say about us.</h3>
		<br>

		</div>
		<div class="container feeDInner" style="background-color:#fff;">
		
		<div class="profile">
			<img src="images/AbigailMukisa.png" class="img-responsive  img-circle">
			
			<div class="sayings">
			<p class="text-center">“Before I started using Kampala Smart School I was never sure about the answer and I would sometimes be guessing when 
			I answered the question. After using the programme … 
			Science is now my favourite subject.”  </p>
			<p class="text-center"><strong>Abigail Mukisa,</strong><br><small>Learner.</small></p>
			</div>
		</div>
				<div class="profile">
			<img src="images/EstherAtuhaise.png" class="img-responsive  img-circle">
			
			<div class="sayings">
			<p class="text-center">“I have improved over the past year in both my Mathematics and English. 
			I am finding everything so much easier. Having tutorials has made the difference! 
			Tests are no longer a problem and my homework is a breeze. Thanks Kampala Smart School” </p>
			<p class="text-center"><strong>Esther Atuhaise,</strong><br><small>Learner.</small></p>
			</div>
		</div>
		
			<div class="profile">
			<img src="images/DeshinKumar.png" class="img-responsive  img-circle">
			
			<div class="sayings">
			<p class="text-center">“My mum made me do a lesson a day. I now feel really great when I am doing my Mathematics because over the holidays I was able to revise my work and catch up” </p>
			<p class="text-center"><strong>Dishin Kumar,</strong><br><small>Learner.</small></p>
			</div>
		</div>
		<div class="profile">
			<img src="images/LouisAcon.png" class="img-responsive  img-circle">
			
			<div class="sayings">
			<p class="text-center">“My Mathematics has improved a lot and I’m now in the top group in my class. 
			Kampala Smart School has made it easy for me to study at home and it really helps me in the class at school.” </p>
			<p class="text-center"><strong>Louis Acon</strong><br><small>Learner.</small></p>
			</div>
		</div>
		
		<div class="profile">
			<img src="images/AsiimweNathan.png" class="img-responsive  img-circle">
			
			<div class="sayings">
			<p class="text-center">“Kampala Smart School  has really made a difference for me at school. 
			Before we started on the programme, I never wanted to be picked by the teacher to answer a question,
			so I would always be looking down when the teacher asked a question. Now it is different!"</p>
			<p class="text-center"><strong>Nathan Asiimwe</strong><br><small>Learner.</small></p>
			</div>
		</div>
	
		<div class="profile">
			<img src="images/ChristenNatasha.png" class="img-responsive  img-circle">
			
			<div class="sayings">
			<p class="text-center">“I am new to Kampala Smart School. My sister and I have only been on the programme for about 5 months and [now] I really do understand what the teacher is saying.”  </p>
			<p class="text-center"><strong>Christen Natasha</strong><br><small>Learner.</small></p>

			</div>
		</div>
		</div>
	</div> -->

	<!-- <div class="blueBox doodle_bg">
	<br>
	<div class="container">
		<h3 class='animation animated-item-1 text-center'>Get started as a Parent and register your child to learn now</h3>
		<br>
	
	<div class="accBox">
		<div class="animation animated-item-1 loginBox">
			<p class="text-center"><strong>Do you have an account with us ?</strong></p>
			<br>
			<div class='button-center'>
			<button class="btn btn-danger" data-target="#accountPop" data-toggle="modal"><strong>Get started</strong></button>
			</div>
		</div>
		<div class="animation animated-item-1 loginBox">
			<p class="text-center"><strong>Do you have any questions ?</strong></p>
			<br>
			<div class='button-center'>
			<button class="btn btn-danger" data-target="#sendMessageModal" data-toggle="modal"><strong>Contact us</strong></button>
			</div>
		</div>
	</div>
	</div>
<br>
</div > -->

<!-- <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-92899523-1', 'auto');
  ga('send', 'pageview');



</script> -->
<?php  include("inc/footer.php"); ?>
<script>
  $( function(){
	var app = new initHome();
	app.slider('.feeDInner');
  })
  function initHome(){
	  this.slider = function(slidElement){
		$(slidElement).slick({
			dots: true,
			infinite: true,
			autoplay:true,
			fade: true,
			arrows: false,
			cssEase: 'linear',
			autoplaySpeed: 9000,
			adaptiveHeight:true,
			responsive:true
		});
	  }
  }

</script>
<?php  if (isset($_GET['action'])){ ?>
	<script>
		$( function(){
			$('#accountPop').modal('show');
		});
		</script>
		<?php
			}
	?>


