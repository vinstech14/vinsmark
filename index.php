<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login</title>
  <?php readfile('./global/header.html'); ?>
  <link rel="stylesheet" href="./customcss/custom.css" />
  <script src="./customjs/functions.js"></script>
  
</head>

<body>
 <div class="container d-flex justify-content-center align-items-center vh-100 d-flex">
    <div class="card generalbg w-50 shadowbottom popon" style="border-color:white;">
      <div class="card-body bg-transparent" style="border-radius: 10px;">
        <div class="row">
            <div class="text-center popin">
              <img src="./images/pao.png" class="rounded-circle" alt="Avatar" style="width: 150px; height: auto;"/>
            </div>
        <div class="card bg-light mt-3 popin" id="cardl">
        <form class="mt-2" method="post" action="./functions/login.php">
          <h2 class=text-center>Login</h2>
          <div class="m-3" id="un">
            <label class="labelconf" id="emaill">Username</label>
            <input type="text" class="form-control bg-transparent" id="email" placeholder="Enter username" name="uemail" oninput='showlabeltop(id,"emaill")'>
          </div>
          <div class="m-3" id="pw">
          <label class="labelconf" id="passl">Password</label>
          <div class="input-group">
              <input type="password" class="form-control bg-transparent passfield" id="password" placeholder="Enter password" name="pword" oninput='showlabeltop(id, "passl")'>
              <div class="input-group-append">
                  <span class="input-group-text bg-transparent eyeborder">
                      <i class="fas fa-eye-slash" id="togglepassword"></i>
                  </span>
              </div>
          </div>
          </div>
          <div class="m-3 text-end" id="forgot">
            <a class="text-center" href="./components/forgotpass.php">Forgot Password?</a>
          </div>
          <div class="m-3" id="usertypediv">
            <select class="form-select text-center radiusb" id="userType" name="userType" onchange="showLoginField(this)">
              <option selected disabled>Select Type of User</option>
              <option value="Attorney">Attorney</option>
              <option value="Staff">Staff</option>
              <option value="Client">Client</option>
            </select>
          </div>
          <div class="text-center" id="lb">
            <button type="submit" class="btn btn-success sideback m-3 w-50 radiusb shadowbottom loginbtn" name="submit" value="submit" onclick = "storeUserType()">Login</button>
          </div>
          <div class="text-center mb-3" id="sul" style="display:none;">
          <span>Doesn't have an account?</span>
            <a href="./components/signup.php">Sign up</a>
          </div>
        </form>
        </div>
        </div>
      </div>
    </div>
</div>
<script> 
  toggleP('togglepassword', 'password');
</script>

<script>
    $(document).ready(function () {

    $('.loginbtn').on('click', function () {
      var email = document.getElementById('email').value;
      var usertype = document.getElementById('userType').value;
      $.ajax({
        url: "./receivedapi/searching.php",
        type: "POST",
        data: {d1: email, d2: usertype, c1:'email', c2:'usertype', t:'accounts'},
        success: function(response) {
          const result = JSON.parse(response);
          localStorage.setItem('nameTag', result[0].name);
        },
        error: function(xhr, status, error) {
          console.error(xhr.responseText);
        }
      });
      showlabeltop();
    });
  });
</script>

</body>
</html>