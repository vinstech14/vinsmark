<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modal</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
    <link href='https://fonts.googleapis.com/css?family=Nunito Sans' rel='stylesheet'>
    <link rel="stylesheet" href="/customcss/custom.css" />
</head>

<body class="generalbg">
    <div class="container-fluid">
        <h2 class="text-start text-md-start">Reports</h2>
        <div class="row mb-2">
            <div class="col-md-12 mb-2">
                <form action="../pagespart/generate_excel.php" method="post" id="generate-excel-form" style="display: inline;">
                    <input type="hidden" name="ereport_data" id="ereport_data">
                    <button type="button" id="excel-button" class="btn btn-success sideback radiusb shadowbottom">Excel</button>
                </form>
                <form action="../pagespart/generate_pdf.php" method="post" id="generate-report-form" style="display: inline;">
                    <input type="hidden" name="report_data" id="report_data">
                    <button type="button" id="pdf-button" class="btn btn-success sideback radiusb shadowbottom">PDF</button>
                </form>
            </div>
        </div>
        <div class="card" style="margin-top: 10px;">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="datatableid" class="table w-100">
                        <div class="row mb-2 justify-content-end">
                            <div class="col-md-3 ml-auto">
                                <div class="row">
                                    <div class="col-auto">
                                        <label class="d-block">From Date:</label>
                                    </div>
                                    <div class="col">
                                        <input type="date" class="form-control" name="fromdate" id="fromdate">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="row">
                                    <div class="col-auto">
                                        <label class="d-block">To Date:</label>
                                    </div>
                                    <div class="col">
                                        <input type="date" class="form-control" name="todate" id="todate">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <button type="button" class="btn btn-success sideback radiusb shadowbottom">Search</button>
                            </div>
                        </div>
                        <thead>
                            <tr class="text-center sideback text-light">
                                <th scope="col" class="d-none">ID</th>
                                <th scope="col" class="tablestart">KEY RESULTS AREA</th>
                                <th scope="col">KEY INDICATORS OF PERFORMANCE</th>
                                <th scope="col">Total</th>
                                <th scope="col">CR</th>
                                <th scope="col">CV</th>
                                <th scope="col">ADM1</th>
                                <th scope="col">ADM2</th>
                                <th scope="col" class="tableend">ADM3</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            require_once("../../database/databasecon.php");
                            require_once("../../functions/functions.php");

                            $result = selectAllData($conn, 'reports');
                            if ($result) {
                                foreach ($result as $row) {
                                    echo '<tr class="text-center">';
                                    echo '<td class="d-none">' . $row['id'] . '</td>';
                                    echo '<td>' . $row['kra'] . '</td>';
                                    echo '<td>' . $row['kip'] . '</td>';
                                    echo '<td>' . $row['total'] . '</td>';
                                    echo '<td>' . $row['cr'] . '</td>';
                                    echo '<td>' . $row['cv'] . '</td>';
                                    echo '<td>' . $row['adm1'] . '</td>';
                                    echo '<td>' . $row['adm2'] . '</td>';
                                    echo '<td>' . $row['adm3'] . '</td>';
                                    echo '</tr>';
                                }
                            } else {
                                echo "<tr><td colspan='9'>No Record Found</td></tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#datatableid').DataTable({
                "pagingType": "full_numbers",
                "lengthMenu": [
                    [10, 25, 50, -1],
                    [10, 25, 50, "All"]
                ],
                responsive: true,
                language: {
                    search: "_INPUT_",
                    searchPlaceholder: "Search",
                }
            });
            $('#datatableid_filter input').attr('id', 'searchid');
            $('#pdf-button').on('click', function () {
            var tableData = $('#datatableid').html();
            $('#report_data').val(tableData);
            $('#generate-report-form').submit();
            });

            $('#excel-button').on('click', function () {
                var etableData = $('#datatableid').html();
                $('#ereport_data').val(etableData);
                $('#generate-excel-form').submit();
            });
        });
    </script>
    <script>
        /*
        $(document).ready(function () {
            $('.sbtn').on('click', function () {
                var fromdate = document.getElementById('fromdate').value;
                var todate = document.getElementById('todate').value;

                $.ajax({
                    url: "../../receivedapi/searching.php",
                    type: "POST",
                    data: { 
                        d1: fromdate, 
                        d2: todate, 
                        c1: 'startdate', 
                        c2: 'casedate', 
                        t: 'report' 
                    },
                    success: function (response) {
                        var datas = JSON.parse(response);
                        var searchIds = datas.map(function(data) {
                            return parseInt(data.id); // Convert search ID to number
                        });
                            
                        $('#datatableid tbody tr').each(function() {
                            var tableId = parseInt($(this).find('.searchid').text().trim()); // Convert table ID to number
                            if (searchIds.includes(tableId)) 
                                $(this).show();
                            else 
                                $(this).hide(); 
                        });
                    },
                    error: function (xhr, status, error) {
                        // Handle errors
                        console.error(xhr.responseText);
                    }
                });
            });
        });
        */
    </script>
</body>

</html>
