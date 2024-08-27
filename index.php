<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8"/><link rel="icon" href="/icon.png"/>
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1"/>
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/icon.png"/>
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/icon.png"/>
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/icon.png"/>
    <link rel="manifest" href="/site.webmanifest"/>
    <link rel="mask-icon" href="assets/images/icon.png" color="#111111"/>
    <meta name="msapplication-TileColor" content="#14192e"/><meta name="theme-color" content="#111111"/>
    <meta name="twitter:card" content="summary_large_image"/><meta name="twitter:site" content="@waxrpgcollector"/>
    <meta name="twitter:creator" content="@waxrpgcollector"/>
    <meta name="keywords" content="NFT, NFT marketplace, tokenization, digital goods, metaverse, blockchain"/>
    <meta property="og:type" content="website"/>
    <meta name="placeholder" content="begin generated content"/>
    <meta name="description" content="Wax RPG Collector's - A minimalist RPG where you can earn NFT, CHAD and WAXRC items for free."/>
    <meta property="og:description" content="Wax RPG Collector's - A minimalist RPG where you can earn NFT, WAXRC items for free."/>
    <meta name="twitter:description" content="Wax RPG Collector's - A minimalist RPG where you can earn NFT, WAXRC items for free."/>
    <meta property="og:image" content="assets/images/bg.png"/>
    <meta name="twitter:image" content="assets/images/bg.png"/>
    <meta property="og:title" content="Wax RPG Collector's -Collectibles Game on WAX Network"/>
    <meta name="twitter:title" content="Wax RPG Collector's - Collectibles Game on WAX Network"/>
    <title>Wax RPG Collectors - Collectibles Game on WAX Network</title>
    <meta name="placeholder" content="end generated content"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Pixelify" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Pixelify+Sans" rel="stylesheet" type="text/css">
  <link href="assets/css/style.css?v=<?php echo rand(00001,9999999999999); ?>" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="assets/js/site.js"></script>

</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
<header>
	<div class="container-fluid">
		<div class="jumbotron hero">
			<nav class="navbar">
				<div class="container">
					<div class="navbar-header">
						<div class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
							<span class="glyphicon glyphicon-menu-hamburger"></span>
						</div>
						<a class="navbar-brand" href="./"><img src="assets/images/logo.png"></a>
					</div>
					<div id="navbar" class="collapse navbar-collapse navbar-right">
						<ul class="nav navbar-nav">
							<li><a data-toggle="modal" data-target="#token">WAXRC Token</a></li>
                            <li><a data-toggle="modal" data-target="#nft">WAXRC NFT Collection</a></li>
                            <li><a data-toggle="modal" data-target="#road">Road Map</a></li>
                            <li><a data-toggle="modal" data-target="#info">Tokenization</a></li>
                            <li><a data-toggle="modal" data-target="#partners">Become a Partner</a></li>
							<li><a data-toggle="modal" data-target="#contact">Contact</a></li>
						</ul>
                        <hr class="hidden-sm hidden-md hidden-lg" style="margin: 0 30px;">
					</div><!--/.nav-collapse -->
				</div>
			</nav>
            <?php 
            include_once "modals.php";
            ?>
			<div class="text-center hero-row">
				<h1 class="heading"><span>WAX</span> RPG COLLECTORS</h1>
                <h2 class="subheading">One WAX ​​token play and win.</h2>
				<div class="btn-group">
					<a class="btn btn-lg btnx-blue" data-toggle="modal" data-target="#linkapp" type="button">Play on Web / Cell Phone </a>
					<a class="btn btn-lg btnx-white" data-toggle="modal" data-target="#linkbot" type="button">Play on Discord / Telegram</a>
				</div>
			</div>
			<div class="row header-features text-center hero-row hero-bottom">
				<div class="col-sm-6 col-md-4 col-lg-4">
					<span class="glyphicon glyphicon-pencil"></span>
					<div>
						<h3>Deflationary</h3>
						<p>Token created to be deflationary and over time have its maximum supply reduced, bringing greater reliability.</p>
					</div>
				</div>
				<div class="col-sm-6 col-md-4 col-lg-4">
					<span class="glyphicon glyphicon-link"></span>
					<div>
						<h3>Fast Transactions</h3>
						<p>WAX transactions take less than a second to complete, which helps you avoid wasting time and money, and they are also very cheap.</p>
					</div>
				</div>
				<div class="col-sm-6 col-md-4 col-lg-4">
					<span class="glyphicon glyphicon-cloud"></span>
					<div>
						<h3>Play to Earn</h3>
						<p>Games available for PC and cell phones, and can be played via discord, telegram and our own platform.</p>
					</div>
				</div>
				
			</div>
		</div>
	</div>
</header>
</body>
</html>
