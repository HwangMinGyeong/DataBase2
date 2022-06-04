<html>
<!-- <meta charset="utf-8"> -->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<?php

		$host = 'localhost';
		$user = 'hpmin';
		$pw = '1203';
		$dbName = 'sungkyul';
		$mysqli = new mysqli($host, $user, $pw, $dbName);

		$member_email = $_POST['email'];
        $member_id = $_POST['id'];
	    $member_pw_1 = $_POST['pw_1'];
	    $member_nickname = $_POST['nickname'];
        $member_name = $_POST['name'];
		$member_Phone = $_POST['Phone'];
		$country = $_POST['country'];
		$address = $_POST['address'];
        $birth = $_POST['birth'];

		$sql = "insert into memberdb1 (
				member_email,
                member_id,
				member_pw_1,
                member_nickname,
				member_name,
				member_Phone,
				country,
				address,
				birth

		)";
		
		$sql = $sql. "values (
				'$member_email',
                '$member_id',
				'$member_pw_1',
                '$member_nickname',
				'$member_name',
				'$member_Phone',
				'$country',
				'$address',
				'$birth'
		)";

		if($mysqli->query($sql)){ 
		  echo '<script>alert("success inserting")</script>'; 
		}else{ 
		  echo '<script>alert("fail to insert sql")</script>';
		}

		mysqli_close($mysqli);
	  
	?>

<script>
	location.href = "Secondhand_member_create.html";
</script>

</html>