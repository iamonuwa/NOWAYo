
<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    
                                    <thead>
                                        <tr> 
                                        <th align="center">
                              <input type="checkbox" name="chkall" id="chkall" onclick="return checkall('selector[]');"> 
                               <th>Full Name</th>
                                            <th>Email Address</th>
                                            <th>Phone Number</th>
                                            <th>Last Login</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                 <tbody>
                                    <?php foreach ($ban as $value) {?>
                                        <tr class="odd gradeX">
                                        <td align="center"><input type="checkbox" name="selector[]" id="selector[]" value="<?php echo $value->id;?>"></td>
                                           <td><?php echo $value->fullname;?></a></td>
                                            <td><?php echo $value->email;?></td>
                                            <td><?php echo $value->phone;?></td>
                                            <td class="center"><?php echo $value->last_login;?></td>
                                            <td class="center"><a href="<?php echo base_url('cpanel/index/unban_user/'.$value->id);?>" class="btn btn-default">Unban User</a></td>
                                             </tr>
                                        <?php }?>
                                    </tbody>
                                </table>
                               <!-- <div class="btn-group">           
          <button type="submit" class="btn btn-default" name="delete"><span class="glyphicon glyphicon-trash"></span> Delete Selected</button>
        </div> -->
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
</div>