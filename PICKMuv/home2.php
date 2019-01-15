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
.imagecontainer
{
  width : 100%;
  height: 70%;
}
#gridimg
{
  height: 100%;
  width: 100%;
  margin-top: 1%;
}
.rr
{
  width: 50%;
  height: 80%;
}
#t1
{
  font-size: 250%;
  color: white;
}
#usrname
{
  color: white;
  font-size: 150%;
}
#addmuv
{
  color: white;

}
#addfrm
{
  color: white;
  margin-left: 10%;
}
</style>

<body>
  <div class="pickmuv">PICKMuV</div>
  <div class="tab">
  <button class="tablinks" onclick="openhom()">Home</button>
  <button class="tablinks" onclick="opendash()">Compare</button>
  <button class="tablinks" onclick="openlog()">Login</button>
  <button class="tablinks" onclick="openrate()">Rate Movies</button>
  <button class="tablinks" onclick="openaddmuv()">AddMovie</button>
</div>
<div id = "usrname">
</div>
<div class="imagecontainer">
<img id = "gridimg">
<div id = "t1">
  What's in the theatres,
</div>
<iframe src="https://timesofindia.indiatimes.com/entertainment/theatre/roorkee/r.r.-cinemas-haridwar-road/3057" class="rr">
</iframe>
</div>
<?php
session_start();
$username1 = $_SESSION['logusername'];
$movie = $_POST['btn'];
$sbmt = true;
$_SESSION['add'] = $sbmt;
DEFINE('DB_USERNAME', 'root');
  DEFINE('DB_PASSWORD', 'root');
  DEFINE('DB_HOST', 'localhost');
  DEFINE('DB_DATABASE', 'MovieReg');

  $mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

  if (mysqli_connect_error()) {
    die('Connect Error ('.mysqli_connect_errno().') '.mysqli_connect_error());
  }
$upv = 0;
$sql = "SELECT Name, imdb  FROM addmovie";

$result = $mysqli->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

      if($movie == $row["Name"])
      {
        $upv = $row["imdb"];
      }

    }
}
 else {
    echo "0 results";
}
$upv++;
$sql = "UPDATE addmovie SET imdb='$upv' WHERE Name = '$movie'";

if ($mysqli->query($sql) === TRUE) {
    //echo "Record updated successfully";
} else {
    echo "Error updating record: " . $mysqli->error;
}
?>
<script>
var img = document.getElementById('gridimg');
var t = setInterval(change, 2000);
var x = 0;

function change()
{
  if(x == 0)
  {
    img.src = "images/image4.jpg";
    x++;
  }
  else if(x == 1)
  {
    img.src = "images/image2.png";
    x++;
  }
  else if(x == 2)
  {
    img.src = "images/image3.jpg";
    x = 0;
  }
}
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
var usr = document.getElementById('usrname');
var usrnam = "<?php echo $username1  ?>";
usr.innerHTML = usrnam ;
var upv = "<?php echo $upv ?>"
</script>

</body>
</html>
