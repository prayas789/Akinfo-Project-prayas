<?php
session_start();
$url = $_SESSION['url'];
?>
<!DOCTYPE html>
<html>
<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

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
                    <img src="Images/img-01.png" width="50%"  /><br/>

                         <li class="nav-item">
                              <a class="nav-link" href="dashboard.php"><i class="fa fa-dashboard"></i>Notice Dashboard <span class="sr-only">(current)</span></a>
                         </li>
                         <li class="nav-item">
                              <a class="nav-link" href="latest_notice.php"><i class="fa fa-money"></i> Important Notice</a>
                         </li>
                         <li class="nav-item">
                              <a class="nav-link" href="#"><i class="fa fa-pencil"></i> College Portal</a>
                         </li>
                         <li class="nav-item active">
                              <a class="nav-link active" href="f_assig_view.php"><i class="fa fa-bullhorn"></i> Assignments</a>
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
                              <a class="nav-link disabled" href="logout.php">logout</a>
                         </li>
                    </ul>
               </div>
          </nav>

          <nav aria-label="breadcrumb">
               <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href=""><i class="fa fa-home"></i> Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
               </ol>
          </nav>

          <div class="container-fluid">
               <div class="card mb-3">
                 <div class="card-header" runat="server">
                      Notice Dashboard
                 </div>
                 <div>
                 <h5>Preview :-</h5>
                 <img id="image1" src="#" style="margin-left:20px;height:400px;width:300px;border: solid;">
                   </img>
                   <div style="right : 0px;margin-left:330px;margin-top:-400px;height:400px;width:600px;">
                     <form action="image_assig.php" method="post" enctype="multipart/form-data"  runat="server">
                       <input type="hidden" name="size" value="1000000">
                       Select image to upload:
                       <input type="file"  name="image"  class="btn btn-primary">
                       <br><br>
                       <select class="wrap-input100 input100" name="section" required>
               				 		<option>--Section--</option>
               				 		<option value="1">I</option>
               				 		<option value="2">II</option>
               				 		<option value="3">III</option>
               				 		<option value="4">IV</option>
               				 		</select>
                       Deadline:
                       <input type="date" name="deadline">
                       <br><br>

             				 <select class="wrap-input100 input100" name="sem" required>
             				 		<option>--Semester--</option>
             				 		<option value="I">I</option>
             				 		<option value="II">II</option>
             				 		<option value="III">III</option>
             				 		<option value="IV">IV</option>
             				 		<option value="V">V</option>
             				 		<option value="VI">VI</option>
             						<option value="VII">VII</option>
             						<option value="VIII">VIII</option>
             				 		</select>

                       Validity:
                       <input name="val1" type="date"> -   <input name="val2" type="date">

                     <br><br>
                     <div class="col mb-3">
                          <div class="card">
                               <div class="card-header">
                                    Addtional information :-
                               </div>
                               <textarea name="text" type="text" rows="6" cols="80"></textarea>

                     </div>
                     </div>
                     <input type="submit" name="upload" value="Upload Notice" class="btn btn-primary" >
                     </form>
            </div>


<br><br>
                    <div class="col mb-3">
                         <div class="card">
                              <div class="card-header">
                                   Assigments Details
                              </div>
                              <div class="card-body">
                                   <h5 class="card-title"><?php echo $_SESSION['branch']; ?> Assigments</h5>
                                   <p class="card-text"><?php echo $_SESSION['name']; ?></p>
                                   <br>

                                   <a href="assig_view" class="btn btn-primary">All Assigments </a>
                                   <br><br>
                              </div>
                         </div>

                    </div>
               </div>
               </div>
          </div>

     </div>
</div>
         <div class="footer">
               <div class="container">
                    <span class="text-white"><center>Copyright &copy; 2018, AKINFO. All Rights Reserved.</center></span>
               </div>
          </div>

    </body>
</html>
<script>
function readURL(input) {

  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function(e) {
      $('#image1').attr('src', e.target.result);
    }

    reader.readAsDataURL(input.files[0]);
  }
}

$("#image").change(function() {
  readURL(this);
});
</script>
