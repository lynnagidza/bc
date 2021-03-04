<?php
include_once 'config.php';
session_start();
$occupation = $_SESSION['occupation'];
$location = $_SESSION['location'];
$hirer = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title></title>
</head>
<body>

  <form class="" action="" method="post">
    <?php
    $sql = "SELECT * FROM workers WHERE occupation='$occupation' AND location='$location'";
    $query = mysqli_query($con, $sql);
    if(mysqli_num_rows($query) > 0){
      while($row = mysqli_fetch_assoc($query)){
        $fullname = $row['fullname'];
        $phoneNumber = $row['phone'];
        $reviews = $row['reviews'];

        echo "<span>Name:</span> "; echo $fullname;
        echo "<br><span>Phone number:</span> "; echo $phoneNumber;
        echo "<br><span>Reviews:</span> "; echo $reviews;
        echo "<br>";
        // echo "<br><button type='button' name='hire' id='hire' class='slider-btn'>Confirm Hire</button><br>";


      }
    }
    ?>
    <input type="submit" name="hire" value="Confirm Hire">
  </form>

</body>
</html>
<?php

if (isset($_POST['hire'])){

  $addHire = "INSERT INTO hires (hiree, hirer)VALUES ('$fullname', '$hirer')";
  $newHire = mysqli_query($con, $addHire);
  // printf("Select returned %d rows.\n", $newHire->num_rows);
  if ($newHire){
    echo "Hire Successful!";
  } else {
    echo "THIS DOESN'T WORK!";
  }
}
?>
