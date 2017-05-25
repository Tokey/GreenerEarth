<mark><ruby><figure><footer><header><hgroup><aside><article><nav></nav></article></aside></hgroup></header></footer></figure></ruby></mark><!DOCTYPE html>

<html lang="en">
<!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="naimul011" >

    <title>The earth</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <!-- Navigation -->
     <header>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="htttp://www.binarytheme.com">GREENER EARTH</a>
            </div>
            <!-- Collect the nav links for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php">HOME</a>
                    </li>
                    <li><a href="community.php">COMMUNITY</a>
                    </li>

                    <li><a href="blogs.html">BLOGS</a>
                    </li>

                    <li><a href="profiles.php">PROFILE</a>
                    </li>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
          </header>
    <!--End Navigation -->




    <!--Header section  -->
    <div id="home">
    <div class="container" >
        <div class="row ">
            <div class="col-md-9 col-sm-9">
                <h1 class="head-main">THE EARTH</h1>
                <span class="head-sub-main">Before the flood</span>
                <div class="head-last">

                    Save the earth before it dies
                </div>

            </div>
               

        </div>
    </div>
          </div>

    <section  id="blogs">
        <div class="container">
            <div class="row text-center">

                    <h2> Sign Up </h2>
                  <form action="signup.php" method="POST" enctype="multipart/form-data" > 
                   <div class="col-md-12 col-sm-12">
                   <div class="form-group">
                       <h3>Sign Up Today! Absolutely Free! </h3>
                        

                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <input type="text" name = "name" class="form-control" required="required" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <input type="text" name = "email" class="form-control" required="required" placeholder="Email address">
                                </div>
                            </div>

							<div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <input type="text" name = "pass" class="form-control" required="required" placeholder="Password">
                                </div>
                            </div>
							
							
							<div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <input type="text" name = "conpass" class="form-control" required="required" placeholder="Confirm Password">
                                </div>
								
							<div class="form-group">
                                    <textarea  name="vision" id="Textarea1" name= "message" required="required" value="" class="form-control" rows="6" placeholder="Your Vision On Climate Change"></textarea>
                                </div>
								
								
								<div class="btn btn-success">
								
								
								<h4>Upload Your Profile Image</h4> 
								
								Required 4:3 aspect ratio and .jpg type only
								
								<form action="signup.php" method="POST" enctype="multipart/form-data" > 
								<input type="file" name="fileToUpload" id="fileToUpload" required="required"  style="border:solid;"></br>
																
								</div>
								
								
								</br>
								</br>
                                <div class="form-group">
                                    <button type="submit" name = "signup" class="btn btn-success">Submit </button>
                                </div>
                            </div>

                    
                   </div>

            </div>
			</form>
			<?php
			if(isset ($_POST['signup']))
			{
				$name = $_POST['name'];
				$email = $_POST['email'];
				$pass = $_POST['pass'];
				$conpass = $_POST['conpass'];
				$vision = $_POST['vision'];
				if($pass==$conpass){	
				print("SignUp Successful!");
				$user = "root";
							$password = "";
							$server = "localhost";
							//mysql_connect($server,$user,$password);
							$database = "Community";

							$db_handle = mysqli_connect($server,$user,$password);
							$db_found = mysqli_select_db($db_handle,$database);
							if($db_found);
							//print  ("CONNECTED!!!");
							else
							print  ("No connection available ");
						
						$sql = "INSERT INTO Profile (Name,Email,Password,Vision) VALUES ('$name','$email','$pass','$vision');";
                        mysqli_query($db_handle,$sql);
						$sql = "SELECT ID FROM Profile where Name = '$name'";
						
						$res= mysqli_query($db_handle,$sql);
						$id = mysqli_fetch_assoc($res);
						
						move_uploaded_file($_FILES['fileToUpload']['tmp_name'],"profileImages/".$id['ID'].".jpg");
				}
				else
					print("PASSWORD DO NOT MATCH!");
			}
			?>

    </section>
    <!--End Pricing Section -->
    <!--parallax two-->
    <section  id="Parallax-two">
        <div class="container">

            <div class="row text-center">
                <div class="col-md-8 col-md-offset-2 ">
                     <h2><i class="fa fa-briefcase fa-3x"></i>&nbsp;Just Space </h2>
                    <h4>
                        <strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                         Curabitur nec nisl odio. Mauris vehicula at nunc id posuere.
                        </strong>
                    </h4>
                </div>

            </div>


        </div>
    </section>
    <!--./parallax two-->


    <!-- Contact Section -->
    <section  id="contact-sec">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <div id="social-icon">
                          <strong> Address:</strong> Credits
                        <a href="#"><i class="fa fa-facebook fa-2x"></i></a>
                        <a href="#"><i class="fa fa-twitter fa-2x"></i></a>
                        <a href="#"><i class="fa fa-linkedin fa-2x"></i></a>
                        <a href="#"><i class="fa fa-google-plus fa-2x"></i></a>
                        <a href="#"><i class="fa fa-pinterest fa-2x"></i></a>
                    </div>
                </div>


            </div>
        </div>
    </section>

    <!--End Contact Section -->
    <!--footer Section -->
    <div class="for-full-back " id="footer">
			Credits

    </div>
    <!--End footer Section -->
    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY  -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP CORE SCRIPT   -->
    <script src="assets/plugins/bootstrap.js"></script>
    <!-- PARALLAX SCRIPT   -->
    <script src="assets/plugins/4jquery.parallax-1.1.3.js"></script>
    <!-- CUSTOM SCRIPT   -->
    <script src="assets/js/custom.js"></script>
</body>
</html>
