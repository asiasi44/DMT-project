<?php  
include('php_code.php');

if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $update = true;
    $record = mysqli_query($conn, "SELECT * FROM info WHERE Id=$id");
    while ($row = mysqli_fetch_array($record)) {

        $name = $row['Name'];
        $stream = $row['Stream'];
        $roll = $row['Roll'];

    }
    $out = str_replace("<","&lt;",$in); 
}
?>

<?php

ini_set('display_errors', 1); 
ini_set('display_startup_errors', 1);
error_reporting(E_ALL)

?>

<!DOCTYPE html>
<html>
<head>
	<title>CRUD application using php</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php if (isset($_SESSION['message'])): ?>
	    <div class="msg">
		    <?php 
			    echo $_SESSION['message']; 
			    unset($_SESSION['message']);
		    ?>
	    </div>
    <?php endif ?>
	<?php $results = mysqli_query($conn, "SELECT * FROM info"); ?>

    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Roll</th>
                <th>Stream</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        
        <?php while ($row = mysqli_fetch_array($results)) { ?>
            <tr>
                <td> <?php echo strip_tags($row['Name']); ?></td>
                <td><?php echo strip_tags($row['Roll']); ?></td>
                <td><?php echo strip_tags($row['Stream']); ?></td>
                <td>
                    <a href="index.php?edit=<?php echo $row['Id']; ?>" class="edit_btn" >Edit</a>
                </td>
                <td>
                    <a href="php_code.php?del=<?php echo $row['Id']; ?>" class="del_btn">Delete</a>
                </td>
            </tr>
        <?php } ?>
    </table>
    <form action="php_code.php" method ="post" >

        <input type="hidden" name="id" value="<?php echo $id; ?> ">

		<div class="input-group">
			<label>Name:</label>
			<input type="text" name="name" value= "<?php echo $name; ?>">
		</div>
		<div class="input-group">
			<label>Roll no:</label>
			<input type="text" name="roll" value="<?php echo $roll; ?>">
		</div>
        <div class="input-radio">
            <label>Stream:</label>
            <input type ="radio" name = "stream" value="BSc CSIT" checked >BSc CSIT
            <input type ="radio" name = "stream" value="BCA">BCA
		<div class="input-group">
            <?php if ($update == true): ?>
	            <button class="btn" type="submit" name="update" style="background: #556B2F;" >update</button>
            <?php else: ?>
	            <button class="btn" type="submit" name="save" >Save</button>
            <?php endif ?>
		</div>
	</form>
</body>
</html>