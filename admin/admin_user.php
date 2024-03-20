<?php 
	
include 'connection.php';
session_start();
include 'headeradmin.php';

$result = $conn->query("SELECT * FROM users");

    
if ($result->num_rows > 0) {
	echo"<center><h1>User Details</h1></center>";
	echo "<table border='1'>";
	echo "<tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Address</th><th>Email</th></tr>";

	while ($row = $result->fetch_assoc()) {
		echo "<tr>";
		echo "<td>" . $row['ID'] . "</td>";
		echo "<td>" . $row['Fname'] . "</td>";
		echo "<td>" . $row['Lname'] . "</td>";
		echo "<td>" . $row['Address'] . "</td>";
		echo "<td>" . $row['Email'] . "</td>";
		echo "</tr>";
	}

	echo "</table>";
} else {
	echo "No records found.";
}



   
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
	<link rel="stylesheet" type="text/css" href="styles3.css">
	<title>Admin Pannel</title>
</head>
<body>
<?php     
       if(isset($_SESSION['loginstatus']))
        {        
            echo "<script>alert('" . $_SESSION['loginstatus'] . "');</script>";
            unset($_SESSION['loginstatus']);
        }  
    ?>
    <script type="text/javascript" src= "script.js"></script>


</body>


</html>