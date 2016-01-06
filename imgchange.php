<html>
  <head>
    <script type="text/javascript">
      var images = new Array();
      for (var i = 1; i < 4; i++) {
        images.push("img" + i + ".jpg");
      }
      var x = 0;

      function changeImage() {
        document.getElementById('ad').src = images[x];
        document.getElementById('imgsrc').innerHTML = "<h1>" + images[x] + "</h1>";
        if (x < 2) {
          x += 1;
        } else {
          x = 0;
        }
      }
      window.onload = function() {
        setInterval(function () {
          changeImage();
        }, 5000);
      }
	  
    </script>
	
  </head>
  <body>
      <img id="ad" src="img.jpg" />
    <div id="imgsrc"><h1>img.gif</h1></div>
  </body>
</html>