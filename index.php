<!DOCTYPE html>
<html>
<head>
<title>Udemy New Site</title>
<?php $db = new mysqli("localhost","root","","php_udemy"); ?>
</head>
<body>

<?php
	
	$name = 'Hafiz';
	$age = 30;
	
	echo '<h1>MY NAME IS:   ' .$name.'</h1>';
	echo "<p>MY AGE IS: $age</p>";

	if($db -> connect_errno){
	
	echo  "connect faild".connect_errno;
}
	else{
	
	echo  "Database Successfuly connect";
	}

	$inrt = "INSERT INTO `person_info`(`name`, `age`) VALUES ('Hafiz',30)";

	if($db->query($inrt)===TRUE){
		echo "Record Inserted";
	}
	else{
		echo "not Inserted";
	}

?>




</body>
</html>