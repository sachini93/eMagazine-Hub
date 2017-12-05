<?php 

//require or include

//include('C:\wamp\www\Hotel management\db\connection\user.php ');
$server="localhost";
$username="root";
$password="";
$db="hotel_management";


$con=mysqli_connect($server,$username,$password,$db);
if(!$con){
echo"not established connection",mysqli_connect_error();
}

else{
   // echo"success";
}


?>