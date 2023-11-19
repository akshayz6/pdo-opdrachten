<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST Formulier</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if (!empty($_POST)) {
       
        echo "<h2>Ingevoerde gegevens met POST-methode:</h2>";
        echo "<p>Naam: {$_POST['naam']}</p>";
        echo "<p>Achternaam: {$_POST['achternaam']}</p>";
        echo "<p>Leeftijd: {$_POST['leeftijd']}</p>";
        echo "<p>Adres: {$_POST['adres']}</p>";
        echo "<p>Email: {$_POST['email']}</p>";
    } else {
        echo "<p>Vul het formulier in</p>";
    }
}
?>


<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    Naam: <input type="text" name="naam"><br>
    Achternaam: <input type="text" name="achternaam"><br>
    Leeftijd: <input type="text" name="leeftijd"><br>
    Adres: <input type="text" name="adres"><br>
    Email: <input type="text" name="email"><br>
    <input type="submit" value="Verstuur">
</form>

</body>
</html>
 <!--de methode POST stuurt de formulier info naar de variabele $_Post-->