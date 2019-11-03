<?php
	require 'db_conn.php';
	require 'template.php';
	
	if(isset($_POST["fname"]))
	{	
		$fname=$_POST["fname"];
		$lname=$_POST["lname"];
		$phone=$_POST["phone"];
		$curryear=$_POST["curryear"];
		$branch=$_POST["branch"];
		$reg_id=mt_rand(10000, 99999);
		
		if(!empty($fname) && !empty($lname) && !empty($phone))
		{// storing data in student table
		
			$sql = "INSERT INTO student (reg_id, Firstname, Lastname, Contact)
					VALUES ('$reg_id', '$fname', '$lname' , '$phone')";
						
			if (mysqli_query($conn, $sql)) {}
			else 
				echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			
			$sql = "INSERT INTO studentbranch (reg_id, curryear, Branch)
					VALUES ('$reg_id', '$curryear', '$branch')";
					
			if (mysqli_query($conn, $sql)) {
				echo "<span style='font: italic bold 24px Georgia, serif;color:black;'><a href='index.php'>You have successfully signed up!</a>";
				echo "<br>Your registration id is $reg_id</span>";
			}	
			else 
				echo "Error: " . $sql . "<br>" . mysqli_error($conn);
					
		}
		else echo "<span style='font: italic bold 24px Verdana, Geneva, sans-serif;color:black;'>Please fill all the fields<br></span>";
	}
?>
<html>

<head>

<style>
		input{
						border: 2px solid ;
			border-radius: 4px;
						background-color: #3CBC8D;


		}
		input[type=text],input[type=number] {
			border: 2px solid ;
			border-radius: 4px;
		
		}


</style>



</head>
<body>

	<div class="transbox">
	<div class="jumbotron" style="background-color:blue">
			<h1>Sign Up</h1>
	
	</div>

	<div class="container" style="align:center;">
					<span style='font: 24px Georgia, serif;color:black;'><form action=""  method="post" autocomplete="on">
					
					<div class="form-group">
							First name :<input type="text" name="fname" autofocus ><br>
					</div>
					<div class="form-group">
							Last name : <input type="text" name="lname"><br>
					</div>	
					<div class="form-group">
							Contact :<input type="number" min="1000000000" max="9999999999" name="phone"><br>
					</div>					
					
					<div class="form-group">
							Current Year :<input type="number" min="1" max="4" name="curryear"><br>
					</div>
					<div class="form-group">
							Current Branch : <input type="text" name="branch"><br>
					</div>	
							
					<span style='font: italic bold 24px Verdana, Geneva, sans-serif;color:black;'><button type="submit" value="Submit" class="btn btn-default"> Submit</button></span>
					</form>
					
					
	</div>
</div>	
	
<body>
<html>