<?php
  if(isset($_POST['updateSchool'])){
    require('../reusable/_con.php');
    // print_r($_POST);

    $id = $_POST['id'];
    $schoolName = $_POST['schoolName'];
    $schoolLevel = $_POST['schoolLevel'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    $query = "UPDATE `schools` SET `School Name`='$schoolName',`School Level`='$schoolLevel',`Phone`='$phone',`Email`='$email' WHERE `id`='$id'";

    $school = mysqli_query($connect, $query);

    if($school){
      header("Location: ../index.php"); 
    }else{
      echo "Failed: " . mysqli_error($connect);
  }
  }else{
    echo "You should not be here!";
  }
?>