<?php
require_once "connect.php";

session_start();

if(isset($_POST['login'])){

    $id = $_POST['email'];
    $password = $_POST['password'];   

        $sql = "SELECT * FROM `users` WHERE `Email_Address`='$id'";

        $query = mysqli_query($conn,$sql);

        if(mysqli_num_rows($query) > 0){
            $row = mysqli_fetch_assoc($query);

            $pass = $row['Password'];
            $type = $row['User_Type'];

if(md5($password) == $pass){

                if ($type == "Administrator") {
                $_SESSION['adminname'] = $row['User_ID'];
                header("Location: index.php");
                }else if ($type == "Operator") {
                $_SESSION['opname'] = $row['User_ID'];
                $_SESSION['opname1'] = $row['Fullname'];              
                header("Location: index1.php");
                }else if ($type == "Patient") {
                $_SESSION['patname'] = $row['User_ID'];
                $_SESSION['patname1'] = $row['Fullname'];           
                header("Location: index2.php");
                }
            }else{
                echo "Incorrect Password.";
            }
        }else{
            echo "User does not exist.";
        }
}
           
?>
