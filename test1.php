<?php

         $db = mysqli_connect("localhost", "root", "", "akinfo");
         $sql = "SELECT * FROM photos";
         $result = mysqli_query($db, $sql);
         while ($row = mysqli_fetch_array($result)) {
           echo "<div id='img_div'>";
           echo "<img src ='images/".$row['image']."' >";
           echo "</div>";
         }
?>
