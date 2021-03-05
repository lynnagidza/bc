
<body>
  <?php
  include_once 'header.php';
  include_once 'config.php';
  if($_SERVER['REQUEST_METHOD']=='POST')
  {

    if(isset($_POST['submit']))
    {
      $sql=$con->prepare("INSERT INTO admin_inbox(sender,email,message) VALUES (?,?,?)");
      $sql->bind_param("sss",$sender,$email,$message);
      $sender=$_POST['name'];
      $email=$_POST['email'];
      $message=$_POST['message'];
      $sql->execute();
    }
  }
  ?>

  <section class="body-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-lg-push-2 col-sm-push-2 col-md-push-2">
          <h2 align="center">Contact Us</h2><br />
          <form action="" method="post" enctype="multipart/form-data">
            <label class="control-label">Name:</label>
            <input type="text" name="name" class="form-control" required>
            <br>
            <label class="control-label">Email:</label>
            <input type="text" name="email" class="form-control" required>
            <br>
            <label class="control-label">Message:</label><textarea class="form-control white_bg" name="message" rows="4" required=""></textarea><br />
            <div class="form-group">
              <button type="submit" name="submit" class="btn">Send<span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></button>
            </div>
          </select>
          <br>
        </form>
      </div>
    </div>
  </div>
</section>

<?php
include_once 'footer.php';
?>
</body>
</html>
