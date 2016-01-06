<?php 
echo "hello" 
?>
<html>

<head>
<style type="text/css">



.hvr-sweep-to-bottom:hover{color:#fff}.hvr-sweep-to-bottom:hover:before{-webkit-transform:scaleY(1);transform:scaleY(1)}


.box {
    background: #2db34a;
    border-radius: 6px
    transition-property: background, border-radius;
    transition-duration: 0.5s;
    transition-timing-function: linear;
	padding:5px;
  }
  .box:hover {
    background: #ff7b29;
    transition-duration: 0.5s;
	 
  }
  .box:hover:before{-webkit-transform:scaleY(1);transform:scaleY(1)}

</style>
</head>
<body>
<input type="submit" name="submit" />
<input type="button" class="box" name="bttn" value="submit"/>
</body>
</html>