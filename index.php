<html lang="en">

	<head>
	
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="author" content="Ashish Kumar, Rajat Agarwal, Edwin Mascarenhas and Bootstrap contributors">
		<meta name="keywords" content="Portal for submitting and searching projects">

		<title>Project Portal | HOME Page</title>

		<!-- Mobile First -->
		<meta name="viewport" content="width=device-width, initial-scale=1">

		
		<!-- My css file -->
		<link rel="stylesheet" type="text/css" href="mycss.css">

		<!-- Bootstrap css files offline -->
		<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="bootstrap-theme.min.css">

		<!-- favicon -->
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
		<link rel="icon" href="favicon.ico" type="image/x-icon">


	</head>




	
	<body background="background.jpg">

		
		<div class="container">

		<?php
require 'connect.php';
mysqli_select_db($link,"projectspace");
//include 'options.php';
if(isset($_POST['category']))
{
	$category=$_POST['category'];
	if(!empty($category))
	{
		$query=mysqli_query($link,"SELECT * FROM `projects` WHERE `branch`='$category'");
		$count=0;
		if($query_run=$query)
		{
			 $query_num_rows=mysqli_num_rows($query_run);
			 if($query_num_rows==0)
			 {
			    echo "No projects in the branch.";
			 }
			for($a=$query_num_rows-1;$a>=0;$a--)
			{
					/*$count+=1;
					echo 'Project Number : <strong>'.$count.'</strong><br/><br/>';
					$serial=mysql_result($query,$a,'serial');
					echo mysql_result($query,$a,'title').'<br/>';
					echo mysql_result($query_run,$a,'details').'<br/>';
					echo mysql_result($query_run,$a,'branch').'<br/>';
					echo mysql_result($query_run,$a,'number').'<br/>';
					echo mysql_result($query_run,$a,'name').'<br/>';
					echo mysql_result($query_run,$a,'contact').'<br/>';

					echo '<br/><br/>';*/



					while($row = mysqli_fetch_assoc($query)) {
						$count+=1;
					echo 'Project Number : <strong>'.$count.'</strong><br/><br/>';
        			echo "Project Name : " . $row["title"] . "<br>";
        			echo "Project Details and Prerequisites: " . $row["details"] . "<br>";
        			echo "Branch : " . $row["branch"] . "<br>";
        			echo "Number of people required : " . $row["number"] . "<br>";
        			echo "Contact Person Name : " . $row["name"] . "<br>";
        			echo "Contact Details : " . $row["contact"] . "<br>";
    }
			}
		}
		else
		{
			echo mysql_error();
		}	
	}			
	
}
?>

  			<div id="padtop">
  			<div class="row">
				<div class="col-md-8">
				
					<div class="jumbotron">
  						<h1>WELCOME TO BITS GOA PROJECTS INFORMATION PORTAL </h1>
  					</div>
				</div>
				
				<div class="col-md-4">

						<h2><strong>Search by branch</strong></h2><br>

						<form action="index.php" method="POST">
			<select name="category" size="1">
		         <option value="Chemical"> Chemical
		         <option value="EEE and ENI"> EEE and ENI
		         <option value="CS"> CS
		         <option value="Mechanical"> Mechanical
		         <option value="Physics"> Physics
		         <option value="Chemistry"> Chemistry
		         <option value="Mathematics"> Mathematics
		         <option value="Economics"> Economics
		         <option value="Biology"> Biology
		         <option value="Others"> Others
								         
			</select>

			
			<input type="submit" value="Search">

		</form>
				</div>
			</div>
			</div>
			
			
			

			
			<div class="row">
				<div class="col-md-0">
					
				</div>
				<div class="col-md-12">
					<a href="addproject.php" target="_blank"><button type="button" class="btn btn-primary btn-lg btn-block">Give your project Info</button></a>
				</div>
			</div>
	<div class="row">
				
				<div class="col-md-12">
					<a href="viewall.php" target="_blank"><button type="button" class="btn btn-primary btn-lg btn-block">View all projects</button></a>
				</div>
			</div>		
			
					
						</div>

		<!-- need to add javascript links here -->

	</body>

	