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

                    <li><a href="#contact-sec">PROFILE</a>
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
               <div class="col-md-3 col-sm-3">
                   <div class="div-trans text-center">
                       <h3>Send us your ideas </h3>
                        <form>

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
                                    <textarea name="message" id="Textarea1" required="required" class="form-control" rows="3" placeholder="Message"></textarea>
                                </div>
                                <div class="form-group">
                                    <button type="submit" name = "enter" class="btn btn-success">Submit Here </button>
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
						                            }

						                            if(isset($_POST['enter'])){
						                               $sql = "INSERT INTO ideas (Name,Email,Message) VALUES ('$name','$email','$message');";
						                               mysqli_query($db_handle,$sql);

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
