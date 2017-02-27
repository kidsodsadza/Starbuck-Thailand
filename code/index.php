<!DOCTYPE html>
<html>
<head>
	<title>StarBuck Thailand</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/flexslider.css">
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/loading.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>
	<!-- Paste this code after body tag -->
	<div class="se-pre-con"></div>
	<!-- Ends -->
	
	<div class="container">
		<header id="header-site">
			<div id="logo"> 
				<img src="img/logo.png">

			</div><!-- logo -->

			<p>Good morning!</p>
		</header><!-- header-site -->

		<div class="contant-box">
					<div id="slides-menu">
						<div class="flexslider">
								<ul class="slides">
									<li>
									<a href="Cards.php"><div class="slides-starbuck">
									<img src="img/menu-card.png">
									<p class="slides-starbuck-text">Starbucks Card<br><span>Reload value and check your rewards</span></p>
									</a></div><!-- slides-starbuck -->
									</li>
									<li>
									<a href="#"><div class="slides-starbuck">
									<img src="img/menu-cof.png">
									<p class="slides-starbuck-text">Menu<br><span>Delicious beverages and food</span></p>
									</a></div><!-- slides-starbuck -->
									</li>
									<li>
									<a href="Stores.php"><div class="slides-starbuck">
									<img src="img/menu-store.png">
									<p class="slides-starbuck-text">Stores<br><span>Find Starbucks store near you</span></p>
									</a></div><!-- slides-starbuck -->
									</li>
									<li>
									<a href="Messages.php"><div class="slides-starbuck">
									<img src="img/menu-Message.png">
									<p class="slides-starbuck-text">Message<br><span>Stay connected with Starbucks</span></p>
									</a></div><!-- slides-starbuck -->
									</li>
									<li>
									<a href="More.php"><div class="slides-starbuck">
									<img src="img/menu-more.png">
									<p class="slides-starbuck-text">More<br><span>Access or change your settings</span></p>
									</a></div><!-- slides-starbuck -->
									</li>
								</ul><!-- 	slides	 -->
							</div><!-- flexslider -->
					</div><!-- slides-menu -->

					<script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
						<script type="text/javascript">
							$(window).load(function(){
								$('.flexslider').flexslider({
									animation:"slide",pauseOnHover: true,slideshowSpeed: 4000,animationSpeed: 1000,
									start: function(slide){
										$('body').removeClass('loading');
									}
								});
							});
					</script>
		</div><!-- contant-box -->

		<nav id="nav-menu">
			<ul class="main-menu">
				<a href="#"><li class="menu active"><img class="menu-img" src="img/home_ac.png">HOME</li></a>
				<a href="Cards.php"><li class="menu"><img class="menu-img" src="img/card.png">CARDS</li></a>
				<a href="Stores.php"><li class="menu"><img class="menu-img" src="img/sofa.png">STORES</li></a>
				<a href="Messages.php"><li class="menu"><img class="menu-img" src="img/Message.png">MESSAGES</li></a>
				<a href="#"><li class="menu"><img class="menu-img" src="img/other.png">MORE</li></a>
			</ul>
		</nav>
	</div><!-- container -->
</body>
</html>