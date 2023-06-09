<?php
// Database connection parameters
include "connection.php";

if(isset($_POST['btn-add']))
{
    $sql="INSERT INTO `task`(`name`) VALUES ('".$_POST['task']."')";
    $query=mysqli_query($conn,$sql);
    if($query)
    { 
        // echo "<script>alert('Task Added Succesfully')</script>";
        // header('Refresh: 0.5; URL=todo-list.php');  
        header('Location:todo-list.php');  
    }
    else
    {
        // echo "<script>alert('Task Added Failed')</script>";
        header('Location:todo-list.php');  
    }
}

if(isset($_POST['btn-update']))
{
    $sql="UPDATE `task` SET `name`='".$_POST['task']."' WHERE id='".$_POST['taskId']."'";
    $query=mysqli_query($conn,$sql);
    if($query)
    { 
        echo "<script>alert('Task Updated Succesfully')</script>";
        header('Refresh: 0.2; URL=todo-list.php');  
        // header('Location:todo-list.php');  
    }
    else
    {
        echo "<script>alert('Task Updated Failed')</script>";
        header('Refresh: 0.2; URL=todo-list.php');  
    }
}




?>