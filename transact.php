<?php


$dbhost='localhost:8080';
$dbusr='root';
$dbpass='';
$dbname='banksystem';
$conn=new mysqli($dbhost,$dbusr,$dbpass,$dbname)or die("Connection Failed..:" .mysqli_connect_error());

if(isset($_POST['Transact']))
{

$sname=$_POST['senderName'];
$rname=$_POST['recipientName'];
$sacc=$_POST['senderAccountNum'];
$racc=$_POST['recipientAccountNum'];
$amt=$_POST['amount'];


$sql= 'select * from customer where accNo ="'.$sacc.'"';
echo $conn->error;
$query= mysqli_query($conn,$sql);
$sql1=mysqli_fetch_array($query);
echo $conn->error;
$sql= 'select * from customer where accNo="'.$racc.'"';
$query= mysqli_query($conn,$sql);
$sql2=mysqli_fetch_array($query);
echo $conn->error;
echo $amt;
echo $conn->error;
echo $sql1['currentBalance'];
echo $conn->error;

if(($amt) < 0)
{

        echo '<script type="text/javascript">';
        echo 'alert("negative value cannot be entered")';
        echo '</script>';
}
else if(($amt) > $sql1['currentBalance'])
{
        echo '<script type="text/javascript">';
        echo 'alert("Insufficient Balance")';
        echo '</script>';
}
else{

        $new= $sql1['currentBalance'] - $amt;
        echo $conn->error;
        $sql= 'UPDATE customer set currentBalance= "'.$new.'" where accNo="'.$sacc.'"';
        mysqli_query($conn,$sql);
        $new= $sql2['currentBalance'] + $amt;
        $sql= 'UPDATE customer set currentBalance= "'.$new.'" where accNo="'.$racc.'"';
        mysqli_query($conn,$sql);


        $sql=mysqli_query($conn,"insert into `transaction`(`tid`,`senderName`,`recipientName`,`senderAccountNum`,`recipientAccountNum`,`amount`)values('','".$sname."','".$rname."','".$sacc."','".$racc."','".$amt."') ")or die (mysqli_error($con));

mysqli_error($conn,$sql);
        if($sql)
        {       
                header('location:success.php');
        }
        $new=0;
        $amt=0;
}
}
?>


