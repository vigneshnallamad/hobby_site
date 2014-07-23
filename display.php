<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Display</title>
</head>

<body>
<?php
//mysql_connect("your.hostaddress.com", "username", "password") or die(mysql_error()); 

 //mysql_select_db("Database_Name") or die(mysql_error()); 
if(isset($_POST['fname'])){
$fname=$_POST['fname'];
$sname=$_POST['sname'];
$dno=$_POST['dno'];
$addr=$_POST['addr'];
$city=$_POST['city'];
$country=$_POST['country'];
$pno=$_POST['pno'];
$email=$_POST['email'];

echo "First name".$fname;
echo "Second name".$sname;
echo "Door No".$dno;
echo "Street Address".$addr;
echo "City".$city;
echo "Country".$country;
echo "Phone Number".$pno;
echo "E-mail".$email;
}
mysql_close($mysql);

?>

</body>
</html>