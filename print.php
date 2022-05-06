<?php
	require 'conn.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FMS</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">

</head>
		<style>	
		.table {
			width: 100%;
			margin-bottom: 20px;
		}	
		
		.table-striped tbody > tr:nth-child(odd) > td,
		.table-striped tbody > tr:nth-child(odd) > th {
			background-color: #f9f9f9;
		}
		
		@media print{
			#print {
				display:none;
			}
		}
		@media print {
			#PrintButton {
				display: none;
			}
		}
		
		@page {
			size: auto;   /* auto is the initial value */
			margin: 0;  /* this affects the margin in the printer settings */
		}
	</style>
	</head>
<html lang="en">

<body>
    <center><h2 style="background-color:ForestGreen;">Your Financial </h2></center>
    
    <br><br><br>

<?php
		$date = date("d-m-0y", strtotime("+6 HOURS"));
		echo $date;
	?>
	
                <h2 class="text-center">Total Expenses : Ksh <?php echo $total;?></h2>
	<br /><br />
	<table class="table table-striped">
		<thead>
			<tr>
				<th><center>Name</center></th>
				<th><center>Amount</center></th>
				
			</tr>
		</thead>
		<tbody>
			<?php
				require 'conn.php';
				
				$query = $conn->query("SELECT * FROM `budget`");
				while($fetch = $query->fetch_array()){
					
			?>
			
			<tr>
				<td style="text-align:center;"><?php echo $fetch['name']?></td>
				<td style="text-align:center;"><?php echo $fetch['amount']?></td>
				
			</tr>
			
			<?php
				}
			?>
		</tbody>
	</table>
	<center><button id="PrintButton" onclick="PrintPage()">Print</button></center>
</body>
<script type="text/javascript">
	function PrintPage() {
		window.print();
	}
	document.loaded = function(){
		
	}
	window.addEventListener('DOMContentLoaded', (event) => {
   		PrintPage()
		setTimeout(function(){ window.close() },750)
	});
</script>
</html>


