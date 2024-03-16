<?php
$db = new Database();
// Set the content type to CSV
header('Content-Type: text/csv; charset=utf-8');

// Set the response header to specify that the file should be downloaded as an attachment
header('Content-Disposition: attachment; filename=data.csv');

// Create an array of data
$data = $db->query("select * from tasks");

// Open a file handle for writing
$fp = fopen('php://output', 'w');

// Write the data to the file
foreach ($data as $row) {
    fputcsv($fp, $row);
}

// Close the file handle
fclose($fp);