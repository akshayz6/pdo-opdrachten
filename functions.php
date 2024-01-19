<?php
// functions.php

function selectData() {
    global $conn;
    $sql = "SELECT * FROM producten";
    $stmt = $conn->query($sql);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function insertData($data) {
    global $conn;
    $sql = "INSERT INTO producten (column1, column2, column3) VALUES (:value1, :value2, :value3)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':value1', $data['value1']);
    $stmt->bindParam(':value2', $data['value2']);
    $stmt->bindParam(':value3', $data['value3']);
    $stmt->execute();
}

function updateData($id, $data) {
    global $conn;
    $sql = "UPDATE producten SET column1 = :value1, column2 = :value2, column3 = :value3 WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':value1', $data['value1']);
    $stmt->bindParam(':value2', $data['value2']);
    $stmt->bindParam(':value3', $data['value3']);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
}

function deleteData($id) {
    global $conn;
    $sql = "DELETE FROM producten WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
}
?>
