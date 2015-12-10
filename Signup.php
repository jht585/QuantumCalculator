<!DOCTYPE html>

<!--Contact Us Page -->

<html>

<head>
  <meta charset = "utf-8" />
  <title> Quantum Calculator </title>
  <link rel = "stylesheet" type = "text/css" href = "./ContactCSS.css" media = "all" />

<script type = "text/javascript">
function callServer(str) {
  if ((str == null) || (str == "")) return; 
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
      if (xmlhttp.responseText != "") {window.alert(xmlhttp.responseText);
      }
    }
  };
  xmlhttp.open("GET", "check.php?userName=" + str, true);
  xmlhttp.send();
}
</script>

</head>

<body>

<div id="container">

  <div id="top">

    <a id="logo1" href = "./Home.php">
    <img src = "./logo.jpg" alt = "Logo" width="100" height="100" />
    </a>

    <a id="logo2" href = "./Home.php">
    <img src = "./logo.jpg" alt = "Logo" width="100" height="100" />
    </a>

    <div id="title"> QUANTUM CALCULATOR </div>

    <div id="navBar">
    <table>
    <tr>
      <td class="tab" ><a class="btton" id="button1" href = "./Home.php"> HOME</a></td>
      <td class="tab" ><a class="btton" id="button2" href = "./Background.php"> BACKGROUND</a></td>
      <td class="tab" ><a class="btton" id="button3" href = "./Empty.html"> CALCULATOR</a></td>
      <td class="tab" ><a class="btton" id="button4" href = "./ContactUs.php"> CONTACT US</a></td>
<?php
  session_start();
  if (!isset($_SESSION["user"])) {
    print <<<LINE
    <td class="tab" ><a class="btton" id="button5" href = "./Signup.php"> LOGIN / REGISTER</a></td>
LINE;
  }
  else {
     print <<<LINE
     <td class="tab" ><a class="btton" id="button6" href = "./Logout.php"> LOGOUT</a></td>
LINE;
  }
?>
    </tr>
    </tbody>
    </table>
    </div>

  </div>

  <div id="content">

  <div id="c1">
    <h3> User Log-In </h3>
<form method = "post" action = "./processLogin.php">
  <p> Username: <input name = "user1" type = "text" size = "23"/> </p>
  <p> Password: <input name = "passwd" type = "password" size = "24" /> </p>
<pre><input type = "submit" value = "Submit" />       <input type = "reset" value = "Clear" /> </pre>
</form>
  </div>

  <div id="c2">
    <h3> New User Sign-Up </h3>
<form method = "post" action = "./processSignup.php">
  <p> Username: <input name = "user" type = "text" size = "23" onchange = "callServer(this.value);"/> </p>
  <p> Password: <input name = "passwd1" type = "password" size = "24" /> </p>
  <p> Retype Password: <input name = "passwd2" type = "password" size = "15" /> </p>
<pre><input type = "submit" value = "Submit" />       <input type = "reset" value = "Clear" /> </pre>
</form>
  </div>

  </div>


  <div id="footer">
    <i>Copyright &copy; 2015 Quantum Calculator</i>
  </div>
</div>
</body>

</html>
