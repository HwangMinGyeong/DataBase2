<?php 

	$con = mysqli_connect("localhost","hpmin","1203","sungkyul");
	$sql = "SELECT * FROM tbp"; 
    $result = mysqli_query($con, $sql);
        
    while($row = mysqli_fetch_assoc($result)) {

    	echo $row['number'].".  "."닉네임 : ".$row['nkname'].", "."거래 지역 : ".$row['area'].", "."물품 정보 : ".$row['purpose'].", "."가격 : ".$row['price']."<br>";
        echo "------------------------------------------------------------------------------------------------------------------------------- <br>";
     
    }
	
    print "<br><a href='Secondhand.html'>메인 화면으로</a>";

?>