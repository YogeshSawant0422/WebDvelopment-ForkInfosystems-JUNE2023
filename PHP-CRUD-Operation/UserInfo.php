<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "userinfo";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$FullName = $_POST["FName"];
$MobileNumber = $_POST["MobNo"];
$Address = $_POST["Address"];

if($FullName != "" && $MobileNumber != "" && $Address != ""){
    $sql = "INSERT INTO insertuserdata (FullName, MobileNumber, Address)
    VALUES ($FullName, $MobileNumber,$Address)";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}else{
    echo '<script>alert("Enter All Data !!!")</script>';
}

mysqli_close($conn);
?>