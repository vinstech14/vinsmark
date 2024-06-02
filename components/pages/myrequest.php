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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Nunito Sans' rel='stylesheet'>
    <link rel="stylesheet" href="/customcss/custom.css" />
</head>

<body class="generalbg">
   
    <!-- DELETE POP UP FORM (Bootstrap MODAL) -->
    <div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header deletebg text-light">
                    <h5 class="modal-title" id="exampleModalLabel"> Delete Client Data </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="../../functions/delete_client.php" method="POST">
                    <div class="modal-body">
                        <input type="hidden" name="delete_id" id="delete_id">
                        <h4> Do you want to delete this data ?</h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary radiusb shadowbottom" data-dismiss="modal"> NO </button>
                        <button type="submit" name="deletedata" class="btn btn-danger deletebtnbg radiusb shadowbottom"> Yes !! Delete it.
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>


   

    <div class="container-fluid">
        <h2 class="text-start text-md-start">Transaction</h2>
        <div style="text-align:right;">
        </div>
        <div class="card" style="margin-top: 10px;">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="datatableid" class="table w-100">
                        <thead>
                            <tr class="text-center sideback text-light">
                                <th scope="col" class="d-none">Item No.</th>
                                <th scope="col" class="tablestart">Purpose</th>
                                <th scope="col">Date</th>
                                <th scope="col">Status</th>
                                <th scope="col" class="tableend">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            require_once("../../database/databasecon.php");
                            require_once("../../functions/functions.php");
    
                            $result = selectAllData($conn, 'client');
                            if($result)
                            {
                                foreach($result as $row)
                                {
                        ?>
                            <tr class="text-center">
                                <td class="d-none">
                                    <?php echo $row['id']; ?>
                                </td>
                                <td>
                                    <?php 
                                    $clientname = $row['firstname'] . ' ' . $row['middlename'] . ' ' . $row['lastname'];
                                    echo $clientname; ?>
                                </td>
                                <td>
                                    <?php echo $row['gender']; ?>
                                </td>
                                <td>
                                    <?php echo $row['mobilenumber']; ?>
                                </td>
                                <td>
                                    <?php echo $row['email']; ?>
                                </td>
                                <td class="text-center">
                                <button type="button" class="btn deletebtn"><i class="fa fa-trash"></i></button>
                                </td>
                            </tr>
                            <?php           
                                 }
                            }
                            else 
                                echo "No Record Found";
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

                $.ajax({
                    url: "../../receivedapi/fetchdata.php",
                    type: "POST",
                    data: { id: data[0], t:'client' },
                    success: function (response) {
                        var datas = JSON.parse(response);
                        //console.log(datas);
                        $('#vfirstname').text(datas[0].firstname);
                        $('#vmiddlename').text(datas[0].middlename);
                        $('#vlastname').text(datas[0].lastname);
                        $('#vdob').text(datas[0].birthdate);
                        $('#vage').text(datas[0].age);
                        $('#vgender').text(datas[0].gender);
                        $('#vreligion').text(datas[0].religion);
                        $('#vcitizenship').text(datas[0].citizenship);
                        $('#vcivilstatus').text(datas[0].civilstatus);
                        $('#vaddress').text(datas[0].address);
                        $('#vregion').text(datas[0].region);
                        $('#vmobile').text(datas[0].mobilenumber);
                        $('#vemail').text(datas[0].email);
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
    
</body>

</html>