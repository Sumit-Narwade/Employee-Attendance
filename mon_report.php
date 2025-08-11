<?php
require("atd_con.php");
require_once('tcpdf\tcpdf.php');
?>
<?php

if(isset($_POST['button1'])) {
    // Retrieve start and end dates from the form
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];

    // Query to retrieve attendance data for the specified date range
    $query = "SELECT * FROM qatd WHERE date BETWEEN '$start_date' AND '$end_date'";
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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
  <div>
    <center><h1 style="background: -webkit-linear-gradient(left, #3931af, #00c6ff); color: #fff; font-family: Arial, Helvetica, sans-serif; font-size: 5rem; padding: 1 0px;">Monthly Report</h1></center><br>
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
            padding-top: 5rem;
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

<script>
        function validateForm() {
            var startDate = document.getElementById('start_date').value;
            var endDate = document.getElementById('end_date').value;
            if (startDate.trim() === '' || endDate.trim() === '') {
                alert('Please fill in all fields.');
                return false;
            }

            return true;
                   }
</script>

     <center>
        <div class="text-field-container">
        <table class="t1">
             <tr>
                <th>
                    <div class="col-md-41" id="ei"><label> DATE form:</label></div>      
                </th>  
                <th>
                    <div class="col-md-81"><input type="date" id="start_date" class="text-field" name="start_date"></div><br><br>
                </th>
             </tr>
             <tr>
                <th>
                    <div class="col-md-41" id="en" ><label>DATE To:</label></div>           
                </th>  
                <th>
                    <div class="col-md-81"><input type="date" id="end_date" class="text-field" name="end_date"></div><br><br> 
                </th>
             </tr>
             <tr>
                <th>
                    <div >
                    <div class="btn1"> <a href="dashboard.php" style="color: #fff; text-decoration: none;">Back</a></div>
                      </div>
                </th>    
                <th>
                    <div>
                        <input type="submit" class="btn" name="button1" class="text-field" value="Get Report">
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
<?php
// if(isset($_POST['button1'])) {

    
//     $start_date = $_POST['start_date'];
//     $end_date = $_POST['end_date'];

//     // Query to retrieve data based on date range
//     $query = "SELECT * FROM qatd WHERE date BETWEEN '$start_date' AND '$end_date'";
//     $result = mysqli_query($conn, $query);

//     // Check if there are any results
//     if(mysqli_num_rows($result) > 0) {
//         // Display the results
//         echo "<h2>Results:</h2>";
//         while($row = mysqli_fetch_assoc($result)) {
//             echo "Date: " . $row['date'] . " | Time In: " . $row['in_tm'] . " | Time Out: " . $row['ot_tm'] . " | User ID: " . $row['id'] . " | User Name: " . $row['e_name'] . "<br>";
//         }
//     } else {
//         echo "No results found for the selected date range.";
//     }
 
//     mysqli_close($conn);
// }
?>