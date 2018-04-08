<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>UWI eAdvising</title>

<!--changed js and css links to codeigniter format to reference from root folders css and js-->
<link rel = "stylesheet" type = "text/css" media="all" href = "<?php echo base_url();?>css/style.css">
<link rel = "stylesheet" type = "text/css" media="all" href = "<?php echo base_url();?>css/examples.css">
<script type = 'text/javascript' src = "<?php echo base_url();?>js/jquery-1.8.1.min.js"></script>
<script type = 'text/javascript' src = "<?php echo base_url();?>js/jquery.carouFredSel-6.0.5-packed.js"></script>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


<script type="text/javascript" language="javascript">
			$(function() {
				
$("#foo1").carouFredSel();
$("#foo2").carouFredSel({
	width	: 1000,
	items	: 8,
	scroll	: 4
});
$("#foo3").carouFredSel({
	items 		: 1,
	direction	: "up",
	auto : {
		easing		: "elastic",
		duration	: 1000,
		timeoutDuration: 2000,
		pauseOnHover: true
	}
}).find(".slide").hover(
	function() { $(this).find("div").slideDown(); },
	function() { $(this).find("div").slideUp();	}
);
			});
</script>
	<script type="text/javascript" language="javascript">
			var siteroot = "../";
	</script>
</head>
<body>
<div class="header-bg">
<div class="wrap">
<div class="wrapper">
   <div class="header">
       <div class="logo">
			<a href="index.html"><img src="<?php echo base_url();?>img/uwilogo.png" width = "200" /></a> <!--changed src to codeigniter format to reference from root-->
	   </div>
	   <div class="menu">
			<ul>
				 <li><?php echo anchor('welcome', 'Click here');?></li>
				 <li><a href="about.html">About</a></li>
				 <li><a href="programs.html">Courses</a></li>
				 <li><a href="programs.html">GPA Info</a></li>
				 <li><a href="contact.html">Contact</a></li>
				 <div class="clear"></div>
			</ul>
		</div>
		<div class="clear"></div>
   </div>
<div class="transparent p1">

					<div class="html_carousel">
						<div id="foo3">
							<div class="slide">
								<img src="<?php echo base_url();?>img/e1.jpg" alt="carousel 1" width="1000" height="450"/>
								<div>
									<h4>Infinity</h4>
									<p>A concept that in many fields refers to a quantity without bound or end.</p>
								</div>
							</div>
							<div class="slide">
								<img src="<?php echo base_url();?>img/lib.jpg" alt="carousel 2" width="1000" height="450"  />
								<div>
									<h4>Circular journey</h4>
									<p>An excursion in which the final destination is the same as the starting point.</p>
								</div>
							</div>
							<div class="slide">
								<img src="<?php echo base_url();?>img/e3.jpg" alt="carousel 3" width="1000" height="450" />
								<div>
									<h4>jQuery</h4>
									<p>jQuery is a JavaScript library designed to simplify the client-side scripting.</p>
								</div>
							</div>
							<div class="slide">
								<img src="<?php echo base_url();?>img/e4.jpg" alt="carousel 4" width="1000" height="450" />
								<div>
									<h4>Carousel</h4>
									<p>A carousel is an amusement ride consisting of a rotating circular platform with seats.</p>
								</div>
							</div>
						</div>
						</div>
					
						</div>
						</div>
						</div>
					</div>
				<div class="clearfix"></div>
<div class="wrap">
<div class="wrapper">
   <div class="content">
		<div class="grids">	
			<div class="bot-grid">
					<img src="<?php echo base_url();?>img/kyle.jpg" alt="" />
					<h3>Our Advisors</h3>
					<p>soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; </p>
					<a href="#"><p><span class="one">Read More</span></p></a>
			</div>
			<div class="bot-grid1">
					<img src="<?php echo base_url();?>img/pic1.jpg" alt="" />
					<h3>Our Courses</h3>
					<p>soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; </p>
					<a href="#"><p><span class="two">Read More</span></p></a>
			</div>
			<div class="bot-grid2">
					<img src="<?php echo base_url();?>img/GPA.png" alt="" />
					<h3>See your GPA</h3>
					<p>soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; </p>
					<a href="#"><p><span class="three">Read More</span></p></a>
			</div>
			<div class="bot-grid3">
					<img src="<?php echo base_url();?>img/pic3.jpg" alt="" />
					<h3>Check Graduation Status</h3>
					<p>soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; </p>
					<a href="#"><p><span class="four">Read More</span></p></a>
			</div>
			<div class="clear"></div>
	</div>
   		<div class="grids-bottom">
   			<div class="grid">
   				<h2>Expert<span>Lorem ipsum dolor</span></h2>
   				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
   				<a href="#"><p><span class="one1">Read More</span></p></a>
   				
   			</div>
   			<div class="grid1">
   				<h2>Quality<span>Lorem ipsum dolor</span></h2>
   				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
   				<a href="#"><p><span class="two1">Read More</span></p></a>
   			</div>
   			<div class="grid2">
   				<h2>Goal<span>Lorem ipsum dolor</span></h2>
   				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
   				<a href="#"><p><span class="three1">Read More</span></p></a>
   			</div>
   			<div class="grid3">
   				<h2>Visions<span>Lorem ipsum dolor</span></h2>
   				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
   				<a href="#"><p><span class="four1">Read More</span></p></a>
   			</div>
   			<div class="clear"></div>
   	</div>	
</div>
</div>	
</div>
<div class="footer-top">
<div class="wrap">
	<div class="footer">
			<div class="footer-nav">
			   <h5><a href="index.html">Home</a></h5>
					<ul>
						<li><a href="#">Locations</a></li>
						<li><a href="#">Team</a></li>
						<li><a href="#">Work</a></li>
					</ul>
					<div class="clear"></div>
			</div>
			<div class="footer-nav">
					<h5><a href="about.html">About</a></h5>
					<ul>
						<li><a href="#">Advance</a></li>
						<li><a href="#">Inspire</a></li>
						<li><a href="#">Flourish</a></li>
						<li><a href="#">Extend</a></li>
					</ul>
			</div>
		   <div class="footer-nav">
					 <h5><a href="programs.html">Programs</a></h5>
					<ul>
						<li><a href="#">Advance</a></li>
						<li><a href="#">Inspire</a></li>
						<li><a href="#">Flourish</a></li>
						<li><a href="#">Extend</a></li>
					</ul>
			</div>
			<div class="footer-nav">
					<h5><a href="programs.html">Schedule</a></h5>
					<ul>
						<li><a href="#">Advance</a></li>
						<li><a href="#">Inspire</a></li>
						<li><a href="#">Flourish</a></li>
						<li><a href="#">Extend</a></li>
					</ul>
			</div>
			<div class="footer-nav1">
                	<h5><a href="contact.html">Contact</a></h5>
                    <ul id="navlist">
						<li id="fb"><a href="#"></a></li>
  						<li id="tw"><a href="#"></a></li>
  						<li id="msg"><a href="#"></a></li>
					</ul>
             </div>
			<div class="clear"></div>
		</div>	
		</div
</div>
<div class="footer-bottom">
<div class="wrap">
	<div class="footer-text">
		<div class="copy">
			 <p>&copy; 2013 Education-Plan. All Rights Reserved | Design by <a href="http://w3layouts.com">W3Layouts</a></p>
        </div>
		<div class="subcribe">
		<form>
	         <input type="text" class="textbox" value="Enter Your text " onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter Your text';}">
	         <input type="submit" value="Search Go!" >
	    </form>
	    </div>
    <div class="clear"></div>
		</div>	
		</div>	
</div>
</body>
</html>
