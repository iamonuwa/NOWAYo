					
			<div class="editors-picks divblock">
						
				<h3 class="block-heading"><span>
				<?php if($this->aauth->get_user($this->uri->segment(3))->id == $this->session->userdata('id')){
					echo 'My Album';
				}
					else{
						echo $this->aauth->get_user($this->uri->segment(3))->fullname.'\'s Album';
					}?>
					 </span>
					 </h3>	
                                			<?php 

                         if(count($upload) > 0){

						foreach ($upload as $row) {?>	


					<div class="grid grid-3">				
					
					<div class="image">
					<form method="POST" action="<?= base_url('cam/delete/'.$row['upload_id']);?>">
					<?php if($this->aauth->get_user($this->uri->segment(3))->id == $this->session->userdata('id')){?>
					<button name="delete" class="btn btn-small btn-red">Delete</button>
					<?php }?>
					<a class="item_overlay" rel="lightbox" href="<?= base_url('uploads/').'/'. $row['link'];?>">
					<img width="364" height="250" src="<?= base_url('uploads/').'/'. $row['link'];?>"  alt="31">
					</a>
					</form>
					</div>					
					
					</div>
<?php }
			}
	else{} ?>


</div>	