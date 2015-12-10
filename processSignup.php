<?php
  # read the form data
  $user = $_POST["user"];
  $user = trim ($user);
  $passwd1 = $_POST["passwd1"];
  $passwd1 = trim ($passwd1);
  $passwd2 = $_POST["passwd2"];
  $passwd2 = trim ($passwd2);

  # generate user login info
  $user_info = $user . ":" . $passwd1;

  # open file for reading
  $file = fopen ("./passwd.txt", "r");
  $found = FALSE;
  while (!feof($file))
  {
    $line = fgets ($file);
    $line = trim ($line);
    if (strpos($line,$user.":") !== false)
    {
      $found = TRUE;
      break;
    }
  }
  fclose ($file);

  if (($found) || !($passwd1==$passwd2))
  {
    signup_denied ();
  }
  else
  {
    signup_allowed ($user_info);
  }

function signup_allowed ($user_info)
{

  session_start();
  if (!isset($_SESSION["user"])) {
    $_SESSION["user"] = 100;
  }
  $file = fopen ("./passwd.txt", "a");
  fwrite($file,"\n".$user_info);
  fclose ($file);
  header('Location: ./Home.php');
}

function signup_denied ()
{
  print <<<PAGE
  <html>
  <head>
  <title> Sign-Up Denied </title>
  </head>
  <body>
  <h3> Sign-Up Denied! Either Username Are Already Taken Or Password Does Not Match.</h3>
  <a href = "./Home.php"> HOME</a>
  </body>
  </html>
PAGE;
}
?>