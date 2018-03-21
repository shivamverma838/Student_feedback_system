<!DOCTYPE html>

<html>

  <head>
		  <link rel="stylesheet" type="text/css" href="hodlogin.css">
  <link rel="icon" type="image/png" href="../../images/feedbacklogo.png">
  <title>HOD Login</title>

  </head>

  <body>
     
  <div class="title">
	   <a href="../"><img src="../../images/home.png" class="home"></a>
     <img src="../../images/feedbacklogo.png" class="logo"/>
     <label class="f">Feedback</label>
   </div>
		<div id="lgform">
	   <center><h1>HOD Login</h1></center> 
	   <center><img src="../../images/hod.png" class="student"/></center>

    <form action="" method="post">
			<label><b>Username</b></label>
      <input type="text" name="username" class="inputvalue" placeholder="Enter your username"><br> 
			<label><b>Password</b></label>
      <input type="password" name="password" class="inputvalue" placeholder="Enter your password"><br>
		  <div class="phpr">
      <label>
	
     <?php   

      $servername = "127.0.0.1";
      $username = "root";
      $password = "";
      $dbname = "feedie_base";
            
      if (isset($_POST["username"]) AND isset($_POST["password"])){
      // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        $username = $_POST["username"];
        $sql = "SELECT password, dept FROM hods WHERE hod_username = '".$username."'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
          // output data of each row
          $row = $result->fetch_assoc();
          if( $_POST["password"] == $row["password"] ){
            echo "Logging you in...";    
            session_start();
            $_SESSION["hod_username"] = $_POST["username"];
            $_SESSION["dept"] = $row["dept"];
            sleep(1);
            header("Location: dashboard/");  // lines
          }
          else
            echo "password incorrect";
          } 
        else {
            echo "Unknown username";
        }
        $conn->close();
       }

      ?>

      </label>
			</div>
			
			
      <input type="submit" value="Login" id="login_btn">
    </form>
		</div>
  
  </body>

</html>