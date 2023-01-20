<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "transport";

    // Połączenie
    $connection = new mysqli($servername, $username, $password, $database);


    $type = "";
    $driver = "";
    $customer = "";
    $deadline = "";
  
    $errorMessage = "";
    $succesMessage = "";
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $type = $_POST['type'];
        $driver = $_POST['driver'];
        $customer = $_POST['customer'];
        $deadline = $_POST['deadline'];


        do {
            if(empty($type) || empty($driver) || empty($customer) || empty($deadline)){
                $errorMessage = "Wypełnij wszystkie pola!";
                break;
            }

            // dodawanie nowego pojazdu do bazy
            $sql = "INSERT INTO hired (type, driver, customer, deadline) VALUES ('$type', '$driver', '$customer', '$deadline')";
            $result = $connection->query($sql);

            if (!$result){
                $errorMessage = "<h2>Błąd wykonania zapytania: " . $connection->error . "</h2>";
                break;
            }

            $type = "";
            $driver = "";
            $customer = "";
            $deadline = "";


            $succesMessage = "Dodano środek do bazy!";
            


        } while (false);
    }

?>

<!DOCTYPE html>
<html>
<head>
	<title>Dodawanie środku</title>
    <meta charset="utf-8">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container my-5">
        <h2>Nowy środek</h2>

        <?php
            if(!empty($errorMessage)){
                echo "
                <div class='alert alert-warning alert-dismissible fade show' role='alert'>
                    <strong>$errorMessage</strong>
                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </dov>
                ";
            }
        ?>

        <form method="POST">
            <div class="form-group">
                <label for="type">Typ</label>
                <input type="text" class="form-control" id="type" name="type" value="<?php echo $type; ?>">
            </div>
            <div class="form-group">
                <label for="driver">Kierowca</label>
                <input type="text" class="form-control" id="driver" name="driver" value="<?php echo $driver; ?>">
            </div>
            <div class="form-group">
                <label for="customer">Klient</label>
                <input type="text" class="form-control" id="customer" name="customer" value="<?php echo $customer; ?>">
            </div>
            <div class="form-group">
                <label for="deadline">deadline</label>
                <input type="text" class="form-control" id="deadline" name="deadline" value="<?php echo $deadline; ?>">
            </div>


            <?php
                if(!empty($succesMessage)){
                    echo "
                    <div class='alert alert-success alert-dismissible fade show' role='alert'>
                        <strong>$succesMessage</strong>
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                    </div>
                    ";
                }
            ?>

            <button type="submit" class="btn btn-primary">Dodaj</button>
        </form>
        <p></p>
        <a class="btn btn-primary" href="hired.php" role="button">Powrót do listy</a>
    </div>
    <footer class="bg-light text-center text-lg-start">
		<!-- Copyright -->
		<div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
		  © 2022 Copyright: Arkadiusz Woźniak
		</div>
		<!-- Copyright -->
	  </footer>
</body>
</html>