<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "transport";

    // Połączenie
    $connection = new mysqli($servername, $username, $password, $database);

    $id = "";
    $name = "";
    $model = "";
    $type = "";
    $registration = "";
    $category = "";
    $yearOfPurchase = "";
    $equipment = "";
    $errorMessage = "";
    $succesMessage = "";

    if($_SERVER['REQUEST_METHOD'] == 'GET') {

        if(!isset($_GET['id'])){
            header("location: /admin/cars.php");
            exit;
        }

        $id = $_GET["id"];

        $sql = "SELECT * FROM vehicles WHERE id = $id";
        $result = $connection->query($sql);
        $row = $result->fetch_assoc();

        if (!$row){
            header("location: /admin/cars.php");
            exit;
        }
        
        $name = $row['name'];
        $model = $row['model'];
        $type = $row['type'];
        $registration = $row['registration'];
        $category = $row['category'];
        $yearOfPurchase = $row['yearOfPurchase'];
        $equipment = $row['equipment'];


    } else {

        $id = $_POST['id'];
        $name = $_POST['name'];
        $model = $_POST['model'];
        $type = $_POST['type'];
        $registration = $_POST['registration'];
        $category = $_POST['category'];
        $yearOfPurchase = $_POST['yearOfPurchase'];
        $equipment = $_POST['equipment'];

        do {
            if(empty($id) || empty($name) || empty($model) || empty($type) || empty($registration) || empty($category) || empty($yearOfPurchase) || empty($equipment)){
                $errorMessage = "<h2>Wypełnij wszystkie pola</h2>";
                break;
            }

            $sql = "UPDATE vehicles " .
                "SET name = '$name', model = '$model', type = '$type', registration = '$registration', category = '$category', yearOfPurchase = '$yearOfPurchase', equipment = '$equipment' " .
                "WHERE id = $id";

            $result = $connection->query($sql);

            if(!$result){
                $errorMessage = "<h2>Błąd wykonania zapytania: " . $connection->error . "</h2>";
                break;
            }

            $succesMessage = "Poprawnie zaktualizowano dane!";

        } while(false);

    }

?>

<!DOCTYPE html>
<html>
<head>
	<title>Edytowanie pojazdu</title>
    <meta charset="utf-8">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container my-5">
        <h2>Edycja pojazdu</h2>

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
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <div class="form-group">
                <label for="name">Marka</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Marka" value="<?php echo $name; ?>">
            </div>
            <div class="form-group">
                <label for="model">Model</label>
                <input type="text" class="form-control" id="model" name="model" placeholder="Model" value="<?php echo $model; ?>">
            </div>
            <div class="form-group">
                <label for="type">Typ</label>
                <input type="text" class="form-control" id="type" name="type" placeholder="Typ" value="<?php echo $type; ?>">
            </div>
            <div class="form-group">
                <label for="registration">Rejestracja</label>
                <input type="text" class="form-control" id="registration" name="registration" placeholder="Rejestracja" value="<?php echo $registration; ?>">
            </div>
            <div class="form-group">
                <label for="category">Kategoria</label>
                <input type="text" class="form-control" id="category" name="category" placeholder="Kategoria" value="<?php echo $category; ?>">
            </div>
            <div class="form-group">
                <label for="yearOfPurchase">Rok zakupu</label>
                <input type="text" class="form-control" id="yearOfPurchase" name="yearOfPurchase" placeholder="Rok zakupu" value="<?php echo $yearOfPurchase; ?>">
            </div>
            <div class="form-group">
                <label for="equipment">Wyposażenie</label>
                <input type="text" class="form-control" id="equipment" name="equipment" placeholder="Wyposażenie" value="<?php echo $equipment; ?>">
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

            <button type="submit" class="btn btn-primary">Zatwierdź</button>
        </form>
        <p></p>
        <a class="btn btn-primary" href="cars.php" role="button">Powrót do listy</a>
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