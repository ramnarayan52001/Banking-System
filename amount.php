<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>

<?php
 $id=$_POST['id'];
 $uid=$_POST['uid'];
 $amount=$_POST['amount'];
// echo $id, ",", $uid,",", $amount;

$con=mysqli_connect("localhost:3306","root","","banking") or die("Database not connected");

$sqlquery="select * from account where id=$id";
$rs=mysqli_query($con,$sqlquery) or die("error1");
$row=$rs->fetch_assoc();
$bal=$row["balance"];
if ($bal<$amount)
 echo "Balance not sufficient";
else
{
$bal=$bal-$amount;
$sqlquery="update account set balance=$bal where id=$id";
mysqli_query($con,$sqlquery) or die("error2");
$sqlquery="update account set balance=balance+$amount where id=$uid";
mysqli_query($con,$sqlquery) or die("error3");
$d= date("Y/m/d");
$sqlquery="insert into trans(from_c,to_c,amount,tdate) values('$id','$uid',$amount,'$d')";
mysqli_query($con,$sqlquery) or die("error4");


$sqlquery="select * from trans where from_c=$id";
$rs=mysqli_query($con,$sqlquery) or die("error");
echo "<h1 style='text-align:center;'> Transcation History</h1>";
echo '<table id="customers">';
echo "<tr><th>From_trans_Id</th><th>To_trans_Id</th><th>Amount</th><th>Trans_Date</th></tr>";
while($row=$rs->fetch_assoc())
{
echo "<tr><td>".$row["from_c"]."</td><td>".$row["to_c"]."</td><td>".$row["amount"]."</td><td>".$row["tdate"]."</td></tr>";
}
echo "</table>";

}

?>
</body>
</html>

