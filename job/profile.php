<?php
include_once 'config.php';
session_start();
$user = $_SESSION['username'];

$getDeets = "SELECT * FROM reg_user where username='$user'";
$query=mysqli_query($con,$getDeets);
$row=mysqli_fetch_array($query);
?>

<section class="body-section">
  <h2 align="center">Edit your profile</h2><br />
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
    <label class="control-label">Full name: </label><input type="text" name="name" class="form-control" value="<?php echo $row['name']; ?>" />  <br />
    <label class="control-label">Mobile number:  </label><input type="text" name="mobile"  class="form-control" value="<?php echo $row['mobile']; ?>"/></label><br />
    <label class="control-label">Email address:  </label><input type="text" name="email"  class="form-control" value="<?php echo $row['email']; ?>"/><br />
    <input type="submit" value="update" name="update" class="thm-btn"/>
  </form>

</section>
<?php

if(isset($_POST['update']))
{
  $name=$_POST['name'];
  $mobile=$_POST['mobile'];
  $email=$_POST['email'];

  $sql = "UPDATE reg_user
  SET name = '$name', mobile = '$mobile', email = '$email'
  WHERE username = '$user'";
  $result = mysqli_query($con, $sql);
}
?>
