<?php
  $user = $_GET["userName"];
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

  if ($found)
  {
    echo "Username already taken.";
  }
?>