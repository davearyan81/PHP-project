<?php
include("../admin/config/dbcon.php");
$state_id=$_POST['state_id'];
// echo $state_id;
$qry="select * from cities where state_id='$state_id'";
$result=$con->query($qry);
?>
<option value="">--Cities--</option>
<?php
while($row=$result->fetch_assoc())
{
    ?>
    <option value="<?= $row['name'];?>"><?= $row['name'];?></option>
    <?php
}
?>