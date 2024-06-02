<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Pao</title>
  <?php readfile('../global/header.html');?>
  <link rel="stylesheet" href="../customcss/custom.css" />
  <script src="../customjs/linkpage.js"></script>
  <script src="../customjs/functions.js"></script>
  <script src="../customjs/sidebar.js"></script>
  <script src="../customjs/main.js"></script>
  
</head>

<body class="generalbg">
  <div class="container-fluid">
    <div class="row flex-nowrap">
      <div class="sideback col-auto col-md-4 col-lg-2 min-vh-100" id="sidebar">
        <div class="sideback p-0">
          <a class="d-flex text-decoration-none align-items-center justify-content-end mt-3" id="sidebarToggle"
            onclick="toggleSidebar()">
            <div class="d-flex">
              <i class="fas fa-angle-double-left fs-6 text-light sideback d-none d-sm-inline" id="iconToggle"></i>
            </div>
          </a>
          <div class="d-flex align-items-center justify-content-center">
            <div class="col d-flex flex-column align-items-center">
              <div class="row">
                <img src="../images/pao.png" class="rounded-circle logores" alt="Avatar" style="width: 120px; height: auto;" />
              </div>
              <div class="row mt-2">
                <span class="d-none d-sm-inline text-white">Public Attorney's Office</span>
              </div>
            </div>
          </div>
          <hr class="text-white mt-2">
          <div class="row">
          </div>
          <ul class="nav nav-pills flex-column">
            <li class="nav-item py-2 py-sm-0" id="dashm">
              <a class="nav-link text-white fs-5 d flex" onclick="loadPage('Dashboard')"><i
                  class="fas fa-th-large p-2"></i>
                <span class="d-none d-sm-inline">Dashboard</span>
              </a>
            </li>
            <li class="nav-item py-2 py-sm-0" id="clientm">
              <a class="nav-link text-white fs-5 d-flex" onclick="loadPage('Client')"><i class="fas fa-user p-2"></i>
                <span class="d-none d-sm-inline">Client</span>
              </a>
            </li>
            <li class="nav-item py-2 py-sm-0" id="casem">
              <a class="nav-link text-white fs-5 d-flex" onclick=" loadPage('Case')"><i
                  class="fas fa-briefcase p-2"></i>
                <span class="d-none d-sm-inline">Case</span>
              </a>
            </li>
            <li class="nav-item py-2 py-sm-0" id="staffm">
              <a class="nav-link text-white fs-5 d-flex" onclick="loadPage('Staff')"><i class="fas fa-users p-2"></i>
                <span class="d-none d-sm-inline">Accounts</span>
              </a>
            </li>
            <li class="nav-item py-2 py-sm-0" id="transactionm">
              <a class="nav-link text-white fs-5 d-flex" onclick="loadPage('Transaction')"><i
                  class="fas fa-handshake-o p-2"></i>
                <span class="d-none d-sm-inline">Transaction</span></a>
            </li>
            <li class="nav-item py-2 py-sm-0" id="calendarm">
              <a class="nav-link text-white fs-5 d-flex" onclick="loadPage('Calendar')"><i
                  class="fas fa-calendar-check p-2"></i>
                <span class="d-none d-sm-inline">Calendar</span></a>
            </li>
            <li class="nav-item py-2 py-sm-0" id="reportm">
              <a class="nav-link text-white fs-5 d-flex" onclick="loadPage('Report')"><i
                  class="fas fa-newspaper p-2"></i>
                <span class="d-none d-sm-inline">Report</span></a>
            </li>
            <li class="nav-item py-2 py-sm-0" id="archivedm">
              <a class="nav-link text-white fs-5 d-flex" onclick="loadPage('Archived')"><i
                  class="fas fa-archive p-2"></i>
                <span class="d-none d-sm-inline">Archived</span></a>
            </li>
            <li class="nav-item py-2 py-sm-0" id="interviewsheetm">
              <a class="nav-link text-white fs-5 d-flex" onclick="loadPage('InterviewSheet')"><i
                  class="fas fa-newspaper p-2"></i>
                <span class="d-none d-sm-inline">Interview Sheet</span>
              </a>
            </li>
            <li class="nav-item py-2 py-sm-0" id="murequestm">
              <a class="nav-link text-white fs-5 d-flex" onclick="loadPage('MyRequest')"><i
                  class="fas fa-newspaper p-2"></i>
                <span class="d-none d-sm-inline">My Request</span>
              </a>
            </li>
            <li class="nav-item py-2 py-sm-0">
              <a class="nav-link text-white fs-5 d-flex" onclick="logout()"><i class="fas fa-sign-out-alt p-2"></i>
                <span class="d-none d-sm-inline">Logout</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="col">
        <div class="row">
          <nav class="navbar navbar-expand-lg" style="width:100%; height:8vh;">
            <div class="container-fluid shadowbottom">
              <div class="d-flex ms-auto">
                <a role="button" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="left"
                  data-bs-offset="-20,0" data-bs-content="Notification Messge here"
                  class="btn btn-transparent text-success" style="border:none;">
                  <h5><i class="fas fa-bell"></i>
                  </h5>
                </a>
                <a class="d-flex text-decoration-none text-success">
                  <img alt="Avatar" class="rounded-circle" style="width: 30px; height: 30px; border: 2px solid #0f5233;"
                    id="imageprofile" />
                  <span class="fs-6 d-none d-sm-inline m-1" id="type">Type</span>
                </a>
              </div>
            </div>
          </nav>
        </div>
        <div class="row">
          <div id="panel" class="p-0">
            <object id="dashid" type="text/html" data="../components/pages/dashboard.php"
              style="width: 100%; height:92vh"></object>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>