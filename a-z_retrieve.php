<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Quick Health | A-Z Retreive</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Smart Bazaar Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
              SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
        <script type="application/x-javascript">addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
            function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!-- Custom Theme files -->
        <link href="images/logo.jpg" rel="shortcut icon" type="image/jpg" />
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/animate.min.css" rel="stylesheet" type="text/css" media="all" /><!-- animation -->
        <link href="css/menu.css" rel="stylesheet" type="text/css" media="all" /><!-- menu style -->
        <!-- //Custom Theme files -->
        <!-- font-awesome icons -->
        <link href="css/font-awesome.css" rel="stylesheet">
        <!-- //font-awesome icons -->
        <!-- js -->
        <script src="js/jquery-2.2.3.min.js"></script>
        <script src="js/jquery-scrolltofixed-min.js" type="text/javascript"></script><!-- fixed nav js -->
        <script>
            $(document).ready(function () {

                // Dock the header to the top of the window when scrolled past the banner. This is the default behaviour.

                $('.header-two').scrollToFixed();
                // previous summary up the page.

                var summaries = $('.summary');
                summaries.each(function (i) {
                    var summary = $(summaries[i]);
                    var next = summaries[i + 1];

                    summary.scrollToFixed({
                        marginTop: $('.header-two').outerHeight(true) + 10,
                        zIndex: 999
                    });
                });
            });
        </script>
        <!-- //js -->
        <!-- web-fonts -->
        <link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
        <link href='//fonts.googleapis.com/css?family=Lovers+Quarrel' rel='stylesheet' type='text/css'>
        <link href='//fonts.googleapis.com/css?family=Offside' rel='stylesheet' type='text/css'>
        <!-- web-fonts -->
        <!-- start-smooth-scrolling -->
        <script type="text/javascript" src="js/move-top.js"></script>
        <script type="text/javascript" src="js/easing.js"></script>
        <script type="text/javascript">
            jQuery(document).ready(function ($) {
                $(".scroll").click(function (event) {
                    event.preventDefault();
                    $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1000);
                });
            });
        </script>
        <!-- //end-smooth-scrolling -->
        <!-- smooth-scrolling-of-move-up -->
        <script type="text/javascript">
            $(document).ready(function () {

                var defaults = {
                    containerID: 'toTop', // fading element id
                    containerHoverID: 'toTopHover', // fading element hover id
                    scrollSpeed: 1200,
                    easingType: 'linear'
                };

                $().UItoTop({easingType: 'easeOutQuart'});

            });
        </script>
        <!-- //smooth-scrolling-of-move-up -->
    </head>
    <body>
        <!-- header -->
        <div class="header">
            <div class="w3ls-header"><!--header-one-->
                           <div class="w3ls-header-right">
                    <ul>
                        <li class="dropdown head-dpdn">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user" aria-hidden="true"></i>My Account<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="login.php">Login </a></li>
                                <li><a href="signup.php">Sign Up</a></li>
                                <li><a href="logout.php">Logout</a></li>
                                <!-- <li><a href="login.php">My Orders</a></li>
                                <li><a href="login.php">Wallet</a></li>-->
                            </ul>
                        </li>
                                                   
                       
                            <li class="dropdown head-dpdn">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-search" aria-hidden="true"></i>Search Medicine<span class="caret"></span></a>
                             <ul class="dropdown-menu">
                              
                                <li><a href="A-Z.php">By A-Z</a></li>
                                <li><a href="Disease.php">By Disease</a></li> 
                            </ul>                         

                        <li class="dropdown head-dpdn">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-list-alt" aria-hidden="true"></i>Compare Medicine<span class="caret"></span></a>
                          <ul class="dropdown-menu">
                                <li><a href="properties.php">Properties</a></li> 
                                <li><a href="effect.php">Effect And Consequences</a></li>
                                <li><a href="Limitation.php">Limitation</a></li> 
                            </ul>                         
                            <li class="dropdown head-dpdn">
                            <a href="" class="dropdown-toggle"><i class="fa fa-commenting-o" aria-hidden="true"></i>Chat</a>
                        </li>
                        <li class="dropdown head-dpdn">
                            <a href="contact.php" class="dropdown-toggle"><i class="fa fa-map-marker" aria-hidden="true"></i/>Medical Store Location</a>
                        </li> 
                        <li class="dropdown head-dpdn">
                            <a href="news.php" class="dropdown-toggle"><i class="fa fa-newspaper-o" aria-hidden="true"></i>News</a>
                        </li>
                        <li class="dropdown head-dpdn">
                            <a href="help.php" class="dropdown-toggle"><i class="fa fa-question-circle" aria-hidden="true"></i>Help</a>
                        </li>
                                   </ul>
                </div>
                <div class="clearfix"></div>
            </div>
            <?php
            include("header.html");

                $a=$_POST['detail'];
             ?>
        </div>
        <!-- //header -->
        <!-- contact-page -->
        <div class="contact">
            <div class="container">
                <h4 class="w3ls-title w3ls-title1"><b>Display Details of <?php echo  $a  ?></b></h4>
                <div class="map-info">
                  
                    <div class="clearfix">
                            <?php
                             

                             include("config.php");
                             strtolower($a);
                             $fetch = mysqli_query($con, "SELECT * FROM medicine WHERE title='$a' ") or die(mysqli_error());
                             ?>

                        <table border='2' cellspacing="2" cellpadding="10">
                            <tr>
                             <th bgcolor="pink" align="center">Price per Medicine</th>
                             <th bgcolor="pink" align="center">Manufactured By</th>
                             <th bgcolor="pink" align="center">Expiration Date </th>
                             <th bgcolor="pink" align="middele">Description</th>
                             <th bgcolor="pink" align="center">limitation</th>
                             <th bgcolor="pink" align="center">Side-Effect</th>
                             <th bgcolor="pink" align="center">Company Name</th>
                            </tr>


                             <?php
                            while($row = mysqli_fetch_array($fetch)) {
                                
                                ?>
                                <tr>
                                <?php
                                echo "<td>".$row['price']."</td>";
                                echo "<td>".$row['m_date']."</td>";
                                echo "<td>".$row['e_date']."</td>";
                                echo "<td>".$row['properties']."</td>";
                                echo "<td>".$row['limitation']."</td>";
                                echo "<td>".$row['side_effect']."</td>";
                                echo "<td>".$row['c_name']."</td>";

                                echo "<br>";  ?>
                                 <img src="images/<?php echo $row['image'];?>" height="50" width="50"/>
                                    
                                </tr>
                                <?php

                                    }
                                    ?> <br>
                                    </table>
                       
                       
                        
        
                    </div>
                </div>
                <div class="contact-form-row">
                    <h4 class="w3ls-title w3ls-title1">
                    <div class="col-md-7 contact-left">
                      
        
                    </div>
                                        <div class="clearfix">
                         
                                        </div>
                </div>
            </div>
        </div>
        <!-- //contact-page -->
        <?php include("footer.html"); ?>
        <!-- cart-js -->
        <script src="js/minicart.js"></script>
        <script>
            w3ls.render();

            w3ls.cart.on('w3sb_checkout', function (evt) {
                var items, len, i;

                if (this.subtotal() > 0) {
                    items = this.items();

                    for (i = 0, len = items.length; i < len; i++) {
                        items[i].set('shipping', 0);
                        items[i].set('shipping2', 0);
                    }
                }
            });
        </script>
        <!-- //cart-js -->
        <!-- menu js aim -->
        <script src="js/jquery.menu-aim.js"></script>
        <script src="js/main.js"></script><!-- Resource jQuery -->
        <!-- //menu js aim -->
        <!-- Bootstrap core JavaScript -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="js/bootstrap.js"></script>
    </body>
</html>