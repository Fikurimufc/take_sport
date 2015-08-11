<?php $this->load->helper('form'); ?>
 <script>
tinymce.init({
  selector : "textarea#elm1",
  theme : "modern",
  width : 650,
  height : 10
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
            <form class="form-horizontal" role="form"> 
              <div class="form-group">
                <label >about</label>
                  <div>
                    <textarea id="elm1" name='about'></textarea>
                  </div>
               </div> 
         
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