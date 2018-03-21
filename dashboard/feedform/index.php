<!DOCTYPE html>
<html lang="en">
<head>
	<script defer src="fontawesome-all.min.js"></script>
	<meta charset="UTF-8">
	<title>FeedBack | Form</title>
  <link rel="icon" type="image/png" href="../../images/feedbacklogo.png">
	<style>
		body
		{
			border: 0px;
			margin: 0px;
			padding: 0px;
		}
		.rating {
			border: none;
			border-bottom: 1px solid #ddd;
			padding: 16px 0;
			line-height:1.2;
			width: 60%;
			margin: 0 auto;
      font-family: 'Roboto', 'Noto', sans-serif;
		}
    .rating input {
      visibility: hidden;
    }
		.rating:not(:checked) > input {
				position:absolute;
				top:-9999px;
				clip:rect(0, 0, 0, 0);
		}
		.rating:not(:checked) > label {
				float:right;
				width:1em;
				overflow:hidden;
				white-space:nowrap;
				cursor:pointer;
				font-size:200%;
				line-height:1.2;
				color:#ddd;
		}
		.rating:not(:checked) > label:before {
				content: &#9733;
		}
		.rating > input:checked ~ label {
				color: #ff7700;
		}
		.rating:not(:checked) > label:hover, .rating:not(:checked) > label:hover ~ label {
				color: gold;
		}
		.rating> input:checked + label:hover, .rating> input:checked + label:hover ~ label, .rating> input:checked ~ label:hover, .rating> input:checked ~ label:hover ~ label, .rating> label:hover ~ input:checked ~ label {
				color: #ea0;
		}
		.rating > label:hover {
				transform: scale(1.2);
		}
		.rating > label:active {
				transform: scale(.8);
		}
		.block {
			display: block;
			width: 100%;
		}
		.title
	{
		background-color:#108e93; 
		position:relative;
		top: 0px;
		left: 0px;
		width: 100%;
		height:64px;
		

	}
		.home{
    position: absolute;
    width: 50px;
        margin-left:10px;
        margin-top: 5px;
    }
		.home:hover{
   	color: white;
	
	
}

.submit {
    background-color:#008CBA;
    padding: 12px 16px;
    font-size: 16px;
    border: none;
    color: white;
    font-weight: 700;
    text-align: center;
    }
    .submit:hover
    {
    background-color: #000;
    }

i{
	text-shadow: 2px 2px 5px #000;
}
	.logo{
    width: 45px;
    margin-left:72px;
    height:45px;
    margin-top: 8px;
  }
	.f{
		position: absolute;
		left: 125px;
		top: 15px;
		font-size:25px;
		color: white;
		font-weight: bold;
	}
  .logout
{
background-color:aliceblue;
position: absolute;
right: 20px;
top: 10px;
margin: 0 auto;
width:100px;
text-align: center;
height:20px;
padding: 10px;
border-radius: 3px;
text-decoration: none;
color: black;
  
}
.logout:hover{

  background-color:#fc0208;
}
			.details{
			background-color: #207239;
			width: 100%;
			padding: 5px;
			color: white;
			font-weight: bold;
		}	

    #snackbar {
    visibility: hidden;
    min-width: 250px;
    margin-left: -125px;
    background-color: #333;
    color: #fff;
    text-align: center;
    border-radius: 2px;
    padding: 16px;
    position: fixed;
    z-index: 1;
    left: 50%;
    bottom: 30px;
    font-size: 17px;
}

#snackbar.show {
    visibility: visible;
    -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
    animation: fadein 0.5s, fadeout 0.5s 2.5s;
}

@-webkit-keyframes fadein {
    from {bottom: 0; opacity: 0;} 
    to {bottom: 30px; opacity: 1;}
}

@keyframes fadein {
    from {bottom: 0; opacity: 0;}
    to {bottom: 30px; opacity: 1;}
}

@-webkit-keyframes fadeout {
    from {bottom: 30px; opacity: 1;} 
    to {bottom: 0; opacity: 0;}
}

@keyframes fadeout {
    from {bottom: 30px; opacity: 1;}
    to {bottom: 0; opacity: 0;}
}
#button
{
color: white;
float: right;
border: 0px;
background-color: brown;
padding: 5px;
width: 100px;
border-radius: 3px;
		}
.butdiv{
  margin: 0 auto;
  max-width: 60%;
  text-align: right;
  top: 10px;
  margin-top: 20px;
		}
.msg{
 text-align: center;
 margin: 0 auto;
 font-weight: lighter;
 color: red;
 width: 50%;
 top: 30px;
 position: relative
}
	</style>
</head>
<body>
  <?php 
    session_start();
  ?>
	<div class="title">
	<a href="../../"><img src="../../images/home.png" class="home"></a>
    <img src="../../images/feedbacklogo.png" class="logo"/>
    <label class="f">FeedBack</label>
    <a href="../../" ><div class="logout">Logout</div></a>
    </div>
	<div class="details">Subject name:&nbsp;
    <?php
     $_SESSION["sub_name"] = $_GET["sub_name"];
     echo $_GET["sub_name"];
    ?>
  <br>
  Teachers name:&nbsp;  
    <?php
    include('../../db_config.php');
    $sql1 = "SELECT sub_code, te_username FROM teachersinfo WHERE  sub_name='".$_GET["sub_name"]."' AND class='".$_SESSION["class"]."'";
    $result1 = $conn->query($sql1);

    if($result1->num_rows > 0){
      $row = $result1->fetch_assoc();
      $_SESSION["te_username"] = $row["te_username"];
      $_SESSION["sub_code"] = $row["sub_code"];
    }

    echo $_SESSION["te_username"];
    ?>
	</div>

<form action="<?php  $_PHP_SELF ?>" method="post">
<fieldset class="rating">
   1.The teacher covers the entire syllabus
    <input type="radio" id="star5-1" name="cover" value="5" /><label for="star5-1" title="Rocks!"><span>&#9733</span></label>
    <input type="radio" id="star4-1" name="cover" value="4" /><label for="star4-1" title="Pretty good"><span>&#9733</span></label>
    <input type="radio" id="star3-1" name="cover" value="3" /><label for="star3-1" title="Meh"><span>&#9733</span></label>
    <input type="radio" id="star2-1" name="cover" value="2" /><label for="star2-1" title="Kinda bad"><span>&#9733</span></label>
    <input type="radio" id="star1-1" name="cover" value="1" /><label for="star1-1" title="Sucks big time"><span>&#9733</span></label>
</fieldset>
<fieldset class="rating">
   2.The teacher discusses topics in detail
    <input type="radio" id="star5-2" name="discuss" value="5" /><label for="star5-2" title="Rocks!"><span>&#9733</span></label>
    <input type="radio" id="star4-2" name="discuss" value="4" /><label for="star4-2" title="Pretty good"><span>&#9733</span></label>
    <input type="radio" id="star3-2" name="discuss" value="3" /><label for="star3-2" title="Meh"><span>&#9733</span></label>
    <input type="radio" id="star2-2" name="discuss" value="2" /><label for="star2-2" title="Kinda bad"><span>&#9733</span></label>
    <input type="radio" id="star1-2" name="discuss" value="1" /><label for="star1-2" title="Sucks big time"><span>&#9733</span></label>
</fieldset>
<fieldset class="rating">
   3.The teacher possesses deep knowledge of the subject taught
    <input type="radio" id="star5-3" name="knowledge" value="5" /><label for="star5-3" title="Rocks!"><span>&#9733</span></label>
    <input type="radio" id="star4-3" name="knowledge" value="4" /><label for="star4-3" title="Pretty good"><span>&#9733</span></label>
    <input type="radio" id="star3-3" name="knowledge" value="3" /><label for="star3-3" title="Meh"><span>&#9733</span></label>
    <input type="radio" id="star2-3" name="knowledge" value="2" /><label for="star2-3" title="Kinda bad"><span>&#9733</span></label>
    <input type="radio" id="star1-3" name="knowledge" value="1" /><label for="star1-3" title="Sucks big time"><span>&#9733</span></label>
</fieldset>
<fieldset class="rating">
   4.The teacher communicate clearly
    <input type="radio" id="star5-4" name="communicate" value="5" /><label for="star5-4" title="Rocks!"><span>&#9733</span></label>
    <input type="radio" id="star4-4" name="communicate" value="4" /><label for="star4-4" title="Pretty good"><span>&#9733</span></label>
    <input type="radio" id="star3-4" name="communicate" value="3" /><label for="star3-4" title="Meh"><span>&#9733</span></label>
    <input type="radio" id="star2-4" name="communicate" value="2" /><label for="star2-4" title="Kinda bad"><span>&#9733</span></label>
    <input type="radio" id="star1-4" name="communicate" value="1" /><label for="star1-4" title="Sucks big time"><span>&#9733</span></label>
</fieldset>
<fieldset class="rating">
   5.The teacher inspires me by his/her knowledge in the subject
    <input type="radio" id="star5-5" name="inspire" value="5" /><label for="star5-5" title="Rocks!"><span>&#9733</span></label>
    <input type="radio" id="star4-5" name="inspire" value="4" /><label for="star4-5" title="Pretty good"><span>&#9733</span></label>
    <input type="radio" id="star3-5" name="inspire" value="3" /><label for="star3-5" title="Meh"><span>&#9733</span></label>
    <input type="radio" id="star2-5" name="inspire" value="2" /><label for="star2-5" title="Kinda bad"><span>&#9733</span></label>
    <input type="radio" id="star1-5" name="inspire" value="1" /><label for="star1-5" title="Sucks big time"><span>&#9733</span></label>
</fieldset>
<fieldset class="rating">
   6.The teacher is punctual to the class
    <input type="radio" id="star5-6" name="punctual" value="5" /><label for="star5-6" title="Rocks!"><span>&#9733</span></label>
    <input type="radio" id="star4-6" name="punctual" value="4" /><label for="star4-6" title="Pretty good"><span>&#9733</span></label>
    <input type="radio" id="star3-6" name="punctual" value="3" /><label for="star3-6" title="Meh"><span>&#9733</span></label>
    <input type="radio" id="star2-6" name="punctual" value="2" /><label for="star2-6" title="Kinda bad"><span>&#9733</span></label>
    <input type="radio" id="star1-6" name="punctual" value="1" /><label for="star1-6" title="Sucks big time"><span>&#9733</span></label>
</fieldset>
<fieldset class="rating">
   7.The teacher engages the class for the full duration and completes the course in time
    <input type="radio" id="star5-7" name="engage" value="5" /><label for="star5-7" title="Rocks!"><span>&#9733</span></label>
    <input type="radio" id="star4-7" name="engage" value="4" /><label for="star4-7" title="Pretty good"><span>&#9733</span></label>
    <input type="radio" id="star3-7" name="engage" value="3" /><label for="star3-7" title="Meh"><span>&#9733</span></label>
    <input type="radio" id="star2-7" name="engage" value="2" /><label for="star2-7" title="Kinda bad"><span>&#9733</span></label>
    <input type="radio" id="star1-7" name="engage" value="1" /><label for="star1-7" title="Sucks big time"><span>&#9733</span></label>
</fieldset>
<fieldset class="rating">
   8.The teacher comes fully prepared for the class
    <input type="radio" id="star5-8" name="prepare" value="5" /><label for="star5-8" title="Rocks!"><span>&#9733</span></label>
    <input type="radio" id="star4-8" name="prepare" value="4" /><label for="star4-8" title="Pretty good"><span>&#9733</span></label>
    <input type="radio" id="star3-8" name="prepare" value="3" /><label for="star3-8" title="Meh"><span>&#9733</span></label>
    <input type="radio" id="star2-8" name="prepare" value="2" /><label for="star2-8" title="Kinda bad"><span>&#9733</span></label>
    <input type="radio" id="star1-8" name="prepare" value="1" /><label for="star1-8" title="Sucks big time"><span>&#9733</span></label>
</fieldset>
<fieldset class="rating">
   9.The teacher provide guidance outside/inside the class
    <input type="radio" id="star5-9" name="guidance" value="5" /><label for="star5-9" title="Rocks!"><span>&#9733</span></label>
    <input type="radio" id="star4-9" name="guidance" value="4" /><label for="star4-9" title="Pretty good"><span>&#9733</span></label>
    <input type="radio" id="star3-9" name="guidance" value="3" /><label for="star3-9" title="Meh"><span>&#9733</span></label>
    <input type="radio" id="star2-9" name="guidance" value="2" /><label for="star2-9" title="Kinda bad"><span>&#9733</span></label>
    <input type="radio" id="star1-9" name="guidance" value="1" /><label for="star1-9" title="Sucks big time"><span>&#9733</span></label>
</fieldset>
<fieldset class="rating">
   10.The teacher was available to answer questions in office hours
    <input type="radio" id="star5-10" name="available" value="5" /><label for="star5-10" title="Rocks!"><span>&#9733</span></label>
    <input type="radio" id="star4-10" name="available" value="4" /><label for="star4-10" title="Pretty good"><span>&#9733</span></label>
    <input type="radio" id="star3-10" name="available" value="3" /><label for="star3-10" title="Meh"><span>&#9733</span></label>
    <input type="radio" id="star2-10" name="available" value="2" /><label for="star2-10" title="Kinda bad"><span>&#9733</span></label>
    <input type="radio" id="star1-10" name="available" value="1" /><label for="star1-10" title="Sucks big time"><span>&#9733</span></label>
</fieldset>
<div class="butdiv">
<input type="submit" value="SUBMIT" class="submit">
</div>
</form>
<div class="msg">
<?php
    
    $servername = "127.0.0.1";
    $username = "root";
    $password = "";
    $dbname = "feedie_base";

    if ($_SESSION["st_username"] AND $_SESSION["te_username"] AND isset($_POST["cover"]) AND isset($_POST["discuss"]) AND isset($_POST["knowledge"]) AND isset($_POST["communicate"]) AND isset($_POST["inspire"]) AND isset($_POST["punctual"]) AND isset($_POST["engage"]) AND isset($_POST["prepare"]) AND isset($_POST["guidance"]) AND isset($_POST["available"])){
            // Create connection
              $conn = new mysqli($servername, $username, $password, $dbname);

              $cover = $_POST["cover"];
              $discuss = $_POST["discuss"];
              $knowledge = $_POST["knowledge"];
              $communicate = $_POST["communicate"];
              $inspire = $_POST["inspire"];
              $punctual = $_POST["punctual"];
              $engage = $_POST["engage"];
              $prepare = $_POST["prepare"];
              $guidance = $_POST["guidance"];
              $available = $_POST["available"];
              //For checking whether user have already submit a feed on this teacher
              $sql_check = "SELECT st_username FROM feeds WHERE st_username = '".$_SESSION["st_username"]."' AND te_username = '".$_SESSION["te_username"]."'";
              $result_check = $conn->query($sql_check);
              if($result_check->num_rows > 0){
                $sql = "UPDATE feeds SET cover='".$cover."', discuss='".$discuss."', knowledge='".$knowledge."', communicate='".$communicate."', inspire='".$inspire."', punctual='".$punctual."', engage='".$engage."', prepare='".$prepare."', guidance='".$guidance."', available='".$available."' WHERE st_username='".$_SESSION["st_username"]."' AND te_username='".$_SESSION["te_username"]."'";
                $result = $conn->query($sql);
                if($result){
                  echo "Successful, ";
                  include('overall.php');
                }
                echo "Already done";
              }
              else{
                $sql1 = "UPDATE teachersinfo SET feed_applied = feed_applied + 1 WHERE te_username = '".$_SESSION["te_username"]."' AND class = '".$_SESSION["class"]."' AND sub_code = '".$_SESSION["sub_code"]."'";
                $result1 = $conn->query($sql1);
                if($result1){
                  echo "Updated";
                }

                $sql = "INSERT INTO feeds (st_username, te_username, sub_code, sub_name, class, cover, discuss, knowledge, communicate, inspire,  punctual, engage, prepare, guidance, available) VALUES('".$_SESSION["st_username"]."','".$_SESSION["te_username"]."','".$_SESSION["sub_code"]."','".$_SESSION["sub_name"]."','".$_SESSION["class"]."','".$cover."','".$discuss."','".$knowledge."','".$communicate."','".$inspire."','".$punctual."','".$engage."','".$prepare."','".$guidance."','".$available."')";
                $result = $conn->query($sql);
                if($result){
                  echo "Successful, ";
                  include('overall.php');
                }
                echo "First time";
              }
            
              $conn->close();
            }
            else{
              echo "Not Successful...  Please complete the feedback";
            }
   ?>
	</div>
<div id="snackbar">
</div>
</body>

<script>
  function myFunction() {
    var x = document.getElementById("snackbar")
    x.className = "show";
    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
}
</script>
</html>
