

    </div> 


    <script src="<?php echo base_url('assets/cpanel/bower_components/jquery/dist/jquery.min.js');?>"></script>

    <script src="<?php echo base_url('assets/cpanel/bower_components/bootstrap/dist/js/bootstrap.min.js');?>"></script>

    <script src="<?php echo base_url('assets/cpanel/bower_components/metisMenu/dist/metisMenu.min.js');?>"></script>

    <script src="<?php echo base_url('assets/cpanel/magnific-popup/magnific-popup.min.js');?>"></script>

    <script src="<?php echo base_url('assets/cpanel/bower_components/datatables/media/js/jquery.dataTables.min.js');?>"></script>
    <script src="<?php echo base_url('assets/cpanel/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js');?>"></script>

    <script src="<?php echo base_url('assets/cpanel/jquery.appear.js');?>"></script>
    <script src="<?php echo base_url('assets/cpanel/jquery.isotope.js');?>"></script>
    <script src="<?php echo base_url('assets/cpanel/modernizr.min.js');?>"></script>
    <script src="<?php echo base_url('assets/cpanel/html_summernote/summernote.min.js');?>"></script>

    <script src="<?php echo base_url('assets/cpanel/dist/js/sb-admin-2.js');?>"></script>

    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
    function checkall(selector)
  {
    if(document.getElementById('chkall').checked==true)
    {
      var chkelement=document.getElementsByName(selector);
      for(var i=0;i<chkelement.length;i++)
      {
        chkelement.item(i).checked=true;
      }
    }
    else
    {
      var chkelement=document.getElementsByName(selector);
      for(var i=0;i<chkelement.length;i++)
      {
        chkelement.item(i).checked=false;
      }
    }
  }
    </script>
    <script type="text/javascript">
$('#popup').magnificPopup({
  type: 'image'
  // other options
});
    </script>
    
</body>

</html>
