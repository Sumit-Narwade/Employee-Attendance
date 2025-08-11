<?php
require("atd_con.php");
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

<script>
        function validateForm() {
            var username = document.getElementById('username').value;
            var password = document.getElementById('password').value;
            if (username.trim() === '' || password.trim() === '') {
                alert('Please fill in all fields.');
                return false;
            }

            return true;
                   }
</script>

  <div>
    <body>
        <div>
            <center><h1 style="background: -webkit-linear-gradient(left, #3931af, #00c6ff); color: #fff; font-family: Arial, Helvetica, sans-serif; font-size: 5rem;">User Login</h1></center><br>
              </div> <br>
  </div>
 

<style>
#div1{
    padding-top: 10rem;
    body {
    margin: 0;
    padding: 0;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #f7f7f7;
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
}
        .btn{
    background-color: #342ac1;
    color: #fff;
}
.form-group
{
    padding-right: 2rem;
}

</style>

<center>
<body>
      <div id="div1" class="text-field-container">
        <form method="post" style="font-size: 20px;
       font-family: Arial, Helvetica, sans-serif;
       padding-bottom: 42px;
       word-wrap: normal;">
       <div>
       <table>
       <tr>
                <th>
                    <div class="form-group"> <label for="username">UserID:</label></div>
                    
                </th>
               
                <th>
                    <div><input type="text" id="username" name="username" class="text-field" required></div><br><br>

                </th>
     </tr>
             <tr>
                <th>
                    <div class="form-group" style="padding-bottom: 3rem " ><label for="password">Password:</label></div>
                    
                </th>
               
                <th>
                    <div ><input type="password" id="password" name="password" class="text-field" required > <br></div><br><br> 

                </th>
             </tr>

            </table>
            <button type="submit" id="btn" class="btn" name="signin">Login</button>
        </form>
        </div>
    </div>
</center>

<?php 

if(isset($_POST['signin'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM u_login WHERE Employee_id ='$username' AND Password='$password'";
    $result = mysqli_query($conn, $query);
 
    
    if(mysqli_num_rows($result) == 1) {
        session_start();
        header("location: User_dash.php");
        $_SESSION['username'] = $row['']." ".$row['Name'];
        exit;
    } else {
        echo "<script>alert('Incorrect Admin Name or password');</script>";
    }
    session_start();
    $_SESSION['username']=$username;
}
    ?>

</body>
</html>