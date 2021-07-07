<?php
include 'connect.php';
$conn = OpenCon();
if(!isset($_SESSION))
{
    session_start();
}
$sql = "SELECT * FROM `feedback`";
$result = $conn->query($sql);

if(isset($_POST['submit'])){
  $cid = $_POST['c_id'];
  $sql1 = "UPDATE `feedback` SET `action` = 'done' where `c_id`='$cid'";
  if($conn->query($sql1) === true){
    header('location:table.php');
  }else{
    echo $conn->error;
  }
}
if(isset($_POST['delete'])){
  $cid = $_POST['c_id'];
  $sql1 = "DELETE FROM `feedback` where `c_id`='$cid'";
  if($conn->query($sql1) === true){
    header('location:table.php');
  }else{
    echo $conn->error;
  }
}
?>
<section>
    <!--for demo wrap-->
    <h1>Update</h1>
    <div class="tbl-header">
      <table cellpadding="0" cellspacing="0" border="0">
        <thead>
          <tr>
            <th>Customer ID</th>
            <th>Feedback</th>
            <th>Action taken/Not</th>
          </tr>
        </thead>
      </table>
    </div>
    <div class="tbl-content">
      <table cellpadding="0" cellspacing="0" border="0">
        <tbody><link href="css/t.css" rel="stylesheet" type="text/css" >
            <script src="js/t.js"></script>
            <?php
            if ($result->num_rows > 0) {
              while($row = $result->fetch_assoc()) {?>
                <tr><td><?php echo $row["c_id"]; ?></td>
                <td><?php echo $row["suggestions"]; ?></td>
                <td><?php echo $row["action"];?></td></tr><?php
              }
              echo "</table>";
          } else {
              echo "0 results";
          }?>
        </tbody>
      </table>
    </div>
    <br>
    <form action="" method="post">
  <input type="text" name="c_id" >
  <input type="submit" name="submit" value="update">
  <input type="submit" name="delete" value="delete">
  </form>
  </section>
  
  
  <!-- follow me template -->
  <div class="made-with-love">
    Made with
    <i>♥</i> by Megha and Nidhisha
    
  </div>