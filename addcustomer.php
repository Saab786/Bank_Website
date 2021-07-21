<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Template Mo">
    <title>Money bank/Add Customer</title>
    <link rel="icon" type="image/png" href="assets/images/favicon.ico">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/owl-carousel.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="form-validation.css" rel="stylesheet">
<style type="text/css">
body {
        background-color: rgb(44, 44, 44);
    }
    center{
        padding-top: 120px;
    }
    .contact-form {
   margin-top: -40px;
}
</style>
</head>
  <body>
    <center style="margin-top:2rem; padding-bottom: 0px;">
        <img src="assets/images/icons8-add-user-male-100.png"><br><br>
        <h2 style="font-weight: bold; color: rgb(143, 141, 141);">Add New Customer</h2>
    </center>
      <header class="header-area header-sticky" style="background-color: #45bd62;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.php" class="logo">MONEY BANK</a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="index.php" >Home</a></li>
                            <li class="scroll-to-section"><a href="transact.html" >Transfer money</a></li>
                            <li class="scroll-to-section"><a href="history.php" >Transaction history </a></li>
                            <li class="scroll-to-section"><a href="allcust.php" class="active">Customers</a></li>
                            <li class="scroll-to-section"><a href="contact.php">Contact Us</a></li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
     </header>

    <section class="section" id="about">
        <div class="container">
            <div class="contact-form" style="border-radius: 30px;">
                        <form id="contact" action="" method="post">
                          <div class="row">
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <input  type="text" id="name" name="cname" placeholder="Enter Name" required="" class="contact-field">
                              </fieldset>
                            </div>
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <input  type="email" id="email" name="email"  placeholder="E-mail" required="" class="contact-field">
                              </fieldset>
                            </div>

                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <input  type="text" id="name" name="accNo" placeholder="Account number" required="" class="contact-field">
                              </fieldset>
                            </div>
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <input  type="text" name="amount" placeholder="Amount"  required="" class="contact-field">
                              </fieldset>
                            </div>
                            
                            <div class="col-lg-12">
                              <fieldset>
                                <button type="submit" name="add" id="form-submit" class="main-button">Add Customer</button>
                              </fieldset>
                            </div>
                          </div>
                        </form>
                    </div>
            
            </div>
    </section>
    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12 col-sm-12">
                    <p class="copyright">Copyright &copy; 2021 MONEY BANK</p>
                </div>
                <div class="col-lg-5 col-md-12 col-sm-12">
                    <ul class="social">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>



<?php 

$dbhost='localhost:8080';
$dbusr='root';
$dbpass='';
$dbname='banksystem';
$conn=new mysqli($dbhost,$dbusr,$dbpass,$dbname)or die("Connection Failed..:" .mysqli_connect_error());

if(isset($_POST['add'])){
	$cname=$_POST['cname'];
	$email=$_POST['email'];
	$accNumber=$_POST['accNo'];
	$amt=$_POST['currentBalance'];

	$addQuery = "insert into customer (cname,accNo,email,currentBalance) values ('$cname', '$accNumber','$email','$amt')";
	if(mysqli_query($conn, $addQuery)){

    echo "<h3>Customer added successfully</h3>"; 

  } else{

    echo "ERROR: Hush! Sorry $addQuery."
    . mysqli_error($conn);
  }

  mysqli_close($conn);
  }
?>

  </body>
</html>
