
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
  
    <title>The Earth</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <?php




    ?>
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
                <a class="navbar-brand" href="htttp://www.binarytheme.com">THE EARTH</a>
            </div>
            <!-- Collect the nav links for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#home">HOME</a>
                    </li>
                    <li><a href="#community">COMMUNITY</a>
                    </li>

                    <li><a href="#blogs">BLOGS</a>
                    </li>

                    <li><a href="#contact-sec">CONTACT</a>
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
                                    <input type="text" class="form-control" required="required" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" required="required" placeholder="Email address">
                                </div>
                            </div>
                        
                        
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <textarea name="message" id="Textarea1" required="required" class="form-control" rows="3" placeholder="Message"></textarea>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success">Submit Here </button>
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


			<?php
				include_once("config.php");
                $data = $_GET["data"];
				if(isset($_POST['thr']))
					{
						$n = $_SESSION['username'];
						$sql2 = "Select * from profile where Name = '$n'";

                  		$res2=mysqli_query($db_handle,$sql2);
                  		$user = mysqli_fetch_assoc($res2);
						$mes = $_POST['mes'];
						$id = $user['ID'];
						date_default_timezone_set("Asia/Dhaka");
						$today = date("Y-m-d H:i:s");
						$sql4 = "INSERT INTO discussion (comment,heading,user_id,date) values ('$mes','$data','$id','$today')";
						mysqli_query($db_handle,$sql4);

					}
                    
				$sql = "Select * from discussion where heading = '$data' order by commID";
                $res=mysqli_query($db_handle,$sql);
				$count = 0;

				echo "<h2>".$data."</h2>";
				while($db_field = mysqli_fetch_assoc($res))
					{
						$count++;
						echo "<h3>".$count.". ".$db_field['comment']."</h3>";
						$uid = $db_field['user_id'];
						$sql1 = "Select * from profile where ID = '$uid'";

                  		$res1=mysqli_query($db_handle,$sql1);
                  		$user = mysqli_fetch_assoc($res1);

                  		echo "<strong>"."Posted by : ".$user['Name']."</strong>"."</br>";
                  		echo "Date : ".$db_field['date'];
                  		echo "</br>";
                  		echo "</br>";
                  		echo "</br>";
                        

					}



			?> 

            <?php

                if(isset($_SESSION['username']))
                 {
                    
                    echo" <form action=\"Threads.php?data=";
                    echo"".$_GET["data"]."\"";
                    echo"\" method=\"POST\" enctype=\"multipart/form-data\" > ";
                   
                      echo" <h3>Reply to this thread as  ".$_SESSION['username'] . "</h3>";

                            
                   echo"<textarea  name=\"mes\" id=\"Textarea1\" name= \"message\" required=\"required\" value=\"\" class=\"form-control\" rows=\"6\" "; 
                   
                   echo"placeholder=\"Thread on climate change\"></textarea>";
                                
                                 echo"</br>";
                                
                                echo" <div class=\"form-group\">";
                                     echo"<button type=\"submit\" name = \"thr\" class=\"btn btn-success\">Submit </button>";
                                echo " </div> ";       
                     echo "</form>";}

                     else {
                        echo "<h3> Please Log in to start a new Thread! </h3>";
                        echo "<h3> <a href = \"profiles.php\" > LOG IN NOW! </a> </h3>";
                     }
                ?>
                    
                    
                </div>
                
            </div>
     
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
