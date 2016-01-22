<?php 

// print_r($value);
?>

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
                               <th>Business Name</th>
                                            <th>Biz Category</th>
                                            <th>Phone Number</th>
                                            <th>Date Added</th>
                                            <th>WebSite url</th>
                                        </tr>
                                    </thead>
                 <tbody>
                                     <?php for($index = 0; $index < count($business); $index++) {

                                        $cate_gory = $this->userutitlities->ConvertMatch('nowayo_biz_cat', $business[$index]['business_category']);
                                        // var_dump($cate_gory);

                                      ?>
                                        <tr class="odd gradeX">
                                        <td align="center"><input type="checkbox" name="selector[]" id="selector[]" value="<?php echo $business[$index]['id'];?>"></td>
                                           <td><a href="#"?><?php echo $business[$index]['name'];?></a></td>
                                            <td><?php echo $cate_gory['name']?></td>
                                            <td><?php echo $business[$index]['contact_nos'];?></td>
                                            <td class="center"><?php echo $business[$index]['date_added'];?></td>
                                            <td class='center'><?= $business[$index]['website']?></td>
                                            <input type="hidden" name="userid" value="<?php echo $business[$index]['id'];?>">
                                             </tr>
                                        <?php }?>
                                    </tbody>
                                </table>
                                <div class="btn-group">

          <a href="<?php echo base_url('cp/business_list');?>" class="btn btn-default">New</a>
          </div>
                            </div>
                            
                            
                        </div>
                    </div>
              </div>
          </div>
</div>
