<?php

ob_start();
session_start();

if($_SESSION['name']!='oasis')
{
  header('location: ../index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Staff Management System</title>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="../css/main.css">

</head>
<body>

<header>

  <h1>Staff Management System</h1>
  <div class="navbar">
  <a href="index.php" style="text-decoration:none;">Home</a>
  <a href="students.php" style="text-decoration:none;">Students</a>
  <a href="teachers.php" style="text-decoration:none;">Colleagues</a>
  <a href="attendance.php" style="text-decoration:none;">Attendance</a>
  <a href="../logout.php" style="text-decoration:none;">Logout</a>

</div>

</header>

<center>

    <div class="profile">
<h1>Name</h1>
<h2>Department</h2>
<h3>ID</h3>
<h3>Course</h3>
</div>

</center>

</body>
</html>
