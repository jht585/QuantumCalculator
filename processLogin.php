<?php
  # read the form data
  $user = $_POST["user1"];
  $user = trim ($user);
  $passwd = $_POST["passwd"];
  $passwd = trim ($passwd);

  # generate user login info
  $user_info = $user . ":" . $passwd;

  # open file for reading
  $file = fopen ("./passwd.txt", "r");
  $found = FALSE;
  while (!feof($file))
  {
    $line = fgets ($file);
    $line = trim ($line);
    if (strpos($line,$user_info) !== false)
    {
      $found = TRUE;
      break;
    }
  }
  fclose ($file);

  if ($found)
  {
    login_allowed ();
  }
  else
  {
    login_denied ();
  }

function login_allowed ()
{
  session_start();
  if (!isset($_SESSION["user"])) {
    $_SESSION["user"] = 100;
  }
  header('Location: ./Home.php');
}

function login_denied ()
{
  print <<<PAGE
  <html>
  <head>
  <title> Log-In Denied </title>
  </head>
  <body>
  <h3> Log-In Denied! Username & Password Combination Not Recognized.</h3>
  <a href = "./Home.php"> HOME</a>
  </body>
  </html>
PAGE;
}
?>