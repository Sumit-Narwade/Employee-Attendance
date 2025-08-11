<?php
require("atd_con.php");
session_start();
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
    <img src="img\semco_1473171559_27 (1)-Photoroom.png-Photoroom.png" style="height: 75px;width: 130px;">
    
  </button>

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

  <div>
     <ul>
       <li>
            <a class=".btn-primary" href="u_login.php">
            <i aria-hidden="true" style="border: #000000; padding-right: 95rem; "></i>Logout</a>
        
      </li>
    </ul>
  </div>
</nav>
  
  
  
  
   <div class="container-fluid" style="margin-top:50px;">
    <h3 style="margin-left: 40%;  padding-bottom: 20px; font-family: 'IBM Plex Sans', sans-serif; padding-top: 30px;"> Welcome </h3>
    <div class="row">
  <div class="col-md-4" style="max-width:25%; margin-top: 3%">
    <div class="list-group" id="list-tab" role="tablist">
      <a class="list-group-item list-group-item-action active"  data-toggle="list" href="#list-dash" role="tab">Dashboard</a>
      <a class="list-group-item list-group-item-action"  data-toggle="list" href="report_user.php" role="tab">Performance Report</a> 
    </div><br>
  </div>
  <div class="col-md-8" style="margin-top: 3%;">
    <div class="tab-content" id="nav-tabContent" style="width: 950px;">


      <div class="tab-pane fade  show active" id="list-dash" role="tabpanel" aria-labelledby="list-dash-list">
        <div class="container-fluid container-fullw bg-white">
              <div class="row">
               <div class="col-sm-4" style="left: 5%">
                  <div class="panel panel-white no-radius text-center">
                    <div>
                           <span> <img src="img\new report u.png" style="width: 105px; height: 100px;"> </span>
                          
                      <h4 style="margin-top: 5%;"> Performance Report</h4>
                                            
                      <p >
                        <a href="emp_report.php">
                        Performance Report
                        </a>
                      </p>
                    </div>
                  </div>
                </div>
                </div>              
            </div>
          </div>
</body></html>