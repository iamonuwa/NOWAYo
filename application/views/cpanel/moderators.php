
<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    
                                    <thead>
                                        <tr>
                                            <th>Email Address</th>
                                            <th>Last Login</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                 <tbody>
                                    <?php foreach ($mods as $value) {?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $value->email;?></td>
                                            <td class="center"><?php echo $value->last_login;?></td>
                                            <td><a href="#action" data-toggle="modal" data-target="#previewMod">Preview</a></td>
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

<!--Moderator Modal -->
<div class="modal fade" id="previewMod" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><?php echo 'Moderator: '.$value->fullname. ' Details';?></h4>
      </div>
      <div class="modal-body">
      <div class="container">
      <div class="row">
      <div class="col-lg-12">Full Name <?php echo $value->fullname;?></div>
      <div class="col-lg-12">Last Seen IP Address <?php echo $value->ip_address;?></div>
      <div class="col-lg-12">Last Activity <?php echo $value->last_activity;?></div>
      </div>
      <div class="row">
          <h4 class="heading">Contact Information</h4>
      </div>
      <div class="row">
      <div class="col-lg-12">Email Address <?php echo $value->fullname;?></div>
      <div class="col-lg-12">Phone Number <?php echo $value->phone;?></div>
      </div>
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" data-toggle="modal" data-target="#removeMod" class="btn btn-danger">Remove Moderator</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- End Of Moderator Modal -->

<div class="modal fade" id="removeMod" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Remove Moderator - <?php echo $value->fullname;?>?</h4>
      </div>
      <div class="modal-body">
     <div class="modal-body">
     Do you Want To Remove Moderator <?php echo $value->fullname;?>?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success">Yes</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
      </div>
    </div>
  </div>
</div>