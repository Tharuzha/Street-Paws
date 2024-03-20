<?php
include 'connection.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $first_name = isset($_POST['first_name']) ? $_POST['first_name'] : '';
    $last_name = isset($_POST['last_name']) ? $_POST['last_name'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $contact = isset($_POST['contact']) ? $_POST['contact'] : '';
    $subject = isset($_POST['subject']) ? $_POST['subject'] : '';
    $questions = isset($_POST['questions']) ? $_POST['questions'] : '';

  
    $sql = "INSERT INTO help (first_name, last_name, email, contact, subject, questions)
            VALUES (?, ?, ?, ?, ?, ?)";

 
    $stmt = $conn->prepare($sql);

    
    $stmt->bind_param("ssssss", $first_name, $last_name, $email, $contact, $subject, $questions);

  
    if ($stmt->execute()) {
        $_SESSION['requeststatus'] = "Help form submitted successfully";
        header('Location: ../help page/help.php');
    } else {
       
        echo "Error: " . $stmt->error;
    }

  
    $stmt->close();
   
    $conn->close();
}
?>
