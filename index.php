<!doctype html>
<html>
  <head>
    <title>Welcome</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href = "style.css">
    <style>
      a{
        text-decoration: none;
        color:red;
      }
    </style>
  </head>
  <body>
    <video autoplay loop poster="img.jpg">
      <source src = "movie2.mp4" type="video/mp4">
    </video>

      <h1 style="color:white; font-size : 50px; text-align : center; margin: 20; padding:20px">Welcome!</h1>
      <h2 style="color:white; size:20px; text-align:center; margin:5, padding: 20px">
        <?php
        echo "Now Time is : ";
        echo date('H:i:s');
        ?>
      </h2>
      <p align="center" style="font-size : 30px; text-align:center; margin: 220px; padding:20px"><a href="main.html"><blink>Click me!</blink><a></p>
  </body>
  <script language="javascript">
      var speed = 600;

      function doBlink(){
          var blink = document.all.tags("blink");
          for(var i=0; i < blink.length; i++){
              blink[i].style.visibility = blink[i].style.visibility == "" ? "hidden" : "";
          }
      }

      function startBlink(){
          setInterval("doBlink()", speed);
      }
      window.onload = startBlink;
  </script>
</html>
