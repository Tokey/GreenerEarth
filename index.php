<mark><ruby><figure><footer><header><hgroup><aside><article><nav></nav></article></aside></hgroup></header></footer></figure></ruby></mark><!DOCTYPE html>
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
                                    <textarea  name="message" id="Textarea1" name= "message" required="required" value="" class="form-control" rows="6" placeholder="Message"></textarea>
                                </div>
                                <div class="form-group">
                                    <INPUT TYPE="submit" name = "enter" class="btn btn-success" value ="Submit Here">
                                </div>
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
							print  ("CONNECTED!!!");
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
                            ?>
                    </form>
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

            </div>

            <div class="row text-center space-pad">
                <div class="col-md-3 col-sm-3">

                    <div >

                        <i class="fa fa-home fa-4x main-color"></i>


                        <h3>Global Warming </h3>
                        <p>
                            Over the past 50 years, the average global temperature
                            has increased at the fastest rate in recorded history
                        </p>

                    </div>

                </div>
                <div class="col-md-3 col-sm-3">

                    <div >

                        <i class="fa fa-briefcase fa-4x main-color"></i>


                        <h3>Carbon Chart</h3>
                        <p>
                           An animated chart showing change of global CO2 level.
                        </p>

                    </div>

                </div>
                <div class="col-md-3 col-sm-3">

                    <div >

                        <i class="fa fa-desktop fa-4x main-color"></i>


                        <h3>UV Radiation</h3>
                        <p>
                          Topics about UV radiation and Health concerns.
                        </p>

                    </div>

                </div>
                <div class="col-md-3 col-sm-3">

                    <div>

                        <i class="fa fa-folder fa-4x main-color"></i>


                        <h3>Open For All Discussion</h3>
                        <p>
                            A discussion board to discuss about various topics about the climate change.
                        </p>

                    </div>

                </div>
            </div>
            <div class="row ">
                <div class="col-md-6 col-sm-6">
                    <h3>My Profile</h3>
                    <p>
                       Please Log In.
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
                                    <h4>Home Tab</h4>
                                    <p>Please Log In.</p>
                                </div>
                                <div class="tab-pane fade" id="profile-pills">
                                    <h4>Profile Tab</h4>
                                   <p>Please Log In.</p>

                                </div>
                                <div class="tab-pane fade" id="messages-pills">
                                    <h4>Messages Tab</h4>
                                     <p>Please Log In.</p>
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

                    <h2> Options</h2>
                    <h4>
                        <strong>put sth here
                        </strong>
                    </h4>
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

    <div class="for-full-back " id="footer">
			Credits

    </div>

    <script src="assets/plugins/jquery-1.10.2.js"></script>

    <script src="assets/plugins/bootstrap.js"></script>

    <script src="assets/plugins/4jquery.parallax-1.1.3.js"></script>

    <script src="assets/js/custom.js"></script>
</body>
</html>
