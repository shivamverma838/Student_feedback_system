<!DOCTYPE html>
<html>
 <head>
   <link rel="stylesheet" type="text/css" href="dash.css">
   <link rel="icon" type="image/png" href="../images/feedbacklogo.png">
   <title>FeedBack | Dashboard</title>
 </head>
 <body>
  <div class="title">
    <a href="../"><img src="../images/home.png" class="home"></a>
    <img src="../images/feedbacklogo.png" class="logo"/>
    <label class="f">Feedback</label>
    <a href="../" ><div class="logout">Logout</div></a>
  </div>
  <h2 style="margin-top: 80px;">Hi there 
  	  <?php
  	   session_start();
  	   echo $_SESSION["st_username"];
       echo ", ";
       echo $_SESSION["class"];
  	  ?>
  </h2>
  <div id="lgform">
    <center><h1>Subject</h1></center> 
	<?php
     include('../db_config.php');

     $sql = "SELECT te_username, sub_name, sub_code FROM teachersinfo WHERE class = '".$_SESSION["class"]."'";
     $result = $conn->query($sql);

     if($result->num_rows > 0) {
      while($row = $result->fetch_assoc()){
    ?>
      <button onclick="location.href='feedform/?sub_name=<?php echo $row["sub_name"]; ?>'" class="s1"><div class="flex">
      <?php
        echo $row["sub_name"];
      ?>
      </div>
      <img src="../images/right-arrow.png" class="arrow"/>
      </button>
    <?php
      }
     }
    ?>
  </div>
</body>
</html>