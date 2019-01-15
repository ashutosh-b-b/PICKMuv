
<?php
DEFINE('DB_USERNAME', 'root');
  DEFINE('DB_PASSWORD', 'root');
  DEFINE('DB_HOST', 'localhost');
  DEFINE('DB_DATABASE', 'MovieReg');
  $action = 0;
  $vfx = 0;
  $story = 0;
  $cast = 0;
  $entert = 0;
  $number = 0;
  $movie = $_POST['moviename'];
  $mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

  if (mysqli_connect_error()) {
    die('Connect Error ('.mysqli_connect_errno().') '.mysqli_connect_error());
  }
  $sql = "SELECT Name, numbers, Action, VFX, Story, Cast, Entert  FROM Moviesdb";
$result = $mysqli->query($sql);
  if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        if($movie == $row["Name"])
        {
          $action = $row["Action"];
          $vfx = $row["VFX"];
          $story = $row["Story"];
          $cast = $row["Cast"];
          $entert = $row["Entert"];
          $number = $row["numbers"];

        }
      }

  } else {
      echo "0 results";
  }

  session_start();
$username1 = $_SESSION['logusername'];
echo $username1;
echo $movie;
  $mysqli->close();
 ?>
 <html>
 <style>
 .cont1
 {
   display: flex;
   flex-direction: column;
 }
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
 #t1
 {
   color: red;
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

 <form action="ratingfinal.php" method="post">
   <div class="cont1">
     <div id = "t1">Action</div>
   <input type="range" name="action" value="5" min = "0" max="10" step = "1" class="rangebar"></input>
   <div id = "t1">VFX</div>
   <input type="range" name="vfx" value="5" min = "0" max="10" step = "1" class="rangebar"></input>
   <div id = "t1">Story</div>
   <input type="range" name="story" value="5" min = "0" max="10" step = "1" class="rangebar"></input>
   <div id = "t1">Cast</div>
  <input type="range" name="cast" value="5" min = "0" max="10" step = "1" class="rangebar"></input>
  <div id = "t1">Entertainment</div>
       <input type="range" name="entert" value="5" min = "0" max="10" step = "1" class="rangebar"></input>
       <input type="hidden" name="muvname" value="<?php echo $movie?>">
       <input type="hidden" name="action1" value="<?php echo $action?>">
       <input type="hidden" name="vfx1" value="<?php echo $vfx?>">
       <input type="hidden" name="story1" value="<?php echo $story?>">
       <input type="hidden" name="cast1" value="<?php echo $cast?>">
       <input type="hidden" name="entert1" value="<?php echo $entert?>">
        <input type="hidden" name="number" value="<?php echo $number?>">
       <input type="submit"></input>
     </cont>
 </form>
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
 </html>
