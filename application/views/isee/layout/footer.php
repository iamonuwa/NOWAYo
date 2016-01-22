<div class="navbar navbar-inverse" style="padding-top: 10px;">
    <div class="navbar-inner">

        <div class="container pull-right"  style="padding: 10px">

            -<i><a href="<?= base_url('') ?>">Got to News</a></i>-
            <i><a href="#">&copy Copyright 2015 || NOWAYO.com</a></i>
        </div>
    </div>
</div>
</div>
<script src="<?= base_url('assets/camtales/js/html5shiv.js'); ?>"></script>
<script src="<?= base_url('assets/camtales/js/jquery.js'); ?>"></script>
<script src="<?= base_url('assets/camtales/js/bootstrap.js'); ?>"></script>
<script src="<?= base_url('assets/camtales/js/bootstrap-dropdown.js'); ?>"></script>
<script src="<?= base_url('assets/camtales/js/bootstrap-modal.js'); ?>"></script>
<script src="<?= base_url('assets/camtales/js/bootstrap.min.js'); ?>"></script>
<script src="<?= base_url('assets/camtales/js/bootstrap-popover.js'); ?>"></script>
<script src="<?= base_url('assets/camtales/js/bootstrap-alert.js'); ?>"></script>
<script src="<?= base_url('assets/camtales/js/bootstrap-tooltip.js'); ?>"></script>
<script src="<?= base_url('assets/camtales/js/holder/holder.js'); ?>"></script>
<script src="<?= base_url('assets/camtales/js/bootstrap-collapse.js'); ?>"></script>
<script src="<?= base_url('assets/camtales/js/bootstrap-transition.js'); ?>"></script>
<script src="<?= base_url('assets/camtales/js/bootstrap-scrollspy.js'); ?>"></script>

<script>
    $(function () {
        $("#carousel").carousel({
            period: 5000,
            duration: 1000,
            effect: 'fade',
            //                    height: 400,
            controls: true,
            markers: {
                show: true,
                type: "default",
                position: "bottom-right"
            }
        });
    });
    //            $('.carousel').carousel()
    //            interval: 200;
    //            pause: hover;
            
            
    $(document).ready(function () {
        $('.active-links').click(function () {
            if ($('#signin-dropdown').is(":visible")) {
                $('#signin-dropdown').hide()
                $('#session').removeClass('active');
            } else {
                $('#signin-dropdown').show()
                $('#session').addClass('active');
            }
            return false;
        });
        $('#signin-dropdown').click(function(e) {
            e.stopPropagation();
        });
        $(document).click(function() {
            $('#signin-dropdown').hide();
            $('#session').removeClass('active');
        });
    });    
</script>
</body>
</html>
</html>