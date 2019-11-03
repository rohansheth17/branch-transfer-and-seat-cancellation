<?php
	require 'db_conn.php';
	require 'template.php';
	
	session_start();
	 $_SESSION["rid"]= (isset($_POST["reg_id"]) ? $_POST["reg_id"] : '');
	
	if(isset($_POST["reg_id"]) && $_POST["fname"] && $_POST["lname"])
	{	
		$fname=$_POST["fname"];
		$lname=$_POST["lname"];
		$reg_id=$_POST["reg_id"];
		
		$sql = "SELECT Firstname,Lastname,reg_id FROM student WHERE reg_id='$reg_id' && Firstname='$fname' && Lastname='$lname'";
		$result = mysqli_query($conn, $sql);
		
		if (mysqli_num_rows($result) != 0)
		{	$row = mysqli_fetch_assoc($result);
			if($reg_id==$row["reg_id"])
			{	
				$sql="UPDATE student SET logged = '1' WHERE reg_id='$reg_id'";
				mysqli_query($conn, $sql);
				echo '<span style="font: 24px Verdana, Geneva, sans-serif;color:black;"><a href="main.php"><button type="submit" value="Next" class="btn btn-default">Next</button></a></span>';
				echo 'You have successfully logged in!';
			}
		}	
		else echo "<span style='font: bold 24px Verdana, Geneva, sans-serif;color:black;'>You have not yet registered.</span>";	
	}
	else echo "<span style='font: bold 24px Verdana, Geneva, sans-serif;color:black;'>Please fill in all the fields</span>";
	
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
			<h1>Sign in</h1>
	
	</div>

	<div class="container" style="align:center;">
					<span style='font: 20px Georgia, serif;color:black;'><form action="index.php"  method="post" autocomplete="on">
					
					<div class="form-group">
							First name :<input type="text" name="fname" autofocus ><br>
					</div>
					<div class="form-group">
							Last name : <input type="text" name="lname"><br>
					</div>	
					<div class="form-group">
							Id : <input type="number" name="reg_id" min="00000" max="99999"><br>
					</div>		
					
					</span>		
					<span style='font: italic bold 24px Verdana, Geneva, sans-serif;color:black;'><button type="submit" value="Submit" class="btn btn-default"> Submit</button></span>
					</form>
					
					
	</div>
</div>	


	
	
<body>
<html>