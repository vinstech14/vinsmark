<?php

@include 'config.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   
   $user_type = $_POST['user_type'];

   $select = " SELECT * FROM users WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'user already exist!';

   }else{

      if($pass != $pass){
         $error[] = 'password not matched!';
      }else{
         $insert = "INSERT INTO users(name, email, password, user_type) VALUES('$name','$email','$pass','$user_type')";
         mysqli_query($conn, $insert);
         header('location:user_page.php');
      }
   }

};


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> User Home Page </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href='https://fonts.googleapis.com/css?family=Nunito Sans' rel='stylesheet'>
    <link rel="stylesheet" href="/custom.css"/>
    <script src="../../customjs/functions.js"></script>

</head>

<body class="generalbg">
    <!-- Modal -->
    <div class="modal fade" id="adduser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header sideback text-light">
                    <h5 class="modal-title" id="exampleModalLabel">Add Account Data </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="../../functions/add_user.php" method="POST">
                    <?php
                            if(isset($error)){
                                foreach($error as $error){
                                    echo '<span class="error-msg">'.$error.'</span>';
                                };
                            };
                        ?>

                    <div class="modal-body">
                        <div class="form-group">
                        <div class="row mb-3">
                            <div class="col-md-6">
                            <label>Name:</label>
                            <input type="text" name="name" class="form-control" placeholder="Enter Name">
                        </div>
                        <div class="col-md-6">
                            <label>Email:</label>
                            <input type="text" name="email" class="form-control" placeholder="Enter email">
                        </div>
                        </div>
                        <div class="row mb-3">
                        <div class="col-md-6">
                            <label>Password:</label>
                            <div class="input-group">
                                <input type="password" class="form-control bg-transparent passfield" id="password" placeholder="Enter password" name="password">
                                <div class="input-group-append">
                                    <span class="input-group-text bg-transparent eyeborder">
                                        <i class="fa fa-eye-slash" id="togglepassword"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                        <label for="user_type" class="form-label">User Type:</label>
                            <select id="user_type" name="user_type" class="form-control">
                                <option value="Attorney">Attorney</option>
                                <option value="Staff">Staff</option>
                                <option value="Client">Client</option>
                            </select>
                        </div>
                        </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary radiusb" data-dismiss="modal">Close</button>
                        <button type="submit" name="submit" class="btn btn-success sideback radiusb">Add Data</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <!-- EDIT POP UP FORM (Bootstrap MODAL) -->
    <div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header editbg text-light">
                    <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="../../functions/update_user.php" method="POST">
                    <div class="modal-body">

                        <input type="hidden" name="update_id" id="update_id">

                        <div class="form-group row">
                            <label for="name" class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                                <input type="text" name="uname" id="name" class="form-control" placeholder="Enter Name">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="text" name="uemail" id="email" class="form-control" placeholder="Enter Email">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                                <div class="input-group" style="border-right:none;">
                                    <input type="password" class="form-control bg-transparent passfield" id="upassword" placeholder="Enter password" name="upassword">
                                    <div class="input-group-append">
                                        <span class="input-group-text bg-transparent eyeborder">
                                            <i class="fa fa-eye-slash" id="toggleupassword"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="uusertype" class="col-sm-2 col-form-label">Type</label>
                            <div class="col-sm-10">
                                <select id="uusertype" name="uusertype" class="form-control">
                                    <option value="Attorney">Attorney</option>
                                    <option value="Staff">Staff</option>
                                    <option value="Client">Client</option>
                                </select>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary radiusb" data-dismiss="modal">Close</button>
                        <button type="submit" name="updatedatastaff" class="btn editbg text-white radiusb">Update Data</button>
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
                    <h5 class="modal-title" id="exampleModalLabel"> Delete Account </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="../../functions/delete_user.php" method="POST">

                    <div class="modal-body">

                        <input type="hidden" name="delete_id" id="delete_id">

                        <h4> Do you want to delete this data ?</h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary radiusb" data-dismiss="modal"> NO </button>
                        <button type="submit" name="deletedata" class="btn btn-danger deletebtnbg radiusb">Delete it. </button>
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
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> View Account Data </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="" method="POST">

                    <div class="modal-body">
                        <input type="hidden" name="view_id" id="view_id">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary radiusb" data-dismiss="modal"> CLOSE </button>
                        <!-- <button type="submit" name="deletedata" class="btn btn-primary"> Yes !! Delete it. </button> -->
                    </div>
                </form>

            </div>
        </div>
    </div>



    <div class="container-fluid">
    <h2 class="text-start text-md-start">Accounts</h2>
    <div style="text-align:right;">
        <button type="button" class="btn btn-success sideback radiusb" data-toggle="modal" data-target="#adduser">
            ADD
        </button>
    </div>
        <div class="card" style="margin-top: 10px;">
            <div class="card-body">
    <div class="table-responsive">
                <table id="datatableid" class="table w-100">
                    <thead>
                        <tr class="text-center sideback text-light">
                            <th scope="col"  class="d-none">ID</th>
                            <th scope="col" class="tablestart">Name</th>
                            <th scope="col">Email </th>
                            <th scope="col">Password</th>
                            <th scope="col">Type</th>
                            <th scope="col" class="tableend">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                       require_once("../../database/databasecon.php");
                       require_once("../../functions/functions.php");

                        $result = selectAllData($conn, 'accounts');
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
                                <?php echo $row['name']; ?>
                            </td>
                            <td>
                                <?php echo $row['email']; ?>
                            </td>
                            <td>
                                <?php echo $row['password']; ?>
                            </td>
                            <td>
                                <?php echo $row['usertype']; ?>
                            </td>
                            <td>
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
                $.ajax({ //create an ajax request to display.php
                    type: "GET",
                    url: "display.php",
                    dataType: "html", //expect html to be returned                
                    success: function (response) {
                        $("#responsecontainer").html(response);
                        //alert(response);
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
                    return $(this).text().trim();
                }).get();
                
                console.log(data);

                $('#update_id').val(data[0]);
                $('#name').val(data[1]);
                $('#email').val(data[2]);
                $('#upassword').val(data[3]);
                $('#uusertype').val(data[4]);
            });
        });
    </script>

    <script> 
    toggleP('togglepassword', 'password');
    toggleP('toggleupassword', 'upassword');
    </script>
</body>

</html>