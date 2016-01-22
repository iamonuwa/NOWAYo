    <div class="container-fluid padding10">
        <div class="row-fluid padding20">
            <div class="fg-gray row bg-black">
                <h3>UPDATE PERSONAL DETAILS</h3>
                <hr/>
            </div>
            <div class="span7">
                <h4><i class="icon-edit"></i>&nbsp;EDIT INFO</h4>

                <div class="hero-unit place_center">
                    <div class="row">

                    </div>
                    <form class="form-inline">

                        <div class="row">
                            <input class="span10"required  type="text" disabled name="fullname" placeHolder="<?= $this->aauth->get_user()->fullname?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" title="<?= $this->aauth->get_user()->fullname?> you can't Edit field">
                                                 
                        </div>
                        <div class="row">

                            <input class="span5" required type="text" name="email" placeHolder="<?= $this->aauth->get_user()->email?>">
                            <input class="span5" type="text" required name="phone" placeHolder="<?= $this->aauth->get_user()->phone?>">                        
                        </div>
                        <hr/>
                        <div class="row">
                            <input  class="span5" type="text" required id="statofO" placeHolder="State of Origin">
                            <input class="span5" type="text" required id="nationality" placeHolder="Nationality">
                        </div>
                        <hr/>
                        <div class="row">
                            <input type="password" required name="password" class="span10 btn-circle" placeHolder="Enter Password to update">
                        </div>
                        <hr/>
                        <div class="row">
                            <button class="btn btn-success">UPDATE</button>
                            <button class="btn btn-warning">CANCEL</button>
                        </div>


                    </form>

                </div>
            </div>
            <div class="span4 pull-right">
            <?= form_open_multipart('cam/profile_picture')?>                
                <div class="span7">
                    <?php $imageName = $this->aauth->get_user()->profile_picture;?>
                    <img  alt="" src="<?= isset($imageName) ? base_url('uploads/'.$imageName):  base_url('assets/camtales/img/picture5.png') ?>">
                <div class="row place_center padding20">
                    <input type="file" name="userfile[]" />
                    <p><input type="submit" name="submit" value="Change Profile Pic" class="btn btn-silver"></p>
                </div>
                </div>
            </div>
        </div>
    </div>

