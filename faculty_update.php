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

          <nav aria-label="breadcrumb">
               <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo $url; ?>"><i class="fa fa-home"></i> Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Faculty Update</li>
               </ol>
          </nav>

          <div class="container-fluid">
               <div class="card mb-3">
                    <div class="card-header">
                        Update faculty Details
                    </div>
                    <table class="table">
                         <form action="f_update.php" method="POST" >
                         <tbody>

                           <tr>
                                <th scope="row">Enter Faculty ID</th>
                                <td><input name="f_id" required></input></td>
                          </tr>
                              <tr>
                                   <th scope="row">Update Faculty name</th>
                                   <td><input name="f_name"></input></td>
                             </tr>
                             <tr>
                                   <th scope="row"> Update Course</th>
                                   <td><select class="wrap-input100 input100" name="f_course">
                       												<option >--Course--</option>
                                               <option value="B.Tech">B.Tech</option>
                                               <option value="MBA">MBA</option>
                                               <option value="M.Tech">M.tech</option>
                                               </select></td>

                              </tr>
                             <tr>
                                   <th scope="row">Update Branch</th>
                                   <td><select class="wrap-input100 input100" name="f_branch" required>
                       												<option>--Branch--</option>
                       												<option value="CSE">CSE</option>
                                               <option value="CE">CE</option>
                                               <option value="ME">ME</option>
                                               <option value="ECE">ECE</option>
                                               <option value="EN">EN</option>
                                               <option value="IT">IT</option>
                                               </select></td>
                              </tr>
                             <tr>
                                   <th scope="row">Update Email </th>
                                   <td><input name="f_email"></input></td>
                              </tr>
                              <tr>
                                    <th scope="row">Update Password </th>
                                    <td><input name="f_password"></input></td>
                               </tr>
                         </tbody>
                         <input type="submit" name="upload" value="Update Details" class="btn btn-primary" >
                    </table>
                  </form>
                    <div class="card-footer">
                         Upload Notices? <a href="dashboard.php">Go to Faculty Notice dashboard!</a>
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
