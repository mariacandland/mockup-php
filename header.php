<?php
$pageID =strtolower($pageTitle);

$userName = 'Maria';
?>

<!DOCTYPE html>
<html>
  <head>
    <!-- Adding the Page Title from the index, about, or contact pages -->
    <title><?php echo $pageTitle;?> | Maria-Candland</title>

    <!-- Tell the browser to render the view width correctly -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Link our stylesheet -->
    <link rel="stylesheet" href="style.css">

          <!-- Font -->
          <link href='http://fonts.googleapis.com/css?family=Bree+Serif' rel='stylesheet' type='text/css'>
          <link href='http://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'>
    </head>

  <body id="<?php echo $pageID; ?>">
    <header>
      <div class="row">
        <!-- Our Logo -->
        <a href="index.html"><img class="logo" src="images/logo.png"></a>

      <?php include 'nav.php' ?>

      </div>
    </header>
