
<?php
include_once 'config.php';
session_start();
if(isset($_SESSION['username'])!="admin"){
  $_SESSION['msg']="1";
  header("location:login.php");
  exit();
}

if($_SERVER['REQUEST_METHOD']=='POST')
{
  $sql=$con->prepare("INSERT INTO workers(fullname,occupation,location,phone) values(?,?,?,?)");
  $sql->bind_param("ssss",$fullname,$occupation,$location,$phone_number);
  $fullname=$_POST['worker'];
  $occupation=$_POST['occupation'];
  $location=$_POST['location'];
  $phone_number=$_POST['phone'];
  $sql->execute();
  echo "WORKER ADDED";
}
?>
<body>
  <section class="body-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-lg-push-3 col-sm-push-3 col-md-push-3 col-xs-push-3 inner-body">
          <h2 align="center">Add Worker</h2>
          <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            <label class="control-label">Name: <input type="text" name="worker" class="form-control" required  /> </label> <br />
            <!-- <label class="control-label">Gender: <br>
              <input type="radio" id="male" name="gender" value="male">
              <label for="male" class="control-label">Male</label>
              <input type="radio" id="female" name="gender" value="female">
              <label for="female" class="control-label">Female</label>
              <input type="radio" id="other" name="gender" value="other">
              <label for="other" class="control-label">Other</label>
            </label><br /> -->
            <label class="control-label">Occupation:  <input type="text" name="occupation" class="form-control" required  /></label><br />
            <label class="control-label">Location:  <input type="text" name="location" class="form-control" required  /></label><br />
            <label class="control-label">Phone Number: <input type="text" name="phone"  class="form-control" required /> </label> <br />
            <input type="submit" value="Add" />
            <button type="button" name="back"> <a href="admin-index.php">Go back</a> </button>
          </form>
        </div>
      </div>
    </div>
  </section>
</body>
</html>
