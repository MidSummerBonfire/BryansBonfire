<!DOCTYPE html>
<?php include 'header.php'; ?>
<html>
  <head>
    <title>Bryan's Bonfire</title>
    <!--Adjusting the page on mobile screen  -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">
  </head>

  <body>
    <!-- Main Page -->
    <div>
      <h1>Bryan's Bonfire</h1>
  	  <h2>Hello and Welcome</h2>
      <p>Weary Traveler, there are many among us.
        lighten your load and take a rest as we listen to stories of old.</p>
  	   <ul>
  	      <li>Stay Awhile</li>
  	      <li>Enjoy The Company</li>
  	   </ul>
    </div>
  </body>

  <nav>
    <ul>
      <li><a href='<?php echo $home ?>'>Home</a></li>
      <li><a href='<?php echo $about ?>'>About</a></li>
      <li><a href='<?php echo $projects ?>'>Projects</a></li>
    </ul>
  </nav>

  <footer>
    <div class="heart"></div>
  </footer>

</html>
