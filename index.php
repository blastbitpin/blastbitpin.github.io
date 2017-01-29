<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content=" FILL ME IN ">
    <meta name="author" content=" FILL ME IN ">
<?php 
	  Header add "Expires" "Mon, 29 Jan 2016 14:00:00 GMT"
Header add "Cache-Control" "max-age=315360000"

	  ?>
    <title>Cameron Pittman: Portfolio</title>
      <!-- Hmm, what is the impact of web fonts on speed? Measure it... -->

  </head>

  <body>
 <header>
            <ul>
        <li><a href="/"><img src="img/profilepic.jpg"></a></li>
        <li><p>Cameron Pittman<br><span>Course Developer</span></p></li>
        <li><a href="/"><img src="img/me.jpg"></a></li>
        <li><p>Yakus Julia<br><span>Student of course</span></p></li>
      </ul> 
    </header>

    
    <div class="container">
      <div class="hero">
        <h3>Cameron: </h3><strong>I love web development!</strong> This is a template for a simple portfolio. I decided to use it to showcase a few Udacity courses I've taken and some teaching work, but you can use it to showcase any kind of project that you want the world to see :) <br> Contact me: me@email.com
      </div>
      <div class="padawan">
        <h3>Julia: </h3><strong>I love web development!</strong> <br> Contact me: pingvinlinux13@gmail.com, <br> Number: +375256556346
      </div>
      </div> 
      <div class="content">
        <ul>
          <li>
            <img src="/img/3.jpg">
            <a href="project-2048.html">Build Your Own 2048!</a>
            <p>I made my own version of 2048. How cool is that!?</p>
          </li>

          <li>
            <img src="/img/1.jpg">
		<a href="project-webperf.html">Website Performance Optimization</a>  
            <p>Hey... this class looks familiar.</p>
         </li>

          <li>
            <img src="/img/2.jpg">
            <a href="project-mobile.html">Mobile Web Development</a>
            <p>Making mobile apps isn't so hard after all.</p>
          </li>

          <li>
            <img style="width: 100px;" src="/img/pizzeria1.jpg">
            <a href="views/pizza.html">Cam's Pizzeria</a>
            <p>Who wants a performant pizza?</p>
          </li>
        </ul>
      </div>

      <footer>
        <p>&copy; Web Performance 2014 <span id="crp-stats"></span></p>
      </footer>
 

    <script>
      (function(w,g){w['GoogleAnalyticsObject']=g;
      w[g]=w[g]||function(){(w[g].q=w[g].q||[]).push(arguments)};w[g].l=1*new Date();})(window,'ga');
      // Optional TODO: replace with your Google Analytics profile ID.
      ga('create', 'UA-XXXX-Y');
      ga('send', 'pageview');
    </script>
    <script async src="http://www.google-analytics.com/analytics.js"></script>
    <script async src="js/perfmatters.js"></script>
  </body>
</html>
