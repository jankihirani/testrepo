<?php
$dbhost = "localhost";
$username = "root";
$password = "";
$dbname = "tech_attendance";

$conn = mysql_connect($dbhost, $username, $password);
mysql_select_db('tech_attendance');
// Create connection
$result = mysql_query("SELECT * FROM staff", $conn);
$num_rows = mysql_num_rows($result);



    // output data of each row
   $cnt=1;
   $startlimit=0;
   $endlimit=0;
   $reccount=0;
	echo "<div style='width:100%;'>";
	for($i=0;$i<2;$i++)
	{
	
	$startlimit=$cnt;
	$endlimit=12;
	if($i==0)
	echo "<div style='width:50%;background-color:green;display:inline-block;'>";
	else
	echo "<div style='width:50%;float:right;background-color:yellow'>";
	
	$sql = "SELECT staffNo,memberName FROM staff limit $startlimit , $endlimit";
	$result = mysql_query($sql);
	
	for($j=0;$j<12;$j++)
	{
		$reccount++;
		if($num_rows==$reccount)
		{
		exit;
		}
		while($row=mysql_fetch_array($result)) {
     		
	    echo "No: " . $row["staffNo"]. " - Name: " . $row["memberName"]. " <br>";
	   //echo $cnt;
	   $cnt++;
	 
    }
		if($i==1)
		{
		
	$i=-1;
	}
	}

	
	echo "</div>";
	
		
}
echo "</div>";


mysql_close($conn);
?>