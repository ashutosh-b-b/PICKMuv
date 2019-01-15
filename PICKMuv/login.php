<html>
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
.tbox
{
  width: 30%;
  height: 5%;
  margin: 2%;
  font-size: 150%;
  color: red;
}
.sbbtn
{
  background-color: #f23a3a;
  color: white;
  margin: 2%;
  height: 5%;
  width: 10%;
  font-size: 120%;
}
.containfrm
{
  margin-left: 40%;
  margin-top: 2%;
}
#loginh
{
  font-size: 160%;
  color: #f23a3a;
  margin-left: 40%;
  margin-top: 4%;

}
#lnk
{
  color: white;
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
<div id = "loginh">
Login
</div>
<form action = "<?php echo $_SERVER['PHP_SELF'] ; ?>" method="POST">
<div class="containfrm">
<div>
  <input type="text" name="username" placeholder="Enter Your Username" class="tbox"></input>
</div>
<div>
<input type="password" name="password"  placeholder="Enter Password" class="tbox"></input>
</div>
<div>
  <input type="submit" class="sbbtn"></input>
</div>
</div>
</form>
<div id = "lnk">
  New here? <a href="register2.php" id = "lnk">Click Here to Register.. </a>
</div>
<?php
DEFINE('DB_USERNAME', 'root');
  DEFINE('DB_PASSWORD', 'root');
  DEFINE('DB_HOST', 'localhost');
  DEFINE('DB_DATABASE', 'MovieReg');

  $username = $_POST["username"];
  $password = $_POST["password"];
  $mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

  if (mysqli_connect_error()) {
    die('Connect Error ('.mysqli_connect_errno().') '.mysqli_connect_error());
  }
  $sql = "SELECT username, password  FROM Users";
$result = $mysqli->query($sql);
  if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        if($username == $row["username"] && $password == $row["password"])
        {
          session_start();
          $_SESSION['logusername']= $username;
          header('Location: http://localhost:8888/home.php');

        }

      }

  } else {
      echo "Wrong USername or Password";
  }



  $mysqli->close();
 ?>
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
</body>
</html>
