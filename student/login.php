<?php
session_start();
include "conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {
    $uname = validate($_POST['uname']);
    $pass = validate($_POST['password']);

    if (empty($uname)) {
        redirectToIndex("User Name is required");
    } elseif (empty($pass)) {
        redirectToIndex("Password is required");
    } else {
        $sql = "SELECT * FROM `12_std` WHERE `rollno` = '$uname' AND `dob` = '$pass';";
        $result = mysqli_query($conn, $sql);

        if ($result && mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            $storedUname = $row['rollno'];
            $storedPass = $row['dob'];
            $_SESSION['name'] = $row['name'];
            $_SESSION['std']= $row['std'];
            $_SESSION['sec'] = $row['sec'];
            $_SESSION['groupname'] = $row['groupname'];
            $_SESSION['fees']  = $row['fees'];

            if ($_SESSION['groupname'] === 'computerscience' || $_SESSION['groupname'] === 'biology') {
                $_SESSION['table'] = '12_abmark';
            }else{
                $_SESSION['table'] = '12_cdmark';
            }

            if ($storedUname === $uname && $storedPass === $pass) {
                $_SESSION['rollno'] = $storedUname;
                $_SESSION['dob'] = $storedPass;
                redirectToPage("home.php");
            } else {
                redirectToIndex("Incorrect User name or password");
            }
        } else {
            redirectToIndex("Incorrect User name or password");
        }
    }
} else {
    redirectToIndex("uname not set");
    exit();
}

function validate($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function redirectToIndex($error)
{
    header("Location: index.php?error=" . urlencode($error));
    exit();
}

function redirectToPage($page)
{
    header("Location: $page");
    exit();
}