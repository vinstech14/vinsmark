<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Scheduling</title>
      <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
      <link rel="stylesheet" href="../../customcss/bootstrap.min.css">
      <link rel="stylesheet" href="../../fullcalendar/lib/main.min.css">
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
      <script src="../../fullcalendar/lib/main.min.js"></script>
      <link rel="stylesheet" href="../..//customcss/custom.css" />
      <link rel="icon" href="#" type="image/x-icon">
      <link
         rel="stylesheet"
         href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
         />
      <link
         rel="stylesheet"
         href="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.min.css"
         />
      <link
         rel="stylesheet"
         href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
         />
      <style>
         :root {
         --bs-success-rgb: 71, 222, 152 !important;
         }
         html, body {
         height: 100%;
         width: 100%;
         font-family: Apple Chancery, cursive;
         margin: auto;
         padding: auto;
         overflow: auto; 
         }
         .btn-info.text-light:hover,
         .btn-info.text-light:focus {
         background: none;
         }
         table, tbody, td, tfoot, th, thead, tr {
         border-color: #ededed !important;
         border-style: solid;
         border-width: 1px !important;
         }
         body {
         display: flex;
         flex-direction: column; 
         background-color: #f2f2f2; 
         }
         #page-container {
         flex: 1 0 auto;
         display: flex;
         flex-direction: column;
         padding: 30px; 
         margin: 30px; 
         border-radius: 5px; 
         box-shadow: 0px 0px 10px 2px rgba(128, 128, 128, 0.5);
         width: 100%; 
         }
         @media (max-width: 768px) {
         #page-container {
         padding: 30px;
         }
         }
         #calendar-container {
         flex: 1 1 auto;
         width:100%; 
         height: 100%; 
         overflow: auto;
         padding-left: 10px; 
         }
         #calendar {
         flex: 1 1 auto;
         width:100%; 
         height: 100%; 
         top: 10px;
         }
         .fc-prevMonth-button,
         .fc-nextMonth-button {
         background: none;
         border: none;
         font-size: 1rem;
         color: green; 
         cursor: pointer;
         outline: none; 
         }
         .fc-prevMonth-button:focus,
         .fc-nextMonth-button:focus,
         .fc-prevMonth-button:active,
         .fc-nextMonth-button:active {
         outline: none; 
         box-shadow: none; 
         color: green; 
         background-color: transparent; 
         }
         .fc-prevMonth-button:hover,
         .fc-nextMonth-button:hover {
         text-decoration: underline;
         color: inherit; 
         background-color: transparent; 
         outline: none; 
         box-shadow: none; 
         }
         .fc-prevMonth-button i,
         .fc-nextMonth-button i {
         margin: 0 5px;
         }
         .btn-green {
         background-color: #008000; 
         color: white;
         }
         .input-group-text {
         cursor: pointer;
         }
         .hidden-calendar-input {
         display: none;
         color: green;
         }
         .xdsoft_datetimepicker {
         z-index: 9999 !important;
         }
        
         .add-event-button-container {
         position: relative;
         top: 50px; 
         right: 5px; 
         }
         #calendar-icon{
         position: relative;
         top: 2px; 
         right: 30px; 
         color: green;
         background-color: transparent;
         }
         .input-group, .input-group-text {
         border: none !important; 
         box-shadow: none !important; 
         }
         
         .save-delete-button {
         margin-top: 20px; 
         }
        
         .hr{
            margin-top: 50px;
         }
      </style>
   </head>
   <body class="bg-light">
      <div class="container py-3" id="page-container">
         

      <hr class="hr">
         <div class="row justify-content-between add-event-button-container">
         
         <div class="col-md-3 mb-5">
            <select class="form-select w-100" aria-label="Default select example">
                <option selected>Atty</option>
                <option value="1">All</option>
                <option value="2">Atty1</option>
                <option value="3">Atty 2</option>
            </select>
        </div>
            <div class="col-md-2 mb-5">
               <button class="btn btn-green w-100" name="add-event-btn" data-bs-toggle="modal" data-bs-target="#event-modal">
               <i class="fa fa-plus"></i>  Add Event
               </button>
            </div>
         </div>
         <div class="row justify-content-center">
            <div class="col-md-12" id="calendar-container">
               <div id="calendar"></div>
            </div>
         </div>
       <div class="row justify-content-end add-event-button-container">
        <div class="col-md-2 mb-5">
            <ul>
                <?php
                // Set the default timezone
                date_default_timezone_set('Asia/Manila');

                // Get the current date
                $currentDate = date('Y-m-d');

                // Database connection parameters
                $servername = "sql112.infinityfree.com";
                $username = "if0_35985447";
                $password = "lCyvH63NOd";
                $database = "if0_35985447_pao";

                // Create connection
                $conn = new mysqli($servername, $username, $password, $database);

                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                // Query to select titles where the start_datetime matches the current date
                $sql = "SELECT title FROM schedule_list WHERE DATE(start_datetime) = '$currentDate'";

                // Execute the query
                $result = $conn->query($sql);

                // Fetch results
                $reminders = [];
                if ($result->num_rows > 0) {
                    $reminders = $result->fetch_all(MYSQLI_ASSOC);
                }

                // Close the database connection
                $conn->close();

                // Display the reminders
                if (!empty($reminders)) {
                    foreach ($reminders as $reminder) {
                        echo "<li>" . htmlspecialchars($reminder['title']) . "</li>";
                    }
                } else {
                    echo "<li>No reminders for today.</li>";
                }
                ?>
            </ul>
        </div>
    </div>
      </div>
      
      <!-- Event Modal -->
      <div class="modal fade" id="event-modal" tabindex="-1" aria-labelledby="event-modal-label" aria-hidden="true">
         <div class="modal-dialog modal-xl">
            <div class="modal-content rounded-0">
               <div class="modal-header" style="background-color: #36633f; color: white;">
                  <h5 class="modal-title" id="event-modal-label">Event Form</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                  <div class="container-fluid">
                     <form id="schedule-form">
                        <input type="hidden" name="id" value="">
                        <div class="form-group mb-2">
                           <label for="title" class="control-label">Title</label>
                           <input type="text" class="form-control form-control-sm rounded-0" name="title" id="title" required>
                        </div>
                        <div class="form-group mb-2">
                           <label for="description" class="control-label">Description</label>
                           <textarea rows="3" class="form-control form-control-sm rounded-0" name="description" id="description" required></textarea>
                        </div>
                        <div class="row mb-2">
                           <label for="start_datetime" class="control-label">Date</label>
                           <div class="col-md-2">
                              <select id="day" name="day" class="form-control" required>
                                 
                              </select>
                           </div>
                           <div class="col-md-3">
                              <select id="month" name="month" class="form-control" required>
                                 <option value="1">January</option>
                                 <option value="2">February</option>
                                 <option value="3">March</option>
                                 <option value="4">April</option>
                                 <option value="5">May</option>
                                 <option value="6">June</option>
                                 <option value="7">July</option>
                                 <option value="8">August</option>
                                 <option value="9">September</option>
                                 <option value="10">October</option>
                                 <option value="11">November</option>
                                 <option value="12">December</option>
                              </select>
                           </div>
                           <div class="col-md-2">
                              <input type="number" id="year" name="year" class="form-control" min="1900" max="2099" required />
                           </div>
                           <div class="col-md-2">
                              <select id="hour" name="hour" class="form-control" required>
                                
                              </select>
                           </div>
                           <div class="col-md-2">
                              <select id="minute" name="minute" class="form-control" required>
                                
                              </select>
                           </div>
                           <div class="col-md-1">
                              <div class="input-group">
                                 <span class="input-group-text" id="calendar-icon">
                                 <i class="fa fa-calendar"></i>
                                 </span>
                              </div>
                           </div>
                        </div>
                        <input type="text" id="hidden-calendar-input" class="hidden-calendar-input" />
                        <div class="text-end" >
                           <button class="btn btn-primary btn-sm rounded-2 save-delete-button" type="submit"><i class="fa fa-save"></i> Save</button>
                           <button class="btn btn-danger btn-sm rounded-2 save-delete-button" type="reset"><i class="fa fa-times"></i> Cancel</button>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Event Modal -->
      <!-- Event Details Modal -->
      <div class="modal fade" tabindex="-1" data-bs-backdrop="static" id="event-details-modal">
         <div class="modal-dialog modal-dialog modal-xl">
            <div class="modal-content rounded-0">
               <div class="modal-header rounded-0" style="background-color: #36633f; color: white;">
                  <h5 class="modal-title">Event Details</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body rounded-0">
                  <div class="container-fluid">
                     <dl>
                        <dt class="text-muted">Title</dt>
                        <dd id="event-title" class="fw-bold fs-4"></dd>
                        <dt class="text-muted">Description</dt>
                        <dd id="event-description"></dd>
                        <dt class="text-muted">Date</dt>
                        <dd id="event-start"></dd>
                     </dl>
                  </div>
               </div>
               <div class="modal-footer rounded-0">
                  <div class="text-end">
                     <button type="button" class="btn btn-primary btn-sm rounded-0" id="edit" data-id=""> <i class="fa fa-pencil"></i> Edit</button>
                     <button type="button" class="btn btn-danger btn-sm rounded-0" id="delete" data-id=""><i class="fa fa-trash"></i> Delete</button>
                     <button type="button" class="btn btn-secondary btn-sm rounded-0" data-bs-dismiss="modal"> <i class="fa fa-times"></i> Close</button>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Event Details Modal -->
      <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.full.min.js"></script>
      <script>
         $(function () {
           
           for (let i = 0; i < 24; i++) {
             $("#hour").append(
               `<option value="${i}">${i.toString().padStart(2, "0")}</option>`
             );
           }
         
           for (let i = 0; i < 60; i++) {
             $("#minute").append(
               `<option value="${i}">${i.toString().padStart(2, "0")}</option>`
             );
           }
         
           
           var now = new Date();
           $("#hour").val(now.getHours());
           $("#minute").val(now.getMinutes());
         
           
           function updateDays() {
             const year = parseInt($("#year").val());
             const month = parseInt($("#month").val());
             const daysInMonth = new Date(year, month, 0).getDate();
         
             const selectedDay = $("#day").val(); 
         
             $("#day").empty();
             for (let i = 1; i <= daysInMonth; i++) {
               $("#day").append(`<option value="${i}">${i}</option>`);
             }
         
            
             if (selectedDay <= daysInMonth) {
               $("#day").val(selectedDay);
             } else {
               $("#day").val(1); 
             }
           }
         
          
           updateDays();
         
           
           $("#month, #year").change(function () {
             updateDays();
           });
         
         
           $("#hidden-calendar-input").datetimepicker({
             format: "d.m.Y H:i",
             inline: false,
             lang: "en",
             onChangeDateTime: function (dp, $input) {
               var date = new Date(dp);
               $("#day").val(date.getDate());
               $("#month").val(date.getMonth() + 1);
               $("#year").val(date.getFullYear());
               $("#hour").val(date.getHours());
               $("#minute").val(date.getMinutes());
               updateDays(); 
             },
           });
         
           $("#calendar-icon").click(function () {
             var iconOffset = $(this).offset();
             $("#hidden-calendar-input")
               .datetimepicker("show")
               .datetimepicker("setOptions", {
                 fixed: true,
                 position: "absolute",
                 center: iconOffset.center,
                 center: iconOffset.center + $(this).outerHeight(),
               });
             $(".xdsoft_datetimepicker").css({
               center: iconOffset.center,
               center: iconOffset.center + $(this).outerHeight(),
             });
           });
         });
      </script>
      <script>
         $(document).ready(function () {
           var calendar;
           var Calendar = FullCalendar.Calendar;
         
           function fetchEvents() {
               $.ajax({
                   url: 'fetch_events.php',
                   type: 'GET',
                   dataType: 'json',
                   success: function (response) {
                       var events = response.events.map(function (row) {
                           return {
                               id: row.id,
                               title: row.title,
                               start: row.start_datetime,
                               end: row.end_datetime,
                               description: row.description
                           };
                       });
                       renderCalendar(events);
                   },
                   error: function (xhr, status, error) {
                       console.error('Error fetching events:', error);
                   }
               });
           }
         
           function renderCalendar(events) {
               calendar = new Calendar(document.getElementById('calendar'), {
                   headerToolbar: {
                       left: 'prevMonth',
                       center: 'title',
                       right: 'nextMonth'
                   },
                   customButtons: {
                       prevMonth: {
                           text: 'Prev',
                           click: function () {
                               calendar.prev();
                               updateMonthButtons();
                           }
                       },
                       nextMonth: {
                           text: 'Next',
                           click: function () {
                               calendar.next();
                               updateMonthButtons();
                           }
                       }
                   },
                   height: '100%', 
                   contentHeight: 'auto', 
                   selectable: true,
                   themeSystem: 'bootstrap',
                   events: events,
                   eventClick: function (info) {
                       var _details = $('#event-details-modal');
                       var id = info.event.id;
                       var eventDetails = events.find(event => event.id === id);
                       if (eventDetails) {
                           _details.find('#event-title').text(eventDetails.title);
                           _details.find('#event-description').text(eventDetails.description);
                           _details.find('#event-start').text(new Date(eventDetails.start).toLocaleString());
                           _details.find('#edit, #delete').attr('data-id', id);
                           _details.modal('show');
         
                          
                           var originalStartDate = new Date(eventDetails.start);
                           $("#day").val(originalStartDate.getDate());
                           $("#month").val(originalStartDate.getMonth() + 1); 
                           $("#year").val(originalStartDate.getFullYear());
                           $("#hour").val(originalStartDate.getHours());
                           $("#minute").val(originalStartDate.getMinutes());
                       } else {
                           alert("Event is undefined");
                       }
                   },
                   eventDidMount: function (info) { },
                   editable: true,
                   dayMaxEvents: false, 
                   dayMaxEventRows: false 
               });
         
               calendar.render();
               updateMonthButtons();
           }
         
           function updateMonthButtons() {
               var prevButton = $('.fc-prevMonth-button');
               var nextButton = $('.fc-nextMonth-button');
               var currentDate = calendar.getDate();
               var prevMonth = new Date(currentDate);
               prevMonth.setMonth(currentDate.getMonth() - 1);
               var nextMonth = new Date(currentDate);
               nextMonth.setMonth(currentDate.getMonth() + 1);
               prevButton.text(prevMonth.toLocaleString('default', { month: 'long' }));
               nextButton.text(nextMonth.toLocaleString('default', { month: 'long' }));
           }
         
           fetchEvents();
         
           $(document).on('click', '#edit', function () {
               var id = $(this).attr('data-id');
               var eventDetails = calendar.getEventById(id);
               if (eventDetails) {
                   var _form = $('#schedule-form');
                   _form.find('[name="id"]').val(eventDetails.id);
                   _form.find('[name="title"]').val(eventDetails.title);
                   _form.find('[name="description"]').val(eventDetails.extendedProps.description);
         
                 
                   var startDate = new Date(eventDetails.start);
                   $('#day').val(startDate.getDate());
                   $('#month').val(startDate.getMonth() + 1);
                   $('#year').val(startDate.getFullYear());
                   $('#hour').val(startDate.getHours());
                   $('#minute').val(startDate.getMinutes());
         
                   updateDays();
         
                   $('#event-details-modal').modal('hide');
                   _form.find('[name="title"]').focus();
                   $('#event-modal').modal('show');
               } else {
                   alert("Event is undefined");
               }
           });
         
           function updateDays() {
             const year = parseInt($("#year").val());
             const month = parseInt($("#month").val());
             const daysInMonth = new Date(year, month, 0).getDate();
         
             const selectedDay = $("#day").val(); 
         
             $("#day").empty();
             for (let i = 1; i <= daysInMonth; i++) {
               $("#day").append(`<option value="${i}">${i}</option>`);
             }
         
         
             if (selectedDay <= daysInMonth) {
               $("#day").val(selectedDay);
             } else {
               $("#day").val(1); 
             }
           }
         
           $('#schedule-form').on('reset', function () {
               $(this).find('input:hidden').val('');
               $(this).find('input:visible').first().focus();
           });
         
           $('#schedule-form').on('submit', function (e) {
               e.preventDefault();
               
               var day = $('#day').val();
               var month = $('#month').val();
               var year = $('#year').val();
               var hour = $('#hour').val();
               var minute = $('#minute').val();
               
               var start_datetime = `${year}-${String(month).padStart(2, '0')}-${String(day).padStart(2, '0')}T${String(hour).padStart(2, '0')}:${String(minute).padStart(2, '0')}`;
               
               var formData = {
                   id: $('input[name="id"]').val(),
                   title: $('input[name="title"]').val(),
                   description: $('textarea[name="description"]').val(),
                   start_datetime: start_datetime
               };
               
               $.ajax({
                   url: 'save_schedule.php',
                   type: 'POST',
                   data: formData,
                   success: function (response) {
                       $('#schedule-form')[0].reset();
                       fetchEvents();
                       $('#event-modal').modal('hide');
                   },
                   error: function (xhr, status, error) {
                       console.error('Error saving event:', error);
                   }
               });
           });
         
           $(document).on('click', '#delete', function () {
               var id = $(this).attr('data-id');
               if (confirm("Are you sure to delete this scheduled event?")) {
                   $.ajax({
                       url: 'delete_schedule.php',
                       type: 'POST',
                       data: { id: id },
                       success: function (response) {
                           fetchEvents();
                           $('#event-details-modal').modal('hide');
                       },
                       error: function (xhr, status, error) {
                           console.error('Error deleting event:', error);
                       }
                   });
               }
           });
         });
         
      </script>
   </body>
</html>
