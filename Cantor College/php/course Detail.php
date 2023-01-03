<?php
require_once("php/configuration.php");
// query to get film by filmID
$getcourseID = $_GET["courseID"];
$stmt = $mysqli->prepare( "SELECT * FROM courses WHERE courseID = ?" );
$stmt->bind_param( 'i', $getcourseID );
$stmt->execute();
$result = $stmt->get_result();
$obj = $result->fetch_object();
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
        </header>
   </div>
      </div>
      <div>
        <?php
        echo "<div class=\"courseDetail\">";
        echo "<div>";
        echo "<div>";
        echo "<p>{$obj->courseSummary}</p>";
        echo "</div>";
        echo "</div>";
        ?>
      </div>
</body>
</html>