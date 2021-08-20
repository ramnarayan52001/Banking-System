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
 $id=$_GET['id'];
$con=mysqli_connect("localhost:3306","root","","banking") or die("Database not connected");

$sqlquery="select * from account where id=$id";
$rs=mysqli_query($con,$sqlquery) or die("error");
echo "<h1 style='text-align:center;'> Customer Details</h1>";
echo '<table id="customers">';
echo "<tr><th>Id</th><th>Name</th><th>EmailId</th><th>Balance</th></tr>";
while($row=$rs->fetch_assoc())
{
echo "<tr><td>".$row["id"]."</td><td>".$row["uname"]."</td><td>".$row["emailid"]."</td><td>".$row["balance"]."</td></tr>";
}
echo "</table>";
echo "<h1 style='text-align:center;'> Transfer Money here! </h1>";

echo '<form method="post" action="amount.php">';
 echo '<input type="hidden"  name="id" value='.$id.'>';
echo  '<label for="fname">Transfer To:</label><br>';
echo  '<select name="uid" style="width: 100%;">';


$sqlquery="select * from account where id != $id";
$rs=mysqli_query($con,$sqlquery) or die("error");
while($row=$rs->fetch_assoc())
{
$v=$row['id'].",".$row['uname'];
echo "<option value=".$row['id'].">$v</option>";
}
  ?> 
</select>
Amount:<br>
<input type="number" name="amount" style="width: 100%;">

  <input type="submit" value="Submit">
</form> 

