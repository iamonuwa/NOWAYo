<?php 
// print_r($business);
?>

<div class="row">
                <div class="col-lg-12">
                <h2>Created Blogs</h2>
                <h5>NB: Blogs are set LIVE by default, click disconnect to set it Offline the blog</h5>
                    <div class="panel panel-default">
                        <div class="panel-body">
                        
                            <div class="dataTable_wrapper">
                            <form method="POST" action="<?php echo base_url('cp/presenter_blog/edit');?>">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    
                                    <thead>
                                        <tr> 
                                        <th align="center">
                              <input type="checkbox" name="chkall" id="chkall" onclick="return checkall('selector[]');"> 
                                            <th>Blog Title</th>
                                            <!-- <th>Presenter</th> -->
                                            <th>Name</th>
                                            <th>State</th>
                               <th>Blog url</th>
                               <th>Status</th>

                                        </tr>
                                    </thead>
                 <tbody>
                                     <?php 
                                     for($index = 0; $index < count($business); $index++) {
                                      if(isset($business))
                                      {
                                      $state = $this->state_model->get_state($business[$index]['state_id']);
                                      //$state_name = $state[$index]['state_name'];
                                      // var_dump($Category);

                                      ?>
                                        <tr class="odd gradeX">
                                        <td align="center"><input type="checkbox" name="selector" id="selector[]" value="<?php echo $business[$index]['id'];?>"></td>                                          
                                            <td><a href="<?=base_url('cp/presenter_blog/blog/'.$business[$index]['id'])?>"><?php echo $business[$index]['title'] ?></a></td>
                                            <!-- <td><?php// echo $business[$index]['name'];?></td> -->
                                            <td class="center"><?php echo  !empty($business[$index]['swag_name']) ? $business[$index]['swag_name'] : "Presenter";?></td>
                                            <td><?php //$state_name?></td>
                                            <td><a href="<?=base_url('blogger/').'/'.strtolower($business[$index]['presenter_id'])?>"?><?php echo base_url('blogger/').'/'.strtolower($business[$index]['presenter_id']);?></a></td>
                                            <td class="center"><button type="submit" name="delete_sta" class="btn btn-default disabled"> <?=empty($business[$index]['status']) ? 'Disconnected' : 'Published'?></button></td>
                                            <input type="hidden" name="imageid" value="<?php echo $business[$index]['image_id'];?>">
                                            <input type="hidden" name="presenterid" value="<?=$business[$index]['id']?>">
                                             </tr>
                                        <?php }}?>
                                    </tbody>
                                </table>
                                <div class="btn-group">

          <a href="<?php echo base_url('cp/presenter_blog/create');?>" class="btn btn-default">Create New</a>
          <input type="submit" style="background-color: red;"class="btn btn-default" <?= empty($business) ? 'disabled' : ''?> value="Delete Selected" name="delete_sta">
          <!-- <a href="<?php // base_url('cp/presenter_blog/edit')?>"><button  class="btn btn-default" name="edit">Edit Selected</button></a> -->

          </div>
                            </div>
                            
                            
                        </div>
                    </div>
              </div>
          </div>
</div>
