<!DOCTYPE html>
<html>
  <head>
    <title>PEEU Day In The Life Simulator</title>
    <meta charset="iso-8859-1" />
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <!--[if IE 6]>
                <link href="css/ie6.css" rel="stylesheet" type="text/css" />
        <![endif]-->
    <!--[if IE 7]>
        <link href="css/ie7.css" rel="stylesheet" type="text/css" />  
        <![endif]-->
  </head>
  <body>
    <div id="background">
      <div id="page">
        <div class="header">
          <div class="footer">
            <div class="body">
              <div id="sidebar">
              <a href="index.php">
                <img id="logo" src="images/logo.jpg" with="157" height="84" alt="" title="" />
              </a> 
			  <?php include('includes/nav.inc.php'); ?>
              <div class="footenote">
              <span>© Martin Murphy & Zac Richards - 2013.</span> 
              <span>
              <a href="http://www.shu.ac.uk">Sheffield Hallam University</a><br/> all rights reserved</span></div></div>
              <div id="content">
                <img src="images/main_background.jpg" width="726" height="546" alt="" title="" />
                <div class="featured">
                  <div class="header">
                    <ul>
                      <li class="first">
                        <!--<p>hi.</p> -->
                        <img src="images/hi.jpg" width="50" height="62" alt="" title="" />
                      </li>
                      <li class="last">
                        <p>Welcome to the Professional Experience and Employability Unit's Day in the life of... Simulator</p>
                      </li>
                    </ul>
                  </div>
                  <div class="body">
                    <?php include('includes/loginform.inc.php'); ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="shadow"> </div>
        </div>
      </div>
    </div>
  </body>
</html>
