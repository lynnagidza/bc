<section class="body-section">
  <h2 align="center">Edit your profile</h2><br />
  <form action="
  <?php
  // echo htmlspecialchars($_SERVER["PHP_SELF"]);
  ?>
  "
  method="post" enctype="multipart/form-data">
  <label class="control-label">Full name: </label><input type="text" name="name" class="form-control" value="<?php echo $row['name']; ?>" />  <br />
  <label class="control-label">Mobile number:  </label><input type="text" name="mobile"  class="form-control" value="<?php echo $row['mobile']; ?>"/></label><br />
  <label class="control-label">Email address:  </label><input type="text" name="email"  class="form-control" value="<?php echo $row['email']; ?>"/><br />
  <label class="control-label">Username:  </label><input type="text" name="username"  class="form-control" value="<?php echo $row['username']; ?>"/><br />
  <input type="submit" value="update" name="update" class="thm-btn"/>
</form>

</section>
