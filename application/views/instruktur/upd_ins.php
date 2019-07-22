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

<script type="text/javascript">
  function enable() {
  document.getElementById("mySelect").disabled=false;
}
</script>
</head>
<body>
<div id="content">
<div id="content-header">
  <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="tip-bottom">Daftar Instruktur Pelatihan</a> <a href="#" class="current">Lihat Data Instruktur</a> </div>
  <h1>Detail Data Instruktur</h1>
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
              <?php foreach($instruktur as $i){ ?>
          <form action="<?php echo base_url(). 'index.php/Instruktur/updatingIns/'.$i->id; ?>" method="POST" class="form-horizontal">
            <div class="control-group">
              <div class="controls" style="margin-left: 0">
                <center><img src="<?php echo base_url('upload/instruktur/'.$i->image) ?>" width="250px" /></center>
              </div>
              <label class="control-label">Nama Lengkap :</label>
              <div class="controls">
                <input type="hidden" name="id" value= "<?php echo $i->id ?>">
                <input type="text" class="span11" placeholder="Masukan Nama Lengkap" name="nama" value="<?php echo $i->nama; ?>"  readonly="true" ondblclick="this.readOnly='';"/>
              </div>
            </div>
           <div class="control-group">
              <label class="control-label">Tempat Lahir :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Contoh : Bandung" name="tempat_lahir" value="<?php echo $i->tempat_lahir; ?>"  readonly="true" ondblclick="this.readOnly='';" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Tanggal Lahir :</label>
              <div class="controls">
                <input type="text" data-date="01-02-2013" data-date-format="yyyy-mm-dd" value="<?php echo $i->tgl_lahir; ?>" class="datepicker span11" name="tgl_lahir" readonly="true" ondblclick="this.readOnly='';">
                </div>
            </div>
             <div class="control-group">
              <label class="control-label">Alamat Lengkap :</label>
              <div class="controls">
               <textarea class="span11" name="alamat" placeholder=""  readonly="true" ondblclick="this.readOnly='';"><?php echo $i->alamat; ?></textarea>
            </div>
            </div>
             <div class="control-group">
              <label for="normal" class="control-label">No. Kontak :</label>
              <div class="controls">
                <input type="text" id="mask" class="span8 mask text" name="no_kontak" value="<?php echo $i->no_kontak; ?>"  readonly="true" ondblclick="this.readOnly='';">
              </div>
            </div>
            <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Informasi Keahlian</h5>
        </div>
            <div class="control-group">
              <label class="control-label">Asal Instansi :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Masukan Asal Instansi" name="asal_instansi" value="<?php echo $i->asal_instansi; ?>"  readonly="true" ondblclick="this.readOnly='';"/>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Spesialisasi :</label>
              <div class="controls">
                <select class="span10" placeholder="Pilih Spesialisasi" name="spesialisasi" id="mySelect">
                  <option>Teknik Industri</option>
                  <option>Teknik Mesin</option>
                  <option>Teknik Kelistrikan</option>
                  <option>Teknik Informatika</option>
                  <option>Teknik Tekstil</option>
           
                  <option value="<?php echo $i->spesialisasi; ?>" selected><?php echo $i->spesialisasi; ?></option>
                </select>&nbsp;&nbsp;
               <input type="button" onclick="enable()" value="Ubah Data" >
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Keterangan :</label>
              <div class="controls">
               <textarea class="span11" name="ket" placeholder=""  readonly="true" ondblclick="this.readOnly='';"><?php echo $i->deskripsi; ?></textarea>
                <span class="help-block">Deskripsi tambahan</span> </div>
            </div>

        </div>
        <div class="form-actions">
              <button type="submit" class="btn btn-success pull-right">Edit</button>
          </form>
              <a href="<?php echo base_url('index.php/instruktur'); ?>" class="btn btn-info ">Back</a>
            </div>
           
        <?php } ?>
        </div>
      </div>
    <!-- </div> -->

  <div class="modal fade" id="modal-edit" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
         <div class="modal-header">
              <h4 class="modal-title" style="text-align: center;" id="exampleModalLabel">Update Instruktur</h4>
          </div>
       <!-- BODY -->
       <div class="modal-body">
         <div class="widget-box">
    <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
     <h5>Informasi Umum</h5>
    </div>
        <div class="widget-content nopadding">
             <?php foreach($instruktur as $i){ ?>
            <form action="<?php echo base_url(). 'index.php/Instruktur/updatingIns/'.$i->id; ?>" method="POST" class="form-horizontal">
                <div class="control-group">
                   <input type="hidden" name="id" value= "<?php echo $i->id ?>">
                  <label class="control-label">Nama Lengkap :</label>
                  <div class="controls">
                    <input type="text" class="span3" placeholder="Masukan Nama Lengkap" name="nama" value="<?php echo $i->nama; ?>"/>
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">Tempat Lahir :</label>
                  <div class="controls">
                    <input type="text" class="span3" placeholder="Contoh : Bandung" name="tempat_lahir" value="<?php echo $i->tempat_lahir; ?>" />
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">Tanggal Lahir :</label>
                  <div class="controls">
                    <input type="text" data-date-format="yyyy-mm-dd" class="datepicker" name="tgl_lahir" value="<?php echo $i->tgl_lahir; ?>">
                    </div>
                </div>
                 <div class="control-group">
                  <label class="control-label">Alamat Lengkap :</label>
                  <div class="controls">
                   <textarea class="span3" name="alamat"><?php echo $i->alamat; ?></textarea>
                </div>
                </div>
                <div class="control-group">
                  <label for="normal" class="control-label">No. Kontak :</label>
                  <div class="controls">
                    <input type="text" id="mask" class="span3 mask text" name="no_kontak" value="<?php echo $i->no_kontak; ?>">
                  </div>
                </div>
    <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
      <h5>Informasi Keahlian</h5>
    </div>
        <div class="control-group">
          <label class="control-label">Asal Instansi :</label>
          <div class="controls">
            <input type="text" class="span3" placeholder="Masukan Asal Instansi" name="asal_instansi" value="<?php echo $i->asal_instansi; ?>"/>
          </div>
        </div>
        <div class="control-group">
          <label class="control-label">Spesialisasi :</label>
          <div class="controls">
              <select placeholder="Pilih Spesialisasi" name="spesialisasi">
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
           <textarea class="span3" name="ket" placeholder="<?php echo $i->deskripsi; ?>"><?php echo $i->deskripsi; ?></textarea>
            <span class="help-block">Deskripsi tambahan</span> </div>
        </div>
           <?php } ?>

    </div>
  
</div>

        </div>
          
        <div class="modal-footer">
           <button type="button" class="btn btn-secondary" data-dismiss="modal">
                    Close
                </button>
                <button type="submit" class="btn btn-primary">Save</button>
        </div>
          </form>
        </div>
</div>
      
 

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
