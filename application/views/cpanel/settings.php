
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
                                       <th>Name</th>
                                            <th>Value</th>
                                            <th>Description</th>
                                        </tr>
                                    </thead>
                 <tbody>
                                    <?php foreach ($settings as $value) {?>
                                        <tr class="odd gradeX">
                                        <td align="center"><input type="checkbox" name="selector[]" id="selector[]" value="<?php echo $value['id'];?>"></td>
                                         <td><?php echo $value['name'];?></td>
                                            <td><?php echo $value['value'];?></td>
                                            <td><?php echo $value['description'];?></td>
                                              </tr>
                                        <?php }?>
                                    </tbody>
                                </table>
                                 <div class="btn-group">

          <a href="<?php echo base_url('cpanel/index/modify');?>" class="btn btn-default">Modify</a>
          <button type="submit" class="btn btn-default" name="delete"><span class="glyphicon glyphicon-trash"></span> Delete Selected</button>
        </div>
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

    <!--User Modal -->
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
      <div class="col-lg-12">Variable <?php echo $value->name;?></div>
      <div class="col-lg-12">Value <?php echo $value->definition;?></div>
      <div class="col-lg-12">Reset Super Password</div>
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success">Modify</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- End Of User Modal -->

 