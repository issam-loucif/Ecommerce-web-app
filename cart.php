<?php
include('includes/header.php');
?>


        <div class="cart-table-area section-padding-100">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <div class="cart-title mt-50">
                            <h2>Shopping Cart</h2>
                        </div>
                        <?php 
                         if(isset($_GET['message'])){
                            echo '<div class="alert alert-danger mt-4">'.$_GET['message'].'</div>';
                         }
                        ?>
                        <div class="cart-table clearfix">
                            <table class="table table-responsive">
                        
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Name</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Dellete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    <?php
                                        foreach($_SESSION as $name => $product):
                                    ?>
                                    <?php
                                        if(substr($name,0,8) == "products"):
                                    ?>
                                        <tr>
                                            <td class="cart_img">
                                                <a href="#"><img src="img/cart1.jpg" alt="Product"></a>
                                            </td>
                                            <td class="cart_desc">
                                                <h5> <?php echo !empty($product['product']) ? $product['product'] : "" ?></h5>
                                            </td>
                                            <td class="price">
                                                <span><?php echo !empty($product['price']) ? $product['price'] : ""  ?></span>
                                            </td>
                                            <td class="qty">
                                                <div class="qty-btn d-flex">
                                                    <div class="quantity">
                                                        <input type="number" class="qty-text" name="qty" value="<?php echo !empty($product['qty']) ? $product['qty'] : ""  ?>">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="dellete.php?id=<?php echo !empty($product['id']) ? $product['id'] : ""  ?>&price=<?php echo !empty($product['total']) ? $product['total'] : ""  ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                    <?php
                                    endif; 
                                    ?>
                                    <?php
                                    endforeach;
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="cart-summary">
                            <h5>Cart Total</h5>
                            <ul class="summary-table">
                                <li><span>NB Products:</span> <span><?php echo !empty($_SESSION['count']) ? $_SESSION['count'] : ""  ?></span></li>
                                <li><span>delivery:</span> <span>Free</span></li>
                                <li><span>total:</span> <span><?php echo !empty($_SESSION['totaux']) ? $_SESSION['totaux'] : ""  ?> MAD</span></li>
                            </ul>
                            <div class="cart-btn mt-100">
                                <a href="checkout.php" class="btn amado-btn w-100">Checkout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Main Content Wrapper End ##### -->


    <?php
include('includes/footer.php');
?>