<?php
// var_dump($uploaded);



$author['user'] = $this->userutitlities->getId($opinion['user_id']);
$image['url'] = $this->userutitlities->getImageById($opinion['image_id']);
$image['theme'] = $this->userutitlities->getImageById($opinion['theme_id']);
if (!empty($opinion['state_id'])) {
    $author['state'] = $this->state_model->get_state($opinion['state_id']);
    $state_name = $author['state'][0]['state_name'];
} else {
    $state_name = "no state";
}
?>

<script src="<?= base_url('assets/tinymce/tinymce.min') ?>"></script>
<script>tinymce.init({selector:'textarea'});</script>
<div class="row">
    <div class="col-lg-12">


        <div class="panel panel-default">
            <div class="row">
                <div class="col-xs-6 col-fg-6">
                    <div class="btn-group">

                        <a href="<?= base_url('cp/presenter_blog') ?>" class="btn bg-success btn-default">Return Bloggers</a>
                        <a href="<?= base_url('cp/presenter_blog/blog/publish/' . $opinion['id']) ?>" class="btn btn-default"><?= empty($opinion['status']) ? 'Publish' : 'Disconnect' ?></a>
                        <a class="btn btn-default bg-danger" href="<?= base_url('cp/presenter_blog/blog/edit/' . $opinion['id']) ?>">Edit</a>
                        <a class="btn btn-default bg-danger" href="<?= base_url('cp/presenter/' . $opinion['id'] . '/upload') ?>">Upload Video</a>
                        <a class="btn btn-default bg-orange" target="_blank" href="<?= base_url('blogger/' . strtolower($opinion['presenter_id'])) ?>">Visit Blog</a>
                    </div>
                </div>
                <div class="col-xs-6 col-fg-3">
                    <a class="btn btn-default bg-danger" href="<?= base_url('cp/presenter_blog/edit/' . $opinion['id'] . '/delete') ?>">Delete Blog</a>
                </div>

                <br/>
            </div>

            <div class="panel-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="row">
                            <img src="<?= base_url('uploads/' . $image['url']['link']) ?>" width="200"><br/>
                            <form class="form-group" enctype="multipart/form-data" action="<?=base_url('cp/presenter_blog/blog/11/edit')?>" method="Post">
                                <p><input type="file" name="picture" required placeHolder="Change Image" />
                                    <input type="hidden" name="upload_id" value="<?=$opinion['image_id']?>"/>
                                    <br/>
                                    <button name="submit" class="btn btn-primary btn-tumblr col-fg-3">Change Picture</button>
                                </p>
                            </form>
                        </div>
                    </div>
                    <div class="col-xs-5 col-fg-4">
                        <div class="row">


                            <h3 style="color: black">BLOGGER : <?= !empty($opinion['name']) ? $opinion['name'] : $opinion['swag_name'] ?><br/>
                                <small>State: <?= $state_name ?> || views: <?= $opinion['views'] ?> Visitors</small><br/>
                                blog url:<a href="#"><small><?= strtolower(base_url('blogger/' . $opinion['presenter_id'])) ?></small>
                                </a></h3></div>
                    </div>
                </div>
                <hr />

                <div class="container">
                    <h4>BLog Content</h4>
                    <div class="col-lg-10">

<?php if ($this->uri->segment(3) === "edit") { ?>
                            <p>
                                <small style="color: red">Enter Changes and Click Save</small>
                            <form action="<?= base_url('cp/opinion/edit/save/' . $opinion['id']) ?>" method="POST">
                <!-- <textarea id="wysiwyg" name="comment" cols="45" rows="8" aria-required="true" placeholder="Message"></textarea></p>    -->
                                <textarea id="wysiwyg" autofocused="" class="summernote form-control col-md-3" name="content" data-height="200" ><?= $opinion['description'] ?></textarea></p>

                                <div class="btn-group">
                                    <input name="save" value="Save" type="submit" class="btn btn-default"/>
                                </div>
                            </form>
<?php } else { ?>

                            <img src="<?= base_url('uploads/' . $image['theme']['link']) ?>" style="width: 50%" alt=""/>
                            <br />

                            <h2><?= $opinion['title'] ?><br />
                                <small><?= $opinion['intro'] ?></small></h2>
                            <p><?= $opinion['description'] ?></p>
                            <hr />


<?php } ?>
                        <!--                                Other Blog Posts -->

<?php
for ($count = 0; $count < count($posts); $count++):
    $imageLink['imag'] = $this->userutitlities->getImageById($posts[$count]['img_link_1']);
    ?>
                            <img style="width: 50%; "src="<?= base_url('uploads/' . $imageLink['imag']['link']) ?>" alt="<?= $posts[$count]['post_title'] ?>"/>
                            <hr />
                            <h2><?= $posts[$count]['post_title'] ?></h2>
                            <p><?= $posts[$count]['post_content'] ?></p>
                            <hr />




<?php endfor; ?>
                        <hr/>
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-8">
                        <h3>Associated Videos</h3>
                        <div class="row">

<?php for ($i = 0; $i < count($uploaded); $i++) { ?>
                                <div class="col-md-3">
                                    <video src="<?= base_url('videos/' . $uploaded[$i]['link']) ?>" height="100" width="120" controls title="<?= $uploaded[$i]['title'] ?>"></video>
    <?= $uploaded[$i]['title'] ?>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>
