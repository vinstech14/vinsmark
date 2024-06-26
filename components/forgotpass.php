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
  <div class="container">
    <div class="row">
      <div class="col-12 card-container">
        <div class="card forgotcards active" id="step1">
          <div class="card-body text-center">
            <h1><i class="fas fa-eye text-success"></i></h1>
            <h1 class="card-title">Set A New Password</h1>
            <hr class="mt-3 mb-3">
            <div class="text-start">
              <p>Please choose a password that contains both characters, numbers, symbols, uppercase and lower case for
                stronger password.</p>
            </div>
            <form>
              <div class="mb-3">
                <label for="email" class="labelconf" id="emaill">Email</label>
                <input type="email" class="form-control bg-transparent" id="email" placeholder="Email" oninput='showlabeltop(id, "emaill")' required>
              </div>
              <div class="mb-3">
                <label for="password" class="labelconf" id="passl">New Password</label>
                <div class="input-group">
                    <input type="password" class="form-control bg-transparent passfield" id="password"
                      placeholder="New Password" name="spword" oninput='showlabeltop(id, "passl")' required>
                    <div class="input-group-append">
                      <span class="input-group-text bg-transparent eyeborder">
                        <i class="fas fa-eye-slash" id="togglespassword"></i>
                      </span>
                    </div>
                  </div>
              </div>
              <div class="mb-3">
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
              <div class="button-container mb-3">
                <button type="submit" class="btn btn-success btn-lg shadowbottom" id="nextBtn">Next Step</button>
              </div>
              <span>Go back to <a href="/index.php">Login</a></span>
          </div>
        </div>
        <div class="card forgotcards next" id="step2">
          <div class="card-body text-center">
            <h1><i class="fas fa-envelope text-success"></i></h1>
            <h1>VERIFY YOUR ACCOUNT</h1>
            <hr class="mt-3 mb-3">
            <h5 class="card-title">A verification code has been sent to</h5>
            <h5><b>email.com</b></h5>
            <div class="text-start">
              <p class="mt-5 mb-2">Please check your inbox and enter the verification code below to verify your account.
              </p>
              <p> The code will expire in time</p>
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
                <button type="button" class="btn btn-secondary btn-lg shadowbottom" id="prevBtn">Previous</button>
                <button type="submit" class="btn btn-success btn-lg shadowbottom" id="verifyBtn">Verify</button>
              </div>
              <a href="">Resend Code</a>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="progress-dots">
      <span class="active-dot"></span>
      <span></span>
    </div>
  </div>

  <div class="forgotmodal" id="successModal">
    <div class="forgotmodal-content">
      <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 3 50 50">
        <circle class="checkmark__circle" cx="26" cy="26" r="10" fill="none" />
        <path class="checkmark__check" fill="none" d="M21 25 L24 30 Q25 32, 30 22 L32 24" />
      </svg>
      <h1 style="margin-top: -50px;">Success!</h1>
      <p class="mt-3">Your password has been changed.</p>
      <a href="/index.php">Login</a><span> your account</span>
    </div>
  </div>

  <script>
    const steps = document.querySelectorAll('.forgotcards');
    const dots = document.querySelectorAll('.progress-dots span');
    const successModal = document.querySelector('.forgotmodal');
    const closeModal = document.querySelector('.close');
    
    let currentStep = 0;
    toggleP('togglespassword', 'password');
    toggleP('togglescpassword', 'confirm_password');
    function updateSteps() {
      steps.forEach((step, index) => {
        step.classList.remove('active', 'previous', 'next');
        if (index === currentStep) {
          step.classList.add('active');
        } else if (index < currentStep) {
          step.classList.add('previous');
        } else {
          step.classList.add('next');
        }
      });

      dots.forEach((dot, index) => {
        dot.classList.toggle('active-dot', index === currentStep);
      });
    }

    document.getElementById('nextBtn').addEventListener('click', () => {
      const email = $('#email').val();
      const newpass = $('#password').val();
      const cpass = $('#confirm_password').val();
      if(email && newpass && cpass){
        if (currentStep < steps.length - 1) {
          currentStep++;
          updateSteps();
        }
        const email = $('#email').val();
        $.ajax({
          url: "../functions/verify.php",
          type: "POST",
          data: { email: email },
          success: function (response) {
            const result = JSON.parse(response);
            // Show
          },
          error: function (xhr, status, error) {
            // Handle errors
            console.error(xhr.responseText);
          }
        });
    }
  });

    document.getElementById('prevBtn').addEventListener('click', () => {
      if (currentStep > 0) {
        currentStep--;
        updateSteps();
      }
    });

    document.getElementById('verifyBtn').addEventListener('click', () => {
      let verificationCode = '';
      $('.verification-input').each(function () {
        verificationCode += $(this).val();
      });
      const expectedCode = '123456'; // Replace '123456' with the actual expected verification code
      if (verificationCode === expectedCode) {
        successModal.style.display = "block";
      } else {
        alert('Verification code is incorrect');
      }
    });

  /*  closeModal.onclick = function () {
      successModal.style.display = "none";
    }*/

    window.onclick = function (event) {
      if (event.target == successModal) {
        successModal.style.display = "none";
      }
    }

    updateSteps();
  </script>
</body>

</html>
