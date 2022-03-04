<?php
require_once "config.php";


session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

$userName = htmlspecialchars($_SESSION["username"]);

// $sql = "INSERT INTO details (username, title, course_code, faculty, school)
// VALUES ('John', 'Doe', 'john@example.com', 'Doe', 'john@example.com')";

if(isset($_POST['submit']))
{    
     $username = $_POST['username'];
     $title = $_POST['title'];
     // $course_code = $_POST['course_code'];
     // $faculty = $_POST['faculty'];
     // $school = $_POST['school'];

    if ($title == "GIS and remote sensing") {
            
          $sql = "INSERT INTO details (username,title,course_code, faculty, school)
     VALUES ('$userName','GIS and remote sensing','TDC22PD01','Dr. Himadri Shekhar Dey','SPD')";     
    }

     
    
    if ($link->query($sql) === TRUE) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $link->error;
    }   
}




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Contact Form</h2>
                    </div>
                    <p>Please fill this form and submit to add employee record to the database.</p>
                    <form action="tdcc.php" method="post">
                        <!-- <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="username" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Choose a Course Code</label>
                            <select name="course_code">
                              <option value="TDC22PD01">TDC22PD01</option>
                              <option value="TDC22AA01">TDC22AA01</option>
                              <option value="TDC22VH01">TDC22VH01</option>
                              <option value="TDC22ET01">TDC22ET01</option>
                            </select>
                        </div> -->
                        <div class="form-group">
                            <label>Choose a Course Title</label>
                            <select name="title">
                              <option value="GIS and remote sensing">GIS and remote sensing</option>
                              <option value="Urban Interiority – Emerging cultural and spatial practices">Urban Interiority – Emerging cultural and spatial practices</option>
                              <option value="Street food of old delhi">Street food of old delhi</option>
                              <option value="MSME Production Skillset">MSME Production Skillset</option>
                            </select>
                        </div><!-- 
                        <div class="form-group">
                            <label>Faculty</label>
                            <select name="course_code">
                              <option value="Dr. Himadri Shekhar Dey">Dr. Himadri Shekhar Dey</option>
                              <option value="Ms. Snigdha Roy">Ms. Snigdha Roy</option>
                              <option value="TDC22VH01">TDC22VH01</option>
                              <option value="TDC22ET01">TDC22ET01</option>
                            </select>
                        </div> -->
                        
                        <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>