<?php


 
//				CODE FOR SESSION CHECK
//start session
session_start();
//if username is not set, send to login page.
if (!(isset($_SESSION["user"]))) {
  header('Location: ./Signup.php');
}

printTop();
printForm();
//Add logic for printing out calculated results
$box = False;
$sho = False;
$pos = False;
$gse = False;
$elev = False;
$flag1 = False;
$flag2 = False;
if (isset($_POST['method']) and $_POST['method'] != "") { 
  $flag1 = True;
  $method = $_POST['method'];
  foreach ($method as $m){
  if ($m == "PIB") $box = True;
  elseif ($m == "SHO") $sho = True;
  elseif ($m == "POS") $pos = True;
  }
}
if (isset($_POST["calc"]) and $_POST["calc"] != "") {
  $flag2 = True;
  $calc = $_POST['calc'];
  foreach ($calc as $value){
  if ($value == "GSE") $gse = True;
  elseif ($value == "energy") $elev = True;
  }
}
if ($flag1 && $flag2) printResults($_POST["atom"], $box, $sho, $pos, $gse, $elev);
printBottom();

//~~~~~~~~~~~~~~~~~~~~~~~~~~~BEGIN FUNCTIONS~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

//Need to add javascript in printBottom() to check for correct submission?
function printForm(){
  $script = $_SERVER['PHP_SELF'];
  //Maybe put a box around the form so it looks cool?
  print<<<FORM
  <div id="content">
  <div id="c2">
  <p><b> Select your Parameters </b></p>
    <form method="POST" action=$script id="formContent">
    <p> Atom: <select name="atom">
      <option selected="selected"> H </option>
      <option> He </option>
      <option> Li </option>
      <option> Be </option>
      <option> B </option>
      <option> C </option>
      <option> O </option>
      <option> N </option>
      <option> F </option>
      <option> Ne </option>
      </select>
    </p>
    <p> Method: <input name="method[]" type="checkbox" value="PIB"/> P.I.B
		<input name="method[]" type="checkbox" value="POS"/> P.O.S </lable>
		<p> Calculation: <input name="calc[]" type="checkbox" value="GSE"/> <label>Ground State Energy </lable>
		 <input name="calc[]" type="checkbox" value="energy" /> <label> Energy Levels </label></p>
<pre><input type="submit" size="30" value="Submit"/>       <input type="reset" size="30" value="Clear"/> </pre>
    </form>
  </div>
  </div>
FORM;
}

function printResults($atom, $box, $sho, $pos, $gse, $elev){
  print<<<RESTOP
  <div id="content">
RESTOP;

   //get password from file
  $file = fopen("/u/james/dbase.txt","r");
  $line = fgets($file);
  $line = trim($line);
  fclose ($file);

  //Connect to MySQL database
  $host = "fall-2015.cs.utexas.edu";
  $user = "james";
  $pwd = $line;
  $dbs = "cs329e_james";
  $port = "3306";

  $connect = mysqli_connect ($host, $user, $pwd, $dbs, $port);

  if (empty($connect))
  {
    die("mysqli_connect failed: " . mysqli_connect_error());
  }

  
  $table = "calc";
  $result = mysqli_query($connect, "SELECT * from $table WHERE atom = '$atom'");
  while ($row = $result->fetch_row()) {
   
    $element = $row[0];
    $numE = $row[1];
    $radius =$row[2];
    $length =floatval(2*$row[2]);
    $mass = floatval($row[3]);
  }
 
  $result->free();
  mysqli_close($connect);
  
//Logic for each print...
 
 //Particle in a box energies
  if ($box) {
  $boxE1 = pow(3.14159, 2)/(2*$length);
  $boxE2 = (pow(3.14159, 2)*4)/(2*$length); 
  $boxE3 = (pow(3.14159, 2)*9)/(2*$length);
 
  //Print results
  if ($gse){
  print<<<GSEBOX
  <div id="c1">
  <p> <b> Ground State Energy - Particle in a 1-D box </b>
  <table border="1px solid black;">
    <thead>
    <td><b> Calculation</b> </td><td><b>Energy (hartrees)</b></td>
    </thead>
    <tbody>
      <tr>
        <td> Atom </td><td>$element</td>
      </tr>
      <tr>
        <td> Ground State Energy </td><td>$boxE1</td>
      </tr>
    </tbody>
  </table>
  </p>
  </div>
GSEBOX;
  }
  
  if ($elev){
  print<<<elevBOX
  <div id="c1">
  <p> <b>Energy Levels - Particle in a 1-D Box</b>
  <table border="1px solid black;">
    <thead>
    <td><b> Calculation</b> </td><td><b>Energy (hartrees)</b></td>
    </thead>
    <tbody>
      <tr>
        <td> Atom </td><td>$element</td>
      </tr>
      <tr>
        <td> 1st Energy Level </td><td>$boxE1</td>
      </tr>
      <tr>
        <td> 2nd Energy Level </td><td>$boxE2</td>
      </tr>
      <tr>
        <td> 3rd Energy Level </td><td>$boxE3</td>
      </tr>
    </tbody>
  </table>
  </p>
  </div>
elevBOX;
  }
} 

//Particle on a sphere energies
  if ($pos) {
  $posE1 = 0;
  $posE2 = 1/pow($radius, 2); 
  $posE3 = 6/(2*pow($radius, 2));

  if ($gse){
  print<<<GSEPOS
  <div id="c1">
  <p> <b> Ground State Energy - Particle on a Sphere </b>
  <table border="1px solid black;">
    <thead>
    <td><b> Calculation</b> </td><td><b>Energy (hartrees)</b></td>
    </thead>
    <tbody>
      <tr>
        <td> Atom </td><td>$element</td>
      </tr>
      <tr>
        <td> Ground State Energy </td><td>$posE1</td>
      </tr>
    </tbody>
  </table>
  </p>
  </div>
GSEPOS;
  }

  if ($elev){
  print<<<elevPOS
  <div id="c1">
  <p> <b>Energy Levels - Particle on a Sphere</b>
  <table border="1px solid black;">
    <thead>
    <td><b> Calculation</b> </td><td><b>Energy (hartrees)</b></td>
    </thead>
    <tbody>
      <tr>
        <td> Atom </td><td>$element</td>
      </tr>
      <tr>
        <td> 1st Energy Level </td><td>$posE1</td>
      </tr>
      <tr>
        <td> 2nd Energy Level </td><td>$posE2</td>
      </tr>
      <tr>
        <td> 3rd Energy Level </td><td>$posE3</td>
      </tr>
    </tbody>
  </table>
  </p>
  </div>
elevPOS;
  }
}
  
 
  //CLOSE OUT DIVS 
  print<<<RESEND
  </div>
RESEND;
}

function printTop() {
//Print the top of the page.
 print<<<TOP
<html>

  <head>
    <meta charset = "utf-8" />
    <title> Quantum Calculator </title>
    <link rel = "stylesheet" type = "text/css" href = "./calc.css" media = "all" />
  </head>

  <body>

  <!-- This is the top of the page -->
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
    <table id="toptable">
    <tr>
      <td id="toptd" class="tab" ><a class="btton" id="button1" href = "./Home.php"> HOME</a></td>
      <td id="toptd" class="tab" ><a class="btton" id="button2" href = "./Background.php"> BACKGROUND</a></td>
      <td id="toptd" class="tab" ><a class="btton" id="button3" href = "./calc.php"> CALCULATOR</a></td>
      <td id="toptd" class="tab" ><a class="btton" id="button4" href = "./ContactUs.php"> CONTACT US</a></td>
      <td id="toptd" class="tab" ><a class="btton" id="button5" href = "./Logout.php"> LOGOUT </a> </td>    


    </tr>
    </tbody>
    </table>
    </div>
    </div>
TOP;
}

function printBottom() {
//Footer and close of html tags
print<<<BOTTOM
  <div id="footer">
    <i>Copyright &copy; 2015 Quantum Calculator</i>
  </div>
  </body>
  </html>
BOTTOM;
}

?>
