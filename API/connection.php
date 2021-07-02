<?php 
    $servername = "localhost";
    $username = "id15453056_haidang123";
    $password = "j&aycc|8Bzz_Riiv";
    $dbname = "id15453056_appmusic";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    mysqli_query($conn, "SET NAMES 'UTF8'");

    

?>