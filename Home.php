<!DOCTYPE html>

<html>

<head>
  <meta charset = "utf-8" />
  <title> Quantum Calculator </title>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel = "stylesheet" type = "text/css" href = "./Home.css" media = "all" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
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
    <table id="navTable">
    <tbody>
    <tr>
      <td class="tab" ><a class="btton" id="button1" href = "./Home.php"> HOME</a></td>
      <td class="tab" ><a class="btton" id="button2" href = "./Background.php"> BACKGROUND</a></td>
      <td class="tab" ><a class="btton" id="button3" href = "./calc.php"> CALCULATOR</a></td>
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
      Quantum Mechanics. The term has become synonymous with unforgiving math, complex principles, and stunning conclusions that Einstein himself wrongfully denounced as implausible.
      In this site, we will walk through the material covered in an introductory level Quantum Mechanics course, peel back the hood of these theorems that have proven to be so powerful, and ultimately provide a user interface that will allow you to explore instructive model systems on your own. Enjoy!
    <p class="quote">&ldquo;If quantum mechanics hasn't profoundly shocked you, you haven't understood it yet.&rdquo; &ndash; Niels Bohr</p>
    </div>

    <div id="c3">


<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="q1.png" alt="IMAGE">
      <div class="carousel-caption">
        <p>First ever image of the hydrogen atom.</p>
      </div>
    </div>

    <div class="item">
      <img src="q2.gif" alt="IMAGE">
      <div class="carousel-caption">
        <p>Potential Energy Surface: A visualization used to find the lowest energy geometry of a molecule.</p>
      </div>
    </div>

    <div class="item">
      <img src="q3.png" alt="IMAGE">
      <div class="carousel-caption">
        <p>Calculated (on bottom) vs Experimental (smooth curve) IR spectra of a certain molecule.</p>
      </div>
    </div>

    <div class="item">
      <img src="q4.jpg" alt="IMAGE">
      <div class="carousel-caption">
        <p>The complex mathematical formulations of quantum mechanics!</p>
      </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


    </div>

    <div id="c4">

    <h3 class="heading"> Purpose of Site </h3>
    <p>
      The purpose of this site is to provide a basic understanding of the material covered in an introductory, undergraduate quantum chemistry class.
      We will start at the very beginning of quantum mechanical models; a particle trapped in a box.
      From these humble beginnings, we will develop more and more advanced models for what an atom is.
      Eventually we will end with Hydrogen, the only particle that can be exactly solved.
      We will then move on to diatomic molecules, and discuss how quantum mechanics can be used to predict properties such as bond lengths, and interactions with light (IR spectroscopy).
      Using these derivations and predictions, we have developed a &ldquo;quantum calculator&rdquo;, that allows you to select what model systems you wish to explore, and will then produce data and graphs of quantities that can be predicted using said system.
      Explore all you want, compare different systems, and draw your own conclusions! Perhaps we will be able to light a spark in you, too.
    </p>

    </div>

    <div id="c5">
     <h3 class="heading"> Site Navigation and Features </h3>
     <p>
      On the top of the screen you will see a line of tabs. Click on Home to return to this page.
      Click on Background to see a brief overview of the development of quantum mechanics.
      You can also click on the Contact Us tab to submit suggestions, requests, and reviews, as well as read over our bios.
      Lastly, for members of the site, you can click on the Calculator tab to make use of our quantum calculator, and you can explore on your own from there.
     </p>
    </div>
  </div>


  <div id="footer">
  <i>Copyright &copy; 2015 Quantum Calculator</i>
  </div>

</div>

</body>

</html>