<?php
    if(isset($_GET["id"])){
        $id = $_GET["id"];

        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "transport";
    
        // Połączenie
        $connection = new mysqli($servername, $username, $password, $database);

        $sql = "DELETE FROM customers where id=$id";
        $connection->query($sql);

    }

    header("location: customers.php");
    exit;
?>