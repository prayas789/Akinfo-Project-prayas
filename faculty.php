<?php
  session_start();
  if(!isset($_SESSION['id'])){
  header('location:f_login.php');
  }
  $db = mysqli_connect("localhost", "root", "", "akinfo");
  $date = date("Y-m-d");
  $auto_delete = "DELETE FROM photos WHERE deadline < '$date' ";
  mysqli_query($db,$auto_delete);

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
         <br>
          <nav class="navbar navbar-expand-xs navbar-light bg-white">

               <div class="collapse navbar-collapse show" id="sidenav">
                    <ul class="navbar-nav mr-auto">
                         <li class="nav-item active">
                              <div class="text-center">
                                   <img src="images\profile.png" width="50%"  /><br/>
                                   <span><?php echo $_SESSION['name']; ?></span>
                                  <br>
                                   <small class="text-muted"><?php echo $_SESSION['email']; ?></small>

                              </div>
                         </li>
                         <li class="nav-item active">
                              <a class="nav-link" href="dashboard.php"><i class="fa fa-dashboard"></i> Notice Dashboard <span class="sr-only">(current)</span></a>
                         </li>
                         <li class="nav-item">
                              <a class="nav-link" href="latest_notice.php"><i class="fa fa-money"></i> All Notice</a>
                         </li>
                         <li class="nav-item">
                              <a class="nav-link" href="search_notice.php"><i class="fa fa-pencil"></i> Notice Search</a>
                         </li>
                         <li class="nav-item">
                              <a class="nav-link" href="assignment.php"><i class="fa fa-bullhorn"></i> Dashboard Assignments</a>
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
                              <a class="nav-link" href="#">Profile</a>
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
                              <a class="nav-link disabled" href="f_logout.php">logout</a>
                         </li>
                    </ul>
               </div>
          </nav>

          <nav aria-label="breadcrumb">
               <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Faculty Profile</li>
               </ol>
          </nav>

          <div class="container-fluid">
               <div class="card mb-3">
                    <div class="card-header">
                         Faculty Details
                    </div>
                    <table class="table">
                         <thead>
                              <tr>
                                   <th scope="col"></th>

                              </tr>
                         </thead>
                         <tbody>
                              <tr>
                                   <th scope="row">Faculty name</th>
                                   <td><?php echo $_SESSION['name']; ?></td>
                             </tr>
                             <tr>
                                   <th scope="row">Course</th>
                                   <td><?php echo $_SESSION['course']; ?></td>

                              </tr>
                             <tr>
                                   <th scope="row">Department</th>
                                   <td><?php echo $_SESSION['branch']; ?></td>

                              </tr>
                             <tr>
                                   <th scope="row">faculty </th>
                                   <td><?php echo $_SESSION['id']; ?></td>

                              </tr>


                         </tbody>
                    </table>
                    <div class="card-footer">
                         Need to Upload Notices? <a href="dashboard.php">Go to Notice dashboard!</a>
                    </div>
               </div>

               <div class="row">
                    <div class="col mb-3">
                         <div class="card">
                              <div class="card-header">
                                   Message to Student
                              </div>
                              <div class="card-body">
                                <form action="message.php" method="POST">
                                   <h5 class="card-title" style="left:0px;">Roll no of Student : <input type="text" name="roll_no"></input></h5>
                                   <h5 class="card-title" style="left:0px;">Your message: <input type="text" name="message"></input></h5>
                                   <p class="card-text">You have only access to :<?php echo $_SESSION['branch']; ?></p>
                                   <input type="submit" name="upload" class="btn btn-primary"></input>
                                 </form>
                              </div>
                         </div>
                    </div>
<!--
                    <div class="col mb-3">
                         <div class="card">
                              <div class="card-header">
                                   Department Notice's
                              </div>
                              <div class="card-body">
                                   <h5 class="card-title"><?php echo $_SESSION['branch']; ?></h5>
                                   <p class="card-text"></p>
                                   <br>

                                   <a href="#" class="btn btn-primary">All Notices </a>
                                   <br><br>
                              </div>
                         </div>
                    </div>
                  -->

               </div>
          </div>

     </div>
</div>
         <div class="footer">
               <div class="container">
                    <span class="text-white"><center>Copyright &copy; 2018, Akinfo. All Rights Reserved.</center></span>
               </div>
          </div>

    </body>
</html>
