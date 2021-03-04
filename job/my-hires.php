
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
        <h2 align="center">Post A Review</h2><br />
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
          <!-- choose worker -->
          <label class="control-label">Choose worker:</label>
          <?php
          $workers = "SELECT hiree FROM hires WHERE hirer='$hirer' ORDER BY hiree";
          $getWorkers = mysqli_query($con,$workers);
          echo "<select id='workers' name='workers[]' class='form-control'  >";
          while ($workersArray = mysqli_fetch_assoc($getWorkers)){
            $displayWorkers = $workersArray['hiree']; //populates dropdown with values from hiree column in hires table
            $_SESSION['hired'] = $displayWorkers;
            echo "<option>$displayWorkers</option>";
          }
          echo "</select>" ?>
          <br>
          <label class="control-label">Review:</label><textarea class="form-control white_bg" name="review" rows="4" required=""></textarea><br />
          <div class="form-group">
            <button type="submit" name="submit" class="btn">Post<span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></button>
          </div>
        </select>
        <br>
      </form>
    </div>
  </div>
</div>
</section>

<?php
if(isset($_POST['submit'])){
  $review = $_POST['review'];
  $hired = $_SESSION['hired'];
  $addHire = "INSERT INTO workers (reviews)VALUES ('.$review.') WHERE fullname='$hired'";
  $newHire = mysqli_query($con, $addHire);
  if ($newHire){
    echo "Review added successfully!";
    header("location: user-index.php");
  } else {
    echo "THIS DOESN'T WORK!";
  }
}
 ?>
