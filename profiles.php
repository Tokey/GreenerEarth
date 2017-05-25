<?php
	session_start();
	include_once("config.php");
	if(!isset($_SESSION['username'])){
       $sql = "UPDATE profile set State = 'LoggedOut'";
	   mysqli_query($db_handle,$sql);
      }
	  else
	  {
		  $nam = $_SESSION['username'];
		  $sql = "UPDATE profile set State = 'loggedIn' where Name = '$nam'";
		  $res = mysqli_query($db_handle,$sql);
	  }
?>


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
															$chk=true;
															$_SESSION['username']=$db_field['Name'];
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
                                    <input type="password" name = "Password" class="form-control" required="required" placeholder="Password">
                                </div>
                            </div>


                            
                                <div class="form-group">
                                    <button type="submit" name = "LogIn" class="btn btn-success">Log In </button> </br></br>OR</br></br>
									 <a href="signup.php" class="btn btn-success">Sign Up </a></br></br>
									  
									<?php
									$sql = "SELECT * FROM profile";
													$res = mysqli_query($db_handle,$sql);
													$isLoggedIn = false;
                                                    $_SESSION['login'] =  false;
        
													while($db_field = mysqli_fetch_assoc($res))
													{
															if($db_field['state']=='loggedIn')
															{
																print("Welcome! ".$db_field['Name']);
																$isLoggedIn = true;
                                                                $_SESSION['user'] =  $db_field['Name'];
                                                                $_SESSION['login'] =  true;
                                                                
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
													$database = "community";

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
                                <!--li class=""><a href="#messages-pills" data-toggle="tab">Messages</a>
                                </li-->
                                <li class=""><a href="#settings-pills" data-toggle="tab">Survey</a>
                                </li>
								<li class=""><a href="#donate-pills" data-toggle="tab">Donate</a>
                                </li>
                            </ul>

                            <div class="tab-content">
                                <div class="tab-pane fade  active in" id="home-pills">
                                    <h4>My Vision</h4>
                                    <p> 
									<?php	
                                        //session_start();
										$sql = "SELECT * FROM profile";
													$res = mysqli_query($db_handle,$sql);
													$isLoggedIn = false;

													while($db_field = mysqli_fetch_assoc($res))
													{
															if($db_field['state']=='loggedIn')
															{
																
																print("".$db_field['Vision']); print("</br>");
																$isLoggedIn = true;
                                                                $_SESSION['login'] = $isLoggedIn;
																//print("<img src=\"profileImages\\".$db_field['ID'].".jpg\" style=\"width:304px;height:228px;border:dotted;\">");
																break;
															}
													}
													if($isLoggedIn == false)
                                                    {
                                                        echo"Please Log In";
                                                        $_SESSION['login'] = $isLoggedIn;
                                                        
                                                    }
													if(isset($_POST['LogOut']))
													{
														mysqli_query($db_handle,"Update profile set State = 'LoggedOut'");
														header("LOCATION:logout.php");
													}
															
									?>
									</p>
									<form form name ="form1" METHOD="POST" ACTION ="profiles.php">
									<button type="submit" name = "LogOut" class="btn btn-success">Log out </button> </br></br>
									</form>
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
                        <!--     <div class="tab-pane fade" id="messages-pills">
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
								
								-->
                                <div class="tab-pane fade" id="settings-pills">
                                    <h3>Please Leave a Survay because your words matter!</h3>
                                    
									
									<form form name ="form1" METHOD="POST" ACTION ="profiles.php">
									
									
									
									<div class="form-group">
                        <h4>1. What level are you in your education?</br></h4>
                        <input type="radio" name="level" value="I'm a Graduate">Graduate</br>
                        <input type="radio" name="level" value="I'm a Post Graduate">Post Graduate</br></br>
                        <h4>2. Do you think that the global mean temperature has risen, stayed the same, or fallen since 1800?</h4></BR>
                            <input type="radio" name="global" value="I think temperature has risen">Risen </br>
                            <input type="radio" name="global" value="I think temperature has stayed the same">Stayed the same </br>
                            <input type="radio" name="global" value="I think temperature has fallen">Fallen </br>
                            <input type="radio" name="global" value="I Feel Unsure about the change in temperature">Unsure </br></br>
                        <h4> 3. Do you think that the evidence on global warming is widely accepted by the scientific community, or do a significant number of scientists have serious doubts?</h4><br></br>
                            <input type="radio" name="evidence" value="I belive it will be widely accepted">Widely accepted </br>
                            <input type="radio" name="evidence" value="I have serious doubts">Serious doubts </br>
                            <input type="radio" name="evidence" value="I am unsure">Unsure </br></br>
                        <h4>4. Do you think that human activity is contributing to any increase in Global mean temperatures?</h4></br></br>
                            <input type="radio" name="activity" value="I believe it is significantly contributed by humans">Significantly contributed by humans</br>
                            <input type="radio" name="activity" value="I believe it is moderately contributed by humans ">Moderately contributed by humans </br>
             </br>
                        <h4>5. Do you think that the condition of the environment will be better, worse, or about the same for the next generation?</h4></br>
                            <input type="radio" name="environment" value="I think it will be better for the next generation">Better</br>
                            <input type="radio" name="environment" value="I think it will be worse for the next generation">Worse</br>
                            <input type="radio" name="environment" value="I think it will be the same for the next generation">Same</br>
                            <input type="radio" name="environment" value="I am unsure" >Unsure</br>
                        
									</div>
									
									<div class="form-group">
									 <h4> 6. What are some of the key steps you will take to prevent Climate Change? </h4>
                                    <textarea  name="survtxt" id="Textarea1" required="required" value="" class="form-control" rows="6" placeholder="Your Steps Here..."></textarea>
									</div>
									 <div class="form-group">
                                    <INPUT TYPE="submit" name = "surv" class="btn btn-success" value ="Complete Survey">
                                </div>
								
								
								
									</form>
									<?php
									//mysqli_query($db_handle,"insert into survey(Name) values('kkl')");
									$sql = "SELECT Name FROM profile where state = 'loggedIn'";
									$res = mysqli_query($db_handle,$sql);
									$db_field = mysqli_fetch_assoc($res);
									$name=$db_field['Name'];
									
									
									if(isset($_POST['surv']) && !empty($name))
									{  //print("".$name);
										if(!empty($_POST['level']) && !empty($_POST['global']) &&  !empty($_POST['evidence']) &&  !empty($_POST['activity']) &&  !empty($_POST['environment']))
										{ $level=(string)$_POST['level'];
										  $global=(string)$_POST['global'];
										  $evidence=(string)$_POST['evidence'];
										  $activity=(string)$_POST['activity'];
										  $environment=(string)$_POST['environment'];
										  $steps=(string)$_POST['survtxt'];
										
                                         //var_dump ($level);
										//mysqli_query($db_handle,"insert into bullshit(baal) values('$level')");
										
                                         
                                         $myfile = fopen("survey_file.txt", "w") or die("Unable to open file!");
                                         $txt = $name."\r\n".$level."\r\n".$global."\r\n".$evidence."\r\n".$activity."\r\n".$environment."\r\n".$steps."\r\n";
                                         fwrite($myfile, $txt);
                                         fclose($myfile);
										 $handle = fopen("survey_file.txt", "r");
										 $con=0;
										 $legit_name='nuh';
										 while (($line = fgets($handle)) !== false) {
											$con++;
											if($con==1)
											{
												$name=$line;
												$legit_name=$name;
												
												mysqli_query($db_handle,"insert into survey (Name) values('$name')");
											}
											if($con==2)
											{
												$level=$line;
												//echo $level;
												mysqli_query($db_handle,"update survey set level = '$level' where Name = '$legit_name'");
											}
											if($con==3)
											{
												$global=$line;
												mysqli_query($db_handle,"update survey set global = '$global' where Name = '$legit_name'");
											}
											if($con==4)
											{
												$evidence=$line;
												mysqli_query($db_handle,"update survey set evidence = '$evidence' where Name = '$legit_name'");
											}
											if($con==5)
											{
												$activity=$line;
												mysqli_query($db_handle,"update survey set activity = '$activity' where Name = '$legit_name'");
											}
											if($con==6)
											{
												$environment=$line;
												mysqli_query($db_handle,"update survey set environment = '$environment' where Name = '$legit_name'");
											}
											if($con==7)
											{
												$steps=$line;
												mysqli_query($db_handle,"update survey set steps = '$steps' where Name = '$legit_name'");
											}
											
											}
										//echo mysqli_query($db_handle,"INSERT INTO survey(Name,level,global,evidence,activity,environment,steps) VALUES('$name','$level','$global','$evidence','$activity','$environment','$steps')");
										echo " SURVEY COMPLETE ";
										 
										}

										
									}
									?>
                                </div>
								
								
								
								
								
								<div class="tab-pane fade" id="donate-pills">
                                    <h4>Donations</h4>
                                    <p>
									<?php
									echo"You have Donated a Total of: ";
									$sql = "SELECT * FROM profile";
									$res = mysqli_query($db_handle,$sql);
									while($db_field = mysqli_fetch_assoc($res))
									{
											if($db_field['state']=='loggedIn')
											{
											print("".$db_field['totalDonation']);
											print("$");
											}
									}
									
									
									?>
									</p>
									
									</br>
									<h2>Donate Now For Making The World A Better Place</h2>
									
									<form form name ="form1" METHOD="POST" ACTION ="profiles.php">
										<div class="form-group">
                                    <h4>Donation Amount</h4><input type="text" name = "donate" class="form-control" required="required" placeholder="Lowest 1 Highest 5000">
                                </div>
								<div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <input type="text" name = "nameOnCard" class="form-control" required="required" placeholder="Name On Card">
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <input type="text" name = "cardNo" class="form-control" required="required" placeholder="16 Digit Card Number">
                                </div>
                            </div>

							<div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <input type="text" name = "cvv" class="form-control" required="required" placeholder="4 Digit Card Security Number">
                                </div>
                            </div>
							
							
							<div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    Card Expiry Date<input type="month" name = "exp" class="form-control" required="required" placeholder=" ">
                                </div>
                                </div>
								
								
                                
                                <div class="form-group">
                                    <INPUT TYPE="submit" name = "Don" class="btn btn-success" value ="Donate Now">
                                </div>
								<?php
									
									if(isset($_POST['Don']))
									{
									$chk=true;
									
									$cardno = $_POST['cardNo'];
									
										if(!is_numeric (  $cardno ))
										{$chk=false;
									echo "INVALID CARD NO!";
									}
										if(strlen( $cardno)!=16)
										{$chk=false;
											echo "INVALID CARD NO!";
										}
									
									
									$donation = $_POST['donate'];
									if(!($donation>=1 && $donation<=5000))
									{$chk=false;
										echo "INVALID DONATION AMOUNT!";
									}
									$cvv = $_POST['cvv'];
									
									if(!is_numeric (  $cvv ))
									{$chk=false;
								echo "INVALID CVV!";
								}
										if(strlen( $cvv)!=4)
										{$chk=false;
									echo "INVALID CVV!";}
									
									$sql = "SELECT * FROM profile";
									$res = mysqli_query($db_handle,$sql);
									if($chk){
									while($db_field = mysqli_fetch_assoc($res))
										{
											if($db_field['state']=='loggedIn')
											{
											$donation += $db_field['totalDonation'];
											$sql = "update profile set totalDonation ='$donation'  where state='loggedIn'";
											 mysqli_query($db_handle,$sql);
											print("Total Donation: ".$donation);
											break;
											}
										}
									}}
									?>
                            </div>
										
									</form>
									
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
                                 

    </section>
    <!--End Pricing Section -->
    <!--parallax two
    <section  id="Parallax-two">
        <div class="container">

            <div class="row text-center">
                <div class="col-md-8 col-md-offset-2 ">
                     <h2><i class="fa fa-briefcase fa-3x"></i>&nbsp </h2>
                    <h4>
                        <strong>
                        </strong>
                    </h4>
                </div>

            </div>


        </div>
    </section>
    ./parallax two-->


    <!-- Contact Section -->
    <section  id="contact">
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
