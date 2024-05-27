<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Scheduling</title>
   <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
   <script src="/fullcalendar/lib/main.min.js"></script>
   <link rel="stylesheet" href="/customcss/bootstrap.min.css">
   <link rel="stylesheet" href="/fullcalendar/lib/main.min.css">
  <link rel="stylesheet" href="/customcss/custom.css" />



   <link rel="icon" href="#" type="image/x-icon">

    <style>
        :root {
         --bs-success-rgb: 71, 222, 152 !important;
      }
      html, body {
         height: 100%;
         width: 100%;
         font-family: Apple Chancery, cursive;
      }
      .btn-info.text-light:hover,
      .btn-info.text-light:focus {
         background: #000;
      }
      table, tbody, td, tfoot, th, thead, tr {
         border-color: #ededed !important;
         border-style: solid;
         border-width: 1px !important;
      }
      #calendar {
         width: 100%;
         height: 550px; /* Adjust this height as needed */
         margin: 0 auto;
      
      }
   </style>
</head>
<body class="generalbg" >
   <div class="container py-3" id="page-container">
      <div class="row justify-content-center">
         <div class="col-md-10">
            <div id="calendar"></div>
         </div>
      </div>
   </div>
   <!-- Event Modal -->
   <div class="modal fade" id="event-modal" tabindex="-1" aria-labelledby="event-modal-label" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
         <div class="modal-content rounded-0">
            <div class="modal-header bg-gradient bg-primary text-light">
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
                     <div class="form-group mb-2">
                        <label for="start_datetime" class="control-label">Start</label>
                        <input type="datetime-local" class="form-control form-control-sm rounded-0" name="start_datetime" id="start_datetime" required>
                     </div>
                     <div class="text-center">
                        <button class="btn btn-primary btn-sm rounded-0" type="submit"><i class="fa fa-save"></i> Save</button>
                        <button class="btn btn-default border btn-sm rounded-0" type="reset"><i class="fa fa-reset"></i> Cancel</button>
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
      <div class="modal-dialog modal-dialog-centered">
         <div class="modal-content rounded-0">
            <div class="modal-header rounded-0">
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
                     <dt class="text-muted">Start</dt>
                     <dd id="event-start"></dd>
                  </dl>
               </div>
            </div>
            <div class="modal-footer rounded-0">
               <div class="text-end">
                  <button type="button" class="btn btn-primary btn-sm rounded-0" id="edit" data-id="">Edit</button>
                  <button type="button" class="btn btn-danger btn-sm rounded-0" id="delete" data-id="">Delete</button>
                  <button type="button" class="btn btn-secondary btn-sm rounded-0" data-bs-dismiss="modal">Close</button>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- Event Details Modal -->
   <script>
     $(document).ready(function() {
    var calendar;
    var Calendar = FullCalendar.Calendar;
    var originalStartYear, originalStartMonth, originalStartDay, originalStartHour, originalStartMinute;

    function fetchEvents() {
        $.ajax({
            url: '../../functions/fetch_events.php',
            type: 'GET',
            dataType: 'json',
            success: function(response) {
                var events = response.events.map(function(row) {
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
            error: function(xhr, status, error) {
                console.error('Error fetching events:', error);
            }
        });
    }

    function renderCalendar(events) {
        calendar = new Calendar(document.getElementById('calendar'), {
            headerToolbar: {
                left: 'title',
                center: 'addEventButton',
                right: 'prev,next today'
            },
            customButtons: {
                addEventButton: {
                    text: 'Add Event',
                    click: function() {
                        $('#event-modal').modal('show');
                    }
                }
            },
            selectable: true,
            themeSystem: 'bootstrap',
            events: events,
            eventClick: function(info) {
                var _details = $('#event-details-modal');
                var id = info.event.id;
                var eventDetails = events.find(event => event.id === id);
                if (eventDetails) {
                    _details.find('#event-title').text(eventDetails.title);
                    _details.find('#event-description').text(eventDetails.description);
                    _details.find('#event-start').text(new Date(eventDetails.start).toLocaleString());
                    _details.find('#edit, #delete').attr('data-id', id);
                    _details.modal('show');

                    // Store the original start datetime components
                    var originalStartDate = new Date(eventDetails.start);
                    originalStartYear = originalStartDate.getFullYear();
                    originalStartMonth = originalStartDate.getMonth() + 1; // Month is zero-based
                    originalStartDay = originalStartDate.getDate();
                    originalStartHour = originalStartDate.getHours();
                    originalStartMinute = originalStartDate.getMinutes();
                } else {
                    alert("Event is undefined");
                }
            },
            eventDidMount: function(info) {},
            editable: true,
            dayMaxEvents: true,
            dayMaxEventRows: true
        });

        calendar.render();
    }

    fetchEvents();

    $('#schedule-form').on('reset', function() {
        $(this).find('input:hidden').val('');
        $(this).find('input:visible').first().focus();
    });

    $('#schedule-form').on('submit', function(e) {
        e.preventDefault();
        var formData = $(this).serialize();
        $.ajax({
            url: '../../functions/save_schedule.php',
            type: 'POST',
            data: formData,
            success: function(response) {
                $('#schedule-form')[0].reset();
                fetchEvents();
                $('#event-modal').modal('hide');
            },
            error: function(xhr, status, error) {
                console.error('Error saving event:', error);
            }
        });
    });

    $('#edit').click(function() {
        var id = $(this).attr('data-id');
        var eventDetails = calendar.getEventById(id);
        if (eventDetails) {
            var _form = $('#schedule-form');
            _form.find('[name="id"]').val(eventDetails.id);
            _form.find('[name="title"]').val(eventDetails.title);
            _form.find('[name="description"]').val(eventDetails.extendedProps.description);

            // Populate start datetime input with the original values
            $('#start_datetime').val(
                originalStartYear + '-' +
                ('0' + originalStartMonth).slice(-2) + '-' +
                ('0' + originalStartDay).slice(-2) + 'T' +
                ('0' + originalStartHour).slice(-2) + ':' +
                ('0' + originalStartMinute).slice(-2)
            );

            $('#event-details-modal').modal('hide');
            _form.find('[name="title"]').focus();
            $('#event-modal').modal('show');
        } else {
            alert("Event is undefined");
        }
    });

    $('#delete').click(function() {
        var id = $(this).attr('data-id');
        if (confirm("Are you sure to delete this scheduled event?")) {
            $.ajax({
                url: 'delete_schedule.php',
                type: 'POST',
                data: { id: id },
                success: function(response) {
                    fetchEvents();
                    $('#event-details-modal').modal('hide');
                },
                error: function(xhr, status, error) {
                    console.error('Error deleting event:', error);
                }
            });
        }
    });
});
   </script>
</body>
</html>
