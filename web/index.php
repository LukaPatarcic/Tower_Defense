﻿<!DOCTYPE html>
<html manifest="offline.appcache">
<head>

    <meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>TowerDefense</title>
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="css/style.css">

	<link rel="apple-touch-icon" sizes="120x120" href="images/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
	<link rel="manifest" href="site.webmanifest">
	<link rel="mask-icon" href="images/favicon/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="theme-color" content="#ffffff">

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
			<li class="nav-item active">
				<a class="nav-link" href="index.php">Game
					<span class="sr-only">(current)</span>
				</a>
			</li>
			<li class="nav-item">
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
	<div id="fb-root"></div>
	
	<script>
	// Issue a warning if trying to preview an exported project on disk.
	(function(){
		// Check for running exported on file protocol
		if (window.location.protocol.substr(0, 4) === "file")
		{
			alert("Exported games won't work until you upload them. (When running on the file:/// protocol, browsers block many features from working for security reasons.)");
		}
	})();
	</script>
	<div class="container mt-5">
		<div class="row mt-5 mx-auto">
			<div class="col-sm-12 mx-auto">
				<h1 class="text-primary text-center font-weight-bold">TowerDefense</h1>
				<canvas id="c2canvas" width="860" height="480" class="border border-primary">
					<h1>Your browszer does not appear to support HTML5.  Try upgrading your browser to the latest version.  <a href="http://www.whatbrowser.org">What is a browser?</a>
						<br/><br/><a href="http://www.microsoft.com/windows/internet-explorer/default.aspx">Microsoft Internet Explorer</a><br/>
						<a href="http://www.mozilla.com/firefox/">Mozilla Firefox</a><br/>
						<a href="http://www.google.com/chrome/">Google Chrome</a><br/>
						<a href="http://www.apple.com/safari/download/">Apple Safari</a><br/>
						<a href="http://www.google.com/chromeframe">Google Chrome Frame for Internet Explorer</a><br/></h1>
				</canvas>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-sm-12 col-md-8 offset-md-2">
				<h2 class="text-center font-weight-bold text-primary">Scoreboard</h2>
				<table class="table table-hover">
					<thead class="bg-primary text-white">
					<tr>
						<th>#</th>
						<th>name</th>
						<th>level</th>
						<th>wave</th>
					</tr>
					</thead>
					<tbody id="data">
					</tbody>

				</table>
			</div>
		</div>
	</div>

	<footer class="page-footer font-small bg-primary">

		<!-- Copyright -->
        <div class="footer-copyright text-center py-3">© <?= date('Y') ?> Copyright:
            <a href="https://spolnici.com"> Spolnici</a>
        </div>
		<!-- Copyright -->

	</footer>

	<!-- Pages load faster with scripts at the bottom -->
	
	<!-- Construct 2 exported games require jQuery. -->
	<script src="js/jquery-3.4.1.min.js"></script>

	<script src="pathfind.js"></script>

	
    <!-- The runtime script.  You can rename it, but don't forget to rename the reference here as well.
    This file will have been minified and obfuscated if you enabled "Minify script" during export. -->
	<script src="c2runtime.js"></script>

    <script>
		// Start the Construct 2 project running on window load.
		jQuery(document).ready(function ()
		{			
			// Create new runtime using the c2canvas
			cr_createRuntime("c2canvas");
		});
		
		// Pause and resume on page becoming visible/invisible
		function onVisibilityChanged() {
			if (document.hidden || document.mozHidden || document.webkitHidden || document.msHidden)
				cr_setSuspended(true);
			else
				cr_setSuspended(false);
		};

		document.addEventListener("visibilitychange", onVisibilityChanged, false);
		document.addEventListener("mozvisibilitychange", onVisibilityChanged, false);
		document.addEventListener("webkitvisibilitychange", onVisibilityChanged, false);
		document.addEventListener("msvisibilitychange", onVisibilityChanged, false);

		function OnRegisterSWError(e)
		{
			console.warn("Failed to register service worker: ", e);
		};

		// Runtime calls this global method when ready to start caching (i.e. after startup).
		// This registers the service worker which caches resources for offline support.
		window.C2_RegisterSW = function C2_RegisterSW()
		{
			if (!navigator.serviceWorker)
				return;		// no SW support, ignore call

			try {
				navigator.serviceWorker.register("sw.js", { scope: "./" })
						.then(function (reg)
						{
							console.log("Registered service worker on " + reg.scope);
						})
						.catch(OnRegisterSWError);
			}
			catch (e)
			{
				OnRegisterSWError(e);
			}
		};
    </script>
	<script src="js/app.js"></script>
</body> 
</html> 