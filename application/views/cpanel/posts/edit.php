 <form class="form-horizontal span6" action="<?php echo base_url('news/modify');?>" enctype="multipart/form-data" method="post" accept-charset="utf-8">

          <fieldset>
                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "name">Title</label>

                      <div class="col-md-8">
                         <input class="form-control input-sm" id="title" name="title" placeholder=
                            "News Title (Make It Catchy)" type="text" value="<?php echo $fetch[0]['news_title'];?>">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "email">Select News Category</label>

                      <div class="col-md-8">
                         <select name = "category">
      <?php foreach ($state as $key => $value) {
        echo '<option value = "'.$value['state_name'].'">'.$value['state_name'].'</option>';
      }?>
    </select>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">

                      <div class="col-md-12">
            <textarea class="summernote form-control" name="content" data-height="200" placeholder="News Content"><?php echo $fetch[0]['news_content'];?>
            </textarea>

          </div>
                  </div>
             <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "idno"></label>

                      <div class="col-md-8">
                        <button class="btn btn-default" name="save" type="submit" >Save</button>
                      </div>
                    </div>
                  </div>

              
          </fieldset> 

</form>
        </div>