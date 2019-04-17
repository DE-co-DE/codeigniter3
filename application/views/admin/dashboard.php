<div class="container">
  <div class="card-group">
    <?php 
          foreach ($fetch_data as $row ) {
        
        
     ?>
     <div class="col-sm-3">
  <div class="card">
    <div class="card card-1">
    <img class="card-img-top" src="<?php echo base_url()."uploads/".$row['image']; ?>" alt="Card image cap" height="200" widht="200">
    <div class="card-body">
      <h5 class="card-title"><?php echo $row['author_name']; ?></h5>
      <p class="card-text"><?php echo $row['description']; ?></p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated <?php echo $row['created_at']; ?></small>
    </div>
 
  </div>
</div>
  
  </div>
   <?php } ?>
</div>
</div>