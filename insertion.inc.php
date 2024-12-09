<?php 
 
require 'connect.php';

session_start();

//Register User
if (isset($_POST['regu'])) {
 $fname = $_POST['fname'];
 $email = $_POST['email'];
 $phone = $_POST['phone'];
 $type = $_POST['type'];
 $mod = $_POST['mod'];
 $hosi = $_POST['hosi'];
 $password = $_POST['password'];
 $passwordconfirm = $_POST['cpassword'];

 if ($password == $passwordconfirm) {
    if($mod == 1){
  $sql = "INSERT INTO `users`(`Fullname`, `Phone_Number`, `Email_Address`,`User_Type`, `Password`) VALUES ('$fname','$phone','$email','Patient',md5('$password'))";
     mysqli_query($conn, $sql);
  header("Location: index.html?userregistration=success");
 }else{
  $sql = "INSERT INTO `users`(`Fullname`, `Phone_Number`, `Email_Address`, `User_Type`, `Hospital`, `Password`) VALUES ('$fname','$phone','$email','$type','$hosi',md5('$password'))";
     mysqli_query($conn, $sql);
  header("Location: index.php?userregistration=success");
  }
}else{
  echo "Passwords do not match.";
 }
}

//Update User
if (isset($_POST['upu'])) {
 $uid = $_POST['uid'];
 $fname = $_POST['fname'];
 $email = $_POST['email'];
 $password = $_POST['password'];
 $passwordconfirm = $_POST['cpassword'];
 $phone = $_POST['phone'];
 $mod = $_POST['mod'];

 if ($password == $passwordconfirm) {
  if ($mod == 1) {
  $sql = "UPDATE `users` SET `Fullname`='$fname',`Email_Address`='$email',`Phone_Number`='$phone',`Password`=md5('$password') WHERE `User_ID`='$uid'";
     mysqli_query($conn, $sql);
  header("Location: index.php?updateadministrator=success");
  }else if ($mod == 2) {
  $sql = "UPDATE `users` SET `Fullname`='$fname',`Email_Address`='$email',`Phone_Number`='$phone',`Password`=md5('$password') WHERE `User_ID`='$uid'";
     mysqli_query($conn, $sql);
  header("Location: index1.php?updateoperator=success");
  }else if ($mod == 3) {
  $sql = "UPDATE `users` SET `Fullname`='$fname',`Email_Address`='$email',`Phone_Number`='$phone',`Password`=md5('$password') WHERE `User_ID`='$uid'";
     mysqli_query($conn, $sql);
  header("Location: index2.php?updatepatient=success");
  }
 }else{
  echo "Passwords do not match.";
 }
}

//Delete A User
if($_REQUEST['action'] == 'deleteU' && !empty($_REQUEST['id']) && !empty($_REQUEST['id1'])){ 
$deleteItem = $_REQUEST['id'];
$opname = $_REQUEST['id1'];
$sql = "DELETE FROM `users` WHERE `User_ID` = '$deleteItem'";
mysqli_query($conn, $sql); 
$sql1 = "DELETE FROM `ambulance` WHERE `Operator_ID` = '$opname'";
mysqli_query($conn, $sql1); 
header("Location: index.php?deleteuser=success");
}

//Add an Ambuance
if (isset($_POST['addambulance'])) {
 $oph = explode(', ', $_POST['oph']);
 $opname = $oph[0];
 $hosi = $oph[1];
 $eta = $_POST['eta']; 
 $loc = $_POST['loc'];

$filename = $_FILES['image']['name'];

$valid_extensions = array("jpg","jpeg","png");

$extension = pathinfo($filename, PATHINFO_EXTENSION);

if((in_array(strtolower($extension),$valid_extensions))) {

if((move_uploaded_file($_FILES['image']['tmp_name'], "img/".$filename))){

  $sql = "INSERT INTO `ambulance`(`Operator_ID`, `Hospital`, `ETA`, `Location`, `Image`) VALUES ('$opname','$hosi','$eta','$loc','$filename')";
     mysqli_query($conn, $sql);
  header("Location: index.php?addambulance=success");
 }else{
  echo "There is an error with saving the images, directory not found.";
}
}else{
  echo "There is an error with saving the images, kindly check the image format.";
}
}

//Delete An Ambulance
if($_REQUEST['action'] == 'deleteA' && !empty($_REQUEST['id'])){ 
$deleteItem = $_REQUEST['id'];
$sql = "DELETE FROM `ambulance` WHERE `Ambulance_ID` = '$deleteItem'";
mysqli_query($conn, $sql); 
header("Location: index.php?deleteambulance=success");
// if(isset($_SESSION['adminname'])){
// header("Location: index.php?deleteproduct=success");
// }else if(isset($_SESSION['resellername'])){
// header("Location: index1.php?deleteproduct=success");
// }
}


//Request an Emergency Ambulance
if(isset($_POST["emergency"])){

    $pname = $_SESSION['patname1'];
    $oph = explode(',', $_POST['oph']);
    $opname = $oph[0];
    $aid = $oph[1];
    $eta = $oph[2];
    $det = $_POST['det'];
    $loc = $_POST['loc'];

$sql = "INSERT INTO `emergency`(`Patient_ID`, `Operator_ID`, `Ambulance_ID`, `Details`, `Location`) VALUES ('$pname','$opname','$aid','$det', '$loc')";

   mysqli_query($conn, $sql);
   // var_dump($sql);
    // die();
     echo "<script>alert('Your Emergency Request Has Successfully Been Submitted! The requested ambulance will arrive in approximately " . $eta . ", kindly await assistance.');
                         window.location.href = 'index2.php?submitemergencyrequest=success';</script>";

}

//Delete An Emergency Request
if($_REQUEST['action'] == 'deleteE' && !empty($_REQUEST['id'])){ 
$deleteItem = $_REQUEST['id'];
$sql = "DELETE FROM `emergency` WHERE `Emergency_ID` = '$deleteItem'";
mysqli_query($conn, $sql); 
header("Location: index2.php?deleteemergencyrequest=success");
}

//Complete An Emergency Request
if($_REQUEST['action'] == 'completeE' && !empty($_REQUEST['id'])){ 
$updateItem = $_REQUEST['id'];
$sql = "UPDATE `emergency` SET `Status` = 'Completed', `End_At` = NOW() WHERE `Emergency_ID` = '$updateItem'";
mysqli_query($conn, $sql); 
header("Location: index1.php?completeemergencyrequest=success");
}


//Accept An Emergency Request
if($_REQUEST['action'] == 'acceptE' && !empty($_REQUEST['id'])){ 
$updateItem = $_REQUEST['id'];
$sql = "UPDATE `emergency` SET `Status` = 'Accepted' WHERE `Emergency_ID` = '$updateItem'";
mysqli_query($conn, $sql); 
header("Location: index1.php?acceptemergencyrequest=success");
}

 ?>