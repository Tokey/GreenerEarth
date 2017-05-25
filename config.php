               

<?php

                define('DB_USER', 'root');

                define('DB_PSWD', '');

                define('DB_HOST', 'localhost');

                define('DB_NAME', 'Community');

                $DC = "";

                $UZC = "";

                $UNC = "";



                //database connection setup and error check

                $db_handle = mysqli_connect(DB_HOST, DB_USER, DB_PSWD, DB_NAME);

                if ($db_handle->connect_error) {

                    die("Connection failed: " . $db_handle->connect_error);

                }



?>