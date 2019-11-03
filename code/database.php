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
				 <th>Current Year</th>
				 <th>Branch</th>
            </tr>

			<?php
				$viewD=$_POST["viewD"];
					if($viewD){

							$sql = "SELECT Firstname,Lastname,curryear,Branch FROM student natural join studentbranch";
							if ($result=mysqli_query($conn,$sql))
								  {
								  // Fetch one and one row
								  while ($row=mysqli_fetch_row($result))
									{
										echo "<tr>
										      <td>$row[0]</td>
											  <td>$row[1]</td>
											  <td>$row[2]</td>
											  <td>$row[3]</td>
											</tr>";  
									}
								  // Free result set
								  mysqli_free_result($result);
								}
						
					}
			
			?>
	</table>

	
	

		<div class="container" style="align:center;">
	
							
					<span style='font: italic bold 24px Verdana, Geneva, sans-serif;color:black;'><a href="main.php"><button type="submit" value="Return" class="btn btn-default">Return</button>
									
		</div>
	



</body>



</html>