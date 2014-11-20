<head>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="bootstrap-theme.min.css">
</head>

<body background="background.jpg">
<div class="container">

<?php
require 'connect.php';
mysqli_select_db($link,"projectspace");
$query=mysqli_query($link,"SELECT * FROM `projects`");
$count=0;
//if($query_run=mysql_query($query))
	if($query_run=$query)
{
	$query_num_rows=mysqli_num_rows($query);
	if($query_num_rows==0)
	{
		echo "No projects listed.";
	}
	for($a=$query_num_rows-1;$a>=0;$a--)
	{
		/*
		$count+=1;
		echo 'Project Number : <strong>'.$count.'</strong><br/><br/>';	
		$serial=mysql_result($query,$a,'serial');
		echo mysql_result($query,$a,'branch').'<br/';
		echo mysql_result($query,$a,'title').'<br/>';
		echo mysql_result($query,$a,'details');
		//echo mysql_result($query_run,$a,'prereq').'<br/>';
		echo mysql_result($query,$a,'number').'<br/>';
		echo mysql_result($query,$a,'name').'<br/>';
		echo mysql_result($query,$a,'contact').'<br/>';

		echo '<br/><br/>';
		*/


		while($row = mysqli_fetch_assoc($query)) {
			$count+=1;
			
						
					echo 'Project Number : <strong>'.$count.'</strong><br/><br/>';
        			echo "Project Name : " . $row["title"] . "<br>";
        			echo "Project Details and Prerequisites: " . $row["details"] . "<br>";
        			echo "Branch : " . $row["branch"] . "<br>";
        			echo "Number of people required : " . $row["number"] . "<br>";
        			echo "Contact Person Name : " . $row["name"] . "<br>";
        			echo "Contact Details : " . $row["contact"] . "<br><br><br>";
        	
	}
}
}
else
{
	echo mysqli_error();
}				
?>
</div>


</body>