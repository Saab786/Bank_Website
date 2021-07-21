<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Template Mo">
    <title>Money bank/Customers</title>
    <link rel="icon" type="image/png" href="assets/images/favicon.ico">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/owl-carousel.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/thinline.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
body {
        background-color: rgb(44, 44, 44);
}
center{
        padding-top: 120px;
}
    
.header-area {
    background-color: #45bd62;
}
.contact-form {
    margin-top: 62px;
}
.container{
    margin-bottom: 50px;
}

.styled-table {
    border-collapse: collapse;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 400px;
    box-shadow: 0 0 19px rgb(0 19 0 / 37%);
}
.styled-table thead tr {
    background-color: #27b349;
    color: #ffffff;
    text-align: left;
}
.styled-table th,
.styled-table td {
    padding: 12px 15px;
    letter-spacing: 1px;
    color: white;
}
.styled-table tbody tr {
    border-bottom: 1px solid #27b349;
}

.styled-table tbody tr:last-of-type {
    border-bottom: 2px solid #27b349;
}

.styled-table tbody tr.active-row {
    font-weight: bold;
    color: #27b349;
}
.trct_Btn{
  padding-top: 25px;
  margin-left: 45%;
}
table{
  margin-left: 8rem;
}

.css-serial {
 counter-reset: serial-number; 
}
.css-serial td:first-child:before {
 counter-increment: serial-number; 
 content: counter(serial-number); 
}
    
.btnAdd{
  margin-left: 70%;
  color: #fff;
  margin-top: 20px;
  margin-bottom: 20px;
}
a{
  color: black;
}
a:hover{
    color: #fff;
}
.btn{
    background-color: #ffb703;
}

</style>
<body class="bg cs">
    <!------ Header----->
    <header class="header-area header-sticky">
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
                            <li class="scroll-to-section"><a href="history.php" >transaction history </a></li>
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
    <section>
      <center style="margin-top:2rem;">
      <img src="assets/images/icons8-customer-insight-100.png"><br><br>
       <h2 style="font-weight: bold; color: rgb(143, 141, 141);">Customers Details</h2>
      </center>

       <div class="container">
           <button class="btn btn-success btnAdd"><a href="addcustomer.php">Add customer</a></button>
           <div>
            <table class="styled-table css-serial ">
               <thead>
               <tr>
                     <th>Sr No</th>
                     <th>Customer name </th>
                     <th>Account Number </th>
                     <th>Email-id</th>
                     <th>Current Balance</th>
                     <th>View Profile</th>
               </tr >
              </thead>
               <?php

                $dbhost='localhost';
                $dbusr='root';
                $dbpass='';
                $dbname='banksystem';
                $conn=new mysqli($dbhost,$dbusr,$dbpass,$dbname)or die("Connection Failed..:" .mysqli_connect_error());


              $query="SELECT * FROM customer";
              $query_run= mysqli_query($conn,$query);


               while($res = mysqli_fetch_array($query_run)){
                ?>
              <tbody> 
                <tr class="text-center">
                   <td>&nbsp;</td>
                   <td> <?php echo $res['cname'];  ?> </td>
                   <td> <?php echo $res['accNo'];  ?> </td>
                   <td> <?php echo $res['email'];  ?> </td>
                   <td> <?php echo $res['currentBalance'];  ?> </td>
                   <td> <button class="btn-primary btn"> <a href="view.php? accNo=<?php echo $res['accNo']; ?>"> View </a>  </button> </td>

                </tr>
              </tbody>
               }
               <?php 
               mysqli_error($conn);
               ?>
               

            </table>  
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
</body>
</html>
<script type="text/javascript">
    $(document).ready(function(){
         $('#tabledata').DataTable();
        })
</script>