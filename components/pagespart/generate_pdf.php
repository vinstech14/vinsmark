<?php
require_once '../../vendor/autoload.php'; 
use Dompdf\Dompdf;

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['report_data'])) {
    $reportData = $_POST['report_data'];
    
    // Start output buffering
    ob_start();
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Report PDF</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
        <style>
            body {
                font-family: 'Nunito Sans', sans-serif;
            }
            .logo {
                text-align: center;
            }
            .report-title {
                text-align: center;
                margin-bottom: 20px;
            }
            .date {
                text-align: right;
                margin-bottom: 20px;
            }
            .table-container {
                width: 100%;
                display: flex;
                justify-content: center;
                margin-top: 20px;
            }
            table {
                width: 100%;
                max-width: 100%;
                border-collapse: collapse;
                table-layout: fixed;
            }
            th, td {
                border: 1px solid #ddd;
                padding: 5px;
                text-align: center;
                word-wrap: break-word;
            }
            th {
                background-color: #4CAF50;
                color: white;
            }
        </style>
    </head>

    <body>
        <div class="container">
            <div class="logo">
                <img src="/images/pao.png" class="rounded-circle" alt="Logo" style="width: 100px; height: auto;">
            </div>
            <div class="report-title">
                <h2>Reports</h2>
            </div>
            <div class="date">
                <p>Date: <?php echo date('Y-m-d'); ?></p>
            </div>
            <div class="table-container">
                <table class="table table-bordered">
                    <?php echo $reportData; ?>
                </table>
            </div>
        </div>
    </body>

    </html>
    <?php
    $html = ob_get_clean();

    $dompdf = new Dompdf();
    $dompdf->loadHtml($html);
    $dompdf->setPaper('A4', 'landscape');
    $dompdf->render();
    $dompdf->stream("report.pdf", array("Attachment" => 0));
}
?>
