<!DOCTYPE html>
<html>
<head>
<title>DADO, Dolakha - Home</title>
<? include("baselocation.php");?>
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="css/style.css" type="text/css" rel="stylesheet" media="all">
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //Custom Theme files -->
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script> 
<!-- //js -->	
<!-- start-smoth-scrolling-->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>	
<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
</script>
<!--//end-smoth-scrolling-->

<style type="text/css">
	@font-face {
		font-family: "Preeti";
		src: url(fonts/Preeti.ttf) format("truetype");
	}
	.preetie { 
		font-family: "Preeti", Verdana, Tahoma;
	}
</style>

</head>
<body>
	<!--header-->
	<div class="header">
		<div class="container">
			<div class="header-logo">	
				<a href="index.php"><img src="images/home.png" alt="logo" width="125" height="120"/></a>	
 			</div>
            <div class="sitename">
                <h4>नेपाल सरकार</h4>
                <h4>कृषि विकास मन्त्रालय</h4>
                <h3>जिल्ला कृषि विकास कार्यालय, दोलखा</h3>
                <h5>दोलखा, नेपाल</h5>                                           
                                                    
            </div>
  
			<div class="header-info">
				<img src="images/flag.gif" width="80">
			</div>			
			<div class="clearfix"> </div>
		</div>	
	</div>
	<!--//header-->
	<!--header-bottom-->
	<div class="header-bottom">
		<div class="container"> 
			<!--top-nav-->
			<div class="top-nav cl-effect-5">
				<span class="menu-icon"><img src="images/menu-icon.png" alt=""/></span>		
				<ul class="nav1">
					<? createMenu(0, "Header", $pageId);?>
                    

				</ul>
				<!-- script-for-menu -->
				<script>
				   $( "span.menu-icon" ).click(function() {
					 $( "ul.nav1" ).slideToggle( 300, function() {
					 // Animation complete.
					  });
					 });
				</script>
				<!-- /script-for-menu -->
			</div>
			<!--//top-nav-->
			<form class="navbar-form navbar-right" action="" method="post">
				<div class="form-group">
					<input type="text" name="key" class="form-control" placeholder="Search" required>
					<input type="submit" name="search" value="Search" class="btn btn-default" />
				</div>		
			</form>
			<div class="clearfix"> </div>
		</div>
	</div>
