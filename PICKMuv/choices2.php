<html>
<style>
body
{
  background-color: black;
}
  .container
  { width : 100%;
    height : 40%;

    display : flex ;
    flex-direction : row ;
  }
  .div1
  { background-color: black;
    width : 50%;
    height: 100%;
    display: flex;
    flex-direction: column;
    position:relative;
  }
  .div2
  { color: white;
    text-align: center;
    align-items: center;
    font-size: 170%;
    width : 50%;
    height: 100%;
    background-color: #e82525;
    display: flex;
    justify-content: center;
  }
  .prop
  { padding: 3%;
    position: absolute;
    color: #e82525;
    font-size: 300%;
  }
  .img
  {
    width: 100%;
    position: absolute;
    height: 100%;
    opacity: 0.3;
  }
  .rangebar

  { margin-left: 3%;
     margin-top: 15%;
    position: absolute;
    width: 60%;

  }
  .subbtn {
background: #e82525;
color: white;
border-style: outset;
border-color: #e82525;
width : 8%;
height: 7%;
font: bold 15px arial, sans-serif;
text-shadow:none;
margin-left: 45%;
margin-top: 5%;
margin-bottom: 2%;
}
#p1
{ onloadedmetadata=""
  color: white;
}
.data
{
  color: white;
}
.tablinks
{
  font-size: 120%;
  background-color: red;
  color: white;
  border-color: red;
}
</style>
<body>
<form class="" action="<?php echo $_SERVER['PHP_SELF'] ; ?>" method="post">

<div class="data">
  <div id="usernamet">USERNAME : </div>
  <p id="p1"></p>
</div>
<div class="container">
<div class="div1">
  <img src = "images/action.jpg" class="img">

  <div >
  <input type="range" name="action" value="5" min = "0" max="10" step = "1" class="rangebar"></input>
</div>
<div class= "prop">
Action
</div>
</div>
<div class = "div2">

  Huge fan of Die Hard series? Action pack movies are full of fight-scenes and gruesome heroics by the protagonist.
</div>
</div>

<div class="container">
  <div class = "div2">
    Once a Marvel movie fan always a VFX fan. Let the imaginations run wide and beyond the scope.
  </div>
<div class="div1">
  <img src = "images/vfx.png" class="img">

  <div >
  <input type="range" name="vfx" value="5" min = "0" max="10" step = "1" class="rangebar"></input>
</div>
<div class= "prop">
VFX
</div>
</div>
</div>

<div class="container">

<div class="div1">
  <img src = "images/story.jpg" class="img">

  <div >
  <input type="range" name="story" value="5" min = "0" max="10" step = "1" class="rangebar"></input>
</div>
<div class= "prop">
Storyline
</div>
</div>

<div class = "div2">

</div>
</div>

<div class="container">
  <div class = "div2">
      If casting matters a lot.
  </div>
<div class="div1">
  <img src = "images/cast.jpg" class="img">

  <div >
  <input type="range" name="cast" value="5" min = "0" max="10" step = "1" class="rangebar"></input>
</div>
<div class= "prop">
Casting
</div>
</div>

</div>

<div class="container">

<div class="div1">
  <img src = "images/ent.jpeg" class="img">

  <div >
  <input type="range" name="entert" value="5" min = "0" max="10" step = "1" class="rangebar"></input>
</div>
<div class= "prop">
Music and Choreography
</div>
</div>
<div class = "div2">
Like to groove over music and dance? Are you one of those energetic music lovers? Or maybe an Arijit fan..
</div>
</div>
<input type="submit" class="subbtn" onclick="fun()"></input>
</form>
<button class="tablinks" onclick="openhom()">Home</button>
<?php
DEFINE('DB_USERNAME', 'root');
DEFINE('DB_PASSWORD', 'root');
DEFINE('DB_HOST', 'localhost');
DEFINE('DB_DATABASE', 'MovieReg');
$action = $_POST['action'];
$vfx = $_POST['vfx'];
$story = $_POST['story'];
$cast = $_POST['cast'];
$entert = $_POST['entert'];
session_start();
$username1 = $_SESSION['logusername'];
  $mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

  if (mysqli_connect_error()) {
    die('Connect Error ('.mysqli_connect_errno().') '.mysqli_connect_error());
  }

  $sql = "INSERT INTO preferences(username, action, vfx, story, cast, entert) VALUES('$username1','$action', '$vfx','$story','$cast', '$entert' )";
  if ($mysqli->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $mysqli->error;
}


$mysqli->close();
 ?>
 <script>
 var username ="<?php echo $username1 ?>";
 var action ="<?php echo $action ?>";
 document.getElementById("p1").innerHTML = username ;
 function fun()
 {
   header('Location: http://localhost:8888/untitledfolder/dashboard.php');

 }
 </script>


  </body>
</html>
