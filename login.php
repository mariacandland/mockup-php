<?php
/*
 * Setting variables for this specific page
 * before they are used in header.php
 */
 
  // Set the title of this page
  $pageTitle = 'login';
 
?>
 
  <!-- Include the header and navigation -->
  <?php include 'header.php'; ?>

    <!-- Font -->
          <link href='http://fonts.googleapis.com/css?family=Bree+Serif' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'>

    
   <div id="login">

  <form method="post" name="LoginForm" id="LoginForm">


    <p>function LoginPage()</p>
    <p>{</p><br />
    <p><span></span>//At this point the user have to put his login details</p><br />
    <p><span></span>echo = '&#60;form action="/" method="post"&#62;';</p>
    <p><span></span>echo .=	'&#60;input type="text" name="<strong>username</strong>" value="<input type="text" name="username">" /&#62;';</p>
    <p><span></span>echo .= '&#60;input type="text" name="<strong>password</strong>" value="<input type="password" name="password" />" /&#62;';</p>
    <p><span></span>echo .= '&#60;input type="submit" value="<input type="submit" name="submit" value="submit request" />" /&#62;';</p>
    <p><span></span>echo .= '&#60;/form&#62;';</p><br />
    <p><span></span>//after that, check if all is right</p><br />
    <p>}</p>

    <p>if(isset($_POST['username']) && isset($_POST['passowrd']))</p>
    <p>{</p><br />

    <p><span></span>if(!ok($_POST['username'],$_POST['password'])){</p>
    <p><span></span><span></span>echo 'denied!';</p>
    <p><span></span><span></span>DIE();</p>
    <p><span></span>}</p><br />

    <p>}</p>

  </form>

</div>
    

  

   
  <!-- Include the footer -->
  <?php include 'footer.php'; ?>