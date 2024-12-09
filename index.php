<?php
require_once 'connect.php';
session_start();

if (!isset($_SESSION['adminname'])) {
    header("Location: index.html");
}else{
  $filter = $_SESSION['adminname'];
  $query=mysqli_query($conn,"SELECT * FROM `users` WHERE `User_ID`='$filter'")or die(mysqli_error());
  $row1=mysqli_fetch_array($query);
}
?>

<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <!-- Meta Tags -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="keywords" content="Site keywords here">
        <meta name="description" content="">
        <meta name='copyright' content=''>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <!-- Title -->
        <title>Ambulance Response System - Administrator Homepage</title>
        
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- Nice Select CSS -->
        <link rel="stylesheet" href="css/nice-select.css">
        <!-- Font Awesome CSS -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <!-- icofont CSS -->
        <link rel="stylesheet" href="css/icofont.css">
        <!-- Slicknav -->
        <link rel="stylesheet" href="css/slicknav.min.css">
        <!-- Owl Carousel CSS -->
        <link rel="stylesheet" href="css/owl-carousel.css">
        <!-- Datepicker CSS -->
        <link rel="stylesheet" href="css/datepicker.css">
        <!-- Animate CSS -->
        <link rel="stylesheet" href="css/animate.min.css">
        <!-- Magnific Popup CSS -->
        <link rel="stylesheet" href="css/magnific-popup.css">
        
        <!-- Medipro CSS -->
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="css/responsive.css">
        
    </head>

        <style type="text/css">
        
          table{
    align-items: center;
  }

   th, tr, td{
    padding: 10px 10px;
  }
    </style>

            <script type="text/javascript">
function printData()
{
   var divToPrint=document.getElementById("printTable");
   newWin= window.open("");
   newWin.document.write(divToPrint.outerHTML);
   newWin.print();
   newWin.close();
}

$('button').on('click',function(){
printData();
})  
</script>

            <script type="text/javascript">
function printData1()
{
   var divToPrint=document.getElementById("printTable1");
   newWin= window.open("");
   newWin.document.write(divToPrint.outerHTML);
   newWin.print();
   newWin.close();
}

$('button').on('click',function(){
printData1();
})  
</script>

            <script type="text/javascript">
function printData2()
{
   var divToPrint=document.getElementById("printTable2");
   newWin= window.open("");
   newWin.document.write(divToPrint.outerHTML);
   newWin.print();
   newWin.close();
}

$('button').on('click',function(){
printData2();
})  
</script>

    <body>
    
        <!-- Preloader -->
        <div class="preloader">
            <div class="loader">
                <div class="loader-outter"></div>
                <div class="loader-inner"></div>

                <div class="indicator"> 
                    <svg width="16px" height="12px">
                        <polyline id="back" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
                        <polyline id="front" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
                    </svg>
                </div>
            </div>
        </div>
        <!-- End Preloader -->
    
    
        <!-- Header Area -->
        <header class="header" >
            <!-- Topbar -->
            <div class="topbar">
                <div class="container">
                    <div class="row">
                        <div id="contact" class="col-lg-12 col-md-7 col-12">
                            <!-- Top Contact -->
                            <ul class="top-contact">
                                <li><i class="fa fa-phone"></i>+254 7234 56789</li>
                                <li><i class="fa fa-envelope"></i><a href="mailto:ambulance_response@gmail.com">ambulance_response@gmail.com</a></li>
                            </ul>
                            <!-- End Top Contact -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Topbar -->
            <!-- Header Inner -->
            <div class="header-inner">
                <div class="container">
                    <div class="inner">
                        <div class="row">
                            <div class="col-lg-10 col-md-9 col-12">
                                <!-- Main Menu -->
                                <div class="main-menu">
                                    <nav class="navigation">
                                        <ul class="nav menu">
                                            <li class="active"><a href="#">Home <i class="icofont-rounded-down"></i></a>
                                            </li>
                                            <li><a href="#database">Database</a></li>
                                            <li><a href="#start">My Module </a></li>
                                            <li><a href="#contact">Contact Us</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <!--/ End Main Menu -->
                            </div>
                            <div class="col-lg-2 col-12">
                                <div class="get-quote">
                                    <a href="logout.php" class="btn">Logout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ End Header Inner -->
        </header>
        <!-- End Header Area -->
        
        <!-- Slider Area -->
        <section class="slider">
            <div class="hero-slider">
                <!-- Start Single Slider -->
                <div class="single-slider" style="background-image:url('img/s1.jpg')">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="text">
                                    <h1>Your <span>Emergency,</span> Our <span>Priority</span></h1>
                                    <p>Welcome <?php echo $row1['User_Type']; ?>, <?php echo $row1['Fullname']; ?>!</p>
                                    <div class="button">
                                        <a href="#start" class="btn">My Module</a>
                                        <a href="#database" class="btn primary">Database</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Slider -->
                <!-- Start Single Slider -->
                <div class="single-slider" style="background-image:url('img/s2.jpg')">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="text">
                                    <h1>Specialized <span>Transport,</span> Specialized <span>Care</span></h1>
                                    <p>Welcome <?php echo $row1['User_Type']; ?>, <?php echo $row1['Fullname']; ?>!</p>
                                    <div class="button">
                                        <a href="#start" class="btn">My Module</a>
                                        <a href="#database" class="btn primary">Database</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Start End Slider -->
                <!-- Start Single Slider -->
                <div class="single-slider" style="background-image:url('img/s3.jpg')">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="text">
                                    <h1>Swift <span>Care,</span> Precious<span> Moments</span></h1>
                                    <p>Welcome <?php echo $row1['User_Type']; ?>, <?php echo $row1['Fullname']; ?>!</p>
                                    <div class="button">
                                        <a href="#start" class="btn">My Module</a>
                                        <a href="#contact" class="btn primary">Contact Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Slider -->
            </div>
        </section>
        <!--/ End Slider Area -->
        
        
        <!-- Database -->
        <section id="database" class="pricing-table section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h2>Database</h2>
                            <img src="img/section-img.png" alt="#">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Single Table -->
                    <div class="col-lg-12 col-md-12 col-12">
                        <div class="single-table">
                            <!-- Table Head -->
                            <div class="table-head">
                                <h4 class="title">List of Users</h4>
                            </div>
                            <!-- Table List -->
                         <table id="printTable">
<tr style="text-align: left;
  padding: 8px;">
<th style="text-align: left;
  padding: 8px;">User ID</th>
<th style="text-align: left;
  padding: 8px;">Fullname</th>
  <th style="text-align: left;
  padding: 8px;">Email Address</th>
 <th style="text-align: left;
  padding: 8px;">Phone Number</th>
  <th style="text-align: left;
  padding: 8px;">User Type</th>
   <th style="text-align: left; padding: 8px;"></th>
</tr>

<?php
$sql = "SELECT `User_ID`, `Fullname`, `Phone_Number`, `Email_Address`, `User_Type` FROM `users`";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
?>
<tr>
<td><?php echo($row["User_ID"]); ?></td>
<td><?php echo($row["Fullname"]); ?></td>
<td><?php echo($row["Email_Address"]); ?></td>
<td><?php echo($row["Phone_Number"]); ?></td>
<td><?php echo($row["User_Type"]); ?></td>
<td><button class="btn btn-primary py-3 px-5" onclick="return confirm('Are you sure that you want to delete this user?')?window.location.href='insertion.inc.php?action=deleteU&id=<?php echo($row["User_ID"]); ?>':true;" title='Delete User'>Delete</button></td>
</tr>
<?php
}
} else { echo "No results"; }

?>

</table>
                            <div class="table-bottom">
                                <a class="btn" onclick="printData();">Generate Report</a>
                            </div>
                            <!-- Table Bottom -->
                        </div>
                    </div>
                    <!-- End Single Table-->
                    <br>
                    <br>
                     <!-- Single Table -->
                    <div class="col-lg-12 col-md-12 col-12">
                        <div class="single-table">
                            <!-- Table Head -->
                            <div class="table-head">
                                <h4 class="title">List of Ambulances</h4>
                            </div>
                            <!-- Table List -->
                         <table id="printTable1">
<tr style="text-align: left;
  padding: 8px;">
<th style="text-align: left;
  padding: 8px;">Ambulance ID</th>
<th style="text-align: left;
  padding: 8px;">Hospital</th>
  <th style="text-align: left;
  padding: 8px;">Estimated Arrival Time</th>
 <th style="text-align: left;
  padding: 8px;">Location</th>
  <th style="text-align: left;
  padding: 8px;">Image</th>
   <th style="text-align: left; padding: 8px;"></th>
</tr>

<?php
$sql = "SELECT `Ambulance_ID`, `Operator_ID`, `Hospital`, `ETA`, `Location`, `Image`, `Created_At` FROM `ambulance`";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
?>
<tr>
<td><?php echo($row["Ambulance_ID"]); ?> operated by <?php echo($row["Operator_ID"]); ?></td>
<td><?php echo($row["Hospital"]); ?></td>
<td><?php echo($row["ETA"]); ?></td>
<td><?php echo($row["Location"]); ?></td>
<td><img src="img/<?php echo($row["Image"]); ?>" style="width: 150px;"></td>
<td><button class="btn btn-primary py-3 px-5" onclick="return confirm('Are you sure that you want to delete this ambulance?')?window.location.href='insertion.inc.php?action=deleteA&id=<?php echo($row["Ambulance_ID"]); ?>':true;" title='Delete Ambulance'>Delete</button></td>
</tr>
<?php
}
} else { echo "No results"; }

?>

</table>
                            <div class="table-bottom">
                                <a class="btn" onclick="printData1();">Generate Report</a>
                            </div>
                            <!-- Table Bottom -->
                        </div>
                    </div>
                    <!-- End Single Table-->
                    <br>
                    <br>
                     <!-- Single Table -->
                    <div class="col-lg-12 col-md-12 col-12">
                        <div class="single-table">
                            <!-- Table Head -->
                            <div class="table-head">
                                <h4 class="title">List of Emergency Requests</h4>
                            </div>
                            <!-- Table List -->
                         <table id="printTable2">
<tr style="text-align: left;
  padding: 8px;">
<th style="text-align: left;
  padding: 8px;">Emergency & Patient</th>
<th style="text-align: left;
  padding: 8px;">Ambulance Requested</th>
  <th style="text-align: left;
  padding: 8px;">Details</th>
 <th style="text-align: left;
  padding: 8px;">Location</th>
  <th style="text-align: left;
  padding: 8px;">Started At</th>
   <th style="text-align: left;
  padding: 8px;">Ended At</th>
  <th style="text-align: left;
  padding: 8px;">Status</th>
</tr>

<?php
$sql = "SELECT `Emergency_ID`, `Patient_ID`, `Operator_ID`, `Ambulance_ID`, `Details`, `Location`, `Start_At`, `End_At`, `Status` FROM `emergency`";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
?>
<tr>
<td><?php echo($row["Emergency_ID"]); ?> requested by <?php echo($row["Patient_ID"]); ?></td>
<td><?php echo($row["Ambulance_ID"]); ?> operated by <?php echo($row["Operator_ID"]); ?></td>
<td><?php echo($row["Details"]); ?></td>
<td><?php echo($row["Location"]); ?></td>
<td><?php echo($row["Start_At"]); ?></td>
<td><?php echo($row["End_At"]); ?></td>
<td><?php echo($row["Status"]); ?></td>
</tr>
<?php
}
} else { echo "No results"; }

?>

</table>
                            <div class="table-bottom">
                                <a class="btn" onclick="printData2();">Generate Report</a>
                            </div>
                            <!-- Table Bottom -->
                        </div>
                    </div>
                    <!-- End Single Table-->
                </div>  
            </div>  
        </section>  
        <!--/ End Database -->

        
        <!-- Start Get Started -->
        <section id="start" class="appointment">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h2>My Module</h2>
                            <img src="img/section-img.png" alt="#">
                            <!-- <p>Register & Login</p> -->
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-12">
                        <form class="form" action="insertion.inc.php" method="POST">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-group">
                                        <input name="fname" type="text" placeholder="Fullname" required>
                                        <input type="hidden" value="2" name="mod">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-group">
                                        <input name="email" type="email" placeholder="Email Address" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-group">
                                        <input name="phone" type="text" placeholder="Phone Number" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-group">
                                        <input name="hosi" type="text" placeholder="Hospital (if Ambulance Operator)">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-group">
                                            <select name="type" required class="list">
                                                <option value="" disabled selected>Select A User Type</option>
                                                <option value="Administrator" class="option">Administrator</option>
                                                <option value="Operator" class="option">Ambulance Operator</option>
                                                <option value="User" class="option">User</option>
                                            </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-group">
                                        <input name="password" type="password" placeholder="Password" minlength="8" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-group">
                                        <input name="cpassword" type="password" placeholder="Confirm Password" minlength="8" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-4 col-12">
                                    <div class="form-group">
                                        <div class="button">
                                            <button type="submit" class="btn" name="regu">Register A User</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-6 col-md-12 ">
                        <form class="form" action="insertion.inc.php" method="POST">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-group">
                                        <input name="fname" type="text" placeholder="Fullname" value="<?php echo $row1['Fullname'] ?>" required>
                                        <input type="hidden" value="<?php echo $filter; ?>" name="uid" required>
                                        <input type="hidden" value="1" name="mod" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-group">
                                        <input name="email" type="email" placeholder="Email Address" value="<?php echo $row1['Email_Address'] ?>" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-group">
                                        <input name="phone" type="text" placeholder="Phone Number" value="<?php echo $row1['Phone_Number'] ?>" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-group">
                                        <input name="password" type="password" placeholder="Password" minlength="8" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-group">
                                        <input name="cpassword" type="password" placeholder="Confirm Password" minlength="8" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-4 col-12">
                                    <div class="form-group">
                                        <div class="button">
                                            <button type="submit" class="btn" name="upu">Update My Details</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <br>
                        <br>
                    </div>
                </div>
                                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12">
                        <form class="form" action="insertion.inc.php" enctype="multipart/form-data" method="POST">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-group">
                                            <select name="oph" required class="list">
                                                <option value="" disabled selected>Select An Ambulance Operator</option>
                                     <?php
                                      $sql = "SELECT * FROM `users` WHERE `User_Type` = 'Operator'";
                                      $all_categories = mysqli_query($conn,$sql);
                                      while ($category = mysqli_fetch_array(
                                              $all_categories,MYSQLI_ASSOC)):;
                                  ?>
                                                <option value="<?php echo $category["Fullname"];?>, <?php echo $category["Hospital"];?>" class="option"><?php echo $category["Fullname"];?> at <?php echo $category["Hospital"];?></option>                               
                                  <?php
                                      endwhile;
                                  ?>
                                              
                                            </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-group">
                                        <input name="eta" type="text" placeholder="Estimated Arrival Time"  required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-group">
                                        <input name="loc" type="text" placeholder="Location" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-group">
                                        <label>Ambulance Picture:</label>
                                        <br>
                                        <input name="image" type="file" accept=".jpg, .png, .jpeg" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-4 col-12">
                                    <div class="form-group">
                                        <div class="button">
                                            <button type="submit" class="btn" name="addambulance">Add An Ambulance</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Get Started -->
    
        
        <!-- Footer Area -->
        <footer id="footer" class="footer ">
            <!-- Footer Top -->
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="single-footer">
                                <h2>About Us</h2>
                                <p>Rest assured that your emergency is handled with the utmost security and confidentiality. Our Ambulance Response System prioritizes the secure handling of sensitive medical information, ensuring privacy and compliance with the highest standards of healthcare data security.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="single-footer f-link">
                                <h2>Quick Links</h2>
                                <div class="row">
                                    <div class="col-lg-12 col-md-6 col-12">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Home</a></li>
                                            <li><a href="#database"><i class="fa fa-caret-right" aria-hidden="true"></i>Database</a></li>
                                            <li><a href="#start"><i class="fa fa-caret-right" aria-hidden="true"></i>My Module</a></li>
                                            <li><a href="#contact"><i class="fa fa-caret-right" aria-hidden="true"></i>Contact Us</a></li>  
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ End Footer Top -->
            <!-- Copyright -->
            <div class="copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-12">
                            <div class="copyright-content">
                                <p>© Copyright 2024.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ End Copyright -->
        </footer>
        <!--/ End Footer Area -->
        
        <!-- jquery Min JS -->
        <script src="js/jquery.min.js"></script>
        <!-- jquery Migrate JS -->
        <script src="js/jquery-migrate-3.0.0.js"></script>
        <!-- jquery Ui JS -->
        <script src="js/jquery-ui.min.js"></script>
        <!-- Easing JS -->
        <script src="js/easing.js"></script>
        <!-- Color JS -->
        <script src="js/colors.js"></script>
        <!-- Popper JS -->
        <script src="js/popper.min.js"></script>
        <!-- Bootstrap Datepicker JS -->
        <script src="js/bootstrap-datepicker.js"></script>
        <!-- Jquery Nav JS -->
        <script src="js/jquery.nav.js"></script>
        <!-- Slicknav JS -->
        <script src="js/slicknav.min.js"></script>
        <!-- ScrollUp JS -->
        <script src="js/jquery.scrollUp.min.js"></script>
        <!-- Niceselect JS -->
        <script src="js/niceselect.js"></script>
        <!-- Tilt Jquery JS -->
        <script src="js/tilt.jquery.min.js"></script>
        <!-- Owl Carousel JS -->
        <script src="js/owl-carousel.js"></script>
        <!-- counterup JS -->
        <script src="js/jquery.counterup.min.js"></script>
        <!-- Steller JS -->
        <script src="js/steller.js"></script>
        <!-- Wow JS -->
        <script src="js/wow.min.js"></script>
        <!-- Magnific Popup JS -->
        <script src="js/jquery.magnific-popup.min.js"></script>
        <!-- Counter Up CDN JS -->
        <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
        <!-- Bootstrap JS -->
        <script src="js/bootstrap.min.js"></script>
        <!-- Main JS -->
        <script src="js/main.js"></script>
    </body>
</html>