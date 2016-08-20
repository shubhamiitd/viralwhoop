<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>media</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <script src="https://use.fontawesome.com/caa3125c92.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- CSS -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,600">
    <link rel="stylesheet" href="<?=base_url()?>resources/css/animate.css">
    <link rel="stylesheet" href="<?=base_url()?>resources/css/form-elements.css">
    <link rel="stylesheet" href="<?=base_url()?>resources/css/style.css">
    <link rel="stylesheet" href="<?=base_url()?>resources/css/media-queries.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    <!-- Favicon and touch icons -->
    <link rel="shortcut icon" href="<?=base_url()?>resources/assets/images/ico/favicon.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?=base_url()?>resources/assets/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?=base_url()?>resources/assets/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?=base_url()?>resources/assets/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?=base_url()?>resources/assets/images/ico/apple-touch-icon-57-precomposed.png">
    <style>
	#leftside{
                border-right: 1px solid gray;}
        @media (max-width:767px) {
            #leftside {
                border-right: 0 solid gray;
                border-bottom: 1px solid gray;
            }
        }
    </style>
</head>

<body>

    <!-- Loader -->
    <div class="loader">
        <div class="loader-img"></div>
    </div>

    <!-- Top menu -->
    <nav class="navbar navbar-inverse navbar-fixed-top navbar-no-bg" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?=base_url()?>home"><img src="<?=base_url()?>resources/assets/images/logo.png" /></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="top-navbar-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="<?=base_url()?>auth/register">Register</a></li>
                    <li><a style="background:white; color:black; " href="<?=base_url()?>auth/login">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="subscribe-container section-container">
        <div class="container">

            <div class="row">
                <div class="col-sm-12 subscribe-text section-description wow fadeIn">
                    <h2>CONTACT US</h2>
                    <div class="divider-1 wow fadeInUp"><span></span></div>
                </div>
            </div>

            <div id="leftside" class="col-sm-6 subscribe wow fadeInUp" style=" text-align:left;">
                <form class="form" role="form" action="#" method="post">
                    <h3> PERSONAL INFO </h3>
                    <div class="form-group">
                        <label class="sr-only" for="subscribe-email">Write message</label>

                        <input type="text" style="margin-bottom:10px;" name="email" placeholder="Enter Your Name" class="subscribe-email form-control" id="subscribe-email">
                        <label class="sr-only" for="subscribe-email">Write message</label>

                        <input type="text" style="margin-bottom:10px;" name="email" placeholder="Enter Your Email" class="subscribe-email form-control" id="subscribe-email">
                        <h3> QUESTIONS OR COMMENTS </h3>
                        <label class="sr-only" for="subscribe-email">Write message</label>

                        <input type="text" style="padding-bottom:10px;" name="email" placeholder="Write your message..." class="subscribe-email form-control" id="subscribe-email">
                    </div>
                    <button type="submit" class="btn">Send</button>
                </form>
                <div class="success-message"></div>
                <div class="error-message"></div>
            </div>
            <div class="col-sm-5 subscribe wow fadeInUp col-sm-offset-1" style=" text-align:left;">
                <h3 style="padding-top:30px;"> SUPPORT </h3>
                <p>care@viralwhoop.com</p>
                <h3 style="padding-top:30px;"> SOCIAL LINKS </h3>
                <div style="font-size:30px;">

                    <a href="#" style="padding-right:20px;"><i class="fa fa-facebook"></i></a>
                    <a href="#" style="padding-right:20px;"><i class="fa fa-linkedin"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                </div>
            </div>

        </div>
    </div>

    <!-- Footer -->
    <footer style="background:#243f6b;">
        <div class="container">
            <div class="row">

                <div class="col-sm-10 col-sm-offset-1">
                    <div class="footer-social" style="padding-top:30px; padding-bottom:30px;">
                        <div class="col-md-4">
                            <a style=" font-size:.9em;" href="<?=base_url()?>terms">T&C </a>
                        </div>
                        <div class="col-md-4">
                            <a style=" font-size:.9em;" href="<?=base_url()?>privacy">Privacy Policy </a>
                        </div>
                        <div class="col-md-4">
                            <a style=" font-size:.9em;" href="<?=base_url()?>contact"> Contact Us </a>
                        </div>
                    </div>
                    <div style="width:100%; margin-top:20px; height:1px; background:white;"></div>
                    <div class="footer-social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                    </div>

                </div>

            </div>
        </div>
    </footer>
    <!-- Javascript -->
    <script src="<?=base_url()?>resources/js/jquery-1.11.1.min.js"></script>
    <script src="<?=base_url()?>resources/js/jquery.backstretch.min.js"></script>
    <script src="<?=base_url()?>resources/js/wow.min.js"></script>
    <script src="<?=base_url()?>resources/js/retina-1.1.0.min.js"></script>
    <script src="<?=base_url()?>resources/js/waypoints.min.js"></script>
    <script src="<?=base_url()?>resources/js/scripts.js"></script>

    <!--[if lt IE 10]>
            <script src="<?=base_url()?>resources/js/placeholder.js"></script>
        <![endif]-->

</body>

</html>
