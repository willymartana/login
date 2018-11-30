<?php
session_start();

if (isset($_POST['username']) && $_POST['username'] != '')
	$_SESSION['user'] = $_POST['username'];

if (isset($_SESSION['user']) && $_SESSION['user'] != '') {
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Table V01</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100">
					<table>
						<thead>
							<tr class="table100-head">
								<th>No</th>
								<th>ID</th>
								<th>Name</th>
								<th>Address</th>
							</tr>
						</thead>
						<tbody>
						
							<?php
							for ($i = 0; $i < 20; $i++) {
								if (strlen(($i + 1)) == 1)
									$id = '0'.($i + 1);
								else
									$id = ($i + 1);
								
								echo '<tr>
										<td>'.($i + 1).'</td>
										<td>180000'.$id.'</td>
										<td>Customer '.($i + 1).'</td>
										<td>Address '.($i + 1).'</td>
									</tr>';
							}
							?>

						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>

<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>

<?php
}
else
	header("location: ".getenv('ENV_VAR'));
?>
