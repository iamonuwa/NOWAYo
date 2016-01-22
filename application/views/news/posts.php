
			<div id="content" class="fullwidth">					
								
				<div class="post">
					
					<div class="post-entry">
						
						<table>
						
							<tbody>
							
								<tr>
								
									<th>#</th>
									
									<th class="views">Title</th>

									<th>Date Created</th>
									
									<th>Action</th>
								</tr>
								<?php foreach ($posts as $key) {?>
								<tr>
									
									<td align="center"><a href="#"><?php echo $key['news_id'];?></a></td>
									
									<td align="center"><?php echo $key['news_title'];?></td>

									<td align="center"><?php echo date('F jS, Y h:i:s A',$key['news_added']);?></td>
									
									<td align="center"><?php echo anchor('news/modify/'.$key['news_id'], 'Edit').' | ' . anchor('news/views/' .$key['news_id'], 'View'). ' | ' .
									anchor('news/delete/' .$key['news_id']. '/'.$key['news_added'], 'Delete');;?></td>
									
									</tr>
								<?php } ?>
								

							</tbody>
						
						</table>
						
						
						
					
														
					</div><!-- END POST-ENTRY -->							
						
				</div><!-- END POST -->								
							
			</div><!-- END CONTENT -->				
		