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
}
#p1
{
  color: white;
}
#i1
{
  width: 30%;
  margin : 1%;
  height : 4%;
  font-size : 100%;
}
#i2
{
  width: 30%;
  margin : 1%;
  height : 4%;
  font-size : 100%;
}
#vs
{
  width : 5%;
  color : white;
  margin : 1%;
  font-size : 200%;
}
.container4
{
  width : 100%;
  display : flex;
  flex-direction : row;
}
#sbmt
{
  width : 10%;
  color : white;
  background-color : red;
  border-color : red;
  margin : 2%;
  margin-left : 30%;
  padding : 1.5%;
  font-size : 150%;
}
</style>
<div class="pickmuv">PICKMuV</div>
<div class="tab">
<button class="tablinks" onclick="openhom()">Home</button>
<button class="tablinks" onclick="opendash()">Compare</button>
<button class="tablinks" onclick="openlog()">Login</button>
<button class="tablinks" onclick="openrate()">Rate Movies</button>
<button class="tablinks" onclick="openaddmuv()">AddMovie</button>
</div>
<div>

  <p id = "p1"></p>

</div>


<form action = "dashboardi.php" method="post">

<div class = "container4">








</html>
<?php

  DEFINE('DB_USERNAME', 'root');
  DEFINE('DB_PASSWORD', 'root');
  DEFINE('DB_HOST', 'localhost');
  DEFINE('DB_DATABASE', 'MovieReg');
$i =0 ;
  session_start();
  $username1 = $_SESSION['logusername'];
  $mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE );
  if (mysqli_connect_error()) {
    die('Connect Error ('.mysqli_connect_errno().') '.mysqli_connect_error());
  }
  $sql = "SELECT Name FROM Moviesdb";
  $result = $mysqli->query($sql);

  if ($result->num_rows > 0) {
      // output data of each row
echo "<select name= 'moviename1' id = 'i1'>";
      while($row = $result->fetch_assoc()) {    $movies = $row["Name"];
        echo "<option value = '$movies'>" .$row["Name"] . "</input></br>";

          $i++;

      }
      echo "</select>";


  }

  else {
      echo "0 results";
  }
  echo "<div id = 'vs'>Vs</div>";

  $sql = "SELECT Name FROM Moviesdb";
  $result = $mysqli->query($sql);

  if ($result->num_rows > 0) {
      // output data of each row
echo "<select name= 'moviename2' id = 'i2' >";
      while($row = $result->fetch_assoc()) {    $movies = $row["Name"];
        echo "<option  value = '$movies'>" .$row["Name"] . "</option></br>";

          $i++;

      }
      echo "</select>";


  }

  else {
      echo "0 results";
  }
  echo "</div>";
  echo "<input type = 'submit' id = 'sbmt'></input>";
  $mysqli->close();

 ?>
<script>
var username = "<?php echo $username1 ?>"
document.getElementById("p1").innerHTML = username;
var ratebtn = document.getElementById("ratemuv");
ratebtn.addEventListener('click', myfunc);
function myfunc()
{
  console.log("Hello It runs");
  window.location.href = "http://localhost:8888/untitledfolder/choices2.php";

}

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
