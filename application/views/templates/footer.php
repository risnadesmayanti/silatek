<!--Footer-part-->

<div class="row-fluid">
  <div id="footer" class="span12"> 2013 &copy; Matrix Admin. Brought to you by <a href="http://themedesigner.in">Themedesigner.in</a> </div>
</div>

<!--end-Footer-part-->

<script src="<?php echo base_url(); ?>assets/js/excanvas.min.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/jquery.ui.custom.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/jquery.flot.min.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/jquery.flot.resize.min.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/jquery.peity.min.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/fullcalendar.min.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/matrix.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/matrix.dashboard.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/jquery.gritter.min.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/matrix.interface.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/matrix.chat.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/jquery.validate.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/matrix.form_validation.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/jquery.wizard.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/jquery.uniform.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/select2.min.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/matrix.popover.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/jquery.dataTables.min.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/matrix.tables.js"></script> 
<!-- NEW FOR FORM -->
<script src="<?php echo base_url(); ?>assets/js/jquery.toggle.buttons.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/bootstrap-datepicker.js"></script>
<script src="<?php echo base_url(); ?>assets/js/masked.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/matrix.form_common.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/wysihtml5-0.3.0.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/jquery.peity.min.js"></script> 

<script src="<?php echo base_url(); ?>assets/js/matrix.calendar.js"></script>




<script type="text/javascript">
  // This function is called from the pop-up menus to transfer to
  // a different page. Ignore if the value returned is a null string:
 function confirmDialog() {
      return confirm('Apakah anda yakin akan menghapus data ini?');
}

  function goPage (newURL) {

      // if url is empty, skip the menu dividers and reset the menu selection to default
      if (newURL != "") {
      
          // if url is "-", it is this page -- reset the menu:
          if (newURL == "-" ) {
              resetMenu();            
          } 
          // else, send page to designated URL            
          else {  
            document.location.href = newURL;
          }
      }
  }

// resets the menu selection upon entry to this page:
function resetMenu() {
   document.gomenu.selector.selectedIndex = 2;
}
</script>
</body>
</html>
