<?php 

require 'db.php';
session_start();
?>

<!doctype html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="A layout example that shows off a responsive product landing page.">

<title>PESIT BANK</title>
<link rel="stylesheet" href="pure-release-0.5.0/pure.css">
<link rel="stylesheet" href="pure-release-0.5.0/grids-responsive.css">
<link rel="stylesheet" href="css/layouts/marketing.css">
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
</head>


<body>
<a name="Home"></a>

<div class="header">
    <div class="home-menu pure-menu pure-menu-open pure-menu-horizontal pure-menu-fixed">
        <a class="pure-menu-heading" >PESIT BANK</a>

        <ul>
            <li class="pure-menu-selected"><a href="#Home">Home</a></li>
            <li><a href="#Employee">Login</a></li>
	    
           
        </ul>
    </div>
</div>
<style>.anchor{padding-top: 1px;}
</style>

<img   width="100%" height="600" src="online-Debit.jpg">
        
<div class="content-wrapper">
<style>.anchor{padding-top: 1px;}</style>
<a class="anchor" name="Employee"></a>
    <div class="content">
        <h2 class="content-head is-center">CUSTOMER LOGIN</h2>
	<div class="pure-g">
		<div class="l-box-lrg pure-u-1 pure-u-md-3-5">
                <h4>Warning:</h4>
                <p>
                   IF YOU ARE NOT ONE OF THE AUTHORIZED PERSON TO USE THIS FACILITY, THEN DON'T TRY TO USE IT. 
                </p>

                <h4>Instructions:</h4>
                <p>
                   1. Use your Account number and Password here.<br>
		   2. Use this facility at secure locations only.<br>
		   3. If there is an issue with your login, contact your supervior immediately.	
                </p>
		</div>
		<?php

if(isset($_POST['Account_no']) && !empty($_POST['Account_no']) && isset($_POST['Password']) && !empty($_POST['Password']) ){
        
        $Account_no=$_POST['Account_no'];   
        $Password=$_POST['Password'];
        $query="SELECT * FROM Login WHERE Account_no='$Account_no' AND Password='$Password'";   
        $query_data=mysqli_query($conn, $query);
        
        if($query_data){
             $rowcount=mysqli_num_rows($query_data);
            if($rowcount){

                    $_SESSION['POST'] = $_POST;                        
                    header("Location:profile.php");
                    
            }
            
            else{
                    $error = "Invalid Account number/Password";
                }
        }

}
    
    ?>

		<div class="l-box-lrg pure-u-1 pure-u-md-2-5">
            <form class="pure-form pure-form-stacked" role="form"  method="POST" action="index.php">
                    <fieldset>
                        <?php echo $error; ?>
                        <label for="name">ACCOUNT NUMBER</label>
                        <input type="text" id="Account_no" name="Account_no" placeholder="Account number" required>

                        <label for="password">PASSWORD</label>
                        <input type="password" id="Password" name="Password"  placeholder="Your Password" required>

                        <button type="submit" class="pure-button">Sign in</button>
                    </fieldset>
                </form>
		</div>
        </div>

    </div>
    
    

<style>
.color{color: white;}
.color1{color: red;}
</style>



<div class="content">
        <h2 class="content-head is-center">COMMITED TO EXCELLENCE.</h2>

        <div class="pure-g">
            <div class="l-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-4">

                <h3 class="content-subhead">
                    <i class="fa fa-rocket"></i>
                    Get Started Quickly
                </h3>
                <p>
                    Contact our front-end representatives to open an account with us.
                </p>
            </div>
            <div class="l-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-4">
                <h3 class="content-subhead">
                    <i class="fa fa-mobile"></i>
                    Immediate Registration 
                </h3>
                <p>
                    As you join us, you are provided with an Account Number, ATM Number and PIN.
                </p>
            </div>
            <div class="l-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-4">
                <h3 class="content-subhead">
                    <i class="fa fa-th-large"></i>
                    Security
                </h3>

                <p>
                    All our money transactions are safe, secure and organised.
                 </p>
            </div>
            <div class="l-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-4">
                <h3 class="content-subhead">
                    <i class="fa fa-check-square-o"></i>
                    Your satisfaction is our motto.
                </h3>
                <p><a name="ATM"></a>
                    Our representatives will be available 24X7 to your issues.
                </p>
            </div>
        </div>
    </div>






    <div class="footer l-box is-center">
        Powered by Banking Systems
	copyrights@Banking Team
    </div>

</div>
</body>
</html>


