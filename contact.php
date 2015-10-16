<?php
/*
 * Setting variables for this specific page
 * before they are used in header.php
 */
 
  // Set the title of this page
  $pageTitle = 'Contact';
 
?>
 
  <!-- Include the header and navigation -->
  <?php include 'header.php'; ?>

    <!-- Font -->
          <link href='http://fonts.googleapis.com/css?family=Bree+Serif' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'>

    <div class="row">

      <!-- Half column with heading and message -->
      <div class="column one-half">
        <h3>Column Heading</h3>
        <p>Aenean lacinia bibendum nulla sed consectetur. Donec ullamcorper nulla non metus auctor fringilla. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
      </div>

      <!-- Half column with google map -->
      <div class="column one-half">
  <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d98845.8748494732!2d-104.97167958467622!3d39.267073399017!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x876ca386de31fa7f%3A0xc26ce1a94f1b9c32!2s650+Sky+View+Ln%2C+Larkspur%2C+CO+80118!3m2!1d39.267096699999996!2d-104.89786269999999!5e0!3m2!1sen!2sus!4v1444235282804" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>

    </div>

   
  <!-- Include the footer -->
  <?php include 'footer.php'; ?>