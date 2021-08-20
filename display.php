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
 
$con=mysqli_connect("localhost:3306","root","","banking") or die("Database not connected");
$sqlquery="select * from account";
$rs=mysqli_query($con,$sqlquery) or die("error");
echo "<h1 style='text-align:center;'> Transcation </h1>";
echo '<form method="get" action="trans.php">';
echo '<table id="customers">';
echo "<tr><th>Id</th><th>Name</th><th>EmailId</th><th>Balance</th><th>Button</th></tr>";
while($row=$rs->fetch_assoc())
{
echo "<tr><td>".$row["id"]."</td><td>".$row["uname"]."</td><td>".$row["emailid"]."</td><td>".$row["balance"]."</td><td>"."<button type='submit' name='id' value=".$row["id"].">Transction</button></td></tr>";
}
echo "</table>";
echo '</form>';
echo "<a href='index.html'>Back</a>";
?>


