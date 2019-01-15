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
.u1
{
  color : white;
  padding : 2%;
  margin : 1%;
  font-size : 120%;
}
#sbmt
{
  width : 10%;
  color : white;
  background-color : red;
  border-color : red;
  margin : 2%;
  margin-left : 30%;
  padding : 1%;
  font-size : 120%;
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
<p>Please choose anyone movie you want to rate</p>
<form action="ratingamuv.php" method="post" class = "u1">

</body>
<?php
DEFINE('DB_USERNAME', 'root');
  DEFINE('DB_PASSWORD', 'root');
  DEFINE('DB_HOST', 'localhost');
  DEFINE('DB_DATABASE', 'MovieReg');

  $mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
$i =0;
  if (mysqli_connect_error()) {
    die('Connect Error ('.mysqli_connect_errno().') '.mysqli_connect_error());
  }

  $sql = "SELECT Name FROM Moviesdb";
  $result = $mysqli->query($sql);

  if ($result->num_rows > 0) {
      // output data of each row

      while($row = $result->fetch_assoc()) {    $movies = $row["Name"];
        echo "<input type = 'checkbox' class = 'u1' value = '$movies' name = 'moviename' >".$row["Name"] . "</input></br>";
          $i++;

      }
      echo"<input type = 'submit' id = 'sbmt'></input>";
  } else {
      echo "0 results";
  }

  $mysqli->close();
?>
<script>
$('input[type="checkbox"]').on('change', function() {
   $(this).siblings('input[type="checkbox"]').not(this).prop('checked', false);
});

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
</html>
