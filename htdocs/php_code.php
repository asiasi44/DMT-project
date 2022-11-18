<?php
    session_start();
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "crud";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
	// initialize variables
	$name = "";
	$roll = "";
    $stream = "";
	$id = 0;
	$update = false;

	if (isset($_POST['save'])) {
		$name = $_POST['name'];
		$roll = $_POST['roll'];
        $stream = $_POST['stream'];

        $result = mysqli_query($conn, "INSERT INTO info (Name,Roll, Stream ) VALUES ('$name','$roll', '$stream')");
        $_SESSION['message'] = "Address saved";
        header('location: index.php');
    }

    if (isset($_POST['update'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $roll = $_POST['roll'];
        $stream = $_POST['stream'];
    
        mysqli_query($conn, "UPDATE info SET Name='$name', Stream='$stream',Roll='$roll'  WHERE Id=$id");
        $_SESSION['message'] = "Address updated!"; 
        header('location: index.php');
    }

    if (isset($_GET['del'])) {
        $id = $_GET['del'];
        mysqli_query($conn, "DELETE FROM info WHERE Id=$id");
        $_SESSION['message'] = "Address deleted!"; 
        header('location: index.php');
    }
?>