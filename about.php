 <!-- include document type and links -->
<?php include('doctype.php'); ?>

  <title>About Us</title>

  <style>
    .jumbotron {
    padding: 2rem 1rem;
    margin-bottom: 0 !important;
    background-color: white;
    border-radius: 0;
    min-height: 100vh !important;
    }
    mt-5{
      margin:0;

    }
        .custom-height{
            height:380px;

        }
        .custom-overflow{
            overflow: hidden;
            text-overflow: ellipsis;
            height: 200px;
        }
        .card-title{
            font-size:1.4rem;
        }
        @media(max-width:1200px){
          .custom-overflow{
                height: 170px;
            }
            .custom-height{
                height:370px;
            }
        }
        @media(max-width:991px){
          .custom-overflow{
                height: 150px;
            }
            .custom-height{
                height:300px;
            }
        }
        @media(max-width:768px){
          .custom-overflow{
                height: 150px;
            }
            .custom-height{
                height:320px;
            }
        }
        @media(max-width:575px){
          .custom-overflow{
                height: auto;
            }
            .custom-height{
                height: auto;
            }
            .font-weight-bold,
            .font-weight-bold {
                font-size:2rem;
            }
            .display-4{
              font-size:2rem;
              font-weight: 400;
            }
            .custom-font{
              font-size:20px;
              font-weight: bold;
            }
        }


  </style>

</head>
                
<body>
  <!-- Start Nagigation -->
  
  <?php include('menu.php') ?> 
  
  <!-- END NAV -->

  <!-- Jumbotron -->


<div class="jumbotron no-margin no-padding"  >
  <div class="container pt-5">
      <div class="display-4 my-2">LearningOnline</div>
      <p class="text-justify">
          LearningOnline is the trusted platform for education and learning of I.T Students, Programmers, Software Developers etc. Founded by Muhammad Talha, M. Imran Shabbir, Rahman Rasool as well Malik Musaddaq Awan which entail more than dozen of learners, the learner include from across the globe are engaging to us with the passage of time due to quality and standard of education being imparted by our dedicated team which include the Web Application, Android Application Developments, Database etc. As a global nonprofit, LearningOnline is transforming I.E Education, removing the barriers of cost, location and access. Fulfilling the demand for people to learn on their own terms, LearningOnline is reimagining the possibilities of education, providing the highest-quality, stackable learning experiences including the ground-breaking masters from different universities and I.T Industries. Supporting learners at every stage, whether entering the job market, changing fields, seeking a promotion or exploring new interests, LearningOnline delivers courses for curious minds on topics ranging from Web Development to Android Development, data and computer science to leadership and communications. OnlineLearning is where you go to learn.
      </p>
      <h3><span class="font-weight-normal custom-font">Our Global Learning Community</span></h3>
      Our students mainly come from Pakistan as well as also from different Middle East countries in the world! Whether you are interested in Web Development, Computer Science, Programming, Database etc, or Data Science, we have the course for you! Enroll today and learn something new.
      <h3><span class="font-weight-normal custom-font">Our Impact</span></h3>
      We are proud to reflect on the impact that LearningOnline and our partner institutions have had on education and learning since our founding in 2019. Follow along on our journey and see where our movement is going next.
  </div>
</div>

<!-- Start Team  -->

<div class="jumbotron bg-danger no-margin no-padding" id="Team" style="font-size: .9rem; border-radius:0;">   <!-- Start Team Jumbotron -->
  <div class="container">     <!-- Start Team Container -->
    <h2 class="text-center text-white">Team Work</h2>    <!-- Team Heading-->
    <div class="row mt-5">    <!-- Start Team Row-->
      <div class="col-lg-3 col-sm-6">     <!-- Start Team 1st Column-->
        <div class="card shadow-lg mb-2">
          <div class="card-body text-center custom-height">
            <img src="images/musadiq.jpg" class="img-fluid" style="border-radius: 100px;">
            <h4 class="card-title ">Musaddaq Awan</h4>
            <p class="card-text text-justify custom-overflow">Working as a freelance web developer & offering my service on upwork. Served professionally in all terms of PHP & Wordpress taking my experience to next level.</p>
          </div>
        </div>
      </div>    <!-- End Team 1st Column-->

      <div class="col-lg-3 col-sm-6">     <!-- Start Team 2nd Column-->
        <div class="card shadow-lg mb-2">
          <div class="card-body text-center custom-height">
            <img src="images/rehman.jpg" class="img-fluid" style="border-radius: 100px;">
            <h4 class="card-title">Rahman Rasool</h4>
            <p class="card-text text-justify custom-overflow">He is a graduate of FC College and has a very varied local and foreign experience designing apps and various websites. He is also a renowned freelancer.</p>
          </div>
        </div>
      </div>      <!-- End Team 2nd Column-->

      <div class="col-lg-3 col-sm-6">       <!-- Start Team 3rd Column-->
        <div class="card shadow-lg mb-2">
          <div class="card-body text-center custom-height">
            <img src="images/imran.jpg" class="img-fluid" style="border-radius: 100px;">
            <h4 class="card-title">Imran Shabbir</h4>
            <p class="card-text text-justify custom-overflow">Software Developer with 1 year of experience in coding, testing and establishing system improvements (using Java, Dot Net), in addition, also learning the Android Development on Cross Platform using React Native.</p>
          </div>
        </div>
      </div>       <!-- End Team 3rd Column-->

      <div class="col-lg-3 col-sm-6">        <!-- Start Team 4th Column-->
        <div class="card shadow-lg mb-2">
          <div class="card-body text-center custom-height">
            <img src="images/talha.jpg" class="img-fluid" style="border-radius: 100px;">
            <h4 class="card-title">M.TALHA</h4>
            <p class="card-text text-justify custom-overflow">Software Developer with 2 year experience in coding, testing and improvements using Python in Machine Learning Big Data and Profational in Python Programming language.</p>
          </div>
        </div>
      </div>     <!-- End Team 4th Column-->
    
    </div>    <!-- End Team Row-->
  </div>  <!-- End Team Container -->
</div> <!-- End Team Jumbotron -->


<!-- footer include -->
<?php include('footer.php') ?>