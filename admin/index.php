<?php

ob_start();
session_start();

if($_SESSION['name']!='oasis')
{

  header('location: ../index.php');
}
?>

<?php

include('connect.php');

//data insertion
  //try{

    //checking if the data comes from students form
    if(isset($_POST['std'])){

      //students data insertion to database table "students"
        $result = mysqli_query($con,"insert into students(st_id,st_name,st_dept,st_batch,st_sem,st_email) values('$_POST[st_id]','$_POST[st_name]','$_POST[st_dept]','$_POST[st_batch]','$_POST[st_sem]','$_POST[st_email]')");
        $success_msg = "Student added successfully.";
    }
    

        //checking if the data comes from teachers form
        if(isset($_POST['tcr'])){

          //teachers data insertion to the database table "teachers"
          $res = mysqli_query($con,"insert into teachers(tc_id,tc_name,tc_dept,tc_email,tc_course) values('$_POST[tc_id]','$_POST[tc_name]','$_POST[tc_dept]','$_POST[tc_email]','$_POST[tc_course]')");
          $success_msg = "Teacher added successfully.";
    }
  


 ?>



<!DOCTYPE html>
<html lang="en">
<head>
<title>Staff Management System</title>
<meta charset="UTF-8">

  <link rel="stylesheet" type="text/css" href="../css/main.css">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
   
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
   
  <link rel="stylesheet" href="styles.css" >
   
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">

  .message{
    padding: 10px;
    font-size: 15px;
    font-style: bold;
    color: white;
    background-color:seagreen;
  }

/*.content{
  align-items: center;
  justify-content: center;
}*/

  .teachers-input , .student-input{
   /* border: 2px solid;*/
    gap: 20px;
    display: flex;
    flex-direction: column;
    text-align: left;
    padding: 20px;

  }
  input[type=text] ,  input[type=email]{
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

<body>

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

<center>
<div class="message">
        <?php if(isset($success_msg)) echo $success_msg; if(isset($error_msg)) echo $error_msg; ?>
</div>

<div class="content">

<center>  <h1>Add Student's Information</h1> </center>

  <div class="rowtwo" id="student">

      <form method="post" class='student-input'>
                <label for="input1">ID</label>

            <input type="text" name="st_id"  id="input1" placeholder="student reg. no." />
          <label for="input1">Name</label>

            <input type="text" name="st_name"   id="input1" placeholder="student full name" />
          <label for="input1" >Department</label>

            <input type="text" name="st_dept"   id="input1" placeholder="department ex. CSE" />
          <label for="input1" >Batch</label>

            <input type="text" name="st_batch"  id="input1" placeholder="batch e.x 2020" />
          <label for="input1">Semester</label>

            <input type="text" name="st_sem"  id="input1" placeholder="semester ex. Fall-15" />

          <label for="input1">Email</label>
            <input type="email" name="st_email"  id="input1" placeholder="valid email" />


      <input type="submit" value="Add Student" name="std" />
    </form>

  </div>
<br><br>

<center>  <h1>Add Teacher's Information</h1> </center>
  <div class="rowtwo" id="teacher">
  
       <form method="post" class="teachers-input">
     
          <label for="input1">Teacher ID</label>
            <input type="text" name="tc_id" id="input1" placeholder="teacher's id" />

          <label for="input1" >Name</label>
            <input type="text" name="tc_name" id="input1" placeholder="teacher full name" />

          <label for="input1" >Department</label>
            <input type="text" name="tc_dept"  id="input1" placeholder="department ex. CSE" />

          <label for="input1" >Email</label>
            <input type="email" name="tc_email" id="input1" placeholder="valid email" />

          <label for="input1" >Subject Name</label>
            <input type="text" name="tc_course"  id="input1" placeholder="subject ex. Software Engineering" />

      <input type="submit"  value="Add Teacher" name="tcr" />
    </form>
    
  </div>


</div><br>

</center>
</body>
</html>
