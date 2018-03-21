<!DOCTYPE html>
<html>
 <head>
  <link rel="stylesheet" type="text/css" href="teacherslogin.css">
  <link rel="icon" type="image/png" href="../../images/feedbacklogo.png">
  <title>FeedBack | Teachers Login</title>
 </head>
 <body>
   <div class="title">
	   <a href="../"><img src="../../images/home.png" class="home"></a>
     <img src="../../images/feedbacklogo.png" class="logo"/>
     <label class="f">Feedback</label>
   </div>
   <div id="lgform">
	   <center><h1>Teachers Login</h1></center> 
	   <center><img src="../../images/teacher.png" class="student"/></center>
     <form class="myform" action="" method="post">
	     <label><b>Username</b></label><br>
       <input type="text" class="inputvalue" name="username" placeholder="Enter your username"/><br>
	     <label><b>Password</b></label><br>
       <input type="password" class="inputvalue" name="password" placeholder="Enter your Password"/><br>
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
              $sql = "SELECT password FROM teachers WHERE te_username = '".$username."'";
              $result = $conn->query($sql);

              if ($result->num_rows > 0) {
              // output data of each row
              $row = $result->fetch_assoc();
              if( $_POST["password"] == $row["password"] ){
                echo "You are logged in...";
                session_start();
                $_SESSION["te_username"] = $_POST["username"];
                sleep(2);
                header("Location: dashboard/");
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
	     <input type="submit" id="login_btn" value="Login"/><br>
     </form>
   </div>
 </body>
</html>