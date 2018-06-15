<!DOCTYPE html> 
<html>

<head>
  <title>Student's View</title>
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  
  <!-- modernizr enables HTML5 elements and feature detects -->
  <script type="text/javascript" src="js/modernizr-1.5.min.js"></script>
  <script>
  function myFunction(){
  if(document.myForm.your_name.value==""){
  alert("Please Enter your Name");
  document.myForm.your_name.focus();
  return false;
  }
  if(document.myForm.your_email.value==""){
  alert("Please Enter your Email");
  document.myForm.your_email.focus();
  return false;
}
if(document.myForm.your_message.value==""){
  alert("Please Enter your Message that contains at least two lines");
  document.myForm.your_message.focus();
  return false;
}
if(document.myForm.user_answer.value==""){
  alert("Please Enter the answer");
  document.myForm.user_answer.focus();
  return false;
}
  return true;
  }
  </script>
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
          <li ><a href="main.php">Home</a></li>
          <li><a href="about.html">About us</a></li>
          <li><a href="gallery.html">Gallery</a></li>
          <li><a href="contact.html">Contact Us</a></li>
          <li ><a href="tinymce.php">Editor</a></li>
        </ul>
      </div><!--close menubar-->  
  </nav>
    
  <div id="site_content">   

      <div class="slideshow">
      <ul class="slideshow">
          <li class="show"><img width="900" height="250" src="images/11.jpg" alt="&quot;Enter your caption here&quot;" /></li>
          <li><img width="900" height="250" src="images/11 (2).jpg" alt="&quot;Enter your caption here&quot;" /></li>
        </ul> 
        </ul> 
    </div>
  
    <div id="content">
        <div class="content_item">
      <div class="form_settings">
            <h1> Suggest Your oppinion</h1>
            <p style="padding-bottom: 15px;"></p>      
            <form name="myForm" action="contactinf.php" method="POST">    
      <p><span>Name</span><input class="contact" type="text" name="your_name" value="" /></p>
            <p><span>Email Address</span><input class="contact" type="text" name="your_email" value="" /></p>
      <p><span>Message</span><textarea class="contact textarea" rows="8" cols="50" name="your_message"></textarea></p>
            <p style="padding: 10px 0 10px 0;">Please enter the answer to this simple maths question (to prevent spam)</p>
      <p><span>Maths Question: 9 + 3 = ?</span><input type="text" name="user_answer" class="contact" /><input type="hidden" name="answer" value="4d76fe9775" /></p>
            <p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="contact_submitted" value="Send" onclick="myFunction()" /></p>
            </form>
          </div><!--close form_settings-->
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
          <a href="management.php">Management</a>
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
