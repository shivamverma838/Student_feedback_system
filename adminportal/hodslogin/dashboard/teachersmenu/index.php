<!DOCTYPE html>
<html>
 <head>
   <link rel="stylesheet" type="text/css" href="teachersmenu.css">
   <link rel="icon" type="image/png" href="../../../../images/feedbacklogo.png">
   <title>FeedBack | Dashboard</title>
 </head>
 <body>
  <div class="title">
    <a href="../../../"><img src="../../../../images/home.png" class="home"></a>
    <img src="../../../../images/feedbacklogo.png" class="logo"/>
    <label class="f">Feedback</label>
		<a href="../../../" ><div class="logout">Logout</div></a>
  </div>
 
    <div class="titlebar">
 
      <?php
  	   session_start();
       $te_username = $_GET["te_username"];
       $_SESSION["te_username"] = $te_username;
  	   echo $_SESSION["te_username"];
       echo ", ";
       echo $_SESSION["dept"];
  	  ?>    

    </div>
		 
		
	<div class="listbody">

   <h1>Select the class of this teacher :</h1>
	
	 <div class="menu">
		
	<?php
        include('../../../../db_config.php');
        
        $_SESSION["te_username"] = $te_username;
        $sql = "SELECT sub_name, sub_code, class FROM teachersinfo WHERE te_username = '".$te_username."'";
        $result = $conn->query($sql);

        if($result->num_rows > 0) {
          while($row = $result->fetch_assoc()){
      ?>
      <button onclick="location.href='scorecard/?class=<?php echo $row["class"]; ?>&sub_name=<?php echo $row["sub_name"] ?>'" class="teacher">
      <?php
        echo $row["sub_name"].", ".$row["class"];
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