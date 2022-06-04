<?php

    $con = mysqli_connect("localhost","hpmin","1203","sungkyul");
    $c3_d = $_POST["c3"];
    $sql = "SELECT * FROM memberdb1 WHERE member_nickname like '%$c3_d%'";
    $result = mysqli_query($con, $sql);

    while($row = mysqli_fetch_assoc($result)) {

        echo "닉네임 : ".$row['member_nickname']."<br>";
        echo "전화번호 : ".$row['member_Phone'];
     
    }

    print "<br><a href='Secondhand.html'>메인 화면으로</a>";
?>