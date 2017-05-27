<mark><ruby><figure><footer><header><hgroup><aside><article><nav></nav></article></aside></hgroup></header></footer></figure></ruby></mark><!DOCTYPE html>
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

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="naimul011" >
    <title>Greener Earth</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />


</head>
<body>
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
                    <li><a href="#home">HOME</a>
                    </li>
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
        </div>
    </nav>
          </header>

    <div id="home">
    <div class="container" >
        <div class="row ">
            <div class="col-md-9 col-sm-9">
                <h1 class="head-main">Before the flood</h1>
                <span class="head-sub-main">Save The Earth Before It Dies</span>
                <div class="head-last">

                    Polar sea ice melts each summer and reforms each winter—a freeze-thaw
	cycle that in the Arctic has been dramatically altered by global warming.
	Not only is summer sea ice shrinking rapidly in the Arctic, but so is the average thickness of sea ice.
	Where in the past, some Arctic sea ice grew to 10 feet (3 meters) thick over multiple years,
	now much of the ice has only one year of growth,
	making it much more susceptible to melting in the summer.
	Scientists project that the Arctic Ocean may be ice-free in summer in just a few decades.


                </div>

            </div>
               <div class="col-md-3 col-sm-3">
                   <div class="div-trans text-center">
                       <h3>Send us your ideas </h3>
                        <form name ="form1" METHOD="POST" ACTION ="index.php">

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
								
                           
                       <?php
                                
                            
                                
                                
							$user = "root";
							$password = "";
							$server = "localhost";
							//mysql_connect($server,$user,$password);
							$database = "Community";

							$db_handle = mysqli_connect($server,$user,$password);
							$db_found = mysqli_select_db($db_handle,$database);
							if($db_found)
							//print  ("CONNECTED!!!");
							;else
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
									echo "<script>
       								 alert('Idea Submitted!');
               					</script>";
							}
                            ?>
                    </form>
                   </div>
				    </div>

            </div>

        </div>
    </div>
          </div>
    <section  id="community">
        <div class="container">

            <div class="row text-center">
                <div class="col-md-8 col-md-offset-2">
                    <h2>Climate Science</h2>
                    
                </div>
				<br><br>
				<div class="col-md-8 col-md-offset-2">
                <h3>Global Warming </h3>
				
                        <p>
                            Global warming is primarily a problem of too much carbon dioxide (CO2) in the atmosphere—which acts as a blanket, trapping heat and warming the planet. As we burn fossil fuels like coal, oil and natural gas for energy or cut down and burn forests to create pastures and plantations, carbon accumulates and overloads our atmosphere. Certain waste management and agricultural practices aggravate the problem by releasing other potent global warming gases, such as methane and nitrous oxide. See the pie chart for a breakdown of heat-trapping global warming emissions by economic sector.
                        </p>
                        <br><br>
                        <h3>Ozone Layer Deplation</h3>
                        <p>
                            Ozone (O3) high in the atmosphere absorbs ultraviolet radiation from the sun, thereby protecting living organisms below from this dangerous radiation. The term ‘ozone hole’ refers to recent depletion of this protective layer over Earth's polar regions. People, plants, and animals living under the ozone hole are harmed by the solar radiation now reaching the Earth's surface—where it causes health problems from eye damage to skin cancer.
Both of these environmental problems do, however, have a common cause—human activities that release gases into and alter the atmosphere. Ozone depletion occurs when chlorofluorocarbons (CFCs)—formerly found in aerosol spray cans and refrigerants—are released into the atmosphere. These gases, through several chemical reactions, cause the ozone molecules to break down, reducing ozone's ultraviolet (UV) radiation-absorbing capacity.
                        </p>
            </div>

            <div class="row text-center space-pad">
                <div class="col-md-3 col-sm-3">

                    <div >

                        


                        

                    </div>

                </div>
                
            </div>
            
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
                                <!-- <li class=""><a href="#messages-pills" data-toggle="tab">Messages</a>
                                </li> -->
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
                                
								<!--
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

      <section  id="Parallax-one">
    <div class="container">

            <div class="row text-center">
                <div class="col-md-8 col-md-offset-2 ">
                    <h2><i class="fa fa-desktop fa-3x"></i>&nbsp;The Arctic </h2>
                    <h4>
                        <strong>The dramatic melting of Arctic ice is already driving extreme weather
                        that affects hundreds of millions of people across North America,
                        Europe and Asia, leading climate scientists have told the Guardian.
                        </strong>
                    </h4>
                </div>

            </div>


        </div>
          </section>
    <section  id="blogs">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-8 col-md-offset-2">

                    
                </div>

            </div>

    </section>

    <section  id="Parallax-two">
        <div class="container">

            <div class="row text-center">
                <div class="col-md-8 col-md-offset-2 ">
                     <h2><i class="fa fa-briefcase fa-3x"></i>&nbsp;Ozone Layer </h2>
                    <h4>
                        <strong>Chlorofluorocarbons (CFCs) and other halogenated ozone depleting substances (ODS) are mainly responsible for man-made chemical ozone depletion.
                        The total amount of effective halogens (chlorine and bromine) in the stratosphere can be calculated and are known as the equivalent effective
						stratospheric chlorine (EESC).
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

    <div class="for-full-back " id="footer">
			Credits : Naimul And Tokey

    </div>

    <script src="assets/plugins/jquery-1.10.2.js"></script>

    <script src="assets/plugins/bootstrap.js"></script>

    <script src="assets/plugins/4jquery.parallax-1.1.3.js"></script>

    <script src="assets/js/custom.js"></script>
</body>
</html>
