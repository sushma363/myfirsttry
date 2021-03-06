<!DOCTYPE html> 
<html>

<head>
  <title>Home</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  
  <!-- modernizr enables HTML5 elements and feature detects -->
  <script type="text/javascript" src="js/modernizr-1.5.min.js"></script>
</head>

<body>
  <div id="main">
    <header>
	  <div id="banner">
	    <div id="welcome">
	      <h3>Asian School of Management <span>and Technology</span></h3>
	    </div><!--close welcome-->
	    <div id="welcome_slogan">
	      <h3>"Real Skills for Real Life"</h3>
	    </div><!--close welcome_slogan-->			
	  </div><!--close banner-->
    </header>

	<nav>
	  <div id="menubar">
        <ul id="nav">
          <li class="current"><a href="main.php">Home</a></li>
          <li><a href="about.php">About us</a></li>
          <li><a href="gallery.php">Gallery</a></li>
          <li ><a href="contact.php">Contact Us</a></li>
        </ul>
      </div><!--close menubar-->	
    </nav>	
    
	<div id="site_content">	

      <div class="slideshow">
	    <ul class="slideshow">
          <li class="show"><img width="900" height="250" src="images/11.jpg" alt="&quot;Enter your caption here&quot;" /></li>
          <li><img width="900" height="250" src="images/11 (2).jpg" alt="&quot;Enter your caption here&quot;" /></li>
          <li class="show"><img width="900" height="250" src="images/095.jpg" alt="&quot;Enter your caption here&quot;" /></li>
        </ul> 
	  </div>	
	
	  <div id="content">
        <div class="content_item">
		 <form action="uploadimg.php" method="POST">
		 <h2> Upload photo</h2>
		 <p>
		 <label>Insert path </label>
		 <input type="text" name="path" placeholder="C:\xampp\htdocs\Asian\images">
		</p>
		<p> 
         <input type="submit" name="upload" value="Upload" /> 
		</p>
		 </form>
		  </div><!--close content_imagetext-->
		 </div><!--close content_item-->

      </div><!--close content-->   
	</div><!--close site_content-->  
<div id="site_content"> 
	<div class="content_sujan">
		   	<div class="button_small">
		      <a href="bim_introduction.php">Course Offered</a>
		    </div><!--close button_small-->
		  </div><!--close content_container-->
          <div class="content_sujan">   
		  	<div class="button_small">
		      <a href="Student's.php">Student's View</a>
		    </div><!--close button_small-->		  
		  </div><!--close content_container-->		
          <div class="content_sujan">
		   <div class="button_small">
		      <a href="#">Management</a>
		    </div><!--close button_small-->		  
		  </div><!--close content_container-->	
		  <div class="content_sujan">
		   <div class="button_small">
		      <a href="Faculty.php">ASMT Faculty</a>
		    </div><!--close button_small-->		  
		  </div><!--close content_container-->
		   </div>
 </div><!--close main-->
  
    <footer>
	<p >&copy; copyright reserve Sujan tuladhar <br/>
<a  href="https://www.facebook.com/sujan.tuladhar">Facebook</a>
</p>
    </footer>

  <!-- javascript at the bottom for fast page loading -->
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/image_slide.js"></script>
  
</body>
</html>
