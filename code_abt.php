<?php
require('includes/functions.php');

if(isset($_POST['update_btn']))
{
    $id = $_POST['id'];
    $name = $_POST['name'];
    $category_id = $_POST['category_id'];
    $description = $_POST['description'];
    $links = $_POST['price'];
    $links1 = $_POST['old_price'];

    $query = "UPDATE products SET name ='$name', category_id='$category_id', description='$description', price='$links' , old_price='$links1' WHERE id='$id'";
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
    $query = "DELETE FROM products WHERE id='$id'";
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
    $category_id = $_POST['category_id'];
    $description = $_POST['description'];
    $links = $_POST['price'];
    $links1 = $_POST['old_price'];

    $query = "INSERT INTO products (name,category_id,description,price,old_price) VALUES ('$name','$category_id','$description','$links','$links1')";
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