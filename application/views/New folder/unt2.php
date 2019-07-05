                    <a href="#" id="<?php echo $key->id; ?>" class="btn btn-primary btn-mini detail-mahasiswa" title="Lihat Detail" data-toggle="modal" data-target="#myModal"  onclick="detail('<?php echo $key->id;?>')"><i class="icon icon-eye-open"></i></a>

                    <div class="todo">
              <ul>
                <li class="clearfix">
                  <div class="control_"> ID Instruktur </div>
                  <div class="pull-right"><p  id="insNama" name="insId"></p></div>
                </li>
                <li class="clearfix">
                  <div class="txt"> Nama Instruktur Instruktur </div>
                  <div class="pull-right"></div>
                </li>
                <li class="clearfix">
                  <div class="txt"> Alamat Instrukur </div>
                  <div class="pull-right"> </div>
                </li>
                <li class="clearfix">
                  <div class="txt"> Kontak Instruktur </div>
                  <div class="pull-right"></div>
                </li>
                <li class="clearfix">
                  <div class="txt"> Asal Instansi </div>
                  <div class="pull-right"> </div>
                </li>
                <li class="clearfix">
                  <div class="txt"> Spesialisasi </div>
                  <div class="pull-right"></div>
                </li>
                <li class="clearfix">
                  <div class="txt"> Deskripsi </div>
                  <div class="pull-right"></div>
                </li>
              
              </ul>
            </div>


            <form action="<?php echo base_url(). 'Dashboard/updatingIns'; ?>" method="POST" class="form-horizontal">
            <div class="control-group">
              <label class="control-label">Nama Lengkap :</label>
              <div class="controls">
                <input type="hidden" name="id" value= "<?php echo $i->id ?>">
                <p><?php echo $i->nama; ?></p>
              </div>
            </div>
           <div class="control-group">
              <label class="control-label">Tempat Lahir :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Contoh : Bandung" name="tempat_lahir" value="" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Tanggal Lahir :</label>
              <div class="controls">
                <input type="text" data-date="01-02-2013" data-date-format="dd-mm-yyyy" class="datepicker span11" name="tgl_lahir">
                </div>
            </div>
             <div class="control-group">
              <label class="control-label">Alamat Lengkap :</label>
              <div class="controls">
               <p><?php echo $i->alamat; ?>"</p>
            </div>
            </div>
             <div class="control-group">
              <label for="normal" class="control-label">No. Kontak :</label>
              <div class="controls">
                <p><?php echo $i->no_kontak; ?>"</p>
              </div>
            </div>
            <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Informasi Keahlian</h5>
        </div>
            <div class="control-group">
              <label class="control-label">Asal Instansi :</label>
              <div class="controls">
                <p><?php echo $i->asal_instansi; ?></p>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Spesialisasi :</label>
              <div class="controls">
                <?php echo $i->spesialisasi; ?>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Keterangan :</label>
              <div class="controls">
              <p><?php echo $i->deskripsi; ?> </p></div>
            </div>

        </div>
        <div class="form-actions">
              <button type="submit" class="btn btn-success pull-right">Save</button>
            </div>
           
          </form>

            function detail(id){
    $.ajax({
      type: 'GET', 
      url: '<?php echo base_url(); ?>Dashboard/detail/'+id, 
      dataType:'json',
      success: function (data) {
        document.getElementById('insId').value = data[0].id;
        document.getElementById('insNama').value = data[0].nama;
        document.getElementById('insAlamat').value = data[0].alamat;
        document.getElementById('insKontak').value = data[0].no_kontak;
        document.getElementById('insAsal').value = data[0].asal_instansi;
        document.getElementById('insSpesialisasi').value = data[0].spesialisasi;
        document.getElementById('insDeskripsi').value = data[0].deskripsi;
      },
      error: function(error){
        console.log(error)
      }
    });
  }