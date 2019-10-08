
<div class="container register-form">
            <div class="form">
                <div class="note">
                    <p class="heading-4">Add Sub product.</p>
                </div>

                <div class="form-content">
                    <?php echo form_open_multipart('addSub'); ?>
                    <div class="row">
                        
                        <div class="col-md-6">
                                 <div class="form-group">
                                    <label for="files" class="border p-4">
                                        <span class="fa fa-camera fa-3x"></span>
                                    </label>
                                <input type="file" id="files" class="form-control d-none" name="image" onchange="readURL(this);"  />

                            </div>
                             <div class="form-group">
                                 <label>Select Main Product</label>
                               <select name="main_cat" class="form-control">
                                   <option value=""> select one </option>
                                   <?php foreach($mainProduct as $cat){?>
                                    <option value="<?php echo $cat['author_name']; ?>"><?php echo $cat['author_name']; ?></option>
                                   <?php } ?>
                               </select>
                            </div>
                            <div class="form-group">
                                 <label>Product name</label>
                                <input type="text" class="form-control" placeholder="Title" name="author_name" value=""/>
                            </div>
                            <div class="form-group">
                                <label>Description(optional)</label>
                                <textarea class="form-control" name="description" placeholder="description"></textarea>
                            </div>
                            <div class="form-group">
                                  <button type="submit" class="btnSubmit" >Submit</button>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <img src="" id="output" alt="" class="img-fluid w-100">
                          
                        </div>
                        
                    </div>
                  <?php echo form_close(); ?>
                </div>
            </div>
        </div>
        <script type="text/javascript">  
              CKEDITOR.replace( 'description' );
            function readURL(input) {
      
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#output')
                    .attr('src', e.target.result)
                   
            };

            reader.readAsDataURL(input.files[0]);
        }
    }</script>