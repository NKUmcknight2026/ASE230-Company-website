<?php
function readJSON($jsonFilePath) {
    if (file_exists($jsonFilePath)) {
        $jsonContent = file_get_contents($jsonFilePath); // Read JSON file content
        return json_decode($jsonContent, true); // Convert JSON to PHP array
    } else {
        return "File not found.";
    }
}
?>
