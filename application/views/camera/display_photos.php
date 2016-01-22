<?php
$users[] = $this->userutitlities->getUserDetails();
?>
<div class="container-fluid" >
    <div class="hero-unit">
        <h2>Registered Users</h2>
    </div>
    <div class="row-fluid">
        <div class="span8">
            <li class="span12">

                <div class="thumbnails">
                    <?php
              
                    for ($index = 0; $index < count($users[0]); $index++) {
                        $imageResized = $users[0][$index]['profile_picture'];


//                        $filepath = base_url('uploads/'.$imageResized);
//                        var_dump($this->image_lib->resize_image());
                        ?>
                        <div class="span2 place_center">
                            <a style="color:black;"  href="<?= base_url('cam/user/' .trim($users[0][$index]['id'])) ?>">

                                <img class="thumbnail" data-src="holder.js/300x200" src="<?=
                    !empty($users[0][$index]['profile_picture']) ? base_url('uploads/' . $imageResized) :
                            base_url('assets/camtales/img/picture5.png')
                        ?>" style="height: auto; width: 150%;">
                                <p></p>
                                <small><i class="icon-briefcase"></i> <?= $users[0][$index]['fullname'] ?></small>
                            </a>
                        </div>
<?php } ?>
                </div>
            </li>
        </div>
        <div class="span4">
            <div class="hero-unit place_center">
                <small>Site Statistics</small>
                <h3><?= $index ?> </h3>
                <h5>Registered Users</h5>
            </div>
        </div>
    </div>

    <div class="span3 padding20">
        <br/>
        <br/>
    </div>
</div>

