<html>
<head>
</head>
<form name="n1" action="#" method="post">
<body>
<?php 

if(isset($_POST['submit']))
		{
$con=mysql_connect("localhost","root","");
error_reporting(E_ERROR | E_PARSE | E_CORE_ERROR);

	$dbservertype='mysql';

	$servername="localhost";

	$dbusername="root";
	$dbpassword="";

	$dbname="test";

		global $link;
		$link=mysql_connect("localhost","root","");
		
		mysql_select_db("test",$link) or die ("could not open db".mysql_error());
		
		$f_q1 = $_POST['que'];
		$query=mysql_query("INSERT INTO `feedback` (  `job_status`) VALUES ('$f_q1'')") or die(mysql_error());
	echo"succesfully insert";
	}
 ?>
<table border="1">
<tr><td >Yes<input type="radio" name="que" value="Yes"></td>
	<td >No<input type="radio" name="que" value="No"></td></tr>
<tr>
<td  colspan="2" align="center"><input type="submit" name="submit" value="submit feedback" />
</td>
</tr>
</table>
</body>
</form>
</html>