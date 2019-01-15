<html>
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
}</style>
<body>
  <div class="pickmuv">PICKMuV</div>


  <div class="tab">
  <button class="tablinks" onclick="openhom()">Home</button>
  <button class="tablinks" onclick="opendash()">Compare</button>
  <button class="tablinks" onclick="openlog()">Login</button>
  <button class="tablinks" onclick="openrate()">Rate Movies</button>
  <button class="tablinks" onclick="openaddmuv()">AddMovie</button>
  </div>

</html>
<?php
session_start();
$username1 = $_SESSION['logusername'];


DEFINE('DB_USERNAME', 'root');
  DEFINE('DB_PASSWORD', 'root');
  DEFINE('DB_HOST', 'localhost');
  DEFINE('DB_DATABASE', 'MovieReg');
  $mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

  if (mysqli_connect_error()) {
    die('Connect Error ('.mysqli_connect_errno().') '.mysqli_connect_error());
  }


$action = $_POST['action'];
$vfx = $_POST['vfx'];
$story = $_POST['story'];
$cast = $_POST['cast'];
$entert = $_POST['entert'];
$movie = $_POST['muvname'];
$action1 = $_POST['action1'];
$vfx1 = $_POST['vfx1'];
$story1 = $_POST['story1'];
$cast1 = $_POST['cast1'];
$entert1 = $_POST['entert1'];
$number = $_POST['number'];

function calc($a,$a1,$num)
{ $num2 = $num + 1;
  $res = ($a*$num + $a1)/$num2;
  return $res;
}
$actionf = calc($action, $action1, $number);
$vfxf = calc($vfx, $vfx1, $number);
$storyf = calc($story, $story1, $number);
$castf = calc($cast, $cast1, $number);
$entertf = calc($entert, $entert1, $number);
$number++;
  session_start();
  $username1 = $_SESSION['logusername'];
  $sql = "UPDATE Moviesdb SET   Action = '$actionf', VFX = '$vfxf' , Story = '$storyf', Cast = '$castf', numbers = '$number',Entert = '$entertf'  WHERE Name = '$movie'";

  if ($mysqli->query($sql) === TRUE) {
      echo "Record updated successfully";
  } else {
      echo "Error updating record: " . $mysqli->error;
  }

$actionf = calc($action, $action1, $number);
$vfxf = calc($vfx, $vfx1, $number);
$storyf = calc($story, $story1, $number);
$castf = calc($cast, $cast1, $number);
$entertf = calc($entert, $entert1, $number);


  $mysqli->close();
 ?>
<script>
function openaddmuv()
{
  window.location.href = 'addmovie.php';
}
function openhom()
{
window.location.href = 'home.php';
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
