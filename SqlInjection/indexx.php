<!DOCTYPE html>

<html>
<head>
   
   

    
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sql Injection Testbed</title>
<meta name="keywords" content="" />
<meta name="description" content="" />


<link href="tooplate_style.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
<script src="js/jquery.nivo.slider.js" type="text/javascript"></script>

<script type="text/javascript">
    $(window).load(function () {
        $('#slider').nivoSlider({
            effect: 'random',
            slices: 15,
            animSpeed: 500,
            pauseTime: 3000,
            startSlide: 0, //Set starting Slide (0 index)
            directionNav: false,
            directionNavHide: false, //Only show on hover
            controlNav: false, //1,2,3...
            controlNavThumbs: false, //Use thumbnails for Control Nav
            pauseOnHover: true, //Stop animation while hovering
            manualAdvance: false, //Force manual transitions
            captionOpacity: 0.8, //Universal caption opacity
            beforeChange: function () { },
            afterChange: function () { },
            slideshowEnd: function () { } //Triggers after all slides have been shown
        });
    });
</script>
    


</head>




<body>
    <form id="form1">
    
    <div>
    <div id="tooplate_wrapper">
    <div id="tooplate_header">
        <div id="site_title"><h1 style="color:black;font-family: Arial Black;">Sql Injection Testbed</h1></div>
        <div>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<a href="loginpage.aspx">Logout</a>
        <a href="Signup.aspx">Sign In</a></div>
    </div> <!-- end of forever header -->
    <div id="tooplate_menu">
        <ul>
            <li><a href="Home.aspx" class="current">Home</a></li>
            <li><a href="About.aspx">About Us</a></li>
            <li><a href="Attack.aspx">Attacks</a></li>
            <li><a href="Contact.aspx" class="last">Contact</a></li>
        </ul>    	
    </div> <!-- end of tooplate_menu -->
    <div id="tooplate_main">
           
        <div id="tooplate_sidebar">
        	
			
            <div class="sidbar_box">
		        <h4>Categories</h4>
                <ul class="tooplate_list">
                    <li><a href="sqli-labs-master/Less-1/index.php">Error based SQL Injection</a></li>
                   

                    <li><a href="Attack.aspx">Boolean based  SQL Injection</a></li>
                    <li><a href="Attack.aspx">Time based SQL Injection</a></li>
                    <li><a href="Attack.aspx">Blind Boolean based SQL Injection</a></li>
                </ul>
			</div>
			
            
			
            <div class="cleaner"></div>
        </div>
        
        <div class="cleaner"></div>
	</div> <!-- end of main -->
	
    
    
    
   
    
    <div id="tooplate_footer_wrapper">
        <div id="tooplate_footer">
            
            <div class="col_w280">
                <h5>Pages</h5>
                <ul class="tooplate_list">
                    <li><a href="Home.aspx">Home</a></li>
                    <li><a href="About.aspx">About us</a></li>
                    <li><a href="Attack.aspx">Attacks</a></li>
                    <li><a href="Contact.aspx">Contact Us</a></li>
                </ul>
            </div>
            
            <div class="col_w280">
                <h5>Partners</h5>
                <ul class="tooplate_list">
                    <li><a href="Home.aspx">Fahad</a></li>
                    <li><a href="Home.aspx">Hindal</a></li>
                </ul>
            </div>
            
            <div class="col_w280 last_col">
                <h5>About Us</h5>
                <p>We are going to find out different scenarios and vulnerabilities through which web application can be compromised and the we will use level based approached which will teach student to learn any attack from the scratch and for the teachers it will provide main contents of different lessons and also practical scenarios through video demos. </p>
            </div>
        
            <div class="cleaner"></div>
        </div>
        
        <div id="tooplate_copyright">
		
            Copyright © 2016 <a href="#">Sql Injection Testbed</a>
			
        </div>
	</div>
</div> <!-- end of wrapper -->

    </div>
    </form>
</body>
</html>