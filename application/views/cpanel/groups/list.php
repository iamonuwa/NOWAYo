
<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    
                                    <thead>
                                        <tr>
                                        <th><input type="checkbox" name="chkall" id="chkall" onclick="return checkall('selector[]');"> </th>
                                            <th>Group Title</th>
                                            <th>Group Definition</th>
                                        </tr>
                                    </thead>
                 <tbody>
                                    <?php foreach ($groups as $value) {?>
                                        <tr class="odd gradeX">
                                        <td align="center"><input type="checkbox" name="selector[]" id="selector[]" value="<?php echo $value->id;?>"></td>
                                         
                                           <td><?php echo $value->name;?></td>
                                            <td><?php echo $value->definition;?></td>
                                        </tr>
                                        <?php }?>
                                    </tbody>
                                </table>
                                <div class="btn-group">
          <button type="submit" class="btn btn-default" data-toggle="modal" data-target="#create" name="create">Create New Group</button>
           <a href="<?php echo base_url('cpanel/roles/delete_group/'.$value->name);?>" class="btn btn-danger">Delete Selected Group</a>
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

<form method="POST" action="<?php echo base_url('cpanel/roles/create_group');?>">
<div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Create New Group</h4>
      </div>
      <div class="modal-body">
     <div class="modal-body">
       <div class="form-group">
                      <div class="col-md-12">
                         <input class="form-control input-sm" id="name" name="group_name" placeholder=
                            "Group Name" type="text" value="">
                    </div>
                  </div>

                  <div class="form-group">
                      <div class="col-md-12">
                      <textarea class="form-control input-sm" id="definition" name="definition" placeholder=
                            "Group Definition">
                          
                      </textarea>
                    </div>
                  </div>
      <div class="modal-footer">
        <input type="submit" name="create" class="btn btn-success" value="Create New Group">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
 </form>

 <form method="POST" action="<?php echo base_url('cpanel/roles/delete_group/'.$value->id);?>">
<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Delete Group #<?php echo $value->id;?></h4>
      </div>
      <div class="modal-body">
     <div class="modal-body">
     Do You Really Want TO Delete <?php echo $value->name;?>
      <div class="modal-footer">
        <button type="button" data-toggle="modal" data-target="#create" class="btn btn-success">Create New Group</button>
        <input type="submit" name="delete" class="btn btn-danger" value="Remove Group">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</form>