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
                                   <img src="images\img-01.png" width="50%"  /><br/>
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

          <nav aria-label="breadcrumb">
               <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo $url; ?>"><i class="fa fa-home"></i> Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Student Update</li>
               </ol>
          </nav>
               <div class="container-fluid">
                    <div class="card mb-3">
                         <div class="card-header">
                             Update Student Details
                         </div>
                         <table class="table">
                              <form action="s_update.php" method="POST" >
                              <tbody>
                                <tr>
                                     <th scope="row">Enter Student Roll</th>
                                     <td><input name="s_roll_no" required></input></td>
                               </tr>
                               <tr>
                                    <th scope="row">Update Student Id</th>
                                    <td><input name="s_student_id"></input></td>
                              </tr>
                                   <tr>
                                        <th scope="row">Update Name</th>
                                        <td><input name="s_name"></input></td>
                                  </tr>
                                  <tr>
                                        <th scope="row">Update Course</th>
                                        <td><select class="wrap-input100 input100" name="s_course">
                            												<option >--Course--</option>
                                                    <option value="B.Tech">B.Tech</option>
                                                    <option value="MBA">MBA</option>
                                                    <option value="M.Tech">M.tech</option>
                                                    </select></td>

                                   </tr>
                                  <tr>
                                        <th scope="row">Update Branch</th>
                                        <td><select class="wrap-input100 input100" name="s_branch" required>
                            												<option>--Branch--</option>
                            												<option value="Computer Science">CSE</option>
                                                    <option value="Civil Engineering">CE</option>
                                                    <option value="Machnical Engineering">ME</option>
                                                    <option value="Electronic & Communication">ECE</option>
                                                    <option value="Electrical Engineering">EN</option>
                                                    <option value="Information Technology">IT</option>
                                                    </select></td>
                                   </tr>
                                   <tr>
                                         <th scope="row">Update sem </th>
                                         <td><select class="wrap-input100 input100" name="s_sem" required>
                                				 		<option>--Semester--</option>
                                				 		<option value="I">I</option>
                                				 		<option value="II">II</option>
                                				 		<option value="III">III</option>
                                				 		<option value="IV">IV</option>
                                				 		<option value="V">V</option>
                                				 		<option value="VI">VI</option>
                                						<option value="VII">VII</option>
                                						<option value="VIII">VIII</option>
                                				 		</select></input></td>
                                    </tr>
                                  <tr>
                                        <th scope="row">Update Email </th>
                                        <td><input name="s_email"></input></td>
                                   </tr>
                                   <tr>
                                         <th scope="row">Set Password </th>
                                         <td><input name="s_password"></input></td>
                                    </tr>
                              </tbody>
                              <input type="submit" name="upload" value="Update Details" class="btn btn-primary" >
                         </table>
                       </form>

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
