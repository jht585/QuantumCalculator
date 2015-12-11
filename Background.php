<!DOCTYPE html>

<!--Contact Us Page -->

<html>

<head>
  <meta charset = "utf-8" />
  <title> Quantum Calculator </title>
  <link rel = "stylesheet" type = "text/css" href = "./ContactCSS.css" media = "all" />
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
<p>
Quantum mechanics (also known as quantum physics or quantum theory) including quantum field theory, is a fundamental branch of physics concerned with processes involving, for example, atoms and photons. In such processes, said to be quantized, the action has been observed to be only in integer multiples of the Planck constant, a physical quantity that is exceedingly, indeed perhaps ultimately, small. This is utterly inexplicable in classical physics.
</p>
<p>
Quantum mechanics gradually arose from Max Planck's solution in 1900 to the black-body radiation problem (reported 1859) and Albert Einstein's 1905 paper which offered a quantum-based theory to explain the photoelectric effect (reported 1887). Early quantum theory was significantly reformulated in the mid-1920s.
</p>
<p>
The mathematical formulations of quantum mechanics are abstract. A mathematical function, the wave function, provides information about the probability amplitude of position, momentum, and other physical properties of a particle.
</p>
<p>
Important applications of quantum mechanical theory include superconducting magnets, light-emitting diodes and the laser, the transistor and semiconductors such as the microprocessor, medical and research imaging such as magnetic resonance imaging and electron microscopy, and explanations for many biological and physical phenomena.
</p>
    </div>


    <div id="c3">
    <h3 class="heading"> History of Quantum Mechanics </h3>
<p>
The history of quantum mechanics is a fundamental part of the history of modern physics. Quantum mechanics' history, as it interlaces with the history of quantum chemistry, began essentially with a number of different scientific discoveries: the 1838 discovery of cathode rays by Michael Faraday; the 1859&ndash;60 winter statement of the black-body radiation problem by Gustav Kirchhoff; the 1877 suggestion by Ludwig Boltzmann that the energy states of a physical system could be discrete; the discovery of the photoelectric effect by Heinrich Hertz in 1887; and the 1900 quantum hypothesis by Max Planck that any energy-radiating atomic system can theoretically be divided into a number of discrete "energy elements" e (epsilon) such that each of these energy elements is proportional to the frequency v (nu) with which each of them individually radiate energy, as defined by the following formula:
</p>
<p>
 e = h v,
</p>
<p> 
where h is a numerical value called Planck's constant.
</p>
<p>
Then, Albert Einstein in 1905, in order to explain the photoelectric effect previously reported by Heinrich Hertz in 1887, postulated consistently with Max Planck's quantum hypothesis that light itself is made of individual quantum particles, which in 1926 came to be called photons by Gilbert N. Lewis. The photoelectric effect was observed upon shining light of particular wavelengths on certain materials, such as metals, which caused electrons to be ejected from those materials only if the light quantum energy was greater than the work function of the metal's surface.
</p>
<p>
The phrase "quantum mechanics" was coined (in German, Quantenmechanik) by the group of physicists including Max Born, Werner Heisenberg, and Wolfgang Pauli, at the University of G&ouml;ttingen in the early 1920s, and was first used in Born's 1924 paper "Zur Quantenmechanik". In the years to follow, this theoretical basis slowly began to be applied to chemical structure, reactivity, and bonding.
</p>
    </div>


    <div id="c4">
    <h3 class="heading"> Links to UT Professors' Research Pages </h3>
     <p><a href = "https://sites.google.com/site/stantonresearchgroup/"> Stanton Research Group</a></p>
     <p><a href = "http://theory.cm.utexas.edu/henkelman/"> Henkelman Research Group</a></p>
     <p><a href = "https://www.ices.utexas.edu/research/centers-groups/ccms/"> Center for Computational Molecular Sciences</a></p>
    </div>


  </div>


  <div id="footer">
    <i>Copyright &copy; 2015 Quantum Calculator</i>
  </div>
</div>
</body>

</html>
