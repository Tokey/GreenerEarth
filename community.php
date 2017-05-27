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
                    
                    <li><a href="community.php">COMMUNITY</a>
                    </li>

                    <li><a href="blogs.html">BLOGS</a>
                    </li>
					<li><a href="Forums.php">FORUMS</a>
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
                <span class="head-sub-main"><a href="https://www.youtube.com/watch?v=6UGsRcxaSAI">Before the flood</a></span>
                <div class="head-last">

                    Save the earth before it dies
                </div>

            </div>
               <div class="col-md-3 col-sm-3">
                   <div class="div-trans text-center">
                       <h3>Send us your ideas </h3>
                        <form name ="form1" METHOD="POST" ACTION ="community.php">

                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <INPUT TYPE="text" class="form-control" name = "name" required="required" value="" placeholder="Name">
                                </div>
                            </div>

                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <INPUT TYPE="text" class="form-control" name="email" required="required" value="" placeholder="Email address">
                                </div>
                            </div>


                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <textarea  name="message" id="Textarea1" name= "message" required="required" value="" class="form-control" rows="5" placeholder="Message"></textarea>
                                </div>
                                <div class="form-group">
                                    <INPUT TYPE="submit" name = "enter" class="btn btn-success" value ="Submit Here">
                                </div>
                            </div>

                    </form>
                   </div>

            </div>
			
			

        </div>
    </div>
          </div>
		  
    <section  id="blogs">
        <div class="container">
            <div class="row text-center">


                  <div class="col-md-8 col-md-offset-2">

                    <h2> IDEAS </h2>
                    <div id="social-icon">



                    </div>
                    <h4>


                        <?php
													$user = "root";
													$password = "";
													$server = "localhost";
													//mysql_connect($server,$user,$password);
													$database = "Community";

													$db_handle = mysqli_connect($server,$user,$password);
													$db_found = mysqli_select_db($db_handle,$database);
													if($db_found)
													;//print  ("CONNECTED!!!");
													else
													print  ("No connection available ");

													$name = '';
						                            $email = '';
						                            $message = '';


						                            if ( ! empty($_POST['name'])){
						                                $name = $_POST['name'];
						                            }

						                            if ( ! empty($_POST['email'])){
						                                $email = $_POST['email'];
														//print("".$email);
						                            }

						                            if ( ! empty($_POST['message'])){
						                                $message = $_POST['message'];
														$message = strip_tags($message);
						                            }

						                            if(isset($_POST['enter'])){
														
														
						                               $sql = "INSERT INTO ideas (Name,Email,Message) VALUES ('$name','$email','$message');";
						                               mysqli_query($db_handle,$sql);
													   echo "<script>
       													 alert('Idea Submitted!');
               											  </script>";

													}

													$sql = "SELECT * FROM ideas";
													$res = mysqli_query($db_handle,$sql);






													while($db_field = mysqli_fetch_assoc($res))
													{
														print("<strong> Posted by | </strong>");
														print("".$db_field['Name']);  print("</br>");
														print("<strong> Email | </strong>");
														print("".$db_field['Email']);print("</br>");

														print("<strong>");

														print("".$db_field['Message']); print("</br>");

														print("</strong>");


														print("</br>");
														print("</br>");
														print("</br>");

													}

                            ?>


                    </h4>
                </div>
				
				 
               		

    </section>
	
	<section id="surveys">
	<div class="container">
            <div class="row text-center">
				<h2> SURVEYS </h2>
                    <div id="social-icon">



                    </div>
                    <h4>


                        <?php
													


						                            

													$sql = "SELECT * FROM Survey";
													$res = mysqli_query($db_handle,$sql);






													while($db_field = mysqli_fetch_assoc($res))
													{
														print("<strong> Survey taken by | </strong>");
														print("".$db_field['Name']);  print("</br>");
														
														print("<strong> What level are you in your education? </strong>");print("</br>");
														print("Answer: ".$db_field['level']);print("</br>");print("</br>");

														print("<strong> Do you think that the global mean temperature has risen, stayed the same, or fallen since 1800? </strong>");print("</br>");
														print("Answer: ".$db_field['global']);print("</br>");print("</br>");
														
														print("<strong> Do you think that the evidence on global warming is widely accepted by the scientific community, or do a significant number of scientists have serious doubts? </strong>");print("</br>");
														print("Answer: ".$db_field['evidence']);print("</br>");print("</br>");
														
														print("<strong> Do you think that human activity is contributing to any increase in Global mean temperatures? </strong>");print("</br>");
														print("Answer: ".$db_field['activity']);print("</br>");print("</br>");
														
														print("<strong> Do you think that the condition of the environment will be better, worse, or about the same for the next generation? </strong>");print("</br>");
														print("Answer: ".$db_field['environment']);print("</br>");print("</br>");
														
														print("<strong> What are some of the key steps you will take to prevent Climate Change? </strong>");print("</br>");
														print("Answer: ".$db_field['steps']);print("</br>");print("</br>");


														print("</br>");
														print("</br>");
														print("</br>");

													}

                            ?>


                    </h4>
					
					</section>
    <!--End Pricing Section -->
    <!--parallax two-->
    
    <!--./parallax two-->


    <!-- Contact Section -->
    <section  id="contact-sec">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <div id="social-icon">
                          <strong> Address:</strong> AUST
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
			Credits : Tokey And Naimul

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
