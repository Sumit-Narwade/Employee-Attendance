<?php
require("atd_con.php");
require_once('tcpdf\tcpdf.php');
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
            <center><h1 style="background: -webkit-linear-gradient(left, #3931af, #00c6ff); color: #fff; font-family: Arial, Helvetica, sans-serif; font-size: 5rem; padding: 1 0px;"> Leave Requst</h1></center><br>
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