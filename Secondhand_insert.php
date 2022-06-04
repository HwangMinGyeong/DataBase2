<?php
	$con = mysqli_connect("localhost","hpmin","1203","sungkyul");
	$nkname = $_POST['a1'];
	$nkname = addslashes($nkname);
	$area = $_POST['a2'];
	$area = addslashes($area);
    $purpose = $_POST['a3'];
	$purpose = addslashes($purpose);
	$price = $_POST['a4'];
	$price = addslashes($price);

	$sql = "insert into tbp (
		nkname,
		area,
		purpose,
		price
	)";
	
	$sql = $sql. "values (
		'$nkname',
		'$area',
		'$purpose',
		'$price'
	)";

	if($con->query($sql)){ 
	  echo '<script>alert("success inserting")</script>'; 
	}else{ 
	  echo '<script>alert("fail to insert sql")</script>';
	}

	mysqli_close($mysqli);
  
?>

<script>
	location.href = "Secondhand.html";
</script>