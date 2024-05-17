<?php
  require_once("../database/databasecon.php");
  require_once("../functions/functions.php");

  if(isset($_POST['ssubmit'])){
    $name = $_POST['sname'];
    $email = $_POST['email'];
    $password = $_POST['spword'];
    $confirmpw = $_POST['scpword'];
    $table='accounts';
    $columns = ['name', 'email', 'password', 'usertype'];
    $data = [$name, $email, $password, 'Client'];
  if($password===$confirmpw)
    saveData($conn, $table, $columns, $data);
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sign Up</title>
  <link rel="stylesheet" href="../custom.css" />
  <script src="../customjs/functions.js"></script>
  <?php readfile('../global/header.html'); ?>
</head>

<body class="loginbgimg">
  <div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="card bg-transparent cardw blurry-background">
      <div class="card-body bg-transparent" style="border-radius:20px;">
        <div class="row">
          <div class="col-md-3 text-center logos mb-3">
          <img src="../images/pao.png" class="rounded-circle" alt="Avatar" style="width: 120px; height: auto;" />
          </div>
          <div class="col-md-9">
        <div class="card generalbg">
          <div class="text-center mt-2">
          <h2>Create account</h2>
          </div>
          <form method="post">
            <div class="form-group m-3" id="sname">
              <label class="labelconf" id="namel">Full Name</label>
              <input type="text" class="form-control bg-transparent" id="usname" placeholder="Full Name" name="sname" oninput='showlabeltop()'>
            </div>
            <div class="form-group m-3" id="semail">
            <label class="labelconf" id="emaill">Email</label>
              <input type="email" class="form-control bg-transparent" id="email" placeholder="Email" name="email" oninput='showlabeltop()'>
            </div>
            <div class="form-group m-3" id="spassword">
            <label class="labelconf" id="passl">Password</label>
              <div class="input-group">
              <input type="password" class="form-control bg-transparent passfield" id="password" placeholder="Password" name="spword" oninput='showlabeltop()'>
              <div class="input-group-append">
                  <span class="input-group-text bg-transparent eyeborder">
                      <i class="fas fa-eye-slash" id="togglespassword"></i>
                  </span>
              </div>
          </div>
            </div>
            <div class="form-group m-3" id="sconfirmpw">
            <label class="labelconf" id="cpassl">Confirm Password</label>
              <div class="input-group">
              <input type="password" class="form-control bg-transparent passfield" id="confirm_password" placeholder="Confirm password" name="scpword" oninput='showlabeltop()'>
              <div class="input-group-append">
                  <span class="input-group-text bg-transparent eyeborder">
                      <i class="fas fa-eye-slash" id="togglescpassword"></i>
                  </span>
              </div>
          </div>
            </div>
            <div class="text-center" id="sbutton">
              <button type="submit" class="btn btn-success sideback m-3 w-50 radiusb shadowbottom" name="ssubmit" value="submit">Create</button>
            </div>
            <div class="text-center mb-3" id="sl">
            <span>Already have an account?</span>
            <a href="../index.php">Login</a>
          </div>
          </form>
        </div>
        </div>
      </div>
      </div>
    </div>
  </div>

  <script>
    toggleP('togglespassword', 'password');
    toggleP('togglescpassword', 'confirm_password');

</script>

</body>
</html>
