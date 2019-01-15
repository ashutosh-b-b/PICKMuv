<html>
<body>
  <style>
  body{
    background-color: black;
  }
  .tab {
    overflow: hidden;
    border: 1px solid;
    background-color: #f23a3a;
  }

  /* Style the buttons that are used to open the tab content */
  .tab button {
    background-color: #f23a3a;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    color: white;
  }

  /* Change background color of buttons on hover */
  .tab button:hover {
    background-color: #7c0606;
  }

  /* Create an active/current tablink class */
  .tab button.active {
    background-color: red;
  }

  /* Style the tab content */
  .tabcontent {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;
  }
  .tablinks
  {
    font-size: 120%;
  }
  .pickmuv
  {
    font-size: 300%;
    font-family: arial black;
    color : #f23a3a;
  }
  .container
  {
    display: flex;
    flex-direction: row;
    height: 50%;
  }
  #muv1
  { color: white;
    width : 49%;
    height: 100%;
  }
  #muv2
  { color: white;
    width : 49%;
    height: 100%;
  }
  .bar
  {
    height: 1%;
    margin: 2%;
    background-color: red;

  }
  body
  {
    background-color: black;
  }
  .container2
  {
    display: flex;
    flex-direction: row;
    margin-bottom: 2%;
  }
  #m1
  {
    color: white;
    font-family: arial black;
    font-size: 150%;
    width: 50%;
  }
  #m2
  {
    color: white;
    font-family: arial black;
    font-size: 150%;
    width: 50%;
  }
  #s1
  {
    color: white;
    font-family: arial black;
    font-size: 150%;
    width: 50%;
  }
  #s2
  {
    color: white;
    font-family: arial black;
    font-size: 150%;
    width: 50%;
  }
  .imgcontainer
  {
    display: flex;
    flex-direction: row;
    height: 60%;
  }
  #imgc
  {
    width: 50%;
    height: 100%;
  }
  #img1
  {
    width: 40%;
    height: 100%;

  }
  #img2
  {
    width: 40%;
    height: 100%;

  }
  #title
  {
    font-size: 150%;
    color: red;
  }

  </style>

  <div class="tab">
  <button class="tablinks" onclick="openhom()">Home</button>
  <button class="tablinks" onclick="opendash()">Compare</button>
  <button class="tablinks" onclick="openlog()">Login</button>
  <button class="tablinks" onclick="openrate()">Rate Movies</button>
  <button class="tablinks" onclick="openaddmuv()">AddMovie</button>
  </div>

  <div class="container2">
  <div id="m1">
  </div>
  <div id="m2">
  </div>
  </div>

<div class="imgcontainer">
  <div id = "imgc">
    <img id="img1">
  </div>
  <div id = "imgc">
    <img id="img2">
  </div>
</div>
  <div class = "container">

    <div id = muv1>
      <span id = title>Action</span>
      <div class = "bar" id="acnbar1"></div>
      <span id = title>VFX</span>
      <div class = "bar" id="vfxbar1"></div>
      <span id = title>Story</span>
      <div class = "bar" id="storybar1"></div>
      <span id = title>Cast</span>
      <div class = "bar" id="castbar1"></div>
      <span id = title>Entertainment</span>
      <div class = "bar" id="enterbar1"></div>
    </div>
    <div id = muv2>

      <span id = title>Action</span>
      <div class = "bar" id="acnbar2"></div>
      <span id = title>VFX</span>
      <div class = "bar" id="vfxbar2"></div>
      <span id = title>Story</span>
      <div class = "bar" id="storybar2"></div>
      <span id = title>Cast</span>
      <div class = "bar" id="castbar2"></div>
      <span id = title>Entertainment</span>
      <div class = "bar" id="enterbar2"></div>
    </div>

  </div>
  <div class="container2">
  <div id="s1">
  </div>
  <div id="s2">
  </div>
  </div>

  <?php
  DEFINE('DB_USERNAME', 'root');
    DEFINE('DB_PASSWORD', 'root');
    DEFINE('DB_HOST', 'localhost');
    DEFINE('DB_DATABASE', 'MovieReg');
    $moviename1 = $_POST['moviename1'];
    $moviename2 = $_POST['moviename2'];

    $action1 = 0;
    $vfx1 = 0;
    $story1 = 0;
    $cast1 = 0;
    $entert1 = 0;
    $number1 = 0;
    $action2 = 0;
    $vfx2 = 0;
    $story2 = 0;
    $cast2 = 0;
    $entert2 = 0;
    $number2 = 0;
    $actionu = 0;
    $vfxu = 0;
    $storyu = 0;
    $castu = 0;
    $entertu = 0;
    $numberu = 0;
    $img1 = "";
    $img2 = "";
    $mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

    if (mysqli_connect_error()) {
      die('Connect Error ('.mysqli_connect_errno().') '.mysqli_connect_error());
    }
    session_start();
  $username1 = $_SESSION['logusername'];
    $sql = "SELECT Name, numbers, Action, VFX, Story, Cast, Entert, img  FROM Moviesdb";
  $result = $mysqli->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          if($moviename1 == $row["Name"])
          {
            $action1 = $row["Action"];
            $vfx1 = $row["VFX"];
            $story1 = $row["Story"];
            $cast1 = $row["Cast"];
            $entert1 = $row["Entert"];
            $number1 = $row["numbers"];
            $img1 = $row["img"];
          }
          if($moviename2 == $row["Name"])
          {
            $action2 = $row["Action"];
            $vfx2 = $row["VFX"];
            $story2 = $row["Story"];
            $cast2 = $row["Cast"];
            $entert2 = $row["Entert"];
            $number2 = $row["numbers"];
            $img2 = $row["img"];
          }
        }

    } else {
        echo "0 results";
    }
    $sql = "SELECT username, Action, VFX, Story, Cast, Entert  FROM preferences";
  $result = $mysqli->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          if($username1 == $row["username"])
          {
            $actionu = $row["Action"];
            $vfxu = $row["VFX"];
            $storyu = $row["Story"];
            $castu = $row["Cast"];
            $entertu = $row["Entert"];


          }

        }

    } else {
        echo "0 results";
    }


echo $action2;


   ?>
<script>
var moviename1 = "<?php echo $moviename1 ?>";
var moviename2 = "<?php echo $moviename2 ?>";
var action1 = "<?php echo $action1 ?>";
var vfx1 = "<?php echo $vfx1 ?>";
var story1 = "<?php echo $story1 ?>";
var cast1 = "<?php echo $cast1 ?>";
var entert1 = "<?php echo $entert1 ?>";
var action2 = "<?php echo $action2 ?>";
var vfx2 = "<?php echo $vfx2 ?>";
var story2 = "<?php echo $story2 ?>";
var cast2 = "<?php echo $cast2 ?>";
var entert2 = "<?php echo $entert2 ?>";
var actionu = "<?php echo $actionu ?>";
var vfxu = "<?php echo $vfxu ?>";
var storyu = "<?php echo $storyu ?>";
var castu = "<?php echo $castu ?>";
var entertu = "<?php echo $entertu ?>";
var score1 = (actionu*action1) + (vfxu*vfx1) + (storyu*story1) + (castu*cast1) + (entertu*entert1);
var score2 = (actionu*action2) + (vfxu*vfx2) + (storyu*story2) + (castu*cast2) + (entertu*entert2);
var acnbar1 = document.getElementById("acnbar1");
var acnbar2 = document.getElementById("acnbar2");
var vfx1 = document.getElementById('vfxbar1');
var vfx2 = document.getElementById('vfxbar2');
var castbar1 = document.getElementById('castbar1');
var castbar2 = document.getElementById('castbar2');
var storybar1 = document.getElementById('storybar1');
var storybar2 = document.getElementById('storybar2');
var entertbar1 = document.getElementById('enterbar1');
var entertbar2 = document.getElementById('enterbar2');
var img1 = document.getElementById('img1');
var img2 = document.getElementById('img2');
var imgl1 = "<?php echo $img1 ?>";
var imgl2 = "<?php echo $img2 ?>";
var s1 = document.getElementById('s1');
var s2 = document.getElementById('s2');

acnbar1.style.width = 10*action1 + "%";
vfxbar1.style.width = 10*vfx1 + "%";
storybar1.style.width = 10*story1 + "%";
castbar1.style.width = 10*cast1 + "%";
entertbar1.style.width = 10*entert1 + "%";

acnbar2.style.width = 10*action2 + "%";
vfxbar2.style.width = 10*vfx2 + "%";
storybar2.style.width = 10*story2 + "%";
castbar2.style.width = 10*cast2 + "%";
entertbar2.style.width = 10*entert2 + "%";
var muv1 = document.getElementById('m1');
var muv2 = document.getElementById('m2');
img1.src =  imgl1 ;
img2.src =  imgl2 ;
s1.innerHTML = score1;
s2.innerHTML = score2;
muv1.innerHTML = moviename1;
muv2.innerHTML = moviename2;


function openaddmuv()
{
  window.location.href = 'addmovie.php';
}
function openhom()
{
window.location.href = 'home2.php';
}
function openlog()
{
window.location.href = "login.php"
}
function opendash()
{
  window.location.href = 'dashboard.php';
}
function openrate()
{
  window.location.href = 'ratemuvs.php';
}

</script>
</body>
</html>
