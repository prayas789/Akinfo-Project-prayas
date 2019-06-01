<?php
        session_start();
        if(!isset($_SESSION['roll_no'])){
        header('location:login.html');
        }
        $db = mysqli_connect("localhost", "root", "", "akinfo");
        $branch1 = $_SESSION['branch'];
        $sem1 = $_SESSION['sem'];
        $section1 = $_SESSION['section'];
        $sql = "SELECT * FROM assig WHERE branch='$branch1' && sem='$sem1' && section = '$section1'";
        $result = mysqli_query($db, $sql);
        $url = $_SESSION['url'];
?>
<html>
<head>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">

    <link rel="stylesheet" href="style.css" type="text/css">
    <style>
img {

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
                                   <img src="Images/img-01.png" width="50%"  /><br/>
                                   <!--<span>Hello Rishab</span>
                                  <br>
                                   <small class="text-muted">faculty@gmail.com</small>

                              </div>
                         </li>--><br><br><br>
                         <li class="nav-item">
                              <a class="nav-link" href="dashboard.php"><i class="fa fa-dashboard"></i>Notice Dashboard <span class="sr-only">(current)</span></a>
                         </li>
                         <li class="nav-item">
                              <a class="nav-link" href="latest_notice.php"><i class="fa fa-money"></i>All Notice</a>
                         </li>
                         <li class="nav-item">
                              <a class="nav-link" href="#"><i class="fa fa-pencil"></i> College Portal</a>
                         </li>
                         <li class="nav-item active ">
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
                              <a class="nav-link active" href="<?php echo $url; ?>">Profile</a>
                         </li>
                         <li class="nav-item">

                         </li>
                         <li class="nav-item">
                              <a class="nav-link" href="logout.php">logout</a>
                         </li>
                    </ul>
               </div>
          </nav>

          <nav aria-label="breadcrumb">
               <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo $url; ?>"><i class="fa fa-home"></i> Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Dashboard/ Assignment</li>
               </ol>
          </nav>

          <div class="container-fluid">
               <div class="card mb-3">
                    <div class="card-header">
                         <h6 style="display:inline-block;margin-right:10px;">Assignments</h6>
                         <h6 class="btn btn-primary" style="border-radius:50px;"><?php echo "$branch1"; ?><h6>
                        <h6 class="btn btn-primary" style="position:absolute;margin-left:200px;margin-top:-54px;border-radius:50px;">
                          Semester : <?php echo   $sem1; ?></h6>
                         <h6 class="btn btn-primary" style="position:absolute;margin-left:500px;margin-top:-54px;border-radius:50px;">
                           Section : <?php echo   $section1; ?></h6>
                    </div>
                    <table class="table">
                         <thead>
                              <tr>
                                   <th scope="col"></th>

                              </tr>
                         </thead>
                         <tbody>

                           <?php
                          while ($row = mysqli_fetch_array($result)) {
                          echo "<div style='width:980px;height:700px;border:;'>";
                          echo   "<img src='images/".$row['image']."' align='left' style='width:500px;height:600px;border:;'>";
                          echo   "<div  align='left' style='position:absolute;right: 0px;height:700px;width:450px;border:;'>";
                          echo   "<br>";
                          echo   "<h5 class='btn btn-primary' style='border-radius:50px;'>Uploaded On :  ".$row['val1']." </h5>";
                          echo   "<br><br>";
                          echo   "<h5 class='btn btn-primary'style='border-radius:50px;'>Deadline :  ".$row['val2']."</h5>";
                          echo   "<br><br>";

                          echo   "<h5 class='btn btn-primary'style='border-radius:50px;'>Additional Information :</h6>";
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
                         ?><!--<tr>
                                   <th scope="row">Faculty name</th>
                                   <td>Name@Faculty</td>
                             </tr>
                             <tr>
                                   <th scope="row">Department</th>
                                   <td>Computer Science</td>

                              </tr>
                             <tr>
                                   <th scope="row">Number Of Classes this week</th>
                                   <td>13</td>

                              </tr>
                            -->

                         </tbody>
                    </table>
                    <div class="card-footer">

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
