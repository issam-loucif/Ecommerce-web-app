<?php
include('includes/headerad.php');
include('includes/config.php');  
?>
<form action="code1_abt.php" method="POST">
      <div class="modal-body">

        <div class="form-group">
            <label >name</label>
            <input type="text" name="title" class="form-control" placeholder="Enter category name">
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