<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>manage pets</title>
    <link rel="stylesheet" type="text/css" href="styles3.css">
</head>
<body>

<?php include 'headeradmin.php';
 include 'connection.php'?>
<section class="show-pets">
	<center><h2>Help requests</h2></center>
		<div class="box-container">
			<?php 
				$help = mysqli_query($conn, "SELECT * FROM `help`") or die('query failed');
				if(mysqli_num_rows($help) > 0){
					while($fetch_help = mysqli_fetch_assoc($help)){


			?>
			<div class="box">
                <p>Name:<?php echo $fetch_help['first_name']; ?></p>
                <p>Email:<?php echo $fetch_help['email']; ?></p>
				<p>Contact number: <?php echo $fetch_help['contact']; ?> </p>
				<p>Subject <?php echo $fetch_help['subject']; ?> </p>
                <p>Questions: <?php echo $fetch_help['questions']; ?></p>
               
		

			
			</div>
			<?php 
					}
				}
			?>
		</div>
	</section>
    <script type="text/javascript" src="script.js"></script>


            </body>
            </html>