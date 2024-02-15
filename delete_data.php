<?php
include("con.php");
$id = $_POST['stu_id'];
$sql = "DELETE FROM `student` WHERE id='$id'";
$row = $con->query($sql);
echo 'success';