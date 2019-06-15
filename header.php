<?php
session_start();
?>

<?php
if(!isset($_SESSION['store']))
{
?>
<script type="text/javascript">
window.location="../../USERS/login.php";
</script>
<?php
}
?>

<!-- === BEGIN HEADER === -->
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <head>
        <!-- Title -->
        <title>Quick Health</title>
        <!-- Meta -->
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <!-- Favicon -->
        <link href="favicon.ico" rel="shortcut icon">
        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.css" rel="stylesheet">
        <!-- Template CSS -->
        <link rel="stylesheet" href="assets/css/animate.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/nexus.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/responsive.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/custom.css" rel="stylesheet">
        <!-- Google Fonts-->
        <link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300" rel="stylesheet" type="text/css">
        <style type="text/css">
<!--
.style1 {font-family: "Courier New", Courier, monospace}
-->
        </style>
</head>
    <body>
        <div id="body-bg">
            <!-- Phone/Email -->
            <div id="pre-header" class="background-gray-lighter">
                <div class="container no-padding">
                    <div class="row hidden-xs">
                        <div class="col-sm-6 padding-vert-5">
                            <strong>Phone:</strong>&nbsp;9-1010-2356
                        </div>
                        <div class="col-sm-6 text-right padding-vert-5">
                            <strong>Email:</strong>&nbsp;admin@quickhealth.com                        </div>
                    </div>
                </div>
            </div>
            <!-- End Phone/Email -->
            <!-- Header -->
            <div id="header">
                <div class="container">
                    <div class="row">
                        <!-- Logo -->
                        <div class="logo">
                            <p>&nbsp;</p>
                            <p class="style1" style="font-size:45px; font-weight:bolder; font-family:Calibri;">Quick Health portal  </p>
                        </div>
                        <!-- End Logo -->
                    </div>
                </div>
            </div>
            <!-- End Header -->
            <!-- Top Menu -->
            <div id="hornav" class="bottom-border-shadow">
                <div class="container no-padding border-bottom">
                    <div class="row">
                        <div class="col-md-8 no-padding">
                            <div class="visible-lg">
                                <ul id="hornavmenu" class="nav navbar-nav">
                                    <li>
                                        <a href="index.php" class="fa-home active">Home</a>                                    </li>
                                    <li>
                                        <span class="fa-medkit">Medicine</span><ul>
                                          <li>
                                            <a href="add_medicine.php">Add</a></li>
                                            <li>
                                                <a href="delete_medicine.php">Delete</a>                                            </li>
                                            <li>
                                                <a href="update_medicine.php">Update</a>                                            </li>
                                            <li>
                                                <a href="view_medicines.php">View</a></li>
                                            </ul>
                                  </li>
                                   
								  <li>
                                     <span class="fa-copy ">News</span>
                                  <ul>
                                            <li><a href="add_news.php">Add</a></li>
                                            <li> <a href="delete_news.php">Delete</a> </li>
                                            <li> <a href="update_news.php">Update</a> </li>
                                            <li> <a href="view_news.php">View</a></li>
                                    </ul>
                                  </li>
                                    <li>
                                        <span class="fa-edit">Self Update</span>
                                        <ul>
                                           
                                            <li> <a href="delete_stores.php">Deregister</a> </li>
                                            <li> <a href="view_store.php">View</a></li>
                                            <li><a href="update_stores.php">Update</a></li>
                                        </ul>
                                    </li>
									
									  <li>
                                        <a href="logout.php" class="fa-user">Logout</a>                                    </li>
                                    <li>
                                </ul>
                          </div>
                        </div>
                        <div class="col-md-4 no-padding">
                            <ul class="social-icons pull-right">
                                <li class="social-rss">
                                    <a href="#" target="_blank" title="RSS"></a>
                                </li>
                                <li class="social-twitter">
                                    <a href="#" target="_blank" title="Twitter"></a>
                                </li>
                                <li class="social-facebook">
                                    <a href="#" target="_blank" title="Facebook"></a>
                                </li>
                                <li class="social-googleplus">
                                    <a href="#" target="_blank" title="Google+"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
			</div>
			</body>
			</html>
            <!-- End Top Menu -->
            <!-- === END HEADER === -->
			
		