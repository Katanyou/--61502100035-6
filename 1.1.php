<?php
$servername ="localhost";
$username ="webadmin";
$password="1234";
$dbname= "cinema" ;


$conn= mysqli($servername, $username, $password,$dbname) ;
if ($conn->connect_error){
    die("Connection faliaed:" . $conn->connect_error );
}

var_dump ($_POST) ;
$sql = "INSERT INTO cinema  (ID, Name_movies,Time_Date,Customer,PIN)
        VALUES ('".$_POST ['ID']."', '".$_POST['Name_movies']."','".$_POST['Time_Date']."','".$_POST['Customer']."','".$_POST['PIN']."')" ;

if($conn->query($sql)===TRUE){
    echo" สร้างสำเร็จ";
}else{"Error:".$sql."<br>" .$conn->error;
}

$conn->close();




?>