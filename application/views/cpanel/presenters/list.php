
<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <!-- /.panel-heading -->
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
                                        </tr>
                                    </thead>
                 <tbody>
                                    <?php foreach ($presenters as $value) {?>
                                        <tr class="odd gradeX">
                                        <td align="center"><input type="checkbox" name="selector[]" id="selector[]" value="<?php echo $value->id;?>"></td>
                                           <td><?php echo $value->fullname;?></a></td>
                                            <td><?php echo $value->email;?></td>
                                            <td><?php echo $value->phone;?></td>
                                            <td class="center"><?php echo $value->last_login;?></td>
                                             </tr>
                                        <?php }?>
                                    </tbody>
                                </table>
                                <div class="btn-group">

          <button type="submit" class="btn btn-default" name="delete"><span class="glyphicon glyphicon-trash"></span> Delete Selected</button>
            </div>
                            </div>
                            
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
</div>