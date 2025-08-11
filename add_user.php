<?php
require("atd_con.php");
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

    <center><h1 style="background: -webkit-linear-gradient(left, #3931af, #00c6ff); color: #fff; font-family: Arial, Helvetica, sans-serif; font-size: 5rem; padding: 1 0px;">Add Employee</h1></center><br>
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
            padding-top: 2px;
        }
        .col-md-41{
            font-size: 20px;
       font-family: Arial, Helvetica, sans-serif;
       padding-bottom: 25px;
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
    padding-top: 7rem;
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
                    <div class="col-md-41"><label> Employee Name</label></div>
                    
                </th>
               
                <th>
                    <div class="col-md-81"><input type="text" class="text-field" placeholder="Empolyee name" name="E_Name" id="E_Name"></div><br><br>

                </th>
             </tr>
             <tr>
                <th>
                    <div class="col-md-41"><label> Employee User ID:</label></div>
                    
                </th>
               
                <th>
                    <div class="col-md-81"><input type="text" class="text-field" placeholder="Enter ID" name="id" id="id"></div><br><br>

                </th>
             </tr>
             <tr>
                <th>
                    <div class="col-md-41" id="en" ><label>Employee Password:</label></div>
                    
                </th>
               
                <th>
                    <div class="col-md-81"><input type="text" class="text-field" placeholder="Employee password" name="empass" id="empass"></div><br><br> 

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
                        <input type="submit" class="btn" id="button1" name="createbtn" value="Create entry">
                      </div>
                </th>
             </tr>

        </table> 
        </div>
    </center>
    </form>
  </div>

  <script>
        function validateForm() {
            var id = document.getElementById('id').value;
            var emname = document.getElementById('empass').value;
            var E_Name = document.getElementById('E_Name').value;
            if (id.trim() === '' || emname.trim() === '' || E_Name.trim() === '' ) {
                alert('Please fill in all fields.');
                return false;
            }

            return true;
         }
</script>
</body>
<?php 
if (isset($_POST['createbtn'])) {
    // Retrieve form data 
    $id = $_POST['id'];
    $empass = $_POST['empass'];
    $E_Name = $_POST['E_Name'];
    // Construct SQL INSERT statement
    $sql = "INSERT INTO u_login (`Employee_id`, `Password` , `Name`) VALUES ('$id','$empass','$E_Name')";
    
    // Execute SQL query
    if ($conn->query($sql) === TRUE) {
        echo"<script> alert('new record created sucessfully');</script>";
       } 
    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
mysqli_close($conn);

?>
</html>