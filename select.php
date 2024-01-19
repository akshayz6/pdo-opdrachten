<?php
// Hoe je een single row selecteert met named parameters

$servername = "localhost";
$username = "root";
$password = "Hybrid05";
$database = "winkel";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";

    // Query om een enkele rij te selecteren met named parameters
    $sql = "SELECT * FROM producten WHERE product_code = :product_code"; 

    // Voorbereiden en uitvoeren van de query met named parameters
    $stmt = $conn->prepare($sql);
    
    // Vervang 'product_code_value' met de gewenste product_code
    $product_code_value = 2; 
    $stmt->bindParam(':product_code', $product_code_value, PDO::PARAM_INT);
    $stmt->execute();

    // HTML-opmaak voor het weergeven van gegevens in een tabel
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Naam</th><th>Leeftijd</th></tr>";

    // Tonen van de resultaten in de tabel (er wordt maar één rij verwacht)
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr><td>" . $row["id"] . "</td><td>" . $row["naam"] . "</td><td>" . $row["leeftijd"] . "</td></tr>";
    }

    echo "</table>";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
