<?php
require("atd_con.php");
?>
<html lang="en" class="hydrated"><head>

    <meta charset="utf-8">
    
  <Style>
    .image1{
        size: 20px;
    }
  </Style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans&amp;display=swap" rel="stylesheet">

</head>

<body style="padding-top:50px;"><nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
  
 <div>
        <center><h1 style="color:#fff; font-size: 4rem; padding: 1 0px;">Home</h1></center><br>
              </div>


  <style>
    .bg-primary {
    background: -webkit-linear-gradient(left, #3931af, #00c6ff);
}
.list-group-item.active {
    z-index: 2;
    color: #fff;
    background-color: #342ac1;
    border-color: #007bff;
}
.text-primary {
    color: #342ac1!important;
}

.btn-primary{
  background-color: #3c50c1;
  border-color: #3c50c1;
}
  </style>
</nav>
        <div class="tab-pane fade  show active" id="list-dash" role="tabpanel" aria-labelledby="list-dash-list">
        <div class="container-fluid container-fullw bg-white">
              <div class="row" style="padding-top: 15rem;">
               <div class="col-sm-4" style="left: 5%">
                  <div class="panel panel-white no-radius text-center">
                    <div>
                           <span> <img src="img\employee.png" style="width: 100px; height: 100px;"> </span>
                          
                      <h4 style="margin-top: 5%;"> Admin</h4>
                                            
                      <p >
                        <a href="alogin.php">
                            Admin
                        </a>
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4" style="left: 5%">
                  <div class="panel panel-white no-radius text-center">
                    <div>
                           <span> <img src="img\month_a.jpg" style="width: 100px; height: 100px;"> </span>
                          
                      <h4 style="margin-top: 5%;"> User</h4>
                                            
                      <p >
                        <a href="u_login.php">
                                User
                        </a>
                      </p>
                    </div>
                  </div>
                </div>
</body></html>