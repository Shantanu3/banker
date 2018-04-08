
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
<?php 
require 'db.php';
session_start();
$temp = $_SESSION['POST'];
$Account_no =$temp['Account_no'];
  
$query1="SELECT * FROM Transaction where Account_no ='$Account_no'";
$query1_data=mysqli_query($conn, $query1);

while($query1_row=mysqli_fetch_assoc($query1_data)){ 
$Account_no =$query1_row['Account_no'];
$Account_to =$query1_row['Account_to'];
$Amount =$query1_row['Amount'];

}
 ?>


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

     
 <li><a href="profile.php"><i class="fa fa-users"></i>Your Profile</a></li>

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

</div>
</div>
<body>

<div class="container">
  <h2>Your Transaction</h2>
  <p>This shows all the Transaction you have done:</p>            
  <table class="table table-bordered">
    <thead>

      <tr>
        <th>Account Number</th>
        <th>Beneficiary Account Number</th>
        <th>Amount Transfered</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <?php 
require 'db.php';
session_start();
$temp = $_SESSION['POST'];
$Account_no =$temp['Account_no'];
  
$query1="SELECT * FROM Transaction where Account_no ='$Account_no'";
$query1_data=mysqli_query($conn, $query1);

while($query1_row=mysqli_fetch_assoc($query1_data)){ 
$Account_no =$query1_row['Account_no'];
$Account_to =$query1_row['Account_to'];
$Amount =$query1_row['Amount'];
echo "<tr><td> $Account_no</td>";
echo "<td> $Account_to</td>";
echo "<td> $Amount</td></tr>";
}
 ?>     
        
      </tr>
    </tbody>
  </table>
</div>

</body>
</html>
 <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/templatemo_script.js"></script>

</body>
</html>
