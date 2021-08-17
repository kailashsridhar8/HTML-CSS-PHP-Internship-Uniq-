<?php
$con=mysqli_connect("localhost","root","","college");
if(!$con)
{
	echo "Connection error".mysqli_connect_error();
}
?>

<?php
if(isset($_POST['login']))
{
    $email=$_POST['email'];
    $pass=$_POST['pswd'];

    $cmd=mysqli_query($con,"select * from register where Email='$email' and Password='$pass'" );

    if(mysqli_fetch_array($cmd)>0)
    {
        echo "<script>alert('Login Success')</script>";
    }
    mysqli_close($con);
}
?>