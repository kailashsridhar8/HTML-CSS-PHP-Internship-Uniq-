<?php
$con=mysqli_connect("localhost","root","","College");
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
	$event=$_POST['option'];
	$pass=$_POST['pswd'];

	$query="insert into Register(`User_Name`,`College`,`Email`,`Year`,`Event`,`Password`) values('$name','$cname','$email','$year','$event','$pass')";

	if(mysqli_query($con,$query))
	{
		echo "<script>alert('Registered!!!')</script>";
		header('location:Demo.php');
	}

}
?>
