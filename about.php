<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Quick Health | About</title>
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
        <link href="css/animate.min.css" rel="stylesheet" type="text/css" media="all" />
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
                                <li><a href="gender.php">By Gender</a></li> 
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
                        </li> <li class="dropdown head-dpdn">
                            <a href="news.php" class="dropdown-toggle"><i class="fa fa-newspaper-o" aria-hidden="true"></i>News</a>
                        </li>
                        <li class="dropdown head-dpdn">
                            <a href="help.php" class="dropdown-toggle"><i class="fa fa-question-circle" aria-hidden="true"></i>Help</a>
                        </li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
            <?php include("header.html"); ?>
        </div>
        <!-- //header -->
        <!--  about-page -->
        <div class="about">
            <div class="container">
                <h3 class="w3ls-title w3ls-title1">About Quick Health</h3>
                <div class="about-text">
                    <p>Constant innovation and excellence have been the hallmark of the entrepreneurial spirit of the Quick Health Portal. This urge and dedication combined with determination, strenuous efforts, and hard work have achieved Quick Health Portal.</p><br>
                    <p>At Quick Health Portal, we have come a long way since inception, educating ourselves and learning from experience. Over the years, we have invested in inventing, promoting, and building our expertise, operations, and goodwill to be able to deliver the best and win the trust of our clients and customers.
                    We specialize in the cultivation and sale of medicine,we can easily access information related to medicine based on category wise.We can get any information related to medicine at anytime and anywhere.Patients are communicating with one or more Doctors at same time.Patient easily know side effect of Medicine Company wise.Patients know which medical store provide which type of medicine.
                     Patients get nearest location of medical store.</p><br>

                                       <p>We look forward to welcoming you to our Quick Health Portal  to enjoy and take back this unique experience. The details along with photographs of our various products are also available on our website for our online visitors and customers. Links have been provided to navigate to the details of our various products to assist you pick your taste and choice so that we can ship the same to your destination</p>
                    <div class="col-md-3 ftr-top-left about-text-grids">
                        <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                        <h4>10 Thousand+ <br>Products</h4>
                    </div>
                    <div class="col-md-3 ftr-top-left about-text-grids">
                        <i class="fa fa-users" aria-hidden="true"></i>
                        <h4>50,000 <br>Sellers </h4>
                    </div>
                    <div class="col-md-3 ftr-top-left about-text-grids">
                        <i class="fa fa-credit-card" aria-hidden="true"></i>
                        <h4>10 Lakhs <br>Shipments</h4>
                    </div>
                    <div class="col-md-3 ftr-top-left about-text-grids">
                        <i class="fa fa-globe" aria-hidden="true"></i>
                        <h4>40+ <br>Cities</h4>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="history">
                    <h3 class="w3ls-title">CONVENIENCE</h3>
                    <p>Heavy traffic, lack of parking, monsoons, shop closed, forgetfulness… these are some of the reasons that could lead to skipping of vital medications. Since taking medicines regularly is a critical component of managing chronic medical conditions, it’s best not to run out of essential medicines. Just log on to www.QuickHealth.com, place your order online and have your medicines delivered to you – without leaving the comfort of your home.You Can also find Nearest location of medical store.

What’s more, with easy access to reliable drug information, you get to know all about your medicine at QuickHealth.com, and once you’re a Quick health customer,then you  can also chat with doctors.</p>
                    <h3 class="w3ls-title">ONE-STOP SHOP</h3>
                    <p>At QuickHealth.com, we not only provide you with a wide range of medicines listed under various categories, we also offer to Compare medicine by different way like properties,side effect and consequences,limitation.</p>

                     <h3 class="w3ls-title">TRUST</h3>
                     <p>QuickHealth.com continues a legacy of 20 years of success in the pharmaceutical industry. We are committed to provide safe, reliable and affordable medicines as well as a customer service philosophy that is worthy of our valued customers’ loyalty. We offer a superior online shopping experience, which includes ease of navigation and absolute transactional security.</p>

                </div>
            </div>
        </div>
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