<?php 
// var_dump($opinion);
?>

<div class="row">
                <div class="col-lg-12">
  
                <h5>NB: </h5>
                    <div class="panel panel-default">
                        <div class="panel-body">
                        
                            <div class="dataTable_wrapper">
                            <form method="POST" action="<?php echo base_url('cp/presenter_blog/edit');?>">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    
                                    <thead>
                                        <tr> 
                                        <th align="center">
                              <input type="checkbox" name="chkall" id="chkall" onclick="return checkall('selector[]');"> 
                                            <th>Topic</th>
                                            <th>Author</th>
                                            <th>Date</th>
                                            <th>State</th>
                               <th>Status</th>

                                        </tr>
                                    </thead>
                 <tbody>
                                     <?php 
                                     foreach($opinion as $key => $value) {
                                      if(isset($value))
                                      {
                                      	$userID['info'] = $this->userutitlities->getUserDetails($value['user_id'], NULL);
                                      if(!empty($value['state_id']))
                                      {
                                      $state['state_name'] = $this->state_model->get_state($value['state_id']);
                                      
                                      $state_name = $state['state_name']['state_name'];
                                  }else{$state_name = "No State";}

                                      // var_dump($Category);

                                      ?>
                                        <tr class="odd gradeX">
                                        <td align="center"><input type="checkbox" name="selector" id="selector[]" value="<?php echo $value['id'];?>"></td>                                          
                                            <td><a href="<?= base_url('cp/opinion/view/'.$value['id'])?>"><?php echo $value['title'] ?></a></td>
                                            <td><?php echo $userID['info']['fullname'];?></td>
                                            <td class="center"><?=date('d-m-Y h:i A', $value['date_created'])?></td>
                                            <td><?=$state_name?></td>
                                            
                                            <td class="center"><?=$value['reviewed'] ===NULL ? 'Not Live' : 'On Live' ?></td>
                                            <input type="hidden" name="imageid" value="<?php echo $value['image_id'];?>">
                                            <input type="hidden" name="presenterid" value="<?=$value['id']?>">
                                             </tr>
                                        <?php }}?>
                                    </tbody>
                                </table>
                                <div class="btn-group">

          <a href="<?php echo base_url('cp/opinion/create');?>" class="btn btn-default">Delete</a>
          
          <!-- <a href="<?php // base_url('cp/presenter_blog/edit')?>"><button  class="btn btn-default" name="edit">Edit Selected</button></a> -->

          </div>
                            </div>
                            
                            
                        </div>
                    </div>
              </div>
          </div>
</div>
