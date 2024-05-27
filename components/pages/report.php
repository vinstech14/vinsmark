<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Modal </title>
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
                            <button type="button" class="btn btn-success sideback radiusb shadowbottom">Copy</button>
                            <button type="button" class="btn btn-success sideback radiusb shadowbottom">Excel</button> 
                            <button type="button" class="btn btn-success sideback radiusb shadowbottom">PDF</button>
                          </div>
                        </div>
        <div class="card" style="margin-top: 10px;">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="datatableid" class="table w-100">
                    <div class="row mb-2 justify-content-end">
                              <div class="col-md-3  ml-auto">
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
                                <th scope="col" class="tablestart">KEY RESUTS AREA</th>
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
                    ?>
                            <tr class="text-center">
                                <td class="d-none">
                                    <?php echo $row['id']; ?>
                                </td>
                                <td>
                                    <?php echo $row['kra']; ?>
                                </td>
                                <td>
                                    <?php echo $row['kip']; ?>
                                </td>
                                <td>
                                    <?php echo $row['total']; ?>
                                </td>
                                <td>
                                    <?php echo $row['cr']; ?>
                                </td>
                                <td>
                                    <?php echo $row['cv']; ?>
                                </td>
                                <td>
                                    <?php echo $row['adm1']; ?>
                                </td>
                                <td>
                                    <?php echo $row['adm2']; ?>
                                </td>
                                <td>
                                    <?php echo $row['adm3']; ?>
                                </td>
                            </tr>
                            <?php
                        }
                    } else {
                        echo "<tr><td colspan='6'>No Record Found</td></tr>";
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
    <!-- This is for creating pdf -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.min.js"></script>
    <!-- This is for editing an existing pdf -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf-lib/1.16.1/pdf-lib.min.js"></script>
    


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
    });*/
</script>
</body>

</html>