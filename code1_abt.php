<?php
require('includes/functions.php');

if(isset($_POST['update_btn']))
{
    $id = $_POST['id'];
    $name = $_POST['name'];

    $query = "UPDATE categories SET name ='$name' WHERE id='$id'";
    $query_run = mysqli_query($connection,$query);

    if($query_run)
        {
          
            $_SESSION['success'] = "Your Post is Updated";
            header('Location: addprod.php');
        }
        else
        {
           
            $_SESSION['status'] = "Your Post is NOT Updated";
            header('Location: addprod.php');
        }

}

if(isset($_POST['delete_btn']))
{
    $id = $_POST['delete_id'];
    $query = "DELETE FROM categories WHERE id='$id'";
    $query_run = mysqli_query($connection,$query);

    if($query_run)
        {
        
            $_SESSION['success'] = "Your Post is Deleted";
            header('Location: addprod.php');
        }
        else
        {
            
            $_SESSION['status'] = "Your Post is NOT Deleted";
            header('Location: addprod.php');
        }
}





if(isset($_POST['about_save']))
{
    $id = $_POST['id'];
    $title = $_POST['name'];
   

    $query = "INSERT INTO categories (name) VALUES ('$name')";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['success'] = "Abouts Us Added";
        header('Location: addprod.php');
    }
    else
    {
        $_SESSION['status'] = "Abouts Us NOT Added";
        header('Location: addprod.php');
    }


}




?>