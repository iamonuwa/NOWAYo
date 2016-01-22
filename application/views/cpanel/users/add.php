 <form class="form-horizontal span6" action="<?php echo base_url('index/register');?>" method="POST">

          <fieldset>
                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "name">Name:</label>

                      <div class="col-md-8">
                         <input class="form-control input-sm" id="name" name="full_name" placeholder=
                            "Full Name" type="text" value="">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "email">Email Address:</label>

                      <div class="col-md-8">
                         <input class="form-control input-sm" id="email" name="email" placeholder=
                            "Email Address" type="text" value="">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "password">Password:</label>

                      <div class="col-md-8">
                        <input name="deptid" type="hidden" value="">
                         <input class="form-control input-sm" id="password" name="password" placeholder=
                            "Password" type="Password" value="">
                      </div>
                    </div>
                  </div>
                   <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "username">Username:</label>

                      <div class="col-md-8">
                         <input class="form-control input-sm" id="username" name="user_name" placeholder=
                            "Username" type="text" value="">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "phone">Phone Number:</label>

                      <div class="col-md-8">
                         <input class="form-control input-sm" id="phone" name="phone" placeholder=
                            "Phone Number" type="text" value="">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "type">Gender:</label>

                      <div class="col-md-8">
      <select class="form-control" name="gender">
      <?php foreach ($gender as $key => $value) {?>
      <option value="<?php echo $value['gender_name'];?>"><?php echo $value['gender_name'];?></option>
     <?php  }?>
      </select>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "type">State Of Residence:</label>

                      <div class="col-md-8">
      <select class="form-control" name="residence">
      <?php foreach ($state as $key => $value) {?>
      <option value="<?php echo $value['state_name'];?>"><?php echo $value['state_name'];?></option>
     <?php  }?>
      </select>
                      </div>
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
      

        </div><!--End of container-->