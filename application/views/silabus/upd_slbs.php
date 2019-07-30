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
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-1394306-6"></script>
<script src="<?php echo base_url(); ?>assets/js/analytics.js"></script><!-- /site analytics -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
  <style type="text/css">
    .imagebox .alert {
      transform: translateY(130%);
      transition-timing-function: ease-in;
      transition: 0.2s;
    }
    .imagebox.alert-is-shown .alert {
      transition: 0.25s;
      transition-timing-function: ease-out;
      
      transform: translateY(0);
      opacity: 1;
    }

    .imagebox {
      width: 261px;
      margin: 0 auto;
      /*border: 10px solid #666666;*/
      height: 250px;
      position: relative;
      overflow: hidden;
      /*border-radius: 80px 80px / 25px 25px 25px 25px;*/
      &::before {
        content: "";
        background: #666666;
        position: absolute;
        z-index: 20;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 30px;
      }
      &::after {
        content: "";
        background: #848484;
        position: absolute;
        z-index: 20;
        bottom: 30px;
        left: 0;
        width: 100%;
        height: 25px;
      }
    }

    .alert {
     /* width: 90%;
      height: 60px;*/
      left: 3%;
      bottom: 5%;
      background: white;
      /*border-radius: 4px;*/
      opacity: 0;
      /*box-shadow: 0 5px 15px rgba(black, 0.2);*/
      position: absolute;
      z-index: 10;
    }


    .isi {
      position: relative;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      font: 12px monospace;
      color: #999;
      text-transform: uppercase;
    }

    .pdfobject-container {
      width: 100%;
      max-width: 600px;
      height: 600px;
      margin: 2em 0;
    }
    .pdfobject { border: solid 1px #666; }
</style>
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
        <dv class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Informasi Umum</h5>
        </div>
        <div class="widget-content nopadding">
           <?php foreach($slbs as $key){ ?>
          <form action="<?php echo base_url(). 'index.php/Silabus/UpdatingSlbs/'.$key->id; ?>" method="POST" class="form-horizontal" enctype="multipart/form-data">
            <div class="control-group">
              <label class="control-label">Judul Silabus : </label>
              <div class="controls">
                <!-- <input type="hidden" class="span11" name="id_silabus" value="<?php //$id= 'SLBS'.rand(); ?>" /> -->
                <input type="text" class="span11" placeholder="Masukan Judul Silabus" name="judul_silabus"  readonly="true" ondblclick="this.readOnly='';" value="<?php echo $key->judul; ?>"/>
              </div>
            </div>
             <div class="control-group">
              <label class="control-label">Spesialisasi :</label>
              <div class="controls">
                <select placeholder="Pilih Spesialisasi" name="kategori_file" required>
                  <option>Teknik Industri</option>
                  <option>Teknik Mesin</option>
                  <option>Teknik Kelistrikan</option>
                  <option>Teknik Informatika</option>
                  <option>Teknik Tekstil</option>
                <option value="<?php echo $i->spesialisasi; ?>" selected><?php echo $key->kategori; ?></option>
                </select>
              </div>
            </div>
           <div class="control-group">
              <label class="control-label">Ringkasan :</label>
              <div class="controls">
                <textarea class="span11" name="ringkasan"  readonly="true" ondblclick="this.readOnly='';" value="<?php echo $key->ringkasan; ?>"></textarea>
                <span class="help-block">Deskripsi tambahan</span>
              </div>
            </div>

            <div class="control-group">
              <div class="controls">
                <div id="pdf1"></div>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Ubah File : </label>
              <div class="controls">
                <input type="file" name="userfile"  readonly="true" ondblclick="this.readOnly='';" />
                </div>
            </div>
             
        <div class="form-actions">


              <button type="submit" class="btn btn-success pull-right">Save</button>
           
          </form>
          
          <a href="<?php echo base_url('index.php/silabus'); ?>" class="btn btn-info ">Back</a>
            </div>
            <?php } ?>
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
<footer> 
  <?php foreach($slbs as $key){ ?>
  <script src="<?php echo base_url(); ?>assets/js/pdfobject.min.js"></script>
  <script>

  var options = {
    page: 2,
    pdfOpenParams: {
      navpanes: 1,
      view: "FitH",
      pagemode: "thumbs"
    }
  };

  PDFObject.embed("<?php echo base_url(); ?>upload/silabus/<?php echo $key->dokumen_file; ?>", "#pdf1");
  // PDFObject.embed("../pdf/sample-3pp.pdf", "#pdf2");
  </script>
  <?php } ?>
  <script>// https://css-tricks.com/snippets/javascript/loop-queryselectorall-matches/
var forEach = function (array, callback, scope) {
  for (var i = 0; i < array.length; i++) {
    callback.call(scope, i, array[i]); // passes back stuff we need
  }
};

var imageboxs = document.querySelectorAll(".imagebox");

forEach(imageboxs, function(index, value) {
  value.addEventListener("dblclick", function() {
    this.classList.toggle("alert-is-shown");
  });
});
</script>
<script type="text/javascript">
  function enable() {
  document.getElementById("mySelect").disabled=false;
}
</script>
  </footer>

</html>
