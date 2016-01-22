
			<div id="content" class="fullwidth">					
								
				<div class="post">
					
					<div class="post-entry">
						
						<table>
						
							<tbody>
							
								<tr>
								
									<th>#</th>
									
									<th class="views">Title</th>
									
									<th>Category</th>

									<th>Date Created</th>
									
									<th>Action</th>
								</tr>


								<tr>
								
								<?php foreach ($posts as $key) {?>
								
									
									<td align="center"><a href="#"><?php echo $key['news_id'];?></a></td>
									
									<td align="center"><?php echo $key['news_title'];?></td>
									
									<td align="center"><?php echo $key['category'];?></td>

									<td align="center"><?php echo $key['news_added'];?></td>
									
									<td align="center"><?php echo anchor('blog/modify/'.$key['news_id'], 'Edit').' | ' . anchor('blog/views/' .$key['news_id'], 'View'). ' | ' .
									anchor('blog/delete/' .$key['news_id']. '/'.$key['blog_added'], 'Delete');;?></td>
									
								<?php } ?>
								</tr>

							</tbody>
						
						</table>
						
						
						
					
														
					</div><!-- END POST-ENTRY -->							
						
				</div><!-- END POST -->								
							
			</div><!-- END CONTENT -->				
		