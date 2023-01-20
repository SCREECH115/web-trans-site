<!DOCTYPE html>
<html>
<head>
	<title>Wypożyczone środki transportu</title>
    <meta charset="utf-8">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body style="margin: 50px;">

    <h1>Wypożyczone środki transportu</h1>
    <a class="btn btn-primary" href="createHired.php" role="button">Dodaj środek</a>
    <a class="btn btn-primary" href="../adminPanel.html" role="button">Powrót do menu</a>
    <br>
    <p></p>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Typ</th>
                    <th>Kierowca</th>
                    <th>Klient</th>
                    <th>Termin</th>
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
                $sql = "SELECT * FROM hired";
                $result = $connection->query($sql);
                
                if (!$result){
                    die("Błąd wykonania zapytania: " . $connection->error);
                }

                // Czytanie danych z bazy
                while($row = $result->fetch_assoc()){
                    echo "<tr>
                    <td>" . $row["id"] . "</td>
                    <td>" . $row["type"] . "</td>
                    <td>" . $row["driver"] . "</td>
                    <td>" . $row["customer"] . "</td>
                    <td>" . $row["deadline"] . "</td>
                    <td>
                        <a class='btn btn-primary brn-sm text-white' href='/admin/editHired.php?id=$row[id]'>Zaktualizuj</a>
                        <a class='btn btn-danger brn-sm text-white' href='deleteHired.php?id=$row[id]'>Usuń</a>
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