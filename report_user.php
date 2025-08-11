<?php
require("atd_con.php");
require_once('tcpdf\tcpdf.php');
?>
<?php
if(isset($_POST['button1'])) {
    // Retrieve start and end dates and employee ID from the form
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];
    $employee_id = $_POST['employee_id'];

    // Query to retrieve attendance data for the specified employee and date range
    $query = "SELECT * FROM qatd WHERE id = '$employee_id' AND date BETWEEN '$start_date' AND '$end_date'";
    $result = mysqli_query($conn, $query);

    // Create a new TCPDF instance
    $pdf = new TCPDF();
    $pdf->SetMargins(10, 10, 10); // Set margins
    $pdf->AddPage(); // Add new page

    // Header
    $pdf->SetFont('times', 'B', 12);
    $pdf->Cell(0, 10, 'Attendance Report', 0, 1, 'C');

    // Set column headers
    $pdf->SetFont('times', 'B', 10);
    $pdf->Cell(30, 10, 'Employee ID', 1, 0, 'C');
    $pdf->Cell(40, 10, 'Employee Name', 1, 0, 'C');
    $pdf->Cell(30, 10, 'Date', 1, 0, 'C');
    $pdf->Cell(30, 10, 'Time In', 1, 0, 'C');
    $pdf->Cell(30, 10, 'Time Out', 1, 0, 'C');
    $pdf->Cell(30, 10, 'Total Hours', 1, 1, 'C');

    // Set font for data rows
    $pdf->SetFont('times', '', 10);

    // Iterate over query results and add data to PDF
    while($row = mysqli_fetch_assoc($result)) {
        // Convert 'in_tm' and 'ot_tm' to Unix timestamps
        $time_in = strtotime($row['in_tm']);
        $time_out = strtotime($row['ot_tm']);

        // Check if 'ot_tm' is on the next day compared to 'in_tm'
        if ($time_out < $time_in) {
            // 'ot_tm' is on the next day, add one day to 'ot_tm'
            $time_out += 86400; // 86400 seconds = 24 hours
        }

        // Calculate total hours worked
        $total_hours = ($time_out - $time_in) / 3600; // Convert seconds to hours

        // Add data to PDF
        $pdf->Cell(30, 10, $row['id'], 1, 0, 'C');
        $pdf->Cell(40, 10, $row['e_name'], 1, 0, 'C');
        $pdf->Cell(30, 10, $row['date'], 1, 0, 'C');
        $pdf->Cell(30, 10, $row['in_tm'], 1, 0, 'C');
        $pdf->Cell(30, 10, $row['ot_tm'], 1, 0, 'C');
        $pdf->Cell(30, 10, number_format($total_hours, 2), 1, 1, 'C'); // Display total hours with 2 decimal places
    }

    // Output PDF
    $pdf->Output('attendance_report.pdf', 'D');

    // Close database connection
    mysqli_close($conn);
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans&amp;display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
  <div>
    <body>
        <div>
            <center><h1 style="background: -webkit-linear-gradient(left, #3931af, #00c6ff); color: #fff; font-family: Arial, Helvetica, sans-serif; font-size: 5rem; padding: 1 0px;">Performance Report</h1></center><br>
              </div>
  </div>
 
   <style>
.btn1{
  display: inline-block;
  padding: 10px 20px;
  font-size: 14px;
  border-radius: 5px;
  cursor: pointer;
  background-color: #342ac1;
  font-family: inherit;
  font-weight: 500;
}

  </style>
<script>
        function validateForm() {
            var startDate = document.getElementById('start_date').value;
            var endDate = document.getElementById('end_date').value;
            var employeeId = document.getElementById('employee_id').value;

            if (startDate.trim() === '' || endDate.trim() === '' || employeeId.trim() === '') {
                alert('Please fill in all fields.');
                return false;
            }

            return true;
                   }
</script>


    <form method="post" onsubmit="return validateForm()">
      </div>


      <div class="row">

        <div class="content">
            <div class="row">
                <div class="col">
                      
                </div>



                <div class="col"> 
                     </div>
            </div>
        </div>

    <style>
        .content{
            padding-top: 2rempx;
        }
        .col-md-41{
            font-size: 20px;
       font-family: Arial, Helvetica, sans-serif;
       padding-bottom: 42px;
       word-wrap: normal;
       padding-right: 60px;

        }
        .btn{
    background-color: #342ac1;
    color: #fff;
}



#div1{
    padding-top: 10rem;
    body {
    margin: 0;
    padding: 0;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #f7f7f7;
}
}

.text-field-container {
    position: relative;
    width: 300px;
    margin: 50px auto;
}

.text-field {
    width: 15rem;
    padding: 10px;
    border: none;
    border-bottom: 2px solid #ccc;
    font-size: 16px;
    transition: border-color 0.3s ease;
    background-color: transparent;
}

.text-field:focus {
    outline: none;
    border-color: #007bff;
}

.text-label {
    position: absolute;
    top: 20px;
    left: 0;
    font-size: 16px;
    color: #999;
    transition: top 0.3s ease, font-size 0.3s ease;
}

.text-field:focus ~ .text-label,
.text-field:not(:placeholder-shown) ~ .text-label {
    top: 0;
    font-size: 12px;
    color: #007bff;
}
    </style>
     <center>
   <div class="text-field-container">
        <table class="t1">
            
             <tr>
                <th>
                    <div class="col-md-41" id="date1" ><p>Employee ID:</p></div>
                    
                </th>
               
                <th>
                <div class="col-md-81">
    <input type="text" placeholder="Enter ID" name="employee_id" class="text-field" id="employee_id" value="<?php echo isset($_SESSION['employee_id']) ? $_SESSION['employee_id'] : ''; ?>" readonly>
</div>
<br><br>

                </th>
             </tr>

             <tr>
                <th>
                    <div class="col-md-41" id="ei"><label> DATE form:</label></div>
                    
                </th>
               
                <th>
                    <div class="col-md-81"><input type="date" name="start_date" class="text-field" id="start_date"></div><br><br>

                </th>
             </tr>
             <tr>
                <th>
                    <div class="col-md-41" id="en" ><label>DATE To:</label></div>
                    
                </th>
               
                <th>
                    <div class="col-md-81"><input type="date" name="end_date" class="text-field" id="end_date"></div><br><br> 

                </th>
             </tr>
             <tr>
                <th>
                    <div >
                        <div class="btn1"> <a href="User_dash.php" style="color: #fff; text-decoration: none;">Back</a></div>
                      </div>
                </th>
               
                <th>
                    <div>
                        <input type="submit" class="btn" id="button1" name="button1" value="Check">
                      </div>
                </th>
             </tr>

        </table> 
        </div>
    </center>
    </form>
  </div>
</body>
</html>