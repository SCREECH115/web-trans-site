<!DOCTYPE html>
<html>
<head>
	<title>Kalkulator kosztu</title>
    <meta charset="utf-8">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container my-5">
        <h2>Kalkulator kosztu</h2>


        <form method="POST">
            <div class="form-group">
                <label for="distance">Ilość kilometrów</label>
                <input type="text" class="form-control" id="distance" name="distance">
            </div>
            <div class="form-group">
                <label for="weight">Waga ładunku w kilogramach</label>
                <input type="text" class="form-control" id="weight" name="weight">
            </div>
            <div class="form-group">
                <label for="result">Wynik</label>
                <input type="text" class="form-control" id="result" name="result" readonly>
            </div>

            
        </form>
        <button type="submit" class="btn btn-primary" onClick="calculate()">Oblicz</button>
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

      <script type="text/javascript">

        // sum distance and weigh in javascript
        function calculate(){
            var distance = document.getElementById("distance").value;
            var weight = document.getElementById("weight").value*0.005;
            var result = document.getElementById("result");

            // round result to 2 decimal
            result.value = Math.round((distance * weight + Number.EPSILON) * 100) / 100 + " złotych";

            // result.value = distance * weight + " złotych";
        }

        </script>

</body>
</html>