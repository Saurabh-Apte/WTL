
<?php
require ('connect.php');
session_start();
//mysqli_select_db("login") or die(mysqli_error());
$username = $_POST['email'];
$password = $_POST['password'];
echo $username.$password;
$sql = "SELECT * FROM account WHERE email = '$username' and password = '$password'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      //$active = $row['active'];
$result=mysqli_query($conn,"Select * from account");
$count = mysqli_num_rows($result);
if($count == 1) {
         $_SESSION["username"]=$username;
         
         
         header('Location:Home Page.php');
      }else {
         $error = "Your Login Name or Password is invalid";
      }
while($row=mysqli_fetch_array($result))
{
if($row['EMAIL']==$username)
{
if($row['PASSWORD']==$password)
{
echo "yo";
header('Location:Home Page.php');
}
}
else
{
echo "not registered";
}
}
?>