<?php

	require 'db_conn.php';
	require 'template.php';
	
	session_start();
	$_SESSION["yea"]=$yea=(isset($_POST["year"]) ? $_POST["year"] : '');
	$_SESSION["bran"]=$bran=(isset($_POST["branch"]) ? $_POST["branch"] : '');
	if(isset($_POST["branch"])){
	$sql = "SELECT s.Firstname,s.Lastname FROM student AS s join studentbranch AS sb ON s.reg_id=sb.reg_id WHERE sb.curryear='". $yea. "' && sb.Branch='". $bran. "'";
							$result=mysqli_query($conn,$sql);
							$seats=mysqli_num_rows($result);
							
								  $availseats=(5-$seats);
								  if($availseats<1)
								      echo '<a href="main.php"><h4>Seat is unavailable.Sorry!</h4></a>';
							      else
								      echo '<a href="eligibility.php"><h4>Seat is available</h4></a>';
	
	}


?>

<!DOCTYPE html>

<html>
</head>

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

	<div class="container" style="align:center;">
					<form action="database.php"  method="post">
					<span style='font: italic bold 18px "Lucida Sans Unicode", "Lucida Grande", sans-serif'>
							<input type="text" name="viewD" value="1" hidden>	
							<span style='font: italic bold 24px Verdana, Geneva, sans-serif;color:black;'><input type="submit" value="View admitted students"></span>
					</form>
	</div>
	
	<hr>
	
	<div class="container" style="align:center;" >
					<form action="viewBybranch.php"  method="post">
						<span style='font: italic bold 18px "Lucida Sans Unicode", "Lucida Grande", sans-serif'>
							Current Year  :<input type="number" name="year" value="" min="1" max="4"><br>
							Current Branch:<input type="text" name="branch" value=""></span><br>
							<input type="text" name="viewDB" value="1" hidden>	<br>
							<span style='font: italic bold 24px Verdana, Geneva, sans-serif;color:black;'><input type="submit" value="View"></span><br>
					</form>
					
		<hr>			
					
	</div>
	
	<div class="container" style="align:center;">
					<form action="main.php"  method="post">
							<span style='font: italic bold 24px "Lucida Sans Unicode", "Lucida Grande", sans-serif'>Branch Transfer facility:</span><br>
							Current Year  :<input type="number" name="year" value="" min="1" max="4"><br>
							Branch you are applyig for:<input type="text" name="branch" value=""></span><br>
							<span style='font: italic bold 24px Verdana, Geneva, sans-serif;color:black;'><input type="submit" value="Request"></span>
					</form>				
	</div> 


	
	
	
	
	
</body>
</html>