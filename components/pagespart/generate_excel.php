<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['ereport_data'])) {
    // Explode the report data and format it as CSV
    $reportData = $_POST['ereport_data'];
    $reportRows = explode('</tr>', $reportData);

    $csvData = '';
    foreach ($reportRows as $reportRow) {
        $cells = explode('</td>', $reportRow);
        $rowData = [];
        foreach ($cells as $cell) {
            // Remove <td> and </td> tags
            $cell = str_replace(array('<td>', '<td style="text-align: center;">'), '', $cell);
            $cell = trim($cell);
            // Escape double quotes
            $cell = str_replace('"', '""', $cell);
            $rowData[] = '"' . $cell . '"';
        }
        $csvData .= implode(',', $rowData) . "\n";
    }

    // Set headers for CSV download
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="report.csv"');

    // Output CSV data
    echo $csvData;
}
?>
