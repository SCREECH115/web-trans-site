<!DOCTYPE html>
<html>
<head>
	<title>Pojazdy</title>
    <meta charset="utf-8">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body style="margin: 50px;">

    <h1>Pojazdy</h1>
    <a class="btn btn-primary" href="create.php" role="button">Dodaj pojazd</a>
    <a class="btn btn-primary" href="../adminPanel.html" role="button">Powrót do menu</a>
    <br>
    <p></p>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Marka</th>
                    <th>Model</th>
                    <th>Typ</th>
                    <th>Rejestracja</th>
                    <th>Kategoria</th>
                    <th>Rok zakupu</th>
                    <th>Wyposażenie</th>
                    <th>Opcje</th>
                </tr>
            </thead>

            <tbody>
                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $database = "transport";

                // Połączenie
                $connection = new mysqli($servername, $username, $password, $database);

                // Sprawdzenie połczenia
                if ($connection->connect_error) {
                    die("Błąd połączenia: " . $connection->connect_error);
                }

                // Sprawdzenie danych
                $sql = "SELECT * FROM vehicles";
                $result = $connection->query($sql);
                
                if (!$result){
                    die("Błąd wykonania zapytania: " . $connection->error);
                }

                // Czytanie danych z bazy
                while($row = $result->fetch_assoc()){
                    echo "<tr>
                    <td>" . $row["id"] . "</td>
                    <td>" . $row["name"] . "</td>
                    <td>" . $row["model"] . "</td>
                    <td>" . $row["type"] . "</td>
                    <td>" . $row["registration"] . "</td>
                    <td>" . $row["category"] . "</td>
                    <td>" . $row["yearOfPurchase"] . "</td>
                    <td>" . $row["equipment"] . "</td>
                    <td>
                        <a class='btn btn-primary brn-sm text-white' href='/admin/edit.php?id=$row[id]'>Zaktualizuj</a>
                        <a class='btn btn-danger brn-sm text-white' href='delete.php?id=$row[id]'>Usuń</a>
                    </td>
                </tr>";
                }
                ?>
            </tbody>

        </table>
        <footer class="bg-light text-center text-lg-start">
		<!-- Copyright -->
		<div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
		  © 2022 Copyright: Arkadiusz Woźniak
		</div>
		<!-- Copyright -->
	  </footer>
</body>
</html>