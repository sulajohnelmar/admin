<?php
session_start();
require_once 'config/db.php';

if(isset($_POST['delete_student']))
{
    $users_id = mysqli_real_escape_string($con, $_POST['delete_student']);

    $query = "DELETE FROM users WHERE user_id='$users_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Student Deleted Successfully";
        header("Location: home.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Student Not Deleted";
        header("Location: home.php");
        exit(0);
    }
}

?>