
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
     
  <li><a href="profile.php"><i class="fa fa-users"></i>Your profile</a></li>


  <li class="sub">
            <a href="javascript:;">
              <i class="fa fa-money"></i>Credit <div class="pull-right"><span class="caret"></span></div>
            </a>
            <ul class="templatemo-submenu">
              <li><a href="credit_cash.php">Cash</a></li>
            </ul>
          </li>
  <li class="active"><a href="transfer.php"><i class="fa fa-send"></i>Transfer</a></li>
  
  

      
    </div>
</div>



</ul>
</div>
</div>

</div>
<div class="templatemo-content-wrapper">
        <div class="templatemo-content">
<div class="row margin-bottom-30">
            <div class="col-md-12">
              <ul class="nav nav-pills">
                
                <li><a href="transaction.php">Transactions <span class="badge"></span></a></li>
                <li><a href="logout.php"><i class="fa fa-sign-out"></i>Logout <span class="badge"></span></a></li>
              </ul>          
            </div>
          </div>


<h1 align="centre"> Cash Transfer </h1>
<form role="form" action="transfer.php" id="templatemo-preferences-form" method="POST">
                <div class="row">
                <div class="col-md-6 margin-bottom-15">
                    <label for="Account number" class="control-label">Beneficiary Account number</label>
                    <input type="number" class="form-control" id="Account_no2" name="Account_no2" placeholder="Enter Account number">                  
                  </div>
                  <div class="col-md-6 margin-bottom-15">
                    <label for="Amount" class="control-label">Amount</label>
                    <input type="number" class="form-control" id="Amount" name="Amount" placeholder="Enter Amount">                  
                  </div>
</div>
<div class="row templatemo-form-buttons">
                <div class="col-md-12">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-default">Reset</button>    
                </div>
              </div>
</form>
<?php 
require 'db.php';
if (!$conn) {
  die("Error");
}
session_start();
if(isset($_POST['Amount']) && !empty($_POST['Amount']) && isset($_POST['Account_no2']) && !empty($_POST['Account_no2']) ){
  
  $Account_no2 = $_POST['Account_no2'];
  $Amount = $_POST['Amount'];
  $temp = $_SESSION['POST'];
  $Account_no =$temp['Account_no'];
  

  if($Amount>0){
    // $Debit_act=$Account_no2; 
    $query4="SELECT * FROM Remaining_Amt WHERE Account_no='$Account_no'";
    $query4_data=mysqli_query($conn, $query4);   
    $query1="SELECT * FROM Remaining_Amt WHERE Account_no='$Account_no2'";
    $query1_data=mysqli_query($conn, $query1);
    if($Account_no2==$Account_no)
    {
      echo '<br> <h2>Can not transfer to same account number</h2>';
    }  
    else{
    if(mysqli_num_rows($query1_data)==1){
   
      $query4_row=mysqli_fetch_assoc($query4_data);
      $a=$query4_row['Total_amt'];
      //echo $a;
      if($Amount<=$a){
       /* echo $Account_no."<br/>";
        echo $Account_no2."<br/>";
        echo $Debit_act."<br/>";
        echo $Amount."<br/>";*/
        $query5="INSERT INTO Transaction(Account_no,Account_to,Amount) VALUES('$Account_no','$Account_no2','$Amount')";
        $query6="INSERT INTO Credit(Account_no,Account_to,Amount) VALUES('$Account_no2','$Account_no','$Amount')";
        $query3="UPDATE Remaining_Amt SET Total_amt=Total_amt-'$Amount' WHERE Account_no='$Account_no'";  
        $query2="UPDATE Remaining_Amt SET Total_amt=Total_amt+'$Amount' WHERE Account_no='$Account_no2'";
        $query8="UPDATE Remaining_Amt SET fine=25 where Total_amt < 1000";
        $query9="UPDATE Remaining_Amt SET fine=0 where Total_amt>1000";
        $query2_data=mysqli_query($conn, $query2);
        $query3_data=mysqli_query($conn, $query3);
        $query5_data=mysqli_query($conn, $query5);
        $query6_data=mysqli_query($conn, $query6);
        mysqli_query($conn, $query8);
        mysqli_query($conn, $query9);

          echo '<h3>Account Number :</h3>'.$Account_no.'<h3>Amount transfered :</h3>'.$Amount.'<h3>Amount transfered to:</h3>'.$Account_no2;
        $query7="SELECT @c;";
        $f=mysqli_query($conn, $query7);
        $f_row=mysqli_fetch_assoc($f_data);
        $id=intval($f_row['@c']);

        if($id == 1) {
          $query8="UPDATE Remaining_Amt SET fine=25 where Total_amt < 1000";
          mysqli_query($conn, $query8);

          }
        }
        else{
        echo '<br> <h2>Insufficent funds!!</h2>';
      } 

    }
  
    else{
      echo '<br> <h2>Account number does not exist </h2>';
      }  
    }
  }
    else{ 
        echo '<br> <h2>Enter the Amount </h2>';
      } 

  }
  
  
    ?>
  <script type="text/javascript">
  function validateForm() {
        var amount = document.forms[0]["Amount"].value;
          if ( amount == null || amount == "") {
              alert(" All Fields are compulsory");
              return false;
              } 
      }
  </script>


    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/templatemo_script.js"></script>

</body>
</html>
