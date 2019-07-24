<?php ini_set("display_errors",1);
error_reporting(E_ALL);

 ?>
<head>
<title>Matrix Admin</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/colorpicker.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/datepicker.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/uniform.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/select2.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/matrix-style.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/matrix-media.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-wysihtml5.css" />
<link href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>
<div id="content">
<div id="content-header">
  <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="tip-bottom">Daftar Instruktur Pelatihan</a> <a href="#" class="current">Tambahkan Data Instruktur</a> </div>
  <h1>Formulir Pendaftaran Instruktur</h1>
</div>
<div class="container-fluid">
  <hr>
  <div class="row-fluid">
  <!--   <div class="span6"> -->
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Informasi Umum</h5>
        </div>
        <div class="widget-content nopadding">
          <form action="<?php echo base_url(). 'index.php/Instruktur/AddingIns'; ?>" method="POST" class="form-horizontal" enctype="multipart/form-data">
            <div class="control-group">
              <label class="control-label">Nama Lengkap :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Masukan Nama Lengkap" name="nama" required />
              </div>
            </div>
           <div class="control-group">
              <label class="control-label">Tempat Lahir :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Contoh : Bandung" name="tempat_lahir" required/>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Tanggal Lahir :</label>
              <div class="controls">
                <input type="text" data-date="01-02-2013" data-date-format="yyyy-mm-dd" class="datepicker span11" name="tgl_lahir" required>
                </div>
            </div>
             <div class="control-group">
              <label class="control-label">Alamat Lengkap :</label>
              <div class="controls">
               <textarea class="span11" name="alamat" required ></textarea>
            </div>
            </div>
             <div class="control-group">
              <label for="normal" class="control-label">No. Kontak :</label>
              <div class="controls">
                <input type="text" id="mask" class="span8 mask text" name="no_kontak" required>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">File upload input</label>
              <div class="controls">
                <input type="file" name="image"/>
              </div>
            </div>

            <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Informasi Keahlian</h5>
        </div>
            <div class="control-group">
              <label class="control-label">Asal Instansi :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Masukan Asal Instansi" name="asal_instansi" required/>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Spesialisasi :</label>
              <div class="controls">
                <select placeholder="Pilih Spesialisasi" name="spesialisasi" required>
                  <option>Teknik Industri</option>
                  <option>Teknik Mesin</option>
                  <option>Teknik Kelistrikan</option>
                  <option>Teknik Informatika</option>
                  <option>Teknik Tekstil</option>
           
                </select>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Keterangan :</label>
              <div class="controls">
               <textarea class="span11" name="ket"></textarea>
                <span class="help-block">Deskripsi tambahan</span> </div>
            </div>

        </div>
        <div class="form-actions">
              <button type="submit" class="btn btn-success pull-right">Save</button>
           
          </form>
          <a href="<?php echo base_url('index.php/instruktur'); ?>" class="btn btn-info ">Back</a>
            </div>
            
        </div>
      </div>
    <!-- </div> -->

      
 

  </div>
</div></div>
<!--Footer-part-->
<div class="row-fluid">
  <div id="footer" class="span12"> 2013 &copy; Matrix Admin. Brought to you by <a href="http://themedesigner.in">Themedesigner.in</a> </div>
</div>
<!--end-Footer-part--> 
<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/jquery.ui.custom.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/bootstrap-colorpicker.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/bootstrap-datepicker.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/jquery.toggle.buttons.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/masked.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/jquery.uniform.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/select2.min.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/matrix.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/matrix.form_common.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/wysihtml5-0.3.0.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/jquery.peity.min.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/bootstrap-wysihtml5.js"></script> 
<script>
  $('.textarea_editor').wysihtml5();
</script>
</body>
</html>
