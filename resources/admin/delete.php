<?php
    if(isset($_GET["id"])){
        $id = $_GET["id"];

        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "transport";
    
        // Połączenie
        $connection = new mysqli($servername, $username, $password, $database);

        $sql = "DELETE FROM vehicles where id=$id";
        $connection->query($sql);

    }

    header("location: cars.php");
    exit;
?>