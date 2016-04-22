<link rel="stylesheet" href="bootstrap/css/dewe.css">
<div class="container">
     <form class="contact-us form-horizontal" method="post">
   <legend>PERMINTAAN BARANG</legend>
   <div class="control-group">
        <input type="text" class="form-control" id="kode_barang" placeholder="Kode Barang">
   </div>
   <div class="form-group"></div>
   <div class="control-group">
     <div class="controls">
     <button type="submit" class="btn btn-primary">Submit</button>
     <button type="button" class="btn">Cancel</button>
       </div>
   </div>
   </form>

   <div class="modal hide fade">
     <div class="modal-body">
   <p>Thank for contacting us.</p>
   <p class="ajax_data"></p>
     </div>
   <div class="modal-footer">
   <a href="#" class="btn btn-primary" id="done">Done</a>
   <a href="#" class="btn" id="close">Close</a>
   </div>
   </div>

   </div> <!-- /container -->
