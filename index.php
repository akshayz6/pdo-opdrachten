<?php
// index.php

include_once 'dbconn.php';
include_once 'functions.php';

// Aanroepen van de functies
$data = selectData();
printData($data);

$newData = array('value1' => 'new_value1', 'value2' => 'new_value2', 'value3' => 'new_value3');
insertData($newData);

$updatedData = array('value1' => 'updated_value1', 'value2' => 'updated_value2', 'value3' => 'updated_value3');
updateData(1, $updatedData);

deleteData(2);

// Functie om gegevens weer te geven (printData) is afhankelijk van hoe je de gegevens wilt weergeven.
// Dit kan bijvoorbeeld een HTML-tabel zijn.
function printData($data) {
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}
?>
