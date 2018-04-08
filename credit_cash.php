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
      
  <li><a href="profile.php"><i class="fa fa-users"></i>Your Profile</a></li>
  <li class="active"><a href="credit_cash.php"><i class="fa fa-money"></i>Credit</a></li>
  <li><a href="transfer.php"><i class="fa fa-send"></i>Transfer</a></li>
  
  
  

        </ul>
      </div>




      <div class="templatemo-content-wrapper">
        <div class="templatemo-content">
<div class="row margin-bottom-30">
            <div class="col-md-12">
              <ul class="nav nav-pills">
                
                <li ><a href="transaction.php">Transactions <span class="badge"></span></a></li>
                <li><a href="logout.php" data-toggle="modal" data-target="#confirmModal"><i class="fa fa-sign-out"></i>Logout <span class="badge"></span></a></li>
              </ul>          
            </div>
          </div> 


	<script type="text/javascript">
	function validateForm() {
 		    var amount = document.forms[0]["Amount"].value;
  		    if ( amount == null || amount == "") {
        			alert(" All Fields are compulsory");
        			return false;
        			} 
			}
	</script>
   <div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              <h4 class="modal-title" id="myModalLabel">Are you sure you want to sign out?</h4>
            </div>
            <div class="modal-footer">
              <a href="logout.php" class="btn btn-primary">Yes</a>
              <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
            </div>
          </div>
        </div>
      </div>
<body>

<div class="container">
  <h2>Credit</h2>
  <p>This shows who credited your account:</p>            
  <table class="table table-bordered">
    <thead>

      <tr>
        <th>Credited from</th>
        <th>Amount Credited</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <?php 
require 'db.php';
session_start();
$temp = $_SESSION['POST'];
$Account_no =$temp['Account_no'];
  
$query1="SELECT * FROM Credit where Account_no ='$Account_no'";
$query1_data=mysqli_query($conn, $query1);
while($query1_row=mysqli_fetch_assoc($query1_data)){ 
$Account_to =$query1_row['Account_to'];
$Amount =$query1_row['Amount'];
echo "<tr><td> $Account_to</td>";
echo "<td> $Amount</td></tr>";
}
 ?>     
        
      </tr>
    </tbody>
  </table>
</div>

</body>
      
    </div>
</div>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/templatemo_script.js"></script>


</body>
</html>



