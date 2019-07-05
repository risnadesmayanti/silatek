   <div class="widget-box">
               <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                 <h5>Informasi Umum</h5>
                </div>
            <div class="widget-content nopadding">
              <form action="<?php echo base_url(). 'index.php/Dashboard/updatingIns'; ?>" method="POST" class="form-horizontal">
                 <?php foreach($instruktur as $i){ ?>
                <div class="control-group">
                  <label class="control-label">Nama Lengkap :</label>
                  <div class="controls">
                    <input type="text" class="span3" placeholder="Masukan Nama Lengkap" name="nama" value="<?php echo $i->nama; ?>"/>
                  </div>
                </div>
               <div class="control-group">
                  <label class="control-label">Tempat Lahir :</label>
                  <div class="controls">
                    <input type="text" class="span3" placeholder="Contoh : Bandung" name="tempat_lahir" />
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">Tanggal Lahir :</label>
                  <div class="controls">
                    <input type="text" data-date="01-02-2013" data-date-format="dd-mm-yyyy" class="datepicker span3" name="tgl_lahir">
                    </div>
                </div>
                 <div class="control-group">
                  <label class="control-label">Alamat Lengkap :</label>
                  <div class="controls">
                   <textarea class="span3" name="alamat" placeholder="<?php echo $i->alamat; ?>"></textarea>
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
                 <input type="text" class="span11" name="spesialisasi" value="<?php echo $i->spesialisasi; ?> ">
                  
                </select>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Keterangan :</label>
              <div class="controls">
               <textarea class="span3" name="ket" placeholder="<?php echo $i->deskripsi; ?>"></textarea>
                <span class="help-block">Deskripsi tambahan</span> </div>
            </div>
           <?php } ?>
            </form>