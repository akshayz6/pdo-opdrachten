<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET Formulier</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
   
    if (!empty($_GET)) {
        
        echo "<h2>Ingevoerde gegevens met GET-methode:</h2>";
        echo "<p>Naam: {$_GET['naam']}</p>";
        echo "<p>Achternaam: {$_GET['achternaam']}</p>";
        echo "<p>Leeftijd: {$_GET['leeftijd']}</p>";
        echo "<p>Adres: {$_GET['adres']}</p>";
        echo "<p>Email: {$_GET['email']}</p>";
    } else {
        echo "<p>Vul het formulier in</p>";
    }
}
?>


<form method="GET" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    Naam: <input type="text" name="naam"><br>
    Achternaam: <input type="text" name="achternaam"><br>
    Leeftijd: <input type="text" name="leeftijd"><br>
    Adres: <input type="text" name="adres"><br>
    Email: <input type="text" name="email"><br>
    <input type="submit" value="Verstuur">
</form>

</body>
</html>
 <!--de methode GET stuurt de formulier info naar de variabele $_Post-