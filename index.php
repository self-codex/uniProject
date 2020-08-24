<?php include('doctype.php'); ?>

    <title>LearningOnline</title>

    <style>
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
            .back-image {
                margin-top: 62px;
            }
        }
        


    </style>


</head>

<body>

    <?php include('menu.php'); ?> 

    <!-- End Navigation -->

    <!-- Start Header Jumbotron-->

    <header class="jumbotron back-image " style="background-image: url(images/Banner.jpeg);min-height: 90vh;">
        <div class="text-center" style="margin-top: 120px;">
            <h1 class="text-danger font-weight-bold">LearningOnline</h1>
            <p class="font-italic font-weight-bold st">Learn and Implement</p>
            <a href="#Contact" class="btn btn-outline-danger mr-4">Hire Us</a>
            <a href="signUp.php" class="btn btn-outline-danger">Join Us</a>
        </div>
    </header>


    <!-- End Header Jumbotron -->

    <!-- Start Services -->
    <div class="container text-center border-bottom" id="Services">
        <h2>Our Services</h2>
        <div class="row mt-4 justify-content-center">
            <div class="col-sm-5 col-md-3 mb-4 ">
                <a href="service.php#Python"><i class='fab fa-python fa-10x ' style="color: #0a0a57;" ></i></a>
                <h4 class="mt-4">Python</h4>
            </div>
            <div class="col-sm-5 col-md-3 mb-4">
                <a href="service.php#Android"><i class="fab fa-android fa-10x text-success"></i></a>
                <h4 class="mt-4">Android Application</h4>
            </div>
            <div class="col-sm-5 col-md-3 mb-4">
                <a href="service.php#Web"><i class="fas fa-desktop fa-10x text-primary"></i></a>
                <h4 class="mt-4">Web Application</h4>
            </div>
            <div class="col-sm-5 col-md-3 mb-4">
                <a href="service.php#Data"><i class="fas fa-database fa-10x text-info"></i></a>
                <h4 class="mt-4">Database</h4>
            </div>

        </div>
    </div>
    <!-- End Services -->

    <!-- Start Course  -->
    <div class="container pt-5" id="Courses">
        <!-- Start Course Container -->
        <h2 class="text-center">Our Courses</h2>
        <!-- Course Heading -->
        <div class="row mt-4">
            <!-- Start Course 1st Row -->
            <div class="col-lg-6 mb-4">
                <!-- Start Course 1st Row's 1st Column -->
                <img src="images/course1.jpeg" alt="" class="img-fluid">
            </div>
            <!-- End Course 1st Row's 1st Column -->

            <div class="col-lg-6">
                <!-- Start Course 1st Row's 2nd Column -->
                <h2 class="text-center">Learn Python Programming</h2> <br>
                <p>Learn how to make python programming with free online classes that will teach you the fundamentals with LearningOnline. Develop simple programs in python making use of conditionals, loops, and recursion Understand basic mechanisms of the
                    OOP paradigm, as well as use the API of some of the most common python classes Detect and correct common programming errors at compile time and runtime Compare the efficiency of programs in terms of resources used Model simple programs
                    using basic software engineering techniques. Python has syntax that allows developers to write programs with fewer lines than some other programming languages. .</p>
            </div>
            <!-- End Course 1st Row's 2nd Column -->
        </div>
        <!-- End Course 1st Row -->

        <div class="row mt-4">
            <!-- Start Course 2nd Row -->
            <div class="col-lg-6">
                <!-- Start Course 2nd Row's 1st Column -->
                <h2 class="text-center">Real World Projects</h2> <br>
                <p>Python can be used to develop different applications like web applications, graphic user interface based applications, software development application, scientific and numeric applications, network programming, Games and 3D applications
                    and other business applications.</p>
                <p>
                    Hangman Game with Python Intermediate Python Projects Working with Graphs in Python Advanced Python Projects Machine Learning using Python.
                </p>
            </div>

            <!-- End Course 2nd Row's 1st Column -->

            <div class="col-lg-6 mb-4">
                <!-- Start Course 2nd Row's 2nd Column -->
                <img src="images/course2.jpeg" alt="" class="img-fluid">
            </div>
            <!-- End Course 2nd Row's 2nd Column -->
        </div>
        <!-- End Course 2nd Row -->
    </div>
    <!-- End Course Container -->
    <!-- End Course  -->

    <!-- Start Team  -->
    <div class="jumbotron bg-danger " id="Team" style="font-size: .9rem; border-radius:0;">
        <!-- Start Team Jumbotron -->
        <div class="container">
            <!-- Start Team Container -->
            <h2 class="text-center text-white">Team Work</h2>
            <!-- Team Heading-->
            <div class="row mt-5">
                <!-- Start Team Row-->
                <div class="col-lg-3 col-sm-6">
                    <!-- Start Team 1st Column-->
                    <div class="card shadow-lg mb-2 ">
                        <div class="card-body text-center custom-height">
                            <img src="images/musadiq.jpg" class="img-fluid" style="border-radius: 100px;">
                            <h4 class="card-title ">Musaddaq Awan</h4>
                            <p class="card-text text-justify custom-overflow">Working as a freelance web developer & offering my service on upwork. Served professionally in all terms of PHP & Wordpress taking my experience to next level moving.</p>
                        </div>
                    </div>
                </div>
                <!-- End Team 1st Column-->

                <div class="col-lg-3 col-sm-6 ">
                    <!-- Start Team 2nd Column-->
                    <div class="card shadow-lg mb-2 ">
                        <div class="card-body text-center custom-height">
                            <img src="images/rehman.jpg" class="img-fluid" style="border-radius: 100px;">
                            <h4 class="card-title">Rahman Rasool</h4>
                            <p class="card-text text-justify custom-overflow">He is a graduate of FC College and has a very varied local and foreign experience designing apps and various websites. He is also a renowned freelancer.</p>
                        </div>
                    </div>
                </div>
                <!-- End Team 2nd Column-->

                <div class="col-lg-3 col-sm-6">
                    <!-- Start Team 3rd Column-->
                    <div class="card shadow-lg mb-2 ">
                        <div class="card-body text-center custom-height">
                            <img src="images/imran.jpg" class="img-fluid" style="border-radius: 100px;">
                            <h4 class="card-title">Imran Shabbir</h4>
                            <p class="card-text text-justify custom-overflow">Software Developer with 1 year of experience in coding, testing and establishing system improvements (using Java, Dot Net), in addition, also learning the Android Development on Cross Platform using React Native.</p>
                        </div>
                    </div>
                </div>
                <!-- End Team 3rd Column-->

                <div class="col-lg-3 col-sm-6">
                    <!-- Start Team 4th Column-->
                    <div class="card shadow-lg mb-2 ">
                        <div class="card-body text-center custom-height">
                            <img src="images/talha.jpg" class="img-fluid" style="border-radius: 100px;">
                            <h4 class="card-title">M.TALHA</h4>
                            <p class="card-text text-justify custom-overflow">Software Developer with 2 year experience in coding, testing and improvements using Python in Machine Learning Big Data and Profational in Python Programming language.</p>
                        </div>
                    </div>
                </div>
                <!-- End Team 4th Column-->
            </div>
            <!-- End Team Row-->
        </div>
        <!-- End Team Container -->
    </div>
    <!-- End Team Jumbotron -->

    <!--Start Contact Us-->

    <div class="container mb-3" id="Contact">
        <!--Start Contact Us Container-->
        <h2 class="text-center">Contact US</h2>
        <!-- Contact Us Heading -->
        <div class="row">
            <!--Start Contact Us Row-->
            <div class="col-md-8">
                <!--Start Contact Us 1st Column-->
                <form action="userinfo.php" class="mb-2" method="post">
                    <input type="text" class="form-control" name="userName" placeholder="Name" /><br />
                    <input type="tel" class="form-control" name="userPhone" placeholder="Phone" /><br />
                    <input type="email" class="form-control" name="userEmail" placeholder="E-mail" /><br />
                    <textarea type="textarea" class="form-control" name="userComment" placeholder="How can we help you?" style="height:150px;"></textarea><br />
                    <button class="btn btn-primary" type="submit">Submit</button>
                </form>
            </div>
            <!-- End Contact Us 1st Column-->

            <div class="col-md-4 text-center">
                <!-- Start Contact Us 2nd Column-->
                <strong>Main Campus:</strong> <br> Superior Uni Pvt Ltd, <br> raiwand, Road <br> Lahore - 834005 <br> Phone: +(042) 38102223 <br>
                <a href="https://superior.edu.pk/" target="">www.superior.edu.pk</a> <br>

                <br><br>
                <strong>Gold Campus:</strong> <br> IT/CS Campus Pvt Ltd, <br> Lahore <br> WB - 804002 <br> Phone: +(042) 38102223 <br>
                <a href="https://superior.edu.pk/" target="">www.superior.edu.pk</a> <br>
            </div>
            <!-- End Contact Us 2nd Column-->
        </div>
        <!-- End Contact Us Row-->
    </div>
    <!-- End Contact Us Container-->
    <!-- End Contact Us -->

    <!-- Start Footer-->
    <?php include('footer.php') ?>