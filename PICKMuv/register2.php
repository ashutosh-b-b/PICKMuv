<html>
<style>
.ip
{
  width: 30%;
  height: 4%;
}
.frm
{
  display: flex;
  flex-direction: column;
}
.ip1
{
  margin: 2%;
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
  <form class="frm1" action="<?php echo $_SERVER['PHP_SELF'] ; ?>" method="POST" class="frm">
    <div class="ip1">
    <input type="text" name="name" class="ip" placeholder="Enter Your Name" required></input>
  </div>
<div class="ip1">
    <input type="text" name="username" class="ip" placeholder="Create a username" required></input>
</div>

<div class="ip1">
    <input type="email" name="email" class="ip" placeholder="Enter Your Email" required></input>
</div>
<div class="ip1">
    <input type="password" name="password" class="ip" placeholder="Enter Your password" required></input>
</div>
<div class="ip1">
    <input type="submit"></input>
</div>
  </form>
<?php
DEFINE('DB_USERNAME', 'root');
  DEFINE('DB_PASSWORD', 'root');
  DEFINE('DB_HOST', 'localhost');
  DEFINE('DB_DATABASE', 'MovieReg');
  $name = $_POST["name"];
  $username = $_POST["username"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

  if (mysqli_connect_error()) {
    die('Connect Error ('.mysqli_connect_errno().') '.mysqli_connect_error());
  }

if($_SERVER['REQUEST_METHOD'] == "POST")
{
  $sql = "INSERT INTO Users(name, username, email, password) VALUES('$name' , '$username', '$email', '$password') ";
  if ($mysqli->query($sql) === TRUE) {
    echo "New record created successfully";
header('Location: http://localhost:8888/PICKMuv/choices2.php');
    session_start();
    $_SESSION['logusername']= $username;

}
else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
}
}
  $mysqli->close();
 ?>

</body>
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
