<?php
if ($this->aauth->is_loggedin()) {

    $user_id = $this->aauth->get_user()->id;
    $data[] = $this->upload_model->fetchByUser($user_id);
    ?>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="row">

                <div class="row-fluid" >
                    <h3 style="padding-left: 0px;">Upload Images To Your Camera Tales Account</h3>
                    <form>
                        <fieldset>
                            <div class="wpcf7" id="wpcf7-f853-p402-o1" lang="en-US" dir="ltr"style="padding-left: 40px;">
                                <div class="row">
                                    <div id="drop" class="screen-reader-response"></div>

                                    <div class="well well-small span4"><h3>Select Image File</h3></div>
                                </div>
                                <?php echo form_open_multipart('cam/do_upload'); ?>

                                <div class="row padding20">
                                    <input name="userfile[]" type="file" multiple="multiple"/>
                                </div>
                            </div>
                            <div class="row" style="padding-left: 60px;">
                                <textarea class="span6" placeHolder="Comment on the image uploaded..." required name="description"></textarea>
                                
                                <p><input type="submit"  class="btn btn-primary" value="Upload Camera Tales"/></p>

                            </div>
                        </fieldset>
                    </form>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="well well-small">
                <h2>My Uploaded Images</h2>
            </div>
            <div class="row-fluid">
                <div class="span12">
                    <div class="thumbnails">                        

                        <?php
                        if (!empty($data[0])) {
                            for ($index = 0; $index < count($data[0]); $index++) {
                                ?>
                                <div class="span4 padding20" style="height: 250px; width: 250px;">
                                    <img  data-src="holder.js/300x200" src="<?= base_url('uploads/' . $data[0][$index]['link']) ?>">
                                </div>
                            <?php
                            }
                        } else {
                            ?>
                        </div>
                        <div class="span12 place_center row">
                            <p><i class="icon-picture"></i></p>
                            <h5>No Image in your album</h5>
                        </div>
    <?php } ?>

                </div>

            </div>
        </div>

    </div>

    </div>

<?php } ?>