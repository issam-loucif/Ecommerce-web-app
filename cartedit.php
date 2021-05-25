<?php
require('includes/functions.php');
if(isset($_POST['id']) && isset($_POST['qty'])){
    $id = escape_string($_POST['id']);
    $qty= escape_string($_POST['qty']);
    $sql = "SELECT * FROM products WHERE id = '$id'";
    $result = query($sql);
    $product = fetch_array($result);
    if($_SESSION['products' .$id]['product'] == $_POST['product']){
        $message = "vous avez déja ce produit dans votre panier";
        redirect("cart.php?message=".$message);
        }else{
            if($product['stock'] < $qty){
                $message = "la quantité disponible en stock est :" .$product['stock'];
                redirect("cart.php?message=".$message);
        }else{
            $_SESSION['products' .$product['id']] = array(
        'id' => $product['id'],
        'product' =>$product['name'],
        'price' =>$product['price'],
        'qty' => $qty,
        'total' => $product['price'] * $qty,
    );
    $_SESSION['totaux'] += $_SESSION['products' .$product['id']]['total'];
    $_SESSION['count'] += 1;
    redirect("cart.php");
        }
    }
}
?>
