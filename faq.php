
   <?php 
   include 'add feedback.php';

     if (isset($_GET['sid'])) {
    // code...
    $sid = $_GET['sid'];
    echo $sid;

  }
   ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <meta name="author" content="Your name">

    <title>feedback| Hand to Your Doorstep</title>
    <link  href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Armata" rel="stylesheet">
    <link  href="assets/css/Responsive-feedback-form-1.css" rel="stylesheet">
    <link  href="assets/css/Responsive-feedback-form.css" rel="stylesheet">
    <link  href="assets/css/styles.css" rel="stylesheet">
   
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap responsive -->
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
    <!-- Font awesome - iconic font with IE7 support --> 
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/font-awesome-ie7.css" rel="stylesheet">
    <!-- Bootbusiness theme -->
    <link href="css/boot-business.css" rel="stylesheet">
    <link rel="shortcut icon" href="img\logo2.png">
    <style>
      body {
        background-image: url("img/content.png");
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
      }
      .feedback{
        border-style: solid;
        width: 50%;
        padding-left: 10%;
        margin-bottom: 100px;
      }
      .btn-submit{
        background-color:   #416533 ;
        color:  #ebedef ;
        padding: 6px;
        float: left;
        margin-left: 100px;

      }
      .btn-reset{
        background-color:  #3a4775;
        color:  #ebedef ;
        padding: 6px;
        float: right;
        

      }
      </style> 
</head>
 

<body>
     <!-- Start: HEADER -->
  <header >
    <!-- Start: Navigation wrapper -->
    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a href="index.html" class="brand brand-bootbus">HAND TO YOUR DOORSTEP</a>
          <!-- Below button used for responsive navigation -->
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- Start: Primary navigation -->
          <div class="nav-collapse collapse" id="navbar-right">        
            <ul class="nav pull-right">
              <li class="en"><a  href="#">Services</a></li>
              <li class="en"><a class="active-link" href="feedback.html">FeedBack</a></li>
              <li class="en"><a href="contact_us.html">Contact us</a></li>
              <li class="en"><a href="signup.html">Sign up</a></li>
              <li class="en"><a href="signin.html">Sign in</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- End: Navigation wrapper -->   
  </header>
  <!-- End: HEADER -->
    <div class="container" style="margin-top:51px;">
        <div class="feedback">
          <form id="form1" name="form1" action="faq.php" method="post">
            <h3>Feedbacks on Hand ToYour Doorstep</h3>
		    <p>Customer Reviews</p>
			  
			  
		    <h3><hr width="5" size="10">Add New Comment<hr width="5" size="10"></h3>
			  <table width="100%" border="0">
  <tbody>
    <tr>
      <td>Enter Your Name:</td>
      <td colspan="2"><input type="text" name="cname" id="textfield2"></td>
      </tr>
    <tr>
      <td width="14%">Enter Your Email Address</td>
      <td colspan="2"><input type="email" name="email" id="email"></td>
      </tr>
    <tr>
      <td height="120" valign="top">Add Your Comment:</td>
      <td colspan="2" valign="top"><input type="text" name="comment" id="textfield3"></td>
      </tr>
    <tr>
      
      <input type="hidden" name="sid" value=$sid>
      <td width="32%" valign="top">
        <input class="btn-reset" type="reset" name="reset" id="reset" value="Reset">
        
       </td> 
        
         <input type="hidden" name="sid" value="<?php echo $sid; ?>">
        <td>
          <input class="btn-submit" type="submit" name="submit" id="submit" value="Submit">
        </td>
    </tr>
  </tbody>
</table>

			  
          </form>
            
        </div>
    </div>
        <!-- Start: FOOTER -->
        <footer>
            <div class="container">
              <div class="row">
                <div class="span2">
                  <div class="social-icons-row">  
                  <h4>Get in touch</h4>
                  <nav>
                    <ul class="quick-links">
                      <li><a href="feedback.html">feedback</a></li>
                      <li><i class="icon-thumbs-up icon-white"></i><a href="contact_us.html">Contact us</a></li>            
                    </ul>
                  </nav>  
                  </div>   
                </div>
                <div class="span2">
                  <div class="social-icons-row">  
                    <h4>Contact us by Phone</h4>            
                    <i class="icon-phone icon-large phone-number"></i> +94752636425    
                  </div>
                  <div class="social-icons-row">
                  </div>
                </div>      
                <div class="span2">
                  <div class="social-icons-row">    
                    <h4>Contact us by email</h4>         
                    <a href="mailto:soundar.rathinasamy@gmail.com"><i class="icon-envelope"></i></a>        
                  </div>
                </div>
              </div>
            </div>
            <hr class="footer-divider">
            <div class="container">
              <p>
                &copy; All Rights Reserved
              </p>
            </div>
          </footer>
          <!-- End: FOOTER -->
          <script type="text/javascript" src="js/jquery.min.js"></script>
          <script type="text/javascript" src="js/bootstrap.min.js"></script>
          <script type="text/javascript" src="js/boot-business.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
