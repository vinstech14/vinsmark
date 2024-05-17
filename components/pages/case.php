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
    <!-- Modal -->
    <div class="modal fade" id="addcourt" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header sideback text-light">
                    <h5 class="modal-title" id="exampleModalLabel">Add Case Data </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="../../functions/add_case.php" method="POST">
                    <div class="modal-body">
                        <div class="form-group">
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="form-label">Item No.:</label>
                                    <input type="text" class="form-control" name="aitemnumber" id="aitemnumber"
                                        placeholder="Item Number">
                                </div>
                                <div class="col-md-6">
                                    <label>Control No.:</label>
                                    <input type="text" class="form-control" name="acontrolnumber" id="acontrolnumber"
                                        placeholder="Control Number">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="form-label">Party Represented:</label>
                                    <input type="text" class="form-control" name="apartyrepresented"
                                        id="apartyrepresented" placeholder="Party Represented">
                                </div>
                                <div class="col-md-6">
                                    <label for="gender" class="form-label">Gender:</label>
                                    <select id="agender" name="agender" class="form-control">
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="form-label">Title of Case:</label>
                                    <input type="text" class="form-control" name="acasetitle" id="acasetitle"
                                        placeholder="Title of Case">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Court/Body:</label>
                                    <input type="text" class="form-control" name="acourt" id="acourt"
                                        placeholder="Court/Body">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="form-label">Case No.:</label>
                                    <input type="text" class="form-control" name="acasenumber" id="acasenumber"
                                        placeholder="Case Number">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Cause of Action:</label>
                                    <input type="text" class="form-control" name="acauseofaction" id="acauseofaction"
                                        placeholder="Cause of Action">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="acasestatus" class="form-label">Status of Case:</label>
                                    <select id="acasestatus" name="acasestatus" class="form-control">
                                        <option value="Pending">Pending</option>
                                        <option value="Applied to Probation">Applied to Probation</option>
                                        <option value="Terminated">Terminated</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Last Action Taken:</label>
                                    <input type="text" class="form-control" name="alastactiontaken"
                                        id="alastactiontaken" placeholder="Last Action Taken">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="form-label">Cause of Termination:</label>
                                    <input type="text" class="form-control" name="acauseoftermination"
                                        id="acauseoftermination" placeholder="Cause of Termination">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Date of Termination:</label>
                                    <input type="date" class="form-control" name="acasedate" id="acasedate"
                                        placeholder="Date of Termination">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary shadowbottom" data-dismiss="modal">Close</button>
                        <button type="submit" name="submit" class="btn btn-success sideback shadowbottom">Add Data</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <!-- VIEW POP UP FORM (Bootstrap MODAL) -->
    <div class="modal fade" id="viewmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header viewbg text-light">
                    <h5 class="modal-title" id="exampleModalLabel"> View Case Data </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="" method="POST">
                    <div class="modal-body">
                        <input type="hidden" name="view_id" id="view_id">
                        <div class="row">
                            <div class="col-md-6">
                                <label>Item No.:</label>
                            </div>
                            <div class="col-md-6">
                                <label id="vitemnumber"></label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Control No.:</label>
                            </div>
                            <div class="col-md-6">
                                <label id="vcontrolnumber"></label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Party Represented:</label>
                            </div>
                            <div class="col-md-6">
                                <label id="vpartyrepresented"></label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Gender:</label>
                            </div>
                            <div class="col-md-6">
                                <label id="vgender"></label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Title of Case:</label>
                            </div>
                            <div class="col-md-6">
                                <label id="vcasetitle"></label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Court/Body:</label>
                            </div>
                            <div class="col-md-6">
                                <label id="vcourt"></label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Case Type:</label>
                            </div>
                            <div class="col-md-6">
                                <label id="vcasetype"></label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Case No.:</label>
                            </div>
                            <div class="col-md-6">
                                <label id="vcasenumber"></label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Cause of Action:</label>
                            </div>
                            <div class="col-md-6">
                                <label id="vcauseofaction"></label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Last Action Taken:</label>
                            </div>
                            <div class="col-md-6">
                                <label id="vlastactiontaken"></label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Status of Case:</label>
                            </div>
                            <div class="col-md-6">
                                <label id="vcasestatus"></label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Cause of Termination:</label>
                            </div>
                            <div class="col-md-6">
                                <label id="vcauseoftermination"></label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Date Start:</label>
                            </div>
                            <div class="col-md-6">
                                <label id="vstartdate"></label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Date of Termination:</label>
                            </div>
                            <div class="col-md-6">
                                <label id="vcasedate"></label>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary radiusb shadowbottom" data-dismiss="modal">CLOSE</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <h2 class="text-start text-md-start">Case</h2>
        <div class="card" style="margin-top: 10px;">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="datatableid" class="table w-100">
                        <div class="row mb-2 justify-content-center">
                            <div class="col-md-2">
                                <select id="selectcourt" name="selectcourt" class="form-control">
                                    <option disabled selected value=''>Select Court</option>
                                    <option value="RTC 34">RTC 34</option>
                                    <option value="RTC 4">RTC 4</option>
                                    <option value="RTC 3">RTC 3</option>
                                    <option value="MTCC">MTCC</option>
                                    <option value="MCTC-CARMEN">MCTC-CARMEN</option>
                                    <option value="MCTC STO. TOMAS">MCTC STO. TOMAS</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <select id="typeofcase" name="typeofcase" class="form-control">
                                    <option disabled selected value=''>Type of Case</option>
                                    <option value="Criminal">Criminal</option>
                                    <option value="Administrative">Administrative</option>
                                    <option value="Civil">Civil</option>
                                    <option value="Appealed">Appealed</option>
                                    <option value="Labor">Labor</option>
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
                                <button type="button" class="btn btn-success sideback radiusb sbtn shadowbottom">Search</button>
                            </div>
                        </div>


                        <thead>
                            <tr class="text-center sideback text-light">
                                <th scope="col" class="d-none">ID</th>
                                <th scope="col" class="tablestart">Item No.</th>
                                <th scope="col">Control No.</th>
                                <th scope="col">Title of the Case</th>
                                <th scope="col">Case No.</th>
                                <th scope="col">Court/Body</th>
                                <th scope="col">Status of Case</th>
                                <th scope="col" class="tableend">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                    require_once("../../database/databasecon.php");
                    require_once("../../functions/functions.php");
    
                    $result = selectAllData($conn, 'cases');
                    if ($result) {
                        foreach ($result as $row) {
                    ?>
                            <tr class="text-center">
                                <td class="d-none searchid">
                                    <?php echo $row['id']; ?>
                                </td>
                                <td>
                                    <?php echo $row['itemnumber']; ?>
                                </td>
                                <td>
                                    <?php echo $row['controlnumber']; ?>
                                </td>
                                <td>
                                    <?php echo $row['casetitle']; ?>
                                </td>
                                <td>
                                    <?php echo $row['casenumber']; ?>
                                </td>
                                <td>
                                    <?php echo $row['court']; ?>
                                </td>
                                <td id="icasestatus">
                                    <?php echo $row['casestatus']; ?>
                                </td>
                                <td>
                                    <button type="button" class="btn viewbtn"><i class="fa fa-eye"></i></button>
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

            $('.viewbtn').on('click', function () {
                $('#viewmodal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();
                var statuscolor = document.getElementById('vcasestatus');
                statuscolor.style.borderRadius = "4px";
                $.ajax({
                    url: "../../receivedapi/fetchdata.php",
                    type: "POST",
                    data: { id: data[0], t: 'cases' },
                    success: function (response) {
                        var datas = JSON.parse(response);

                        $('#vitemnumber').text(datas[0].itemnumber);
                        $('#vcontrolnumber').text(datas[0].controlnumber);
                        $('#vpartyrepresented').text(datas[0].partyrepresented);
                        $('#vgender').text(datas[0].gender);
                        $('#vcasetitle').text(datas[0].casetitle);
                        $('#vcourt').text(datas[0].court);
                        $('#vcasenumber').text(datas[0].casenumber);
                        $('#vcasetype').text(datas[0].casetype);
                        $('#vcauseofaction').text(datas[0].causeofaction);
                        $('#vcasestatus').text(datas[0].casestatus);
                        $('#vlastactiontaken').text(datas[0].lastactiontaken);
                        $('#vcauseoftermination').text(datas[0].causeoftermination);
                        $('#vstartdate').text(datas[0].startdate);
                        $('#vcasedate').text(datas[0].casedate);

                        if (statuscolor.textContent === 'Pending') {
                            statuscolor.style.backgroundColor = 'yellow';
                            statuscolor.style.color = 'black';
                        }
                        else if (statuscolor.textContent === 'Terminated') {
                            statuscolor.style.backgroundColor = 'red';
                            statuscolor.style.color = 'white';
                        }
                        else {
                            statuscolor.style.backgroundColor = 'green';
                            statuscolor.style.color = 'white';
                        }
                    },
                    error: function (xhr, status, error) {
                        // Handle errors
                        console.error(xhr.responseText);
                    }
                });

            });

        });
    </script>


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
        $(document).ready(function () {
            $('.sbtn').on('click', function () {
                var court = document.getElementById('selectcourt').value;
                var casetype = document.getElementById('typeofcase').value;
                var fromdate = document.getElementById('fromdate').value;
                var todate = document.getElementById('todate').value;

                $.ajax({
                    url: "../../receivedapi/searching.php",
                    type: "POST",
                    data: {
                        d1: court,
                        d2: casetype,
                        d3: fromdate,
                        d4: todate,
                        c1: 'court',
                        c2: 'casetype',
                        c3: 'startdate',
                        c4: 'casedate',
                        t: 'cases'
                    },
                    success: function (response) {
                        var datas = JSON.parse(response);
                        var searchIds = datas.map(function (data) {
                            return parseInt(data.id); // Convert search ID to number
                        });

                        $('#datatableid tbody tr').each(function () {
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
    </script>

</body>

</html>