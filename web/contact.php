<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>TowerDefense | Contact</title>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/style.css">

    <!-- Allow fullscreen mode on iOS devices. (These are Apple specific meta tags.) -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, minimal-ui" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <link rel="apple-touch-icon" sizes="256x256" href="images/favicon/icon-256.png" />
    <meta name="HandheldFriendly" content="true" />

    <!-- Chrome for Android web app tags -->
    <meta name="mobile-web-app-capable" content="yes" />
    <link rel="shortcut icon" sizes="256x256" href="images/favicon/icon-256.png" />

    <!-- All margins and padding must be zero for the canvas to fill the screen. -->
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">

    <!-- Navbar brand -->
    <a class="navbar-brand" href="index.php">TowerDefense</a>

    <!-- Collapse button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
            aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Collapsible content -->
    <div class="collapse navbar-collapse" id="basicExampleNav">

        <!-- Links -->
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Game
                    <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="features.php">Features</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="contact.php">Contact</a>
            </li>

        </ul>
        <!-- Links -->
        <ul class="navbar-nav right">
            <li class="nav-item">
                <a class="nav-link" href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i> </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i> </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://www.youtube.com/" target="_blank"><i class="fab fa-youtube"></i> </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://www.twitter.com/" target="_blank"><i class="fab fa-twitter"></i> </a>
            </li>
        </ul>
    </div>
    <!-- Collapsible content -->
</nav>
<div class="container mb-5 pb-5 mt-1">

    <!--Section heading-->
    <h2 class="h1-responsive font-weight-bold text-center">Contact us</h2>
    <!--Section description-->
    <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us
        directly. Our team will come back to you within
        a matter of hours to help you.</p>


    <div class="card orange lighten-4 mb-5">
        <div class="card-body">
            <h1 class="text-center text-primary font-weight-bold">Contact Us</h1>
            <!--Grid column-->
            <div class="row">
                <div class="col-md-9 mb-md-0 mb-5">
                    <form novalidate>

                        <!--Grid row-->
                        <div class="row">

                            <!--Grid column-->
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <input type="text" id="name" name="name" class="form-control">
                                    <label for="name" class="">Your name</label>
                                </div>
                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <input type="text" id="email" name="email" class="form-control">
                                    <label for="email" class="">Your email</label>
                                </div>
                            </div>
                            <!--Grid column-->

                        </div>
                        <!--Grid row-->

                        <!--Grid row-->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="md-form mb-0">
                                    <input type="text" id="subject" name="subject" class="form-control">
                                    <label for="subject" class="">Subject</label>
                                </div>
                            </div>
                        </div>
                        <!--Grid row-->

                        <!--Grid row-->
                        <div class="row">

                            <!--Grid column-->
                            <div class="col-md-12">

                                <div class="md-form">
                                    <textarea type="text" id="message" name="text" rows="3"
                                              class="form-control md-textarea"></textarea>
                                    <label for="message">Your message</label>
                                </div>

                            </div>
                        </div>
                        <!--Grid row-->

                        <div class="text-center mt-3">
                            <button type="submit" class="btn btn-primary btn-block">Send</button>
                        </div>
                    </form>
                    <div id="error-message" class="alert mt-3"></div>
                </div>
                <div class="col-md-3 text-center text-dark">
                    <ul class="list-unstyled mb-0">
                        <li><i class="fas fa-map-marker-alt fa-2x"></i>
                            <p>Marka Oreškovića 16, Subotica Serbia</p>
                        </li>

                        <li><i class="fas fa-phone mt-4 fa-2x"></i>
                            <p>+ 381 123 123 123</p>
                        </li>

                        <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                            <p>luka@spolnici.com</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<footer class="page-footer font-small bg-primary mt-5">
    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© <?= date('Y') ?> Copyright:
        <a href="https://spolnici.com"> Spolnici</a>
    </div>
    <!-- Copyright -->
</footer>

<script src="js/jquery-2.1.1.min.js"></script>
<script src="node_modules/mdbootstrap/js/bootstrap.min.js"></script>
<script src="node_modules/mdbootstrap/js/mdb.min.js"></script>
<script src="js/contact.js"></script>
</body>
</html>