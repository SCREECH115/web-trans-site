<?php
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Połączanie z bazą

    $con = new mysqli("localhost", "root", "", "transport");
    if($con->connect_error){
        die("Błąd połączenia: " .$con->connect_error);
    } else {
        $stmt = $con->prepare("select * from registrationcustomers where email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt_result = $stmt->get_result();
        if($stmt_result->num_rows > 0){
            $data = $stmt_result->fetch_assoc();
            if($data['password'] === $password) {
                sleep(3);
                header("Location: customerPanel.html");
            } else {
                echo "<h2>Błędne hasło</h2>";
            }
        } else{
            echo "<h2>Zły e-mail lub hasło</h2>";
        }
    }

?>