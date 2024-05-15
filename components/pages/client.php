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
    <link rel="stylesheet" href="/custom.css" />
</head>

<body class="generalbg">
    <!-- Modal -->
    <div class="modal fade" id="addcourt" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header sideback text-light">
                    <h5 class="modal-title" id="exampleModalLabel">Add Client Data </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="container">
                    <form action="../../functions/add_client.php" method="post">
                        <div class="modal-body">
                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <label class="form-label">Last Name:</label>
                                    <input type="text" class="form-control" name="last_name" placeholder="Last Name">
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">First Name:</label>
                                    <input type="text" class="form-control" name="first_name" placeholder="First Name">
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Middle Name:</label>
                                    <input type="text" class="form-control" name="middle_name"
                                        placeholder="Middle Name">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <label class="form-label">Birth Date:</label>
                                    <input type="date" id="dob" class="form-control" name="dob">
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Age:</label>
                                    <input type="text" id="ageResult" class="form-control" name="age" placeholder="Age">
                                </div>
                                <div class="col-md-4">
                                    <label for="gender" class="form-label">Gender:</label>
                                    <select id="gender" name="gender" class="form-control">
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <label for="religion" class="form-label">Religion:</label>
                                    <input type="text" id="religion" class="form-control" name="religion"
                                        placeholder="Religion">
                                </div>
                                <div class="col-md-4">
                                    <label for="citizenship" class="form-label">Citizenship:</label>
                                    <input type="text" id="citizenship" class="form-control" name="citizenship"
                                        placeholder="Citizenship">
                                </div>
                                <div class="col-md-4">
                                    <label for="civilstatus" class="form-label">Civil Status:</label>
                                    <select id="civilstatus" name="civilstatus" class="form-control">
                                        <option value="Single">Single</option>
                                        <option value="Married">Married</option>
                                        <option value="Divorced">Divorced</option>
                                        <option value="Widowed">Widowed</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <label class="form-label">Address:</label>
                                    <input type="text" class="form-control" name="address"
                                        placeholder="Street/Purok, Barangay, Municipality">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <label class="form-label">Region:</label>
                                    <input type="text" class="form-control" name="region" placeholder="Region">
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Contact No.:</label>
                                    <input type="text" id="mobile" class="form-control" name="mobile"
                                        placeholder="Contact Number" maxlength="11" required=""
                                        onkeypress="return event.charCode >= 48 && event.charCode <= 57 || event.charCode === 46">
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Email:</label>
                                    <input type="email" class="form-control" name="email" placeholder="Email">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary radiusb" data-dismiss="modal">Close</button>
                                <button type="submit" name="submit" class="btn btn-success sideback radiusb">Add Data</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- EDIT POP UP FORM (Bootstrap MODAL) -->
    <div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header editbg text-light">
                    <h5 class="modal-title" id="exampleModalLabel"> Edit Client Data </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="../../functions/update_client.php" method="POST">
                    <div class="modal-body">
                        <input type="hidden" name="uupdate_id" id="update_id">
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <label class="form-label">Last Name:</label>
                                <input type="text" class="form-control" name="ulast_name" id="ulastname"
                                    placeholder="Last Name">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">First Name:</label>
                                <input type="text" class="form-control" name="ufirst_name" id="ufirstname"
                                    placeholder="First Name">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Middle Name:</label>
                                <input type="text" class="form-control" name="umiddle_name" id="umiddlename"
                                    placeholder="Middle Name">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <label class="form-label">Birth Date:</label>
                                <input type="date" class="form-control" name="udob" id="udob">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Age:</label>
                                <input type="text" class="form-control" name="uage" id="uage" placeholder="Age">
                            </div>
                            <div class="col-md-4">
                                <label for="gender" class="form-label">Gender:</label>
                                <select id="ugender" name="ugender" class="form-control">
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <label for="religion" class="form-label">Religion:</label>
                                <input type="text" id="ureligion" class="form-control" name="ureligion"
                                    placeholder="Religion">
                            </div>
                            <div class="col-md-4">
                                <label for="citizenship" class="form-label">Citizenship:</label>
                                <input type="text" id="ucitizenship" class="form-control" name="ucitizenship"
                                    placeholder="Citizenship">
                            </div>
                            <div class="col-md-4">
                                <label for="civilstatus" class="form-label">Civil Status:</label>
                                <select id="ucivilstatus" name="ucivilstatus" class="form-control">
                                    <option value="Single">Single</option>
                                    <option value="Married">Married</option>
                                    <option value="Divorced">Divorced</option>
                                    <option value="Widowed">Widowed</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label class="form-label">Address:</label>
                                <input type="text" class="form-control" name="uaddress" id="uaddress"
                                    placeholder="Street/Purok, Barangay, Municipality">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <label class="form-label">Region:</label>
                                <input type="text" class="form-control" name="uregion" id="uregion"
                                    placeholder="Region">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Contact No.:</label>
                                <input type="text" id="umobile" class="form-control" name="umobile"
                                    placeholder="Contact Number" maxlength="11" required=""
                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57 || event.charCode === 46">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Email:</label>
                                <input type="email" class="form-control" name="uemail" id="uemail" placeholder="Email">
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary radiusb" data-dismiss="modal">Close</button>
                        <button type="submit" name="updatedata" class="btn editbg text-white radiusb">Update Data</button>
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
                        <button type="button" class="btn btn-secondary radiusb" data-dismiss="modal"> NO </button>
                        <button type="submit" name="deletedata" class="btn btn-danger deletebtnbg radiusb"> Yes !! Delete it.
                        </button>
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
                    <h5 class="modal-title" id="exampleModalLabel"> View Client's Data </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="" method="POST">
                    <div class="modal-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Name:</label>
                                </div>
                                <div class="col-md-6">
                                    <label id="vfirstname"></label>
                                    <label id="vmiddlename"></label>
                                    <label id="vlastname"></label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Birthdate:</label>
                                </div>
                                <div class="col-md-6">
                                    <label id="vdob"></label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Age.:</label>
                                </div>
                                <div class="col-md-6">
                                    <label id="vage"></label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Sex/Gender:</label>
                                </div>
                                <div class="col-md-6">
                                    <label id="vgender"></label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Religion:</label>
                                </div>
                                <div class="col-md-6">
                                    <label id="vreligion"></label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Citizenship:</label>
                                </div>
                                <div class="col-md-6">
                                    <label id="vcitizenship"></label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Civil Status:</label>
                                </div>
                                <div class="col-md-6">
                                    <label id="vcivilstatus"></label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Address:</label>
                                </div>
                                <div class="col-md-6">
                                    <label id="vaddress"></label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Region:</label>
                                </div>
                                <div class="col-md-6">
                                    <label id="vregion"></label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Contact No.:</label>
                                </div>
                                <div class="col-md-6">
                                    <label id="vmobile"></label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Email:</label>
                                </div>
                                <div class="col-md-6">
                                    <label id="vemail"></label>
                                </div>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary radiusb" data-dismiss="modal">CLOSE</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <div class="container-fluid">
        <h2 class="text-start text-md-start">Client</h2>
        <div style="text-align:right;">
            <button type="button" class="btn btn-success sideback radiusb" data-toggle="modal" data-target="#addcourt">
                ADD
            </button>
        </div>
        <div class="card" style="margin-top: 10px;">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="datatableid" class="table w-100">
                        <thead>
                            <tr class="text-center sideback text-light">
                                <th scope="col" class="d-none">ID</th>
                                <th scope="col" class="tablestart">Client Name</th>
                                <th scope="col">Gender</th>
                                <th scope="col">Contact</th>
                                <th scope="col">Email</th>
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
                                <button type="button" class="btn viewbtn"><i class="fa fa-eye"></i></button>
                                <button type="button" class="btn editbtn"><i class="fa fa-edit"></i></button>
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
    <script>
        $(document).ready(function () {

            $('.editbtn').on('click', function () {

                $('#editmodal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                $.ajax({
                    url: "../../receivedapi/fetchdata.php",
                    type: "POST",
                    data: { id: data[0], t:'client'},
                    success: function (response) {
                        var datas = JSON.parse(response);

                        $('#update_id').val(datas[0].id);
                        $('#ufirstname').val(datas[0].firstname);
                        $('#umiddlename').val(datas[0].middlename);
                        $('#ulastname').val(datas[0].lastname);
                        $('#udob').val(datas[0].birthdate);
                        $('#uage').val(datas[0].age);
                        $('#ugender').val(datas[0].gender);
                        $('#ureligion').val(datas[0].religion);
                        $('#ucitizenship').val(datas[0].citizenship);
                        $('#ucivilstatus').val(datas[0].civilstatus);
                        $('#uaddress').val(datas[0].address);
                        $('#uregion').val(datas[0].region);
                        $('#umobile').val(datas[0].mobilenumber);
                        $('#uemail').val(datas[0].email);
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