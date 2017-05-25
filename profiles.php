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
                <a class="navbar-brand" href="htttp://www.binarytheme.com">
				
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
												
													$sql = "SELECT * FROM profile";
													$res = mysqli_query($db_handle,$sql);
													$isLoggedIn = false;

													while($db_field = mysqli_fetch_assoc($res))
													{
															if($db_field['state']=='loggedIn')
															{
																print("".$db_field['Name']);
																$isLoggedIn = true;
																break;
															}
													}
													if($isLoggedIn == false)
														echo"Please Log In";
													
													
						                            

													

							if ( ! empty($_POST['Email'])){
                                $email = $_POST['Email'];
                            }

                            if ( ! empty($_POST['Password'])){
                                $pass = $_POST['Password'];
								
                            }
												$chk = false;
                           
													if(isset($_POST['LogIn']))
													{
													$sql = "SELECT Name,Email,Password FROM profile";
													$res = mysqli_query($db_handle,$sql);

													while($db_field = mysqli_fetch_assoc($res))
													{
														if($db_field['Email']=$email && $db_field['Password'] == $pass)
														{
															$chk=true;
															break;
														}
													}
													}
													if($chk==true)
													{
													$sql = "UPDATE profile set State = 'loggedOut'";
													mysqli_query($db_handle,$sql);
													$sql = "UPDATE profile set State = 'loggedIn' where Email = '$email'";
													mysqli_query($db_handle,$sql);
													
													$sql = "SELECT * FROM profile";
													$res = mysqli_query($db_handle,$sql);
													
													while($db_field = mysqli_fetch_assoc($res))
													{
														if($db_field['Email']=$email);
															//print("Welcome! ".$db_field['Name']);
													}
													
													}
															
				
				?>
				</a>
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
                       <h3>Log In </h3>
                        <form form name ="form1" METHOD="POST" ACTION ="profiles.php">

                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <input type="text" name = "Email" class="form-control" required="required" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <input type="text" name = "Password" class="form-control" required="required" placeholder="Password">
                                </div>
                            </div>


                            
                                <div class="form-group">
                                    <button type="submit" name = "LogIn" class="btn btn-success">Log In </button> </br></br>OR</br></br>
									 <a href="signup.php" class="btn btn-success">Sign Up </a></br></br>
									<?php
									$sql = "SELECT * FROM profile";
													$res = mysqli_query($db_handle,$sql);
													$isLoggedIn = false;

													while($db_field = mysqli_fetch_assoc($res))
													{
															if($db_field['state']=='loggedIn')
															{
																print("Welcome! ".$db_field['Name']);
																$isLoggedIn = true;
																break;
															}
													}
													
									?>				
                                </div>
                            </div>
							

                    </form>
                   </div>

            </div>

        </div>
    </div>
          </div>

    <section  id="contact-sec">
        <div class="container">
            <div class="row text-center">


                  <div class="row ">
                <div class="col-md-6 col-sm-6">
                    <h3>This is me!</h3>
                    <p class="btn btn-success">
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
												
													$sql = "SELECT * FROM profile";
													$res = mysqli_query($db_handle,$sql);
													$isLoggedIn = false;

													while($db_field = mysqli_fetch_assoc($res))
													{
															if($db_field['state']=='loggedIn')
															{
																//print("".$db_field['Name']);
																$isLoggedIn = true;
																print("<img src=\"profileImages\\".$db_field['ID'].".jpg\" style=\"width:304px;height:228px;border:solid;\">");
																break;
															}
													}
													if($isLoggedIn == false)
														echo"Please Log In";
													
													?>
													
                    </p>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="panel panel-default">

                        <div class="panel-body">
                            <ul class="nav nav-pills" style="background-color: #ECECEC;">
                                <li class="active"><a href="#home-pills" data-toggle="tab">Home</a>
                                </li>
                                <li class=""><a href="#profile-pills" data-toggle="tab">Profile</a>
                                </li>
                                <li class=""><a href="#messages-pills" data-toggle="tab">Messages</a>
                                </li>
                                <li class=""><a href="#settings-pills" data-toggle="tab">Settings</a>
                                </li>
                            </ul>

                            <div class="tab-content">
                                <div class="tab-pane fade  active in" id="home-pills">
                                    <h4>My Vision</h4>
                                    <p> 
									<?php	
										$sql = "SELECT * FROM profile";
													$res = mysqli_query($db_handle,$sql);
													$isLoggedIn = false;

													while($db_field = mysqli_fetch_assoc($res))
													{
															if($db_field['state']=='loggedIn')
															{
																
																print("".$db_field['Vision']); print("</br>");
																$isLoggedIn = true;
																//print("<img src=\"profileImages\\".$db_field['ID'].".jpg\" style=\"width:304px;height:228px;border:dotted;\">");
																break;
															}
													}
													if($isLoggedIn == false)
														echo"Please Log In";	
									?>
									</p>
                                </div>
                                <div class="tab-pane fade" id="profile-pills">
                                    <h4>My Profile</h4>
                                   <p><?php	
										$sql = "SELECT * FROM profile";
													$res = mysqli_query($db_handle,$sql);
													$isLoggedIn = false;

													while($db_field = mysqli_fetch_assoc($res))
													{
															if($db_field['state']=='loggedIn')
															{
																
																print("".$db_field['Name']); print("</br>");
																print("".$db_field['Email']);
																$isLoggedIn = true;
																//print("<img src=\"profileImages\\".$db_field['ID'].".jpg\" style=\"width:304px;height:228px;border:dotted;\">");
																break;
															}
													}
													if($isLoggedIn == false)
														echo"Please Log In";
													
													if(isset($_POST['UpdateVision']))
													{
														
														$legitVision = $_POST['VisionText'];
														$sql = "SELECT * FROM profile";
														$res = mysqli_query($db_handle,$sql);
														while($db_field = mysqli_fetch_assoc($res))
														{
														 	$email = $db_field['Email'];
														if($db_field['state']=='loggedIn')
															{
																$sql = "UPDATE profile set Vision = '$legitVision' where Email = '$email'";
																mysqli_query($db_handle,$sql);
															}
														}
													}
									?>
									</p>
								    <form form name ="form1" METHOD="POST" ACTION ="profiles.php">
										
										<div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <textarea  name="VisionText" id="Textarea1" name= "message" required="required" value="" class="form-control" rows="6" placeholder="Write New Vision"></textarea>
                                </div>
                                <div class="form-group">
                                    <INPUT TYPE="submit" name = "UpdateVision" class="btn btn-success" value ="Update Your Vision">
                                </div>
                            </div>
										
									</form>

                                </div>
                                <div class="tab-pane fade" id="messages-pills">
                                    <h4>Messages Tab</h4>
                                     <?php
										
										$sql = "SELECT * FROM profile";
										$res = mysqli_query($db_handle,$sql);
										
										while($db_field = mysqli_fetch_assoc($res))
										{
											if($db_field['state']=='loggedIn')
											{
												$sql = "SELECT * FROM Messages";
												$msg= mysqli_query($db_handle,$sql);
												
												while($pp = mysqli_fetch_assoc($msg))
												{
													if($pp['Reciever']==$db_field['Email'])
													{
														
														print("From: ".$pp['Sender']); 
														print("</br>");
														print("</br>");
														Print("Message: "."</br>".$pp['MessageText']);
														print("</br>");
														print("--------------------------------------------------------");
														print("</br>");
													}
												}
											}			
										}
											
									 ?>
                                </div>
                                <div class="tab-pane fade" id="settings-pills">
                                    <h4>Settings Tab</h4>
                                    <p>Please Log In.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
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
    <section  id="contact">
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
