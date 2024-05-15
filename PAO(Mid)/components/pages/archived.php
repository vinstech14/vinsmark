<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Modal </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href='https://fonts.googleapis.com/css?family=Nunito Sans' rel='stylesheet'>
    <link rel="stylesheet" href="/custom.css" />
</head>

<body class="generalbg">
<div class="modal fade" id="viewmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header viewbg text-light">
                    <h5 class="modal-title" id="exampleModalLabel">Data  Information</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="" method="POST">
                    <div class="modal-body">
                        <input type="hidden" name="view_id" id="view_id">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary radiusb" data-dismiss="modal">CLOSE</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

 <!-- DELETE POP UP FORM (Bootstrap MODAL) -->
 <div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header deletebg text-light">
                    <h5 class="modal-title" id="exampleModalLabel"> Delete Archived Data </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="" method="POST">

                    <div class="modal-body">

                        <input type="hidden" name="delete_id" id="delete_id">

                        <h4> Do you want to permanently delete this data?</h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary radiusb" data-dismiss="modal"> NO </button>
                        <button type="submit" name="deletedata" class="btn btn-success deletebg radiusb"> Yes !! Delete it.
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <div class="container-fluid">
        <h2 class="text-start text-md-start">Archived</h2>
        <div class="row mb-2">
            <div class="col-md-4 mb-2">
                <button type="button" class="btn btn-success sideback radiusb">Restore</button>
            </div>
        </div>
        <div class="card" style="margin-top: 10px;">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="datatableid" class="table w-100">
                    <div class="row mb-2 justify-content-start">
                    <div class="col-md-3">
                            <select id="selectcategory" name="selectcategory" class="form-control">
                                                    <option disabled selected>Select Category</option>
                                                    <option value="Accounts">Account</option>
                                                    <option value="Case">Case</option>
                                                    <option value="Client">Client</option>
                                </select>
                            </div>
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
                                <button type="button" class="btn btn-success sideback radiusb">Search</button>
                            </div>
                        </div>
                </div>
                        <thead>
                            <tr class="text-center sideback text-light">
                                <th scope="col" class="d-none">ID</th>
                                <th scope="col" class="tablestart">Control Number</th>
                                <th scope="col">Reference Number</th>
                                <th scope="col" class="tableend">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                    require_once("../../database/databasecon.php");
                    require_once("../../functions/functions.php");
    
                    $result = selectAllData($conn, 'archived');
                    if ($result) {
                        foreach ($result as $row) {
                    ?>
                            <tr class="text-center">
                                <td class="d-none searchid">
                                    <?php echo $row['id']; ?>
                                </td>
                                <td>
                                    <?php echo $row['controlnum']; ?>
                                </td>
                                <td>
                                    <?php echo $row['ref']; ?>
                                </td>
                                <td>
                                <button type="button" class="btn viewbtn"><i class="fa fa-eye"></i></button>
                                <button type="button" class="btn deletebtn"><i class="fa fa-trash"></i></button>
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
        $(document).ready(function () {

            $('.viewbtn').on('click', function () {
                $('#viewmodal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

               /* $.ajax({
                    url: "../../receivedapi/fetchcasedata.php",
                    type: "POST",
                    data: { id: data[0] },
                    success: function (response) {
                        var datas = JSON.parse(response);

                        $('#vitemnumber').text(datas[0].itemnumber);
                        $('#vcontrolnumber').text(datas[0].controlnumber);
                        $('#vpartyrepresented').text(datas[0].partyrepresented);
                        $('#vgender').text(datas[0].gender);
                        $('#vcasetitle').text(datas[0].casetitle);
                        $('#vcourt').text(datas[0].court);
                        $('#vcasenumber').text(datas[0].casenumber);
                        $('#vcauseofaction').text(datas[0].causeofaction);
                        $('#vcasestatus').text(datas[0].casestatus);
                        $('#vlastactiontaken').text(datas[0].lastactiontaken);
                        $('#vcauseoftermination').text(datas[0].causeoftermination);
                        $('#vcasedate').text(datas[0].casedate);
                    },
                    error: function (xhr, status, error) {
                        // Handle errors
                        console.error(xhr.responseText);
                    }
                });*/
            });

        });
    </script>
     <script>
        $(document).ready(function () {

            $('.deletebtn').on('click', function () {

                $('#deletemodal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#delete_id').val(data[0]);

            });
        });
    </script>
<script>
    /*
    $(document).ready(function () {
        $('.sbtn').on('click', function () {
            var category = document.getElementById('selectcategory').value;
            var fromdate = document.getElementById('fromdate').value;
            var todate = document.getElementById('todate').value;

            $.ajax({
                url: "../../receivedapi/searching.php",
                type: "POST",
                data: { 
                    d1: category, 
                    d2: fromdate, 
                    d3: todate, 
                    c1: 'category', 
                    c2: 'fromdate', 
                    c3: 'todate',
                    t: 'archived' 
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