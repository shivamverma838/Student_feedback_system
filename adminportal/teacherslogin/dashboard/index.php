<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="feedbackpage.css">
<link rel="icon" type="image/png" href="../../../images/feedbacklogo.png">
<title>FeedBack | Dashboard</title>
</head>
<body>
<div class="title">
    <a href="../../"><img src="../../../images/home.png" class="home"></a>
    <img src="../../../images/feedbacklogo.png" class="logo"/>
    <label class="f">FeedBack</label>
    <a href="../../" ><div class="logout">Logout</div></a>
</div>
<div class="bg">

<?php

   	  include('../../../db_config.php');
      
      session_start();
      $sql = "SELECT class, sub_name, sub_code FROM teachersinfo WHERE te_username = '".$_SESSION["te_username"]."'";
     $result = $conn->query($sql);

     if($result->num_rows > 0) {
      while($row = $result->fetch_assoc()){
?>
       <div class="dep1">
	     <div class="dep_name"><?php echo $row["class"]; ?></div>
         <a href="feedshow/?class=<?php echo $row["class"]; ?>">
         <div class="b1">OPEN</div>
         </a>
 
<?php
      }
     }

?>
</div>
		

	
	
</body>
</html>



