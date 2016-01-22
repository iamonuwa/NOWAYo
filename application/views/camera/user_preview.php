<?php
$users[] = $this->userutitlities->getUserDetails(NULL, 4);
?>
<div class="container-fluid">
    <div class="row-fluid">
        <?php if ($this->aauth->is_loggedin()) { ?>
            <h6>last login: <strong><?= $value['value']['last_activity'] ?></strong></h6>
        <?php } ?>
        <div class="span12">
            <div class="span3">
                <div class="thumbnails">
                    <img src="<?= !empty($value['value']['profile_picture']) ? base_url('uploads/' . $value['value']['profile_picture']) : base_url('assets/camtales/img/picture5.png') ?>">
                </div>

            </div>
            <hr/>
            <div class="span5">
                <div class="row-fluid" style="border-right: 1px solid gray;">

                    <tr><td><h3><?= $value['value']['fullname'] ?></h3></td><td></td></tr>

                    <hr/>

                    <p>Email<h5><?= $value['value']['email'] ?></h5></p>
                    <hr/>
                    <tr><td><small>Username</small></td><td><h5><?= $value['value']['name'] ?></h5></td></tr>
                    <hr/>
                    <tr><td><small>Gender</small></td><td><h5><?= $sex['sex'][0]['gender_name'] ?></h5></td></tr>
                    <hr/>
                    </table>

                </div>
            </div>
            <div class="span4">
                <h4><?=$value['value']['fullname']?>'s photos</h4>
                <hr/>
                <li class="span12">

                    <div class="thumbnails">
                        <?php
                        $data[] = $this->upload_model->fetchByUser($value['value']['id']);
//                        $data[] = $this->userutilities->getUserDetails($value['value']['id']);
//                        var_dump($data);
                        if (!empty($data[0])) {

                            for ($index = 0; $index < count($data[0]); $index++) {
                                ?>

                                <div class="span2 fg-gray" style="height: 100px; width: 100px; padding: 10px;">
                                    <a href="#myModal" role="button"  class="thumbnail" data-toggle="modal">
                                        <img style="height: 70px; width: 100px; " data-src="holder.js/300x200" src="<?= base_url('uploads/' . $data[0][$index]['link']); ?>" alt="">
                                        <!--<p class="" style="color:black;"><?php // $data[0][$index]['description'] ?></p>-->
                                    </a>                        
                                </div>
                                <?php }
                        }
                        ?>
                    </div>
                </li>
            </div>
            <div class="row-fluid">
                <div class="row" >
                    <div class="span12 padding20">
                        <div class="well well-small">
                        <h3>Other registered users</h3>
                        </div>
                        <hr/>
                        <li class="span12 padding20" >
                            <div class="thumbnails">
                                <?php
                                for ($index = 0; $index < count($users[0]); $index++) {
                                    ?>
                                    <div class="span4 place_center" style="height: 80px; width: 90px;">
                                        <a style="color:black;" title="<?= $users[0][$index]['fullname'] ?>" href="<?= base_url('cam/user/' . $users[0][$index]['id']) ?>">
                                            <img class="thumbnail" data-src="holder.js/300x200" src="<?=
                                        !empty($users[0][$index]['profile_picture']) ? base_url('uploads/' . $users[0][$index]['profile_picture']) :
                                                base_url('assets/camtales/img/picture5.png')
                                        ?>" style="height: 80px; width: 100px; ">
                                            <p></p>
                                            <!--<p><i class="icon-briefcase"></i> <?php //  $users[0][$index]['fullname']  ?></p>-->
                                        </a>
                                    </div>
<?php } ?>
                            </div>
                        </li>
                    </div>
                </div>
                <br/>
                <br/>

                </div>


        </div>
    </div>

</div>
