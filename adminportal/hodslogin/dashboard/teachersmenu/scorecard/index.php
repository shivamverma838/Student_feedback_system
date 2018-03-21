<html>
 <head>
  <link rel="stylesheet" type="text/css" href="teacherscorecard.css">
  <link rel="icon" type="image/png" href="../../../../../images/feedbacklogo.png">
  <title>FeedBack | Scorecard</title>
 </head>
	 <body>
  <div class="title">
	<a href="../../../../"><img src="../../../../../images/home.png" class="home"></a>
    <img src="../../../../../images/feedbacklogo.png" class="logo"/>
    <label class="f">FeedBack</label>
		<a href="../../../../"><div class="logout">Logout</div></a>
	</div>
	<div class="wrapper">

	<div class="scorecard">
	<h1>SCORECARD</h1>
	
	<?php
	 session_start();
	 $_SESSION["class"] = $_GET["class"];
	 $_SESSION["sub_name"] = $_GET["sub_name"];
	?>
	<div class="result">TEACHER NAME: <?php echo $_SESSION["te_username"] ?></div>
	<div class="result">CLASS : <?php echo $_SESSION["class"] ?></div>
	<div class="result">SUBJECT : <?php echo $_SESSION["sub_name"] ?></div>
	<div class="result">TOTAL SCORE</div>
	<!--<div class="result">RANKING: <?php include('rank.php');?></div>-->
	<div class="result">OVERALL: <?php include('overall.php');?></div>
	<a href="teachersview"><button class="showmore" style="background-color: red;">MORE DETAILS>></button></a>
	</div>	
	
	</div>
 
</body>
</html>