<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "transport";

    // Połączenie
    $connection = new mysqli($servername, $username, $password, $database);


    $firstName = "";
    $lastName = "";
    $address = "";
    $phone = "";
    $license = "";
    $salary = "";
    $PESEL = "";
    $errorMessage = "";
    $succesMessage = "";
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $license = $_POST['license'];
        $salary = $_POST['salary'];
        $PESEL = $_POST['PESEL'];

        do {
            if(empty($firstName) || empty($lastName) || empty($address) || empty($phone) || empty($license) || empty($salary) || empty($PESEL)){
                $errorMessage = "Wypełnij wszystkie pola!";
                break;
            }

            // dodawanie nowego pojazdu do bazy
            $sql = "INSERT INTO drivers (firstName, lastName, address, phone, license, salary, PESEL) VALUES ('$firstName', '$lastName', '$address', '$phone', '$license', '$salary', '$PESEL')";
            $result = $connection->query($sql);

            if (!$result){
                $errorMessage = "<h2>Błąd wykonania zapytania: " . $connection->error . "</h2>";
                break;
            }

            $firstName = "";
            $lastName = "";
            $address = "";
            $phone = "";
            $license = "";
            $salary = "";
            $PESEL = "";

            $succesMessage = "Dodano kierowcę do bazy!";
            


        } while (false);
    }

?>

<!DOCTYPE html>
<html>
<head>
	<title>Dodawanie kierowcy</title>
    <meta charset="utf-8">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container my-5">
        <h2>Nowy kierowca</h2>

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
                <label for="firstName">Imię</label>
                <input type="text" class="form-control" id="firstName" name="firstName" value="<?php echo $firstName; ?>">
            </div>
            <div class="form-group">
                <label for="lastName">Nazwisko</label>
                <input type="text" class="form-control" id="lastName" name="lastName" value="<?php echo $lastName; ?>">
            </div>
            <div class="form-group">
                <label for="address">Adres</label>
                <input type="text" class="form-control" id="address" name="address" value="<?php echo $address; ?>">
            </div>
            <div class="form-group">
                <label for="phone">Telefon</label>
                <input type="text" class="form-control" id="phone" name="phone" value="<?php echo $phone; ?>">
            </div>
            <div class="form-group">
                <label for="license">Licencja</label>
                <input type="text" class="form-control" id="license" name="license" value="<?php echo $license; ?>">
            </div>
            <div class="form-group">
                <label for="salary">Pensja</label>
                <input type="text" class="form-control" id="salary" name="salary" value="<?php echo $salary; ?>">
            </div>
            <div class="form-group">
                <label for="PESEL">PESEL</label>
                <input type="text" class="form-control" id="PESEL" name="PESEL" value="<?php echo $PESEL; ?>">
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
        <a class="btn btn-primary" href="drivers.php" role="button">Powrót do listy</a>
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