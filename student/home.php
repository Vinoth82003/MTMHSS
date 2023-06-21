<?php 
session_start();
include 'conn.php';
if(isset($_SESSION['rollno'])){
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MTMHSS - Student</title>
    <link rel="icon" href="../images/logo.jpg" class='title'>
    <link rel="stylesheet" href="home.css">
</head>
<body>
<div class="home_page">
    <header class="header">
        <div class="sidemenu"></div>
        <div class="profile">
            <div class="pofileLogo">
                <img src="" alt="" class="logoimg">
            </div>
            
            <ul class="profMenu"><div class="downicon"></div>
                <li class="profList"><i class="i icon"></i>view</li>
            </ul>
        </div>
    </header>    
    <div class="profDet">
        <div class="innerProf">
            <ul class="detList">
                <li class="detLi">
                    <span class="name">Name : </span>
                    <span class="result"><?php echo $_SESSION['name'] ;?></span>
                </li>
                <li class="detLi">
                    <span class="name">Rollno : </span>
                    <span class="result"><?php echo $_SESSION['rollno'] ;?></span>
                </li>
                <li class="detLi">
                    <span class="name">Date Of Birth : </span>
                    <span class="result"><?php echo $_SESSION['dob'];?></span>
                </li>
                <li class="detLi">
                    <span class="name">standard : </span>
                    <span class="result"><?php echo $_SESSION['std'] ;?></span>
                </li>
                <li class="detLi">
                    <span class="name">section : </span>
                    <span class="result"><?php echo $_SESSION['sec'] ;?></span>
                </li>
                <?php
                if (isset($_SESSION['groupname'])) { ?>
                    <li class="detLi">
                     <span class="name">group name : </span>
                     <span class="result"><?php echo $_SESSION['groupname'] ;?></span>
                    </li>
              <?php  } ?>
                
                <li class="detLi">
                    <span class="name">fees : </span>
                    <span class="result"><?php echo $_SESSION['fees'] ;?></span>
                </li>
            </ul>
        </div>
        <div class="closeProf"></div>
    </div>
    <div class="sidemenuContainer">
            <ul class="menuUl">
                <li class="sideMenuList active">mark</li>
                <li class="sideMenuList">attendance</li>
                <li class="sideMenuList">special class</li>
                <li class="sideMenuList">time table</li>
                <li class="sideMenuList">staffs</li>
            </ul>
            <div class="logout"><a href="logout.php" class="logoutbtn" title="logout">Logout</a></div>
    </div>
    <div class="discBox">
    <?php
        $rollno = $_SESSION['rollno'];
        $table = $_SESSION['table'];

        $sql = "SELECT * FROM `$table` WHERE `rollno` = '$rollno'; ";
        $result = mysqli_query($conn, $sql);

        if ($result && mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            echo '<div class="innerBox">';
            
            // Loop through the column names and display them dynamically
            $columnNames = array_keys($row);
            foreach ($columnNames as $columnName) {
                // Skip the 'rollno' column and columns with null values
                if ($columnName !== 'rollno' && $columnName !== 'id' && !is_null($row[$columnName])) {
                    echo '<div class="markcontainer">';
                    echo '<div class="subname">' . $columnName . ':</div>';
                    echo '<div class="submark">' . $row[$columnName] . '</div>';
                    echo '<div class="grade"></div>';
                    echo '</div>';
                }
            }

            echo '</div>';
        }
    ?>
    </div>
</div>
<script src="home.js"></script>
</body>
</html>

<?php
}else{
    header("location:index.php?error=incorrect username or password home.php .. :(");
}
?>