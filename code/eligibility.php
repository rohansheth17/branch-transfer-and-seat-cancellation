<?php

	require 'db_conn.php';
	require 'template.php';
	session_start();
	$yea=$_SESSION["yea"];
	$bran=$_SESSION["bran"];
	$login=$_SESSION["rid"];
	
	//$sssc=isset($_POST["ssc"]) ? $_POST["ssc"] : '';
	//$ssem2=isset($_POST["sem2"]) ? $_POST["sem2"] : '';
	
	/*echo $sssc.'\n';
	echo $ssem2.'\n';*/
	
	$ssc=floatval(isset($_POST["ssc"]) ? $_POST["ssc"] : '');
	$hsc=floatval(isset($_POST["hsc"]) ? $_POST["hsc"] : '');
	$sem1=floatval(isset($_POST["sem1"]) ? $_POST["sem1"] : '');
	$sem2=floatval(isset($_POST["sem2"]) ? $_POST["sem2"] : '');
	$sem3=floatval(isset($_POST["sem3"]) ? $_POST["sem3"] : '');
	$sem4=floatval(isset($_POST["sem4"]) ? $_POST["sem4"] : '');
	/*echo $ssc.'\n';
	echo $hsc.'\n';
	echo $sem1.'\n';
	echo $sem2.'\n';
	echo $sem3.'\n';
	echo $sem4.'\n';*/
	
	
	if(isset($_POST["ssc"]) && isset($_POST["hsc"])){
			if(($ssc>89.99 && $hsc>89.99 && $sem1>7.5 && $sem2>7.7 && $sem3>7.8 && $sem4 > 8.0) || ($ssc>89.99 && $hsc>89.99 && $sem1>7.5 && $sem2>7.7 && $sem3==0.0 && $sem4==0.0) || ($ssc>89.99 && $hsc>89.99 && $sem1==0.0 && $sem2==0.0 && $sem3==0.0 && $sem4==0.0))
			{
				$sql = "UPDATE studentbranch SET Branch='$bran' WHERE reg_id='$login'";
				mysqli_query($conn, $sql);
				echo "College database is updated. Your transfer request has been accepted.";
		
			}
			else{
				echo "Sorry your credentials dont meet our criteria. Your application has been rejected.";
			}
			
	}
	echo "<span style='font: italic bold 24px Verdana, Geneva, sans-serif;color:black;'><a href='main.php'><button type='submit' value='Return' class='btn btn-default'>Return</button></a></span>";

?>


<!DOCTYPE html>


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

	<h3>Please enter the following required eligibility criteria:</h3>
	<div class="container" style="align:center;">
					<span style='font: 24px Georgia, serif;color:black;'><form action=""  method="post" autocomplete="on">
					
					<div class="form-group">
					CBSE/ICSE/SSC marks in % :<input type="number" step="0.01" name="ssc" required><br>
					</div>
					<div class="form-group">
					HSC marks in %: <input type="number" step="0.01" name="hsc" required><br>
					</div>	
					<div class="form-group">
					Sem 1 :<input type="number" step="0.01" name="sem1"><br>
					</div>					
					<div class="form-group">
					Sem 2 :<input type="number" step="0.01" name="sem2"><br>
					</div>
					<div class="form-group">
				    Sem 3 : <input type="number" step="0.01" name="sem3"><br>
					</div>
					<div class="form-group">
				    Sem 4 : <input type="number" step="0.01" name="sem4"><br>
					</div>						
							
					<span style='font: italic bold 24px Verdana, Geneva, sans-serif;color:black;'><input type="submit" value="Submit"></button></span>
					</form>
					
					
	</div>



</body>
</html>