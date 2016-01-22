<?php

// var_dump($name);
// print_r($state);

?>
          <div class="row">
          <h3>Add New Category</h3>
          </div>
<div class='row'>
<form class="form-horizontal span6" enctype='multipart/form-data' method="post" action="<?=base_url('cp/biz_category/edit')?>" charset="utf-8">
<fieldset>
	 <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "name">Title</label>

                      <div class="col-md-8">
                         <input class="form-control input-sm" id="title" name="title" placeholder=
                            "Enter the Business Catagory" type="text" value="">
                      </div>
                    </div>
                  </div>


                  <div class="form-group">
                  <div class="col-md-8">
                  <label class='col-md-4 control-label' for='name'>*Comment</label>
                  
                  <div class='col-md-8'>
                  <textarea  class="summernote form-control" data-height=""  name='comment'placeHolder='Enter brief Description (optional)'></textarea>
                  </div>
                  </div>                    
                  </div>           
                                 
            
             <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "idno"></label>

                      <div class="col-md-8">
                       <button class="btn btn-default" name="save" type="submit" >Add</button></a>
                      </div>
                    </div>
                  </div>
</fieldset>
</form>
</div>
<div class="row">
<h3>Available Category</h2>
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
                               <th>Business Category</th>
                                            <th>Status</th>
                                            <th>Comment</th>
                                        </tr>
                                    </thead>
                 <tbody>
                                     <?php 
                                     if(isset ($business)){
                                     for($index = 0; $index < count($business); $index++) {?>
                                        <tr class="odd gradeX">
                                        <td align="center"><input type="checkbox" name="selector[]" id="selector[]" value="<?php echo $business[$index]['id'];?>"></td>
                                           <td><a href="#"?><?php echo $business[$index]['name'];?></a></td>
                                            <td><?= $business[$index]['disabled'] === NULL? 'Active' : 'Disabled';?></td>
                                            <td><?= $business[$index]['Comment'] ===NULL ? "<h6 style='color:red'>No Comment</h6>" : $business[$index]['Comment'];?></td>
                                            <input type="hidden" name="userid" value="<?php echo $business[$index]['id'];?>">
                                             </tr>
                                        <?php } }?>
                                    </tbody>
                                </table>
                              <div class="btn-group">

          <button type="submit" class="btn btn-default" name="delete"><span class="glyphicon glyphicon-trash"></span> Delete Selected</button>
            </div>
                            </div>
                            
                            
                        </div>
                    </div>
              </div>
          </div>
