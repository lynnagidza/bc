
<?php
include 'config.php';
if(!empty($_GET['id']))
{
  $id=$_GET['id'];
  $sql="delete from jobs where job_id=$id";
  $con->query($sql);
}
?>
<div class="container">
  <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
    <table class="table table-hover" >
      <tr>
        <th>From</th>
        <th>Date_Received</th>
        <th>Message</th>
      </tr>
      <?php
      $sql="SELECT * FROM admin_inbox";
      $result=$con->query($sql);
      while($record=$result->fetch_assoc()){
        ?>
        <tr>
          <td><?php echo $record['sender'];?></td>
          <td><?php $date=date_create($record['date_received']); echo date_format($date,"d.m.y");?></td>
          <td><?php echo $record['message'];?></td>
          <td>
            <p>
              <a href="#" onclick="return confirm('Are you sure you want to delete this record?')">delete</a>
            </p>
          </td>
        </tr>


        <?php
      }?>
    </table>
  </div>
</div>
</body>
</html>
