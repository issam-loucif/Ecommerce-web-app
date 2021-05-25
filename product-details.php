<?php
include('includes/header.php');
?>


        <!-- Product Details Area Start -->
        <div class="single-product-area section-padding-100 clearfix">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mt-50">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Furniture</a></li>
                                <li class="breadcrumb-item"><a href="#">Chairs</a></li>
                                <li class="breadcrumb-item active" aria-current="page">white modern chair</li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-lg-7">
                <?php
                    $id = escape_string($_GET['id']);
                    $query = "SELECT * FROM products WHERE id = '$id' ";
                    $result = query($query);
                    $row = fetch_array($result);
                ?>
                        <div class="single_product_thumb">
                            <div id="product_details_slider" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <a class="gallery_img" href="img/<?php echo $row['picture 1'];?>">
                                            <img class="d-block w-100" src="img/<?php echo $row['picture 1'];?>" alt="First slide">
                                        </a>
                                    </div>
                                    <div class="carousel-item">
                                        <a class="gallery_img" href="img/<?php echo $row['picture 2'];?>">
                                            <img class="d-block w-100" src="img/<?php echo $row['picture 2'];?>" alt="Second slide">
                                        </a>
                                    </div>
                                    <div class="carousel-item">
                                        <a class="gallery_img" href="img/<?php echo $row['picture 3'];?>">
                                            <img class="d-block w-100" src="img/<?php echo $row['picture 3'];?>" alt="Third slide">
                                        </a>
                                    </div>
    
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-12 col-lg-5">
                        <div class="single_product_desc">
                            <!-- Product Meta Data -->
                            <div class="product-meta-data">
                                <div class="line"></div>
                                <p> <span> <?php echo $row['price'];?> MAD</span> <span><strike class="text-warning"><?php echo $row['old_price'];?> MAD</strike></span> </p>
                                <a href="product-details.php">
                                    <h6><?php echo $row['name'];?></h6>
                                </a>
                                <!-- Ratings & Review -->
                                <div class="ratings-review mb-15 d-flex align-items-center justify-content-between">
                                    <div class="ratings">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </div>
                                    <div class="review">
                                        <a href="#">Write A Review</a>
                                    </div>
                                </div>
                                <!-- Avaiable -->
                                <p class="avaibility"><i class="fa fa-circle"></i> In Stock</p>
                            </div>

                            <div class="short_overview my-5">
                                <p><?php echo $row['description'];?></p>
                            </div>

                            <!-- Add to Cart Form -->
                            <form class="cart clearfix" action="cartedit.php" method="post">
                                <div class="cart-btn d-flex mb-50">
                                    <p>Qty</p>
                                    <div class="quantity">
                                        <span class="qty-minus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) effect.value--;return false;"><i class="fa fa-caret-down" aria-hidden="true"></i></span>
                                        <input type="number" class="qty-text" id="qty" step="1" min="1" max="300" name="qty" value="1">
                                        <span class="qty-plus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty )) effect.value++;return false;"><i class="fa fa-caret-up" aria-hidden="true"></i></span>
                                        <input type="hidden" name="product" value="<?php echo $row['name'];?>">
                                        <input type="hidden" name="id" value="<?php echo $row['id'];?>">
                                    </div>
                                </div>
                                <button type="submit" name="addtocart" value="5" class="btn amado-btn">Add to cart</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product Details Area End -->
    </div>
    <!-- ##### Main Content Wrapper End ##### -->


    <?php
include('includes/footer.php');
?>