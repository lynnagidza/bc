
  <div class="modal-dialog">
  <div class="modal-content">
  <div class="modal-body">
<?php
include_once 'config.php';
// $id=$_GET['job_id'];
$sql="select * from workers";
$result=$con->query($sql);
$record=$result->fetch_array();
?>
<h4>Worker Details</h4>
<p>Name:  <?php echo $record['fullname']; ?></p>
<p>Occupation: <?php echo $record['occupation']; ?></p>
<p>Location: <?php echo $record['location']; ?></p>
<p>Phone number: <?php echo $record['phone']; ?></p>
<p>Reviews: <?php echo $record['reviews'];?></p>
</div>
</div>
</div>
