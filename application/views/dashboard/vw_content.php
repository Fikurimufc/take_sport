<?php $this->load->helper('form'); ?>
 <script>
tinymce.init({
  selector : "textarea#elm1",
  theme : "modern",
  width : 650,
  height : 250
});
tinymce.init({
  selector : "textarea#elm2",
  theme : "modern",
  width : 650,
  height : 10
});
tinymce.init({
  selector : "textarea#elm3",
  theme : "modern",
  width : 650,
  height : 10
});
 </script>
 
 <aside>
 <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
      <section class="content-header">
          <b>Halaman konten</b>
      </section>

      <!-- Main content -->
      <?php echo form_open('Content/save_content'); ?>

        
        <section class="content">
          <div class="box box-succes">
          <div class="box-header with border"><h3 class="box-title">About</h3></div> 
           <form class="form-horizontal" role="form"> 
              <div class="form-group">
                  <div style="margin-left:10px;">
                    <textarea id="elm1" name='about'></textarea>
                  </div>
               </div> 

             </div> <!-- box succes-->
            </br>
            
                <div class="form-group">
                <label >Content Produk</label>
                  <div>
                    <textarea id="elm2" name='content_product'></textarea>
                  </div>
               </div> 
          
            </br>
           
                <div class="form-group">
                <label >Content Contact</label>
                  <div>
                    <textarea id="elm3" name='content_contact'></textarea>
                  </div>
               </div> 
            </form>
            </br>
            <input type="submit" name="submit" class="btn btn-primary">
          <!-- Your Page Content Here -->

        </section><!-- /.content -->
     
  </div><!-- /.content-wrapper --> 
 </aside>  