<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>TowerDefense | Features</title>
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
            <li class="nav-item active">
                <a class="nav-link" href="features.php">Features</a>
            </li>
            <li class="nav-item">
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

<div class="container">
    <div class="row mt-5">
        <div class="col-sm-12">
            <div class="card my-5 orange lighten-3">
                <div class="card-body">
                    <h2 class="text-primary text-center font-weight-bold">2 UNIQUE LEVELS</h2>
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <img class="img-fluid" alt="Level1" src="images/favicon/level1.png">
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <img class="img-fluid" alt="Level2" src="images/favicon/level2.png">
                        </div>
                    </div>
                    <p class="text-dark mt-3">Each level has unique weapons and enemies!</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="card my-5 orange lighten-3">
                <div class="card-body">
                    <h2 class="text-primary text-center font-weight-bold">AWESOME ENEMIES AND WEAPONS</h2>
                    <div class="row">
                        <div class="col-sm-12 col-md-6 text-center">
                            <img class="img-fluid" alt="Level1" src="images/enemy-sheet0.png">
                            <img class="img-fluid" alt="Level2" src="images/enemy2-sheet0.png">
                        </div>
                        <div class="col-sm-12 col-md-6 text-center">
                            <img class="img-fluid" alt="Level3" src="images/turret-sheet0.png">
                            <img class="img-fluid" alt="Level3" src="images/red_turret-sheet0.png">
                        </div>
                    </div>
                    <p class="text-dark mt-5">Each enemy and weapon has unique powers and abilities!</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="card my-5 orange lighten-3">
                <div class="card-body">
                    <h2 class="text-primary text-center font-weight-bold">AMAZING DESIGN AND ASSETS</h2>
                    <div class="row">
                        <div class="col-sm-12 col-md-6 offset-md-3 text-center">
                            <img class="img-fluid" alt="Level3" src="images/tilemap2.png">
                        </div>
                    </div>
                    <p class="text-dark mt-5">All assets and credits go to <a href="https://www.kenney.nl/assets/tower-defense-top-down">kenny</a>!</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer -->
<footer class="page-footer font-small bg-primary">

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© <?= date('Y') ?> Copyright:
        <a href="https://spolnici.com"> Spolnici</a>
    </div>
    <!-- Copyright -->

</footer>
<!-- Footer -->
<script src="js/jquery-2.1.1.min.js"></script>
<script src="node_modules/mdbootstrap/js/bootstrap.min.js"></script>
<script src="node_modules/mdbootstrap/js/mdb.min.js"></script>
</body>
</html>