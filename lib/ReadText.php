<?php
function readPlainText($TextPath) {
    if (file_exists($TextPath)) {
        return file_get_contents($TextPath); // Read entire file content
    } else {
        return "File not found.";
    }
}
?>
