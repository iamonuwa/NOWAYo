
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
                                       <th>Title</th>
                                            <th>Category</th>
                                            <th>Date Created</th>
                                            <th>Author</th>
                                            <th>Images</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                 <tbody>
                                    <?php foreach ($list as $value) {?>
                                        <tr class="odd gradeX">
                                        <td align="center"><input type="checkbox" name="selector[]" id="selector[]" value="<?php echo $value['news_id'];?>"></td>
                                         <td><?php echo $value['news_title'];?></td>
                                            <td><?php echo $value['category'];?></td>
                                            <td><?php echo date('F jS, Y h:i:s A', $value['news_added']);?></td>
                                             <td><?php echo $this->aauth->get_user($value['news_user_fk'])->fullname;?></td>
                                             <td><?php if (count($value['link'])) {
                                              echo  'Y';
                                              } else{
                                                echo  'N';
                                                }?></td>
                                                <td>
                                                <a href="<?php echo base_url('cp/modify-post/'.$value['news_id']);?>" class="btn btn-default">Modify</a>
                                                <a href="<?php echo base_url('news/delete/'.$value['news_id'].'/'.$value['news_added']);?>" class="btn btn-default"><span class="glyphicon glyphicon-trash"></span>Delete</a>
                                                </td>
                                              </tr>
                                        <?php }?>
                                    </tbody>
                                </table>
                                 <div class="btn-group">
          <a href="<?php echo base_url('cp/create-post');?>" class="btn btn-default">New Post</a>          
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
        <h4 class="modal-title" id="myModalLabel">Group #<?php echo $value['news_id'];?></h4>
      </div>
      <div class="modal-body">
     <div class="modal-body">
      <div class="modal-footer">
        <button type="button" class="btn btn-success">Modify</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- End Of User Modal -->
