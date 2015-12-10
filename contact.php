<?php

$name = $_POST["username"];
$email = $_POST["email"];
$comments = $_POST["comments"];

$file = fopen("/u/quan1604/passwd.txt","r");
$line = fgets($file);
$line = trim($line);
fclose ($file);

$host = "fall-2015.cs.utexas.edu";
$user = "quan1604";
$pwd = $line;
$dbs = "cs329e_quan1604";
$port = "3306";

$connect = mysqli_connect ($host, $user, $pwd, $dbs, $port);
$table = "COMMENTS";

$stmt = mysqli_prepare ($connect, "INSERT INTO $table VALUES (?, ?, ?)");
mysqli_stmt_bind_param ($stmt, 'sss', $name, $email, $comments);
mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);

mysqli_close($connect);

header('Location: ./ContactUsConfirm.php');

?>