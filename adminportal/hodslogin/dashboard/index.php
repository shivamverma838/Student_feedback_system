<!DOCTYPE html>
<html>
 <head>
   <link rel="stylesheet" type="text/css" href="teachersmenu.css">
   <link rel="icon" type="image/png" href="../../../images/feedbacklogo.png">
   <title>FeedBack | Dashboard</title>
 </head>
 <body>
  <div class="title">
    <a href="../../"><img src="../../../images/home.png" class="home"></a>
    <img src="../../../images/feedbacklogo.png" class="logo"/>
    <label class="f">Feedback</label>
		<a href="../../" ><div class="logout">Logout</div></a>
  </div>
 
    <div class="titlebar">
 
      <?php
  	   session_start();
  	   echo $_SESSION["hod_username"];
       echo ", ";
       echo $_SESSION["dept"];
  	  ?>    

    </div>
		 
		
	<div class="listbody">
	
	 <div class="menu">
		
	<?php
        include('../../../db_config.php');

        $sql = "SELECT te_username, sub_name, sub_code FROM teachersinfo WHERE dept = '".$_SESSION["dept"]."'";
        $result = $conn->query($sql);

        if($result->num_rows > 0) {
          while($row = $result->fetch_assoc()){
      ?>
      <button onclick="location.href='teachersmenu/?te_username=<?php echo $row["te_username"]; ?>'" class="teacher">
      <?php
        echo $row["te_username"];
      ?>
      </button>
    <?php
      }
     }
    ?>
		 
	 </div>
	 
	 </div>
 
</body>
</html>