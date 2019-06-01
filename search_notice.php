<?php
  session_start();
  $db = mysqli_connect("localhost", "root", "", "akinfo");
  if(!isset($_SESSION['id'])){
  header('location:f_login.html');
  }

  if(isset($_POST['date'])){
    $p = $_POST['date'];
    $sql = "SELECT * FROM photos WHERE val1 ='$p'";
    $result = mysqli_query($db,$sql);
  }else {
    $sql = "SELECT * FROM photos WHERE val1 ='0'";
    $result = mysqli_query($db,$sql);
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
                         <li class="nav-item">
                              <a class="nav-link" href=""><i class="fa fa-bullhorn"></i> Assignments</a>
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
                        <h3 align="center">Search Notices</h3>
                    </div>
                    <div style="height:110px;background:;margin-top:20px;margin-left:10px;">
                      <form action="search_notice.php" method="post">
                      <h5>SELECT DATE :  <input type="date" name="date"></input></h5>
                      <br>
                      <input type="submit" name="n_search" class="btn btn-primary" value="Search" style="border-radius:50px;"></input>
                    </form>
                      <br><br><br>

                      <!--
                      <form action="Search.php" method="post">
                      <h5>Enter Student Id  :  <input name="roll_no" style="border-radius:50px;"></input></h5>
                      <br>
                      <input type="submit" name="search" class="btn btn-primary" value="Student Search" style="border-radius:50px;"></input>
                    </form> -->
                  </div>
                  <?php
                  while ($row = mysqli_fetch_array($result)) {
                  echo "<div style='width:980px;height:700px;border:;'>";
                  echo   "<img src='images/".$row['image']."' align='left' style='width:500px;height:600px;border:;'>";
                  echo   "<div  align='left' style='position:absolute;right: 0px;height:700px;width:450px;border:;'>";
                  echo   "<br>";
                  echo   "<h5 class='btn btn-primary'style='border-radius:50px;'>Uploaded On :  ".$row['val1']." </h5>";
                  echo   "<br><br>";
                  echo   "<h5 class='btn btn-primary'style='border-radius:50px;'>Valid Upto :  ".$row['val2']."</h5>";
                  echo   "<br><br>";
                  echo   "<h5 class='btn btn-primary' style='border-radius:50px;'>Additional Information :</h6>";
                  echo   "<div style='width:430px;height:380px;border-radius:50px;background: #f2f2f2;'>";
                  echo   "<h6 align='center'>";
                  echo   $row['text'];
                  echo   "</h6>";
                  echo   "</div>";
                  echo   "</div>";
                  echo   "</div>";
                  echo   "<div class='card-footer'>";
                  echo   "</div>";
                  }
                  ?>
                  <!--  For show notice -->
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
