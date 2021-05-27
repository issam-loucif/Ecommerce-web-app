<?php
include('includes/header.php');
?>


        <div class="shop_sidebar_area">
            <!-- ##### Single Widget ##### -->
            <div class="widget catagory mb-50">
                <!-- Widget Title -->
                <h6 class="widget-title mb-30">Catagories</h6>
        <?php
            $query = "SELECT * FROM categories";
            $result = query($query);
            while ($row = fetch_array($result)) : 
        ?>
                <!--  Catagories  -->
                <div class="catagories-menu">
                    <ul>
                        <li class="bg-light"><a href="categories.php?id=<?php echo $row['id'];?>"><?php echo $row['nam'];?></a></li>
                    </ul>
                </div>
                <?php endwhile; ?>
            </div>


        </div>

        <div class="amado_product_area section-padding-100">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-12">
                        <div class="product-topbar d-xl-flex align-items-end justify-content-between">
                            <!-- Total Products -->
                            <div class="total-products">
                                <p>Showing 1-8 0f 25</p>
                                <div class="view d-flex">
                                    <a href="#"><i class="fa fa-th-large" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-bars" aria-hidden="true"></i></a>
                                </div>
                            </div>
                            <!-- Sorting -->
                            <div class="product-sorting d-flex">
                                <div class="sort-by-date d-flex align-items-center mr-15">
                                    <p>Sort by</p>
                                    <form action="#" method="get">
                                        <select name="select" id="sortBydate">
                                            <option value="value">Date</option>
                                            <option value="value">Newest</option>
                                            <option value="value">Popular</option>
                                        </select>
                                    </form>
                                </div>
                                <div class="view-product d-flex align-items-center">
                                    <p>View</p>
                                    <form action="#" method="get">
                                        <select name="select" id="viewProduct">
                                            <option value="value">12</option>
                                            <option value="value">24</option>
                                            <option value="value">48</option>
                                            <option value="value">96</option>
                                        </select>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                <?php
                    $id = escape_string($_GET['id']);
                    $query = "SELECT * FROM products WHERE category_id = '$id' ";
                    $result = query($query);
                    $row = fetch_array($result);
                    if($row !=null):
                ?>
                    <!-- Single Product Area -->
                    <div class="col-12 col-sm-6 col-md-12 col-xl-6">
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="img/<?php echo $row['picture'];?>" alt="">
                                <!-- Hover Thumb -->
                                <img class="hover-img" src="img/<?php echo $row['picture 2'];?>" alt="">
                            </div>

                            <!-- Product Description -->
                            <div class="product-description d-flex align-items-center justify-content-between">
                                <!-- Product Meta Data -->
                                <div class="product-meta-data">
                                    <div class="line"></div>
                                    <p class="product-price"><span> <?php echo $row['price'];?> MAD</span> <span><strike class="text-warning"><?php echo $row['old_price'];?> MAD</strike></span> </p>
                                    <a href="product-details.php?id=<?php echo $row['id'];?>">
                                        <h6><?php echo $row['name'];?></h6>
                                    </a>
                                </div>
                                <!-- Ratings & Cart -->
                                <div class="ratings-cart text-right">
                                    <div class="ratings">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </div>
                                    <div class="cart">
                                        <a  href="product-details.php?id=<?php echo $row['id'];?>" data-toggle="tooltip" data-placement="left" title="Add to Cart"><img src="img/core-img/cart.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php
                    else :
                    ?>
                    <div class="alert alert-info mt-2 mb-2">Aucun produit trouvé</div>
                    <?php
                        endif ;
                    ?>
                </div>
                <div class="row">
                    <div class="col-12">
                        <!-- Pagination -->
                        <nav aria-label="navigation">
                            <ul class="pagination justify-content-end mt-50">
                                <li class="page-item active"><a class="page-link" href="#">01.</a></li>
                                <li class="page-item"><a class="page-link" href="#">02.</a></li>
                                <li class="page-item"><a class="page-link" href="#">03.</a></li>
                                <li class="page-item"><a class="page-link" href="#">04.</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
        </div>
    </div>
    <!-- ##### Main Content Wrapper End ##### -->
    </div>
    <?php
include('includes/footer.php');
?>