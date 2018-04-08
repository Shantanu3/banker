<?php 
require 'db.php';
session_start();
$temp = $_SESSION['POST'];
$Account_no =$temp['Account_no'];
  
$query2="SELECT Total_amt FROM Remaining_Amt where Account_no ='$Account_no'";
$query1="SELECT * FROM Customer_list where Account_no ='$Account_no'";
$query3="SELECT fine FROM Remaining_Amt where Account_no ='$Account_no'";

$query1_data=mysqli_query($conn, $query1);
$query2_data=mysqli_query($conn, $query2);
$query3_data=mysqli_query($conn, $query3);

$query1_row=mysqli_fetch_assoc($query1_data); 
$Name =$query1_row['Name'];
$DOB =$query1_row['DOB'];
$Account_type =$query1_row['Account_type'];
$Gender =$query1_row['Gender'];
$Address =$query1_row['Address'];
$Mobile_no =$query1_row['Mobile_no'];

$query2_row=mysqli_fetch_assoc($query2_data);
$Total_amt=$query2_row['Total_amt'];

$query3_row=mysqli_fetch_assoc($query3_data);
$fine=$query3_row['fine'];
/*
  echo $_SESSION['Account_no'];
  echo $Name;
  echo $DOB;
  echo $Account_type;
  echo $Gender;
  echo $Address;
  echo $Mobile_no;
  */
 ?>
<html>
<head>
  <meta charset="utf-8">
  <title>Workspace</title>
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width">        
  <link rel="stylesheet" href="css/templatemo_main.css">
</head>

<body>

<div id="main-wrapper">
    <div class="navbar navbar-inverse" role="navigation">
      <div class="navbar-header">
        <div class="logo"><h1>Workspace</h1></div>
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button> 
      </div>   
    </div>

    <div class="template-page-wrapper">
      <div class="navbar-collapse collapse templatemo-sidebar">
        <ul class="templatemo-sidebar-menu">

     
   <li class="active"><a href="profile.php"><i class="fa fa-users"></i>Your Profile</a></li> 

  <li class="sub">
            <a href="javascript:;">
              <i class="fa fa-money"></i>Credit <div class="pull-right"><span class="caret"></span></div>
            </a>
            <ul class="templatemo-submenu">
              <li><a href="credit_cash.php">Cash</a></li>
            </ul>
          </li>

  <li><a href="transfer.php"><i class="fa fa-send"></i>Transfer</a></li>
    

  
  

      
    </div>
</div>


</ul>
</div>
</div>

</div>

<div class="templatemo-content-wrapper">
        <div class="templatemo-content">

<div class="row " >

            <div class="col-md-12">  
                <table class="table table-dark">

  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Fields</th>
      <th scope="col">Values</th>
      
    </tr>
  </thead>
  <tbody> 
   <tr>
       <th scope="row">1</th>
       <td>Account_no</td>
       <td><?php echo $Account_no; ?></td>
      
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Name</td>
      <td><?php echo $Name; ?></td>
      
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Date of birth</td>
      <td><?php echo $DOB ?></td>
     
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>Type of account</td>
      <td><?php echo $Account_type ?></td>
      
    </tr>
    <tr>
      <th scope="row">5</th>
      <td>Gender</td>
      <td><?php echo $Gender ?></td>
      
    </tr><tr>
      <th scope="row">6</th>
      <td>Address</td>
      <td><?php echo $Address ?></td>
      
    </tr><tr>
      <th scope="row">7</th>
      <td>Mobile Number</td>
      <td><?php echo $Mobile_no ?></td>
   
    </tr><tr>
      <th scope="row">8</th>
      <td>Balance</td>
      <td><?php echo $Total_amt ?></td>
    </tr><tr>
      <th scope="row">9</th>
      <td>Fine Due</td>
      <td><?php echo $fine ?></td>
      
    </tr>
  </tbody>
</table>



            </div>
            
          </div> 
</div>
</div>
 <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/templatemo_script.js"></script>

</body>
</html>
