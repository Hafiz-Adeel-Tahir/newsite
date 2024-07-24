<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>

	<h1 style ="color:Green; text-decoration: underline">IF STATEMENT</h1>

<?php
	// if-else statement
	
	echo '</br>';
	$masks = 40;
	if($masks >= 50){
		echo '<h3 style ="color:blue">Pass</h3>';
	}
	else{
		echo '<h3 style ="color:red">Under 50 and Need to work Hard</h3>';
	}
	echo '</br>';
	// if-else-if statement
	$grade = 'F';
	if($grade == 'A'){
		echo '<h3 style ="color:purple">YOU ARE EXCELENT!</h3>';
	}
	elseif($grade == 'B' || $grade == 'C'){
		echo '<h3 style ="color:green">YOU ARE Good</h3>';
	}
	else{
		echo '<h3 style ="color:red">YOU SHOULD WORK HARD</h3>';
	}
?>

</body>
</html>