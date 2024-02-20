<?php
include('con.php');
$id = $_POST['stu_id'];
$name = $_POST['stu_name'];
$gender = $_POST['stu_gender'];
$course = $_POST['stu_course'];
$profile = $_POST['stu_profile'];

if (!empty($name) && !empty($gender) && !empty($course) && !empty($profile)) {
    $sql = "UPDATE `student` SET `name`='$name',`gender`='$gender',`course`='$course',`profile`='$profile' WHERE id='$id'";
    $result = $con->query($sql);
    echo 'success';
} else {
    echo 'eror';
}