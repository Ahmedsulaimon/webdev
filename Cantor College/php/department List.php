<?php
require_once("php/configuration.php");
$queryCourses = "SELECT * FROM courses";
$resultCourses = $mysqli->query($queryCourses); 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, maximum-scale=7.0, user-scalable=yes"
    />
    <title>Cantor College Visitor page</title>
    <link rel="stylesheet" href="../css/mobile.css">

    <link rel="stylesheet"  media="only screen and (min-width : 720px)" href="../css/desktop.css">
     
  </head>
<body>
    <div class="logo">
      <header>
        <img src="../images/logo.png" alt="">
      </div>
          <nav>  
            <ul>
              <li><a href="index.html">Home</a></li>
              <li><a href="Faculties.html">Faculties</a></li>
              <li><a href="Administrative Support.html">Administrative Support</a></li>
              <li><a href="Student Services.html">Student Services</a></li>
              <li><a href="University Services.html">University Services</a></li>
              <li><a href="University Life.html">Life at University</a></li>
              <li><a href="Visit.html">Visit us</a></li>
              <li><a href="Communication.html">Communication</a></li>
            </ul>
          </nav>
        </div>
        </header>
   </div>
   <div class="course-table">  
    <table>
        <tr>
        <th>Course</th>
        <th>Course Type</th>
        <th>Course Award Name</th>
       </tr>
    <?php
    while($obj = $resultCourses->fetch_object()){
        echo "<tr>";
        echo "<td><a href=\"course Detail.php?courseID={$obj->courseID}\">{$obj->courseTitle}</a></td>";
        echo "<td>{$obj->courseType}</td>";
        echo "<td>{$obj->courseAwardName}</td>";
        echo "</tr>";
    }   
    ?>
</table>
</div>

</body>
</html>