<?php

ob_start();
session_start();

if($_SESSION['name']!='oasis')
{

  header('location: ../index.php');
}
?>


<?php

//establishing connection
include('connect.php');

  //try{

    //validation of empty fields
      if(isset($_POST['signup'])){

        if(empty($_POST['email'])){
          throw new Exception("Email cann't be empty.");
        }

          if(empty($_POST['uname'])){
             throw new Exception("Username cann't be empty.");
          }

            if(empty($_POST['pass'])){
               throw new Exception("Password cann't be empty.");
            }
              
              if(empty($_POST['fname'])){
                 throw new Exception("Username cann't be empty.");
              }
                if(empty($_POST['phone'])){
                   throw new Exception("Username cann't be empty.");
                }
                  if(empty($_POST['type'])){
                     throw new Exception("Username cann't be empty.");
                  }

        //insertion of data to database table admininfo
        $result = mysqli_query($con,"insert into admininfo(username,password,email,fname,phone,type) values('$_POST[uname]','$_POST[pass]','$_POST[email]','$_POST[fname]','$_POST[phone]','$_POST[type]')");
        $success_msg="Signup Successfully!";

  
  }
//}
  //catch(Exception $e){
    //$error_msg =$e->getMessage();
 // }

?>

<!DOCTYPE html>
<html lang="en">

<!-- head started -->
<head>
<title>Staff Management System</title>
<meta charset="UTF-8">

  <link rel="stylesheet" type="text/css" href="../css/main.css">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
   
  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
   
  <link rel="stylesheet" href="styles.css" >
   
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
    .admin-signup{
   /* border: 2px solid;*/
    gap: 20px;
    display: flex;
    flex-direction: column;
    text-align: left;
    padding: 20px;

  }
  input[type=text] ,  input[type=email], input[type=password]{
  width: 70%;
  padding: 12px 20px;
  border-radius: 15px;
    box-shadow:2px 2px black;
}
 input[type=submit]{
  width: 20%;
  padding: 12px 20px;
  color: white;
  background-color: black;
    border-radius: 30px;
    box-shadow:2px 2px white;
}
</style>
</head>
<!-- head ended -->

<!-- body started -->
<body>

    <!-- Menus started-->
    <header>

      <h1>Staff Management System</h1>
      <div class="navbar">
        <a href="signup.php" style="text-decoration:none;">Create Users</a>
        <a href="index.php" style="text-decoration:none;">Add Student/Teacher</a>
        <a href="v-students.php" style="text-decoration:none;">View Students</a>
      <a href="v-teachers.php" style="text-decoration:none;">View Teachers</a>
        <a href="../logout.php" style="text-decoration:none;">Logout</a>
      </div>

    </header>
    <!-- Menus ended -->

<center>
<h1>Create Admin User</h1>
<p>    <?php
    if(isset($success_msg)) echo $success_msg;
    if(isset($error_msg)) echo $error_msg;
     ?>
       
     </p>
     <br>
<div class="content">

  <div class="rowtwo">
   
    <form method="post" class="admin-signup">


          <label for="input1">Email</label>
          <input type="text" name="email" id="input1" placeholder="your email" />

          <label for="input1">Username</label>
            <input type="text" name="uname" id="input1" placeholder="choose username" />

          <label for="input1">Password</label>
            <input type="password" name="pass" id="input1" placeholder="choose a strong password" />

          <label for="input1" >Full Name</label>
            <input type="text" name="fname"  id="input1" placeholder="your full name" />

          <label for="input1">Phone Number</label>
            <input type="text" name="phone" id="input1" placeholder="your phone number" />

      <input type="submit" value="Signup" name="signup" />
    </form>
  </div>
    

</div>

</center>

</body>

</html>
