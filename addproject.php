<?php
 	/*$mysql_host='localhost';
	$mysql_user='root';
	$mysql_pass='';
	$mysql_db='projectspace';
	$link = mysqli_connect($mysql_host,$mysql_user,$mysql_pass,$mysql_db) or die("Error".mysqli_error($link));*/


	require 'connect.php';
	

if(isset($_POST['title']) && isset($_POST['details']) && isset($_POST['branch']) && isset($_POST['number']) && isset($_POST['contact']) && isset($_POST['name']))
{ 
	$temp = $_POST['branch'];
	$branch = ucfirst(strtolower($temp));
	$title = $_POST['title'];
	$title=mysqli_real_escape_string($link,$title);
	$details=mysqli_real_escape_string($link,$_POST['details']);
	$branch=mysqli_real_escape_string($link,$_POST['branch']);
	$number=mysqli_real_escape_string($link,$_POST['number']);
	//$category=mysqli_real_escape_string($link,$_POST['category']);
	$contact=mysqli_real_escape_string($link,$_POST['contact']);
	$name=mysqli_real_escape_string($link,$_POST['name']);

	if(!empty($title) && !empty($details) && !empty($branch) && !empty($number) && !empty($contact) && !empty($name))
	{
		$query="INSERT INTO `projects` VALUES ('','".$title."','".$details."','".$branch."','".$number."','".$contact."','".$name."')";
		if($query_run=mysqli_query($link,$query))
		{
			header('Location: index.php');
		}
		else
		{
			echo mysql_error();
		}	
	}			
	else
	{
		echo "You must enter all fields.";
	}
}
?>

<html lang="en">

	<head>
	
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="author" content="Ashish Kumar, Rajat Gupta, Edwin Mascarenhas and Bootstrap contributors">
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

		<!-- 
		online bootstrap css - slower 

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">

		-->

	</head>

	<body background="background.jpg">
		<div class="container">
		<div id="padtop">
		<form class="form-horizontal" role="form" action="addproject.php" method="POST">
			<div class="form-group">
		    	<label for="Project_name" class="col-sm-2 control-label">Project Name</label><br><br>
		    	<input type="text" name="title" class="form-control" placeholder="Write the name of your project">
		  	

		    	<label for="Project_Details" class="col-sm-2 control-label">Project Details and Prerequisites</label><br><br>
		    	<textarea class="form-control" name="details" rows="3" placeholder="Write a brief description of your project"></textarea>
		    
		    <div class="form-group">
		    	<label for="Branch" class="col-sm-2 control-label">Branch</label><br><br>
		    	<input type="text" name="branch" class="form-control" placeholder="Write related Branch">
		    </div>
			
		    
		    
			<!--
			 <table width="100"  cellpadding="25">
			  
				   <tr>
				     <td>
				       
				     	<label for="branch" class="col-sm-2 control-label">Branch</label><br><br>
				       
				       
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
				       
				     </td>
				   </tr>
				</table>
				-->
				
		
		    	<label for="Project_num" class="col-sm-2 control-label">Number of people required</label><br><br>
		    	<input type="text" name="number" class="form-control" placeholder="How many people required">
		


		    	<label for="name" class="col-sm-2 control-label">Your name</label><br><br>
		    	<textarea class="form-control" name="name" rows="1" placeholder=" Enter Your name"></textarea>
		    

				
		    	<label for="Contact_Details" class="col-sm-2 control-label">Contact Details</label><br><br>
		    	<textarea class="form-control" name="contact" rows="3" placeholder="How to contact you - email and phone number"></textarea>
		    
		
		<br>
		    <input type="submit" value="Add">
		    </div>
		</form>

		</div>
		</div>

	</body>
	