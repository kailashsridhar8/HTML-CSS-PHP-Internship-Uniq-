<?php
include('db.php');
?>

<?php
if(isset($_POST['login']))
{
    $email=$_POST['email'];
    $pass=$_POST['pswd'];

    $cmd=mysqli_query($co,"select * from register where Email='$email' and Password='$pass'" );

    if(mysqli_fetch_array($cmd)>0)
    {
        echo "<script>alert('Login Success')</script>";
    }
    mysqli_close($co);
}
?>