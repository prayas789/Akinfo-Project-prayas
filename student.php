<?php
  session_start();
  if(!isset($_SESSION['roll_no'])){
  header('location:login.html');
  }
  $db = mysqli_connect("localhost", "root", "", "akinfo");
  $roll = $_SESSION['roll_no'];
  $sql = "SELECT * FROM signup WHERE roll_no = '$roll' ";
  $date = date("Y-m-d");
  $auto_delete = "DELETE FROM photos WHERE deadline < '$date' ";
  $result1 = mysqli_query($db,$auto_delete);

 ?>
<!DOCTYPE html>

<html>
<head>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">

    <link rel="stylesheet" href="style.css" type="text/css">
    <style>
img {
  border-radius: 50%;
}
</style>
    </head>
    <body>

        <div class="row no-gutters bg-body">
     <div class="col-md-3 bg-white">
          <nav class="navbar navbar-expand-lg navbar-dark" id="gradient">
               <a class="navbar-brand" href="#">AKINFO PORTAL</a>
          </nav>
          <nav class="navbar navbar-expand-xs navbar-light bg-white">

               <div class="collapse navbar-collapse show" id="sidenav">
                    <ul class="navbar-nav mr-auto">
                         <li class="nav-item active">
                              <div class="text-center">
                                   <img src="images\profile.png" width="50%"  /><br/>
                                   <span> <?php echo $_SESSION['name'] ?></span>
                                  <br>
                                   <small class="text-muted"><?php echo $_SESSION['email']; ?></small>

                              </div>
                         </li>
                         <li class="nav-item">
                              <a class="nav-link" href="latest_notice.php"><i class="fa fa-dashboard"></i>Latest Notices  <span class="sr-only">(current)</span></a>
                         </li>
                         <li class="nav-item">
                              <a class="nav-link" href="important_notice.php"><i class="fa fa-money"></i>Important Notices</a>
                         </li>
                         <li class="nav-item">
                              <a class="nav-link" href="event_notice.php"><i class="fa fa-pencil"></i>Event Notices</a>
                         </li>
                         <li class="nav-item">
                              <a class="nav-link" href="TnP_notice.php"><i class="fa fa-pencil"></i>T&P Notices</a>
                         </li>
                         <li class="nav-item">
                              <a class="nav-link" href="assig_view_student.php"><i class="fa fa-bullhorn"></i>Assignments</a>

                         </li>
                    </ul>
               </div>
          </nav>
     </div>
     <div class="col-md-9">
          <nav class="navbar navbar-expand-lg navbar-dark" id="gradient">
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

               <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <ul class="navbar-nav ml-auto">
                         <li class="nav-item">
                              <a class="nav-link" href="student.php">Profile</a>
                         </li>
                         <li class="nav-item dropdown">

                              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                   <a class="dropdown-item" href="#">Action</a>
                                   <a class="dropdown-item" href="#">Another action</a>
                                   <div class="dropdown-divider"></div>
                                   <a class="dropdown-item" href="#">Something else here</a>
                              </div>
                         </li>
                         <li class="nav-item">
                              <a class="nav-link disabled" href="logout.php">logout</a>
                         </li>
                    </ul>
               </div>
          </nav>

          <nav aria-label="breadcrumb">
               <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Student Profile</li>
               </ol>
          </nav>

          <div class="container-fluid">
               <div class="card mb-3">
                    <div class="card-header">
                         Student Details
                    </div>
                    <table class="table">
                         <thead>
                              <tr>
                                   <th scope="col"></th>

                              </tr>
                         </thead>
                         <tbody>
                              <tr>
                                   <th scope="row">Name</th>
                                   <td><?php echo $_SESSION['name']; ?></td>
                                                                 </tr>
                              <tr>
                                   <th scope="row">Roll Number</th>
                                   <td><?php echo $_SESSION['roll_no']; ?></td>

                              </tr>
                              <tr>
                                   <th scope="row">Student Number</th>
                                   <td><?php echo $_SESSION['student_id']; ?></td>

                              </tr>
                             <tr>
                                   <th scope="row">Branch</th>
                                   <td><?php echo $_SESSION['branch']; ?></td>

                              </tr>
                             <tr>
                                   <th scope="row">Course</th>
                                   <td><?php echo $_SESSION['course']; ?></td>

                              </tr>
                             <tr>
                                   <th scope="row">Semester</th>
                                   <td><?php echo $_SESSION['sem']; ?></td>

                              </tr>
                         </tbody>
                    </table>
                    <div class="card-footer">

                    </div>
               </div>

               <div class="row">
                    <div class="col mb-3">
                         <div class="card">
                              <div class="card-header">
                                   <?php echo $_SESSION['name']; ?> Your Messages
                              </div>
                              <div class="card-body">
                                  <?php
                                  $result = mysqli_query($db,$sql);
                                  while($row = mysqli_fetch_array($result)){
                                   echo"<h5 style='color:RED;' class='card-title'>Faculty Name :-";
                                   echo $_SESSION['t_name'];
                                   echo"</h5>";
                                   echo "<h6 style='color:blue' >Department of";
                                   echo $_SESSION['branch'];
                                   echo"</h6>";
                                   echo "<h6>Message : - </h6>";
                                   echo"<h6>";
                                   echo $_SESSION['message'];
                                   echo "</h6>";
                                   }
                                   ?>


                              </div>
                         </div>
                    </div>

               </div>
               <div class="row">
               </div>
          </div>

     </div>
</div>
         <div class="footer">
               <div class="container">
                    <span class="text-white"><center>Copyright &copy; 2018, Prashant Gotra. All Rights Reserved.</center></span>
               </div>
          </div>

    </body>
</html>
