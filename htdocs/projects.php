<!DOCTYPE html>
<?php include 'header.php'; ?>
<html>
  <head>
    <title>Projects</title>
    <!--Adjusting the page on mobile screen  -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <!-- header  -->
    <header>
      <h1>Bryan's Bonfire</h1>
  	  <h2>Adventures and the Journey</h2>
      <p>Weary Traveler, there are many among us. lighten your load and take a rest as we listen to stories of old.</p>
    </header>
    <!-- main -->
    <p><h4>Please visit any of my sites to see the progress made in my personal Journey</h4></p>
    <main>
      <p>Sound Clip Test</p>
        <audio id="Waterfalls" controls>
          <source src="assets/Waterfalls_and_Dreams_Version_01_LOOP.wav" type="audio/wav">
        </audio>

      <div class="adventures">
          <a href="https://github.com/MidSummerBonfire">GitHub</a>&nbsp; &#9475; &nbsp;
          <a href="https://www.freecodecamp.org/midsummer">FreeCodeCamp</a>&nbsp; &#9475; &nbsp;
          <a href="https://twitter.com/MidSumm99063091">Twitter</a>&nbsp; &#9475; &nbsp;
      </div>
    </main>
    <!-- nav -->
    <nav>
      <ul>
        <li><a href='<?php echo $home ?>'>Home</a></li>
        <li><a href='<?php echo $about ?>'>About</a></li>
        <li><a href='<?php echo $projects ?>'>Projects</a></li>
      </ul>
    </nav>
    <!-- footer -->
    <footer>
      <div class="heart"></div>
    </footer>
  </body>
</html>
