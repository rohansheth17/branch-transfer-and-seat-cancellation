<?php
		require 'db_conn.php';
	    require 'template.php';

?>

<!DOCTYPE html>
<html>
<head>
<style>
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}
</style>

</head>
<body>

<table>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
            </tr>
		<?php
				$yea=$_POST["year"];
				$bran=$_POST["branch"];
				$viewDB=$_POST["viewDB"];	
				if($viewDB){
							$sql = "SELECT s.Firstname,s.Lastname FROM student AS s join studentbranch AS sb ON s.reg_id=sb.reg_id WHERE sb.curryear='". $yea. "' && sb.Branch='". $bran. "'";
							$result=mysqli_query($conn,$sql);
							$seats=mysqli_num_rows($result);
							if ($result=mysqli_query($conn,$sql))
								  {
								  // Fetch one and one row
								  while ($row=mysqli_fetch_row($result))
									{
										echo "<tr>
										      <td>$row[0]</td>
											  <td>$row[1]</td>
											</tr>";  
									}
								  // Free result set
								  mysqli_free_result($result);
								  $availseats=(5-$seats);
								  echo "\nAvailable Seats are $availseats";
								}
					
					}	
				
		?>
		
		</table>
		
		<div class="container" style="align:center;">
	
							
					<span style='font: italic bold 24px Verdana, Geneva, sans-serif;color:black;'><a href="main.php"><button type="submit" value="Return" class="btn btn-default">Return</button>
									
		</div>
	
	</body>

</html>	
		
		