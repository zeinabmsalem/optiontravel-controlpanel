<?php

include("dbconn.php");

$userType_id;
session_start();
if (empty($_SESSION['userType_id'])) {
    header("Location:loginpage.php");
} else {
    $userType_id = $_SESSION['userType_id'];
    $refrence_id = $_SESSION['refrence_id'];
}

$packid = $_GET['packid'];

 $img_url = isset($_FILES['image']['name']) ? $_FILES['image']['name']: '';

if($img_url!=''){

           $image_uniqid = uniqid();
           
           $target_dir = "upload/"; 

            $tmp_name = $_FILES["image"]["tmp_name"];

            $name = $_FILES["image"]["name"];

            $targetFile = $target_dir. $image_uniqid. $name; 

            move_uploaded_file($tmp_name, $targetFile);
}


$sql = "update packages 
         set card_img= '$targetFile'
         where packages.id = $packid";


         if(mysqli_query($conn, $sql)){

         	header("Location:view_package.php?packid=$packid");
         }else {
            echo "Error: Incorrect data please try again";
         }




?>