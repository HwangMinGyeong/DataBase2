<?php

    $con = mysqli_connect("localhost","hpmin","1203","sungkyul");
    $c1_d = $_POST["c1"];
    $sql = "SELECT * FROM tbp WHERE area like '%$c1_d%'";
    $result = mysqli_query($con, $sql);

    while($row = mysqli_fetch_assoc($result)) {

    	echo $row['number'].".  ";
        echo "닉네임 : ".$row['nkname'].", ";
        echo "거래지역 : ".$row['area'].", ";
        echo "물품 정보 : ".$row['purpose'].", ";
        echo "가격 : ".$row['price']."<br>";
     
    }

    print "<br><a href='Secondhand.html'>메인 화면으로</a>";
?>