<?php
include('includes/headerad.php');
?>
<form action="code_abt.php" method="POST">
      <div class="modal-body">

        <div class="form-group">
            <label >name</label>
            <input type="text" name="name" class="form-control" placeholder="Enter name">
        </div>
        <div class="form-group">
            <label >Sub Title</label>
            <input type="text" name="picture" class="form-control" placeholder="Enter picture">
        </div>
        <div class="form-group">
            <label >Description</label>
            <input type="text" name="description" class="form-control" placeholder="Enter Description">
        </div>
        <div class="form-group">
            <label >price</label>
            <input type="text" name="price" class="form-control" placeholder="Enter price">
        </div>
        <div class="form-group">
            <label >old price</label>
            <input type="text" name="old_price" class="form-control" placeholder="Enter old price">
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="about_save" class="btn btn-primary">Save</button>

      </div>
      </form>
    </div>
  </div>
</div>


<?php
include('includes/footerad.php');
?>