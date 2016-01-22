<div class="container-fluid">
      <div class="row margin-b-2">
      <?php foreach($camera as $row){?>
        <div class="col-sm-4 col-md-2">
        <input type="checkbox" name="images[]" value="<?= $row['server_created'];?>">
         <a id="popup" href="<?= base_url('uploads/').'/'. $row['link']; ?>"> <img class="thumbnail img-responsive" src="<?= base_url('uploads/').'/'. $row['link']; ?>" alt=""></a>
        </div>
        <?php } ?>
      </div>
    </div>