<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Convertitore</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css'>
  <link rel="stylesheet" href="./style.css">
</head>
<body>

<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
			<h1><b>Convertitore Unix to Datetime</b></h1>
			<div class="social-container">
				<a href="https://www.linkedin.com/in/gaetano-natuzzi-731a27292/" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span><h2>Inserisci la data in Unix</h2></span>
		    <input type="text" name="dateInput" id="dateInput" placeholder="Inserisci una data Unix o Datetime..."><br>
			<button type="submit">Converti</button>
		</form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $inputValue = $_POST["dateInput"];

            function unixToDatetime($unixTimestamp)
            {
                return date("Y-m-d H:i:s", $unixTimestamp);
            }

            // Funzione per convertire la data da Datetime a UNIX timestamp
            function datetimeToUnix($datetime)
            {
                return strtotime($datetime);
            }

            if (is_numeric($inputValue)) {
                $convertedDatetime = unixToDatetime($inputValue);
                echo "Data convertita: " . $convertedDatetime;
            } else {
                $convertedUnix = datetimeToUnix($inputValue);
                echo "UNIX Timestamp convertito (GMT+1): " . $convertedUnix;
            }
        }
        ?>
	</div>
	<div class="form-container sign-in-container">
		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
			<h1><b>Convertitore Datetime to Unix</b></h1>
			<div class="social-container">
				<a href="https://www.linkedin.com/in/gaetano-natuzzi-731a27292/" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span><h3>Inserisci una data nel formato Datetime</h3></span>
			<input type="text" name="dateInput" id="dateInput" placeholder="Inserisci una data Unix o Datetime..."><br>
            <button type="submit">Converti</button>
		</form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $inputValue = $_POST["dateInput"];

            function unixToDatetime($unixTimestamp)
            {
                return date("Y-m-d H:i:s", $unixTimestamp);
            }

            // Funzione per convertire la data da Datetime a UNIX timestamp
            function datetimeToUnix($datetime)
            {
                return strtotime($datetime);
            }

            if (is_numeric($inputValue)) {
                $convertedDatetime = unixToDatetime($inputValue);
                echo "Data convertita: " . $convertedDatetime;
            } else {
                $convertedUnix = datetimeToUnix($inputValue);
                echo "UNIX Timestamp convertito (GMT+1): " . $convertedUnix;
            }
        }
        ?>
	</div>

	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Vuoi convertire da Datetime a Unix?</h1>
				<p>Il più bel convertitore della storia</p>
				<button class="ghost" id="signIn">Clicca qui!</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Ciao!</h1>
				<p><h1>Vuoi convertire Unix to Datetime?</h1> </p>
				<button class="ghost" id="signUp">Clicca qui</button>
			</div>
		</div>
	</div>
</div>

<footer>

</footer>
<!-- partial -->
  <script  src="./script.js"></script>

</body>
</html>
