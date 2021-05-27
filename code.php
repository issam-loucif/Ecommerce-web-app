<?php
//session_start();
include('security.php');
$connection = mysqli_connect("localhost","root","","ecommerceweb");

if(isset($_POST['registerbtn']))
{
    $name = $_POST['name'];
    $stock = $_POST['stock'];
    $price = $_POST['price'];
    $old_price = $_POST['old_price'];

    if($price === $old_price)
    {
        $query = "INSERT INTO products (name,price,stock) VALUES ('$name','$price','$stock')";
        $query_run = mysqli_query($connection, $query);

        if($query_run)
        {
            //echo "Saved";
            $_SESSION['success'] = "Admin Profile Added";
            header('Location: admin.php');
        }
        else
        {
            echo "Not Saved";
            $_SESSION['status'] = "Admin Profile NOT Added";
            header('Location: admin.php');
        }
    }
    else
    {
    $_SESSION['status'] = "Password and Confirm Password Does Not Match";
    header('Location: admin.php');
    }
}

if(isset($_POST['updatebtn']))
{
    $id = $_POST['edit_id'];
    $name = $_POST['name'];
    $email = $_POST['price'];
    $password = $_POST['stock'];

    $query = "UPDATE products SET name='$name', price='$price', stock='$stock' WHERE id='$id'";
    $query_run = mysqli_query($connection,$query);

    if($query_run)
        {
          
            $_SESSION['success'] = "Your Data is Updated";
            header('Location: admin.php');
        }
        else
        {
           
            $_SESSION['status'] = "Your Data is NOT Updated";
            header('Location: admin.php');
        }

}

if(isset($_POST['delete_btn']))
{
    $id = $_POST['delete_id'];
    $query = "DELETE FROM products WHERE id='$id'";
    $query_run = mysqli_query($connection,$query);

    if($query_run)
        {
        
            $_SESSION['success'] = "Your Data is Deleted";
            header('Location: admin.php');
        }
        else
        {
            
            $_SESSION['status'] = "Your Data is NOT Deleted";
            header('Location: admin.php');
        }
}




?>

