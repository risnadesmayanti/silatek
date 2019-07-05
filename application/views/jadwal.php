<div id="content">

  <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title" style="text-align: center;">Detail Informasi Instruktur</h4>
          
        </div>
        
        <!-- Modal body -->
        <div class="modal-body" id="isiModal">
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
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
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Jadwal Instruktur Pelatihan</a> </div>
    <h1>Jadwal Instruktur Pelatihan Teknik</h1>
  </div>
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box widget-calendar">
          <div class="widget-title"> <span class="icon"><i class="icon-calendar"></i></span>
            <h5>Kalender</h5>
            <div class="buttons"> <a id="add-event" data-toggle="modal" href="#modal-add-event" class="btn btn-inverse btn-mini"><i class="icon-plus icon-white"></i> Tambah Jadwal Pelatihan</a>
              <div class="modal hide" id="modal-add-event">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">×</button>
                  <h3>Tambah Jadwal Pelatihan</h3>
                </div>
                <div class="modal-body">
                  <p>Jadwal Pelatihan</p>
                  <p>
                    <input id="event-name" type="text" />
                  </p>
                  <p>Deskripsi :</p>
                  <p>
                    <input id="event-name" type="text" />
                  </p>
                </div>
                <div class="modal-footer"> <a href="#" class="btn" data-dismiss="modal">Batal</a> <a href="#" id="add-event-submit" class="btn btn-primary">Tambah Jadwal</a> </div>
              </div>
            </div>
          </div>
          <div class="widget-content">
            <div class="panel-left">
              <div id="fullcalendar"></div>
            </div>
            <div id="external-events" class="panel-right">
              <div class="panel-title">
                <h5>Simpan jadwal ke kalender</h5>
              </div>
              <div class="panel-content">
                <div class="external-event ui-draggable label label-inverse">My Event 1</div>
                <div class="external-event ui-draggable label label-inverse">My Event 2</div>
                <div class="external-event ui-draggable label label-inverse">My Event 3</div>
                <div class="external-event ui-draggable label label-inverse">My Event 4</div>
                <div class="external-event ui-draggable label label-inverse">My Event 5</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

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
<script src="<?php echo base_url(); ?>assets/js/matrix.calendar.js"></script>
