<?php
	$mysql_host='localhost';
	$mysql_user='root';
	$mysql_pass='';
	$mysql_db='projectspace';
	$link = mysqli_connect($mysql_host,$mysql_user,$mysql_pass) or die("Error");
	 if($link)
	 {
	 	mysqli_select_db($link,$mysql_db);
	}
	else{
		 die("Error".mysqli_error($link));
	}


/*
	if(!mysql_connect($mysql_host,$mysql_user,$mysql_pass) || !mysql_select_db($mysql_db))
	{
		echo "Unable to connect to database";
		die(mysql_error());
	}
		*/
?>
