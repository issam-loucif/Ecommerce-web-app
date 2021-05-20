<?php
include('includes/header.php');
?>
        <!-- Product Catagories Area Start -->
        <div class="products-catagories-area clearfix">
            <div class="amado-pro-catagory clearfix">

   <?php
       $query = "SELECT * FROM products";
       $result = query($query);
    while ($row = fetch_array($result)) : 
    ?>
                <!-- Single Catagory -->
                <input type="hidden" name="edit_id"  value="<?php echo $row['id'] ?>">
                <div class="single-products-catagory clearfix">
                    <a href="product-details.php?id=<?php echo $row['id'];?>">
                        <img src="img/<?php echo $row['picture'];?>" alt="">
                        <!-- Hover Content -->
                        <div class="hover-content">
                            <div class="line"></div>
                            <p> <span> <?php echo $row['price'];?> MAD</span> <span><strike class="text-warning"><?php echo $row['old_price'];?> MAD</strike></span> </p>
                            <h4><?php echo $row['name'];?></h4>
                        </div>
                    </a>
                </div>
    <?php endwhile; ?>

            </div> 
        </div>
        <!-- Product Catagories Area End -->
    </div>
    <!-- ##### Main Content Wrapper End ##### -->


    <?php
include('includes/footer.php');
?>
  