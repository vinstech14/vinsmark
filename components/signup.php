<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sign Up</title>
  <?php readfile('../global/header.html'); ?>
  <link rel="stylesheet" href="../customcss/custom.css" />
  <script src="../customjs/functions.js"></script>
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
              <form id="signupForm" action="../functions/registeraccount.php" method="post">
                <div class="row m-1">
                  <div class="col-md-6">
                    <div class="form-group" id="dmname">
                      <label class="labelconf" id="fnamel">First Name</label>
                      <input type="text" class="form-control bg-transparent" id="fname" placeholder="First Name"
                        name="fname" oninput='showlabeltop(id, "fnamel")' required>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group" id="dfname">
                      <label class="labelconf" id="lnamel">Last Name</label>
                      <input type="text" class="form-control bg-transparent" id="lname" placeholder="Last Name"
                        name="lname" oninput='showlabeltop(id, "lnamel")' required>
                    </div>
                  </div>
                </div>
                <div class="form-group m-3" id="semail">
                  <label class="labelconf" id="emaill">Email</label>
                  <input type="email" class="form-control bg-transparent email" id="email" placeholder="Email"
                    name="email" oninput='checkEmail(id)' required>
                </div>
                <div class="form-group m-3" id="spassword">
                  <label class="labelconf" id="passl">Password</label>
                  <div class="input-group">
                    <input type="password" class="form-control bg-transparent passfield" id="password"
                      placeholder="Password" name="spword" oninput='showlabeltop(id, "passl")' required>
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
                    <input type="password" class="form-control bg-transparent passfield" id="confirm_password"
                      placeholder="Confirm password" name="scpword" oninput='showlabeltop(id,"cpassl")' required>
                    <div class="input-group-append">
                      <span class="input-group-text bg-transparent eyeborder">
                        <i class="fas fa-eye-slash" id="togglescpassword"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="text-center" id="sbutton">
                  <button type="submit" class="btn btn-success sideback m-3 w-50 radiusb shadowbottom createbtn"
                    name="create" value="submit" id="create">Create</button>
                </div>
                <div class="text-center mb-3" id="sl">
                  <span>Already have an account?</span>
                  <a href="../index.php">Login</a>
                </div>
              <!-- Modal for verification code -->
              <div class="modal fade" id="verificationModal" tabindex="-1" role="dialog"
                aria-labelledby="verificationModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content p-3">
                    <div class="modal-body text-center">
                      <!-- Verification Code Section -->
                      <div id="verificationSection">
                        <input id="vcid" hidden></input>
                        <h1><i class="fas fa-envelope text-success"></i></h1>
                        <h1>VERIFY YOUR ACCOUNT</h1>
                        <hr class="mt-3 mb-3">
                        <h5 class="card-title">A verification code has been sent to</h5>
                        <h5><b class="emailtext"></b></h5>
                        <div class="text-start">
                          <p class="mt-5 mb-2">Please check your inbox and enter the verification code below to verify your
                            account.</p>
                          <p>The code will expire in time</p>
                        </div>
                        <div class="mb-3">
                          <div id="verificationCode" class="d-flex justify-content-between">
                            <input type="text" class="form-control text-center verification-input" maxlength="1" required>
                            <input type="text" class="form-control text-center verification-input" maxlength="1" required>
                            <input type="text" class="form-control text-center verification-input" maxlength="1" required>
                            <input type="text" class="form-control text-center verification-input" maxlength="1" required>
                            <input type="text" class="form-control text-center verification-input" maxlength="1" required>
                            <input type="text" class="form-control text-center verification-input" maxlength="1" required>
                          </div>
                        </div>
                        <div class="button-container m-2">
                          <button type="submit" class="btn btn-success btn-lg shadowbottom" id="verifyBtn" name="ssubmit">Verify</button>
                        </div>
                        <a href="">Resend Code</a>
                      </div>
                      
                      <!-- Success Message Section (Hidden by default) -->
                      <div id="successSection" style="display:none;">
                        <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 3 50 50">
                          <circle class="checkmark__circle" cx="26" cy="26" r="10" fill="none" />
                          <path class="checkmark__check" fill="none" d="M21 25 L24 30 Q25 32, 30 22 L32 24" />
                        </svg>
                        <h1 style="margin-top: -50px;">Congratulations!</h1>
                        <p class="mt-3">Your account has been created.</p>
                        <a href="../index.php">Login</a><span> to your account</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <script>
    $(document).ready(function () {
      toggleP('togglespassword', 'password');
      toggleP('togglescpassword', 'confirm_password');

      $('#create').on('click', function () {
        const email = $('#email').val();
        const firstName = $('#fname').val();
        const lastName = $('#lname').val();
        const password = $('#password').val();
        const confirmPassword = $('#confirm_password').val();

        // Check if all fields are filled
        if (email && firstName && lastName && password && confirmPassword) {
          $('#verificationModal').modal('show');
          // If all fields are filled, make the AJAX request
          $.ajax({
            url: "../functions/verify.php",
            type: "POST",
            data: { email: email },
            success: function (response) {
              const result = JSON.parse(response);
              $('#vcid').val(result);
              $('.emailtext').text(email);
            },
            error: function (xhr, status, error) {
              console.error(xhr.responseText);
            }
          });
        }
      });

      $('#verifyBtn').on('click', function () {
        let verificationCode = '';
        $('.verification-input').each(function () {
          verificationCode += $(this).val();
        });
        const expectedCode = $('#vcid').val();
        if (verificationCode === expectedCode) {
          // Hide verification section and show success section
          $('#verificationSection').hide();
          $('#successSection').show();
        } else {
          alert('Verification code is incorrect');
        }
      });
    });

    function checkEmail(id) {
      const email = $("#email").val();
      $.ajax({
        url: "../receivedapi/checkduplicate.php",
        type: "POST",
        data: { data1: email, column1: 'email', t: 'accounts' },
        success: function (response) {
          const result = JSON.parse(response);
          if (result.status === 'exists') {
            $('#emaill').text('Email already exists');
          } else {
            $('#emaill').text('Email');
          }
        },
        error: function (xhr, status, error) {
          console.error(xhr.responseText);
        }
      });
      showlabeltop(id, "emaill");
    }
  </script>
</body>

</html>