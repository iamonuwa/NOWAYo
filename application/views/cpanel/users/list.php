
<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                            <form method="POST" action="">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    
                                    <thead>
                                        <tr> 
                                        <th align="center">
                              <input type="checkbox" name="chkall" id="chkall" onclick="return checkall('selector[]');"> 
                               <th>Full Name</th>
                                            <th>Email Address</th>
                                            <th>Phone Number</th>
                                            <th>Last Login</th>
                                        </tr>
                                    </thead>
                 <tbody>
                                    <?php foreach ($users as $value) {?>
                                        <tr class="odd gradeX">
                                        <td align="center"><input type="checkbox" name="selector[]" id="selector[]" value="<?php echo $value->id;?>"></td>
                                           <td><a href="<?php echo base_url('cpanel/index/assign_role/'.$value->id);?>"?><?php echo $value->fullname;?></a></td>
                                            <td><?php echo $value->email;?></td>
                                            <td><?php echo $value->phone;?></td>
                                            <td class="center"><?php echo $value->last_login;?></td>
                                            <input type="hidden" name="userid" value="<?php echo $value->id;?>">
                                             </tr>
                                        <?php }?>
                                    </tbody>
                                </table>
                                <div class="btn-group">

          <a href="<?php echo base_url('cp/users/create');?>" class="btn btn-default">New</a>
          </div>
                            </div>
                            
                        </div>
                    </div>
                                    </div>
                </div>
</div>
