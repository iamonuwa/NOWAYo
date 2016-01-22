<?php 

// print_r($value);
?>

<div class="row">
                <div class="col-lg-12">
                <h3>State Businesses</h3>
                    <div class="panel panel-default">
                        <div class="panel-body">
                        
                            <div class="dataTable_wrapper">
                            <form method="POST" action="<?php echo base_url('cp/business_list/process');?>">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    
                                    <thead>
                                        <tr> 
                                        <th align="center">
                              <input type="checkbox" name="chkall" id="chkall" onclick="return checkall('selector[]');"> 
                               
                                            <th>State</th>
                                            <th>Date Added</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                 <tbody>
                                     <?php 
                                     for($index = 0; $index < count($business); $index++) {
                                      $Category['cate'] = $this->userutitlities->ConvertMatch('nowayo_biz_cat', $business[$index]['business_category']);

                                      $state['state'] = $this->state_model->get_state($business[$index]['state_id']);
                                      // var_dump($state['state']);

                                      ?>
                                        <tr class="odd gradeX">
                                        <td align="center"><input type="checkbox" name="selector" id="selector[]" value="<?php echo $business[$index]['id'];?>"></td>                                         
                                           <td><?php echo $state['state'][0]['state_name'];?></td>
                                            <td class="center"><?php echo $business[$index]['date_added'];?></td>                                            
                                            <td class="center"><input type="submit" name="delete_sta" class="btn btn-default" value="<?=empty($business[$index]['status']) ? 'Publish' : 'Disconnect'?>"/></td>                                            
                                            <input type="hidden" name="userId" value="<?=$business[$index]['id']?>">
                                             </tr>
                                        <?php }?>
                                    </tbody>
                                </table>
                                <div class="btn-group">

          <a href="<?php echo base_url('cp/business_list');?>" class="btn btn-default">New</a>
          <input type="submit" class="btn btn-default" <?= empty($business) ? 'disabled' : ''?> value="Delete Selected" name="delete_sta">

          </div>
                            </div>
                            
                            
                        </div>
                    </div>
              </div>
          </div>
</div>
