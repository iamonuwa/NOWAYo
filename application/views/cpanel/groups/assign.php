 <form class="form-horizontal span6" action="<?php echo base_url('cpanel/roles/add_member');?>" method="POST">

          <fieldset>
                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "name">Full Name</label>

                      <div class="col-md-8">
                         <input class="form-control input-sm" id="name" name="full_name" placeholder= "Full Name" type="text" value="<?php echo $assign->fullname;?>">
                          <input class="form-control input-sm" id="name" name="user" placeholder= "Full Name" type="hidden" value="<?php echo $assign->id;?>">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "assign">Assign To</label>

                      <div class="col-md-8">
                         <select name="group"><?php foreach ($mods as $key => $value) {?>
                           <option value="<?php echo $value->id;?>"><?php echo $value->name;?></option>
                           <?php } ?>
                         </select>
                      </div>
                    </div>
                  </div>


            
             <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "idno"></label>

                      <div class="col-md-8">
                        <button class="btn btn-default" name="assign" type="submit" >Save</button>
                         <a href="<?php echo base_url('cpanel/roles/remove_member/'.$assign->id.'/'.$value->id);?>" class="btn btn-default" name="delete"><span class="glyphicon glyphicon-trash"></span> Delete Selected</a>
           <a href="<?php echo base_url('cpanel/index/ban_user/'.$assign->id);?>" class="btn btn-danger">Ban User</a>
                      </div>
                    </div>
                  </div>

             
        
          </fieldset> 

       
          
        </form>
      

        </div><!--End of container-->