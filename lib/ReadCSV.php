<?php
function readCSV($csvFilePath) {
    $data = [];
    if (file_exists($csvFilePath)) {
        if (($handle = fopen($csvFilePath, "r")) !== FALSE) {
            while (($row = fgetcsv($handle, 1000, ",")) !== FALSE) {
                $data[] = $row; // Add each row to the data array
            }
            fclose($handle);
        }
        return $data;
    } else {
        return "File not found.";
    }
}
?>
