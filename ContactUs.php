<!DOCTYPE html>

<!--Contact Us Page -->

<html>

<head>
  <meta charset = "utf-8" />
  <title> Quantum Calculator </title>
  <link rel = "stylesheet" type = "text/css" href = "./ContactCSS.css" media = "all" />
  <script type ="text/javascript" src = "./contact.js"></script>
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

    <!-- Forms: Name, Email, Suggestions, Appreciative Comments, Gripes -->
  <div id="c1">
    <p>James Thorpe is a senior Chemistry Major at the University of Texas at Austin with an interest in chemical physics. He took a course in Quantum Mechanics under Dr. Stanton, which inspired him to peruse this project. He has participated in several research projects in the Crooks Group at UT, the latest of which explores the effect of platinum nanoparticles on electron tunneling across thin, insulating films. <br> Email: james_h.thorpe@yahoo.com</p>
    <p>Quan Nguyen is a senior Petroleum Engineering Major at the University of Texas at Austin. Having participated in several research projects, he is looking forward to graduate school in Chemical Engineering. Quantum Mechanics has always been one of his most favorite topics in his Introductory Chemistry and Physics classes. <br>Email: quannguyen1604@gmail.com</p>
  </div>

  <div id="c2">
    <form id="contactForm" method="post" action="./contact.php" onsubmit = "return validate();">

      <p> Name: <input name="username" type="text" size="30"/></p>
      <p> Email: <input name="email" type="text" size="30"/></p>
      <p id="suggest"><textarea name="comments" rows="4" cols="40" placeholder="-Suggestions & Comments Are Welcome-"></textarea> </p>
      <pre><input type="submit" size="30" value="Submit"/>       <input type="reset" size="30" value="Clear"/> </pre>

    </form>
  </div>

  </div>


  <div id="footer">
    <i>Copyright &copy; 2015 Quantum Calculator</i>
  </div>
</div>
</body>

</html>
