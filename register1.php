<?php
$con=mysqli_connect("localhost","root","","college");
if(!$con)
{
	echo "Connection error".mysqli_connect_error();
}
?>
<?php
if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$cname=$_POST['cname'];
	$email=$_POST['email'];
	$year=$_POST['year'];
	 
	$pass=$_POST['pswd'];
	$checkbox1=$_POST['tecno'];  
	$chk="";  
	foreach($checkbox1 as $chk1)  
   {  
      $chk .= $chk1.",";  
   }  
  
	$query="insert into Register(`User_Name`,`College`,`Email`,`Year`,`Event`,`Password`) values('$name','$cname','$email','$year','$chk','$pass')";

	if(mysqli_query($con,$query))
	{
		echo "<script>alert('Registered Success')</script>";
		header("Refresh:1; url=Demo.php");
	}

}
?>
