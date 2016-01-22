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
                                            <th>Address</th>
                                            <th>Phone Number</th>
                                            <th>Date Added</th>
                                            <th>WebSite url</th>
                                        </tr>
                                    </thead>
                 <tbody>
                                     <?php for($index = 0; $index < count($value); $index++) {?>
                                        <tr class="odd gradeX">
                                        <td align="center"><input type="checkbox" name="selector[]" id="selector[]" value="<?php echo $value[$index]['id'];?>"></td>
                                           <td><a href="<?=base_url('cp/manageads/'.$value[$index]['id'])?>"?><?php echo $value[$index]['title'];?></a></td>
                                            <td><?php echo $value[$index]['location'];?></td>
                                            <td><?php echo $value[$index]['phone'];?></td>
                                            <td class="center"><?php echo $value[$index]['date_added'];?></td>
                                            <td class='center'><?= $value[$index]['website']?></td>
                                            <input type="hidden" name="userid" value="<?php echo $value[$index]['id'];?>">
                                             </tr>
                                        <?php }?>
                                    </tbody>
                                </table>
                                <div class="btn-group">

          <a href="<?php echo base_url('cp/uploadads');?>" class="btn btn-default">New</a>
          </div>
                            </div>
                            
                            
                        </div>
                    </div>
                                    </div>
                </div>
</div>
