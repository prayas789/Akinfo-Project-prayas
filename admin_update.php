<?php
  session_start();
  if(!isset($_SESSION['id_admin'])){
  header('location:a_login.html');
  }
       $url = $_SESSION['url'];
 ?>
<!DOCTYPE html>
<html>
<head>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
   <link rel="stylesheet" href="pes.css" type="text/css">
    <link rel="stylesheet" href="style.css" type="text/css">
    <style>

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
                                   <img class="img" src="images\img-01.png" width="50%"  /><br/>
                                   <span><?php echo $_SESSION['name']; ?></span>
                                  <br>
                                   <small class="text-muted"></small>

                              </div>
                         </li>
                         <li class="nav-item active">
                              <a class="nav-link" href="important_dashboard.php"><i class="fa fa-dashboard"></i> Admin Notice Dashboard <span class="sr-only">(current)</span></a>
                         </li>
                         <li class="nav-item">
                              <a class="nav-link" href="important_notice.php"><i class="fa fa-money"></i> Your Notices</a>
                         </li>
                         <li class="nav-item">
                              <a class="nav-link" href="admin_search.php"><i class="fa fa-pencil"></i> Search Details </a>
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
                              <a class="nav-link" href="<?php echo $url; ?>">Profile</a>
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
                              <a class="nav-link disabled" href="a_logout.php">logout</a>
                         </li>
                    </ul>
               </div>
          </nav>



          <div class="container-fluid">
               <div class="card mb-3">
                    <div class="card-header">
                        <h3 align="center">Admin Panel</h3>
                    </div>
                    <div style="height:500px;background:;margin-top:20px">

                    <div  style="background-color:#f2f2f2;width:200px;height:200px;border-radius:50px;margin-bottom:50px;margin-left:100px;">
                      <a href="faculty_update.php">
                      <img style="width:100px;height:100px;margin-left:45px;margin-top:40px;margin-bottom:10px;"  src="images/icons/teacher.png">
                    </a>
                      <h6 align="center">Update faculty details</h6>
                  </div>
                    <div style="background-color:#f2f2f2;width:200px;height:200px;
                    margin-left:600px ;border-radius:50px;position:absolute;margin-top:-250px;">
                    <a href="delete_notice.php">
                      <img style="width:100px;height:100px;margin-left:45px;margin-top:40px;margin-bottom:10px;"   src="images/icons/notice.png">
                    </a>
                      <h6 align="center">Manage All Notices</h6>
                    </div>
                    <div style="background-color:#f2f2f2;width:200px;height:200px;border-radius:50px;margin-bottom:50px;margin-left:100px;">
                    <a href="student_update.php">
                      <img style="width:100px;height:100px;margin-left:45px;margin-top:40px;margin-bottom:10px;"   src="images/icons/student.png">
                    </a>
                      <h6 align="center">Update Student details</h6>
                    </div>
                    <div style="background-color:#f2f2f2;width:200px;height:200px;
                    margin-left:600px ;border-radius:50px;position:absolute;margin-top:-250px;">
                    <a href="admin_search.php">
                      <img style="width:100px;height:100px;margin-left:45px;margin-top:40px;margin-bottom:10px;"   src="images/icons/search.png">
                    </a>
                      <h6 align="center">Search Person</h6>
                    </div>
                  </div>
               </div>
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
