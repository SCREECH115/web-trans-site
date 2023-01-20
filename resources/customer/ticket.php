<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "transport";

    // Połączenie
    $connection = new mysqli($servername, $username, $password, $database);


    $start = "";
    $end = "";
    $cargo = "";
    $weight = "";
    $phone = "";
  
    $errorMessage = "";
    $succesMessage = "";
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $start = $_POST['start'];
        $end = $_POST['end'];
        $cargo = $_POST['cargo'];
        $weight = $_POST['weight'];
        $phone = $_POST['phone'];


        do {
            if(empty($start) || empty($end) || empty($cargo) || empty($weight) || empty($phone)){
                $errorMessage = "Wypełnij wszystkie pola!";
                break;
            }

            // dodawanie nowego pojazdu do bazy
            $sql = "INSERT INTO ticket (start, end, cargo, weight, phone) VALUES ('$start', '$end', '$cargo', '$weight', '$phone')";
            $result = $connection->query($sql);

            if (!$result){
                $errorMessage = "<h2>Błąd wykonania zapytania: " . $connection->error . "</h2>";
                break;
            }

            $start = "";
            $end = "";
            $cargo = "";
            $weight = "";
            $phone = "";


            $succesMessage = "Wysłaono zapytanie! Niedługo się skontaktujemy.";
            


        } while (false);
    }

?>

<!DOCTYPE html>
<html>
<head>
	<title>Dodawanie zapytania</title>
    <meta charset="utf-8">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container my-5">
        <h2>Dodawanie zapytania o transport</h2>

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
                <label for="start">Start trasy</label>
                <input type="text" class="form-control" id="start" name="start" value="<?php echo $start; ?>">
            </div>
            <div class="form-group">
                <label for="end">Koniec trasy</label>
                <input type="text" class="form-control" id="end" name="end" value="<?php echo $end; ?>">
            </div>
            <div class="form-group">
                <label for="cargo">Ładunek</label>
                <input type="text" class="form-control" id="cargo" name="cargo" value="<?php echo $cargo; ?>">
            </div>
            <div class="form-group">
                <label for="weight">Waga</label>
                <input type="text" class="form-control" id="weight" name="weight" value="<?php echo $weight; ?>">
            </div>
            <div class="form-group">
                <label for="phone">Telefon</label>
                <input type="text" class="form-control" id="phone" name="phone" value="<?php echo $phone; ?>">
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

            <button type="submit" class="btn btn-primary">Wyślij zapytanie</button>
        </form>
        <p></p>
        <a class="btn btn-primary" href="../customerPanel.html" role="button">Powrót do menu</a>
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