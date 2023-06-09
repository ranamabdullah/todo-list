<?php
include "connection.php";
$sql="DELETE FROM `task` WHERE id='".$_GET['id']."'";
$query=mysqli_query($conn,$sql);
    if($query)
    { 
        echo "<script>alert('Task Deleted Succesfully')</script>";
        header('Refresh: 0.2; URL=todo-list.php');  
        // header('Location:todo-list.php');  
    }
    else
    {
        echo "<script>alert('Task Deletion Failed')</script>";
        header('Refresh: 0.2; URL=todo-list.php');  
    }
