<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sign Up</title>
  <link rel="stylesheet" href="../customcss/custom.css" />
  <script src="../customjs/functions.js"></script>
  <?php readfile('../global/header.html'); ?>
</head>

<body>
  <div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="card cardw popon">
      <div class="card-body generalbg" style="border-radius:20px;">
        <div class="row">
          <div class="col-md-3 text-center logos popin">
          <img src="../images/pao.png" class="rounded-circle" alt="Avatar" style="width: 120px; height: auto;" />
          </div>
          <div class="col-md-9 popin">
        <div class="card">
          <div class="text-center mt-2">
          <h2>Create account</h2>
          </div>
          <form action="../functions/registeraccount.php" method="post">
            
              <div class="row m-1">
              <div class="col-md-4">
                  <div class="form-group" id="dfname">
                  <label class="labelconf" id="lnamel">Last Name</label>
                  <input type="text" class="form-control bg-transparent" id="lname" placeholder="Last Name" name="lname" oninput='showlabeltop()'>
                  </div>
              </div>
              <div class="col-md-4">
                  <div class="form-group" id="dmname">
                  <label class="labelconf" id="fnamel">First Name</label>
                  <input type="text" class="form-control bg-transparent" id="fname" placeholder="First Name" name="fname" oninput='showlabeltop()'>
                  </div>
              </div>
              <div class="col-md-4">
                  <div class="form-group" id="dlname">
                  <label class="labelconf" id="mnamel">Middle Name</label>
                  <input type="text" class="form-control bg-transparent" id="mname" placeholder="Middle Name" name="mname" oninput='showlabeltop()'>
                  </div>
              </div>
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
              <input type="password" class="form-control bg-transparent passfield" id="confirm_password" placeholder="Confirm password" name="scpword" oninput='passfieldcombo()'>
              <div class="input-group-append">
                  <span class="input-group-text bg-transparent eyeborder">
                      <i class="fas fa-eye-slash" id="togglescpassword"></i>
                  </span>
              </div>
          </div>
            </div>
            <div class="row m-1">
              <div class="col-md-3 text-start" id="getcode">
                  <button type="button" class="btn btn-success sideback radiusb shadowbottom gcodebtn" id="gcodebtn" disabled>Get code</button>
                </div>
              <div class="col-md-9">
                <div class="form-group" id="dvcode">
                <label class="labelconf" id="vcodel">Verification Code</label>
                <input type="text" class="form-control bg-transparent" id="vcode" placeholder="Verification Code" name="vcode" oninput='showlabeltop()' disabled>
                </div>
              </div>
              <p class="text-center mt-3 mb-0" id="plschck" style="display:none;"></p>
              <input type="hidden" name="vcname" id="vcid">
            </div>
            <div class="text-center" id="sbutton">
              <button type="submit" class="btn btn-success sideback m-3 w-50 radiusb shadowbottom" name="ssubmit" value="submit" id="ssubmit" disabled>Create</button>
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
<script>
    $(document).ready(function () {
    
    $('.gcodebtn').on('click', function () {
      const email = $('#email').val();
      var checkl = document.getElementById('plschck');
      var createbtn = document.getElementById('ssubmit');
      var vcode = document.getElementById('vcode');
      var first = document.getElementById('fname');
      var middle = document.getElementById('mname');
      var last = document.getElementById('lname');
      var name = first.value+' '+middle.value+' '+last.value;
    $.ajax({
        url: "../functions/verify.php",
        type: "POST",
        data: {email: email},
        success: function (response) {
          const result = JSON.parse(response);
          $('#vcid').val(result);
          checkl.style.display = 'block';
          checkl.innerText = 'Code sent to your email';
          createbtn.disabled = false;
          vcode.disabled = false;
          localStorage.setItem('userType', 'Client');
          localStorage.setItem('nameTag', name);
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
