
<?php





$servername = "localhost";
$username = "root";
$password = "Hybrid05";

try {
  $conn = new PDO("mysql:host=$servername;dbname=winkel", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>



<!DOCTYPE html>
<html>
<head>
    <title>Product Toevoegen</title>
</head>
<body>
<form method="post" action="insert.php">
<h2>Voeg een nieuw product toe</h2>

<form method="post" action="insert.php">
    Product Naam: <input type="text" name="product_naam" required><br>
    Prijs per Stuk: <input type="number" name="prijs_per_stuk" step="0.01" required><br>
    Omschrijving: <textarea name="omschrijving" required></textarea><br>
    <input type="submit" value="Voeg toe">
</form>

</body>
</html>
