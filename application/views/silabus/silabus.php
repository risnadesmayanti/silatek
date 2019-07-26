<div id="content">

 <!-- MODAL DELETE START -->
   <div class="modal fade" id="myModalDelete">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title" style="text-align: center;">Konfirmasi Hapus Data</h4>
          
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <p>Yakin menghapus data ini? </p>


        </div>

        
        <!-- Modal footer -->
       <form role="form" method="post" action="category_delete" id="delete_data">
                <input type="hidden" id="delete_item_id" name="id" value="12">
                <div class="modal-footer">
                    <button type="submit" class="btn btn-danger">Yes</button>
                    <button type="button" class="btn btn-primary" data-dismiss="modal">No</button>
                </div>
            </form>
        
      </div>
    </div>
  </div>
  <!-- STOP -->


  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Daftar Silabus Pelatihan</a> </div>
    <h1>Silabus Pelatihan Teknik</h1>
  </div>
  <div class="container-fluid">
   <hr>
    <div class="row-fluid">
      <div class="span12">
        
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
            
            <a class="label btn-inverse" href="<?php echo base_url('index.php/Silabus/AddSlbs'); ?>"><i class="icon-plus"></i> Tambah Data Silabus</a> </div>
          <div class="widget-content ">
            <table class="table table-bordered table-striped with-check" id="dataTable">
              <thead>
                <tr>
                  <th>No</th>
                  <th width="30%">Judul </th>
                  <th>Kategori Silabus</th>
                  <th>Deskripsi Silabus</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
               <tr>
                 <?php $i=1; foreach ($slbs as $key ) { ?>
                  <td style="text-align: center;"><?php echo $i; ?></td>
                  <td><?php echo $key->judul; ?></td>
                  <td><?php echo $key->kategori; ?></td>
                  <td><?php echo $key->ringkasan; ?></td>
                  <td style="text-align: center;">
                    <!-- <a href="#" id="<?php //echo $key->id; ?>" class="btn btn-primary btn-mini view_data" title="Lihat Detail" data-toggle="modal" data-target="#myModal"><i class="icon icon-eye-open"></i></a> --> 
                    
                    <a href="<?php echo base_url(). 'index.php/Silabus/updateSlbs/'. $key->id?>" class="btn btn-success btn-mini" title="Lihat Detail"><i class="icon icon-eye-open"></i></a> 
                    <!-- <button type="button" class="btn btn-success btn-mini" data-toggle="modal" data-target="#modal-tambah" title="Lihat Detail"><i class="icon icon-eye-open"></i></button> -->
                    <!-- <a href="" data id="<?php //echo base_url(). 'index.php/Instruktur/updateIns/'. $key->id?>" class="btn btn-success btn-mini view_data" data-toggle="modal" data-target="#modal-edit" title="Lihat Detail"><i class="icon icon-eye-open"></i></a> -->

                    <a href="<?php echo base_url(). 'index.php/' ?>" class="btn btn-danger btn-mini" title="Hapus Data"><i class="icon icon-trash"></i></a>
                  </td>
                </tr>
     
               <?php $i++;} ?>
              </tbody>
            </table>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script> 
 <!-- jQuery DataTables JS CDN -->
 <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
 <!-- Bootstrap JS CDN -->
 <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
 <!-- Bootstrap JS CDN -->
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> 
   <script type="text/javascript">
   $(document).ready(function(){
    $('#dataTable').DataTable();
         // Start jQuery click function to view Bootstrap modal when view info button is clicked
            $('.view_data').click(function(){
             // Get the id of selected phone and assign it in a variable called phoneData
                var phoneData = $(this).attr('id');
                // Start AJAX function
                $.ajax({
                 // Path for controller function which fetches selected phone data
                    url: '<?php echo base_url(); ?>Dashboard/details/',
                    // Method of getting data
                    method: "POST",
                    // Data is sent to the server
                    data: {phoneData:phoneData},
                    // Callback function that is executed after data is successfully sent and recieved
                    success: function(data){
                     // Print the fetched data of the selected phone in the section called #phone_result 
                     // within the Bootstrap modal
                        $('#isiModal').html(data);
                        // Display the Bootstrap modal
                        $('#myModal').modal('show');
                    }
                    // error: console.log();
             });
             // End AJAX function
         });
     });  
</script>