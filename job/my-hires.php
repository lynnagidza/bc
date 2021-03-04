
<?php
include_once 'config.php';
session_start();
$hirer = $_SESSION['username'];
if($_SERVER['REQUEST_METHOD']=='POST')
{


}
?>
<section class="body-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-lg-push-2 col-sm-push-2 col-md-push-2">
        <!-- <h2 align="center">Post A Review</h2><br /> -->
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
          <!-- list of previous hires -->
          <label class="control-label">Here are the workers you have ever hired:</label> <br>
          <?php
          $sql = "SELECT * FROM hires WHERE hirer='$hirer' ORDER BY hiree";
          $query = mysqli_query($con,$sql);
          if(mysqli_num_rows($query) > 0){
            while($row = mysqli_fetch_assoc($query)){
              $hiree = $row['hiree'];
              $date_hired = $row['date_hired'];

              echo "<br><span>Name:</span> "; echo $hiree;
              echo "<br><span>Day hired:</span> "; echo $date_hired;
              echo "<br>";

            }
          } ?>
          <br>
          <!-- <div class="form-group">
            <button type="submit" name="submit" class="btn">Post<span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></button>
          </div> -->
        </select>
        <br>
      </form>
    </div>
  </div>
</div>
</section>
