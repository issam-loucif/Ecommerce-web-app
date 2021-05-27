
<?php
include('includes/headerad.php');
?>
    <!-- Main content -->
    <section class="content">

      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-12 connectedSortable">
          <!-- Map box -->
          <div class="box box-solid bg-light-blue-gradient">
            <div class="box-header">
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-primary btn-sm daterange pull-right" data-toggle="tooltip"
                        title="Date range">
                  <i class="fa fa-calendar"></i></button>
                <button type="button" class="btn btn-primary btn-sm pull-right" data-widget="collapse"
                        data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
                  <i class="fa fa-minus"></i></button>
              </div>
              <!-- /. tools -->
              <i class="fa fa-map-marker"></i>
              <h3 class="box-title">
                Visitors
              </h3>
            </div>
            

            <!-- /.box-body-->
            <div class="box-footer no-border">
              <div class="row">
                <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
                  <div id="sparkline-1"></div>
                  <div class="knob-label">Visitors</div>
                </div>
                <!-- ./col -->
                <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
                  <div id="sparkline-2"></div>
                  <div class="knob-label">Online</div>
                </div>
                <!-- ./col -->
                <div class="col-xs-4 text-center">
                  <div id="sparkline-3"></div>
                  <div class="knob-label">Exists</div>
                </div>
                <!-- ./col -->
              </div>
              <!-- /.row -->
            </div>
          </div>
          <!-- /.box -->

        </section>
        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        <section class="col-lg-12 connectedSortable">
        <div class="container">
                
                
                <!-- Product Board -->
                <h3 style="text-align: center;">All Products</h3>
                <div class="cart-table-area section-padding-100">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <div class="cart-title mt-50">
                        <?php
                $query = mysqli_query($connection, "SELECT * FROM products");
                while ($row = mysqli_fetch_array($query))
                {
                $id = $row['id'];
                $name = $row["name"];
                $price = $row["price"];
                $picture = $row["picture"];
                $description = substr($row["description"], 0, 200);
                $date = $row["created_at"];

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
                                <tr>
                        <td class="cart_img">
                        <?php echo "<img src='./img/" . $row['picture'] . "' >"; ?>
                        </td>
                        <td class="cart_desc">
                        <h4><?php echo "$name"; ?></h4>
                        </td>
                        <td class="cart_desc">
                        <p>$<?php echo "$price"; ?></p>
                        </td>
                        <td class="cart_desc">
                        <p><?php echo "$description"; ?></p>
                        </td>
                        <td class="cart_desc">
                        <a href="delletead.php?id=<?php echo $row["id"]; ?>"class="btn btn-danger"><i class="fa fa-trash"></i></a>
                        <a href="edit.php?id=<?php echo $row["id"]; ?>"class="btn btn-success"><i class="fa fa-edit"></i></a>
                        </td>
                        </tr>
                        </tbody>
                            </table>
                        </div>
                   <?php
                } ?>
                    </div>
                    </div>
                </div>
                <!-- Product Board -->

                <!-- Category Board -->
                <h3 style="text-align: center;">All Categories</h3>
                <div class="small-container">
                    <div class="row">
                    <?php
                $query = mysqli_query($connection, "SELECT * FROM categories");
                while ($row = mysqli_fetch_array($query))
                {
                $id = $row['id'];
                $name = $row["nam"];
                $date = $row["created_at"];
                ?>
                        <div class="col-4">
                        <h4><?php echo "$name"; ?></h4>
                        <a href="delletead.php?id=<?php echo $row["id"]; ?>"class="btn btn-danger"><i class="fa fa-trash"></i></a>
                        <a href="edit.php?id=<?php echo $row["id"]; ?>"class="btn btn-success"><i class="fa fa-edit"></i></a>
                        </div>
                        <?php
                } ?>
                    </div>
                </div>
                </div>
        </section>
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  
  <?php
include('includes/footerad.php');
?>