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
            <h1><i class="fas fa-eye"></i></h1>
            <h1 class="card-title">Set A New Password</h1>
              <hr class="mt-3 mb-3">
              <div class="text-start">
                <p>Please choose a password that contains both characters, numbers, symbols, uppercase and lower case for stronger password.</p>
              </div>
            <form>
              <div class="mb-3">
                <label for="newPassword" class="form-label d-none">New Password</label>
                <input type="password" class="form-control form-control-lg" id="newPassword" placeholder="New Password" required>
              </div>
              <div class="mb-3">
                <label for="confirmPassword" class="form-label d-none">Confirm Password</label>
                <input type="password" class="form-control form-control-lg" id="confirmPassword" placeholder="Confirm Password" required>
              </div>
              <div class="button-container">
                <button type="button" class="btn btn-primary btn-lg" id="nextBtn">Next Step</button>
              </div>
            </form>
          </div>
        </div>
        <div class="card forgotcards next" id="step2">
          <div class="card-body text-center">
            <h1><i class="fas fa-envelope"></i></h1>
            <h1>VERIFY YOU ACCOUNT</h1>
            <hr class="mt-3 mb-3">
            <h5 class="card-title">A verification code has been sent to</h5>
            <h5><b>email.com</b></h5>
            <div class="text-start">
            <p class="mt-5 mb-2">Please check you inbox and enter the verification code below to verify your account.</p>
            <p> The code will expire in time</p>
            </div>
            <form>
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
                <button type="button" class="btn btn-secondary btn-lg" id="prevBtn">Previous</button>
                <button type="button" class="btn btn-primary btn-lg" id="verifyBtn">Verify</button>
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
        <circle class="checkmark__circle" cx="26" cy="26" r="10" fill="none"/>
        <path class="checkmark__check" fill="none" d="M21 25 L24 30 Q25 32, 30 22 L32 24"/>
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
      if (currentStep < steps.length - 1) {
        currentStep++;
        updateSteps();
      }
    });

    document.getElementById('prevBtn').addEventListener('click', () => {
      if (currentStep > 0) {
        currentStep--;
        updateSteps();
      }
    });

    document.getElementById('verifyBtn').addEventListener('click', () => {
      // Assuming verification is successful
      successModal.style.display = "block";
    });

    closeModal.onclick = function() {
      successModal.style.display = "none";
    }

    window.onclick = function(event) {
      if (event.target == successModal) {
        successModal.style.display = "none";
      }
    }

    updateSteps();
  </script>
</body>

</html>
