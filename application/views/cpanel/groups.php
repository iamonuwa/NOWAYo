
<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    
                                    <thead>
                                        <tr>
                                            <th>Group Title</th>
                                            <th>Group Definition</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                 <tbody>
                                    <?php foreach ($groups as $value) {?>
                                        <tr class="odd gradeX">
                                           <td><?php echo $value->name;?></td>
                                            <td><?php echo $value->definition;?></td>
                                            <td><a href="#action" data-toggle="modal" data-target="#myModal">Preview</a></td>
                                        </tr>
                                        <?php }?>
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
</div>

    <!--User Modal -->
    <form method="POST" action="<?php echo base_url('cpanel/roles/delete_group/'.$value->id);?>">
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Group #<?php echo $value->id;?></h4>
      </div>
      <div class="modal-body">
     <div class="modal-body">
      <div class="container">
      <div class="row">
      <div class="col-lg-12">Group Title <?php echo $value->name;?></div>
      <div class="col-lg-12">Group Definition <?php echo $value->definition;?></div>
      <div class="col-lg-12">Date Created <?php echo $value->date_created;?></div>
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" data-toggle="modal" data-target="#create" class="btn btn-success">Create New Group</button>
        <input type="submit" name="delete" class="btn btn-danger" value="Remove Group">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</form>
<!-- End Of User Modal -->
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
       <div class="container">
      <div class="row col-xd-12">
      <input type="text" name="group_name" class="form-control" placeholder="Group Name">
      </div>
      <div class="row col-xd-12">
      <textarea class="form-control" name="description" placeholder="Describe The New Group">
        
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

