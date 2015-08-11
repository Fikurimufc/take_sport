<?php $this->load->helper('form'); 
$user = $this->session->userdata('logged_in');
?>
 <script>

 //time
$('#event_period').datepicker({
      inputs: $('.actual_range').toArray()
});

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
 <style type="text/css">
.size{
  margin-left: 30px;
  margin-top: 10px;
  width: 300px;
  height: 40px;
}
.text{
  margin-left: 30px;
  margin-top: 10px;

}
 </style>

 <aside>
 <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
      <section class="content-header">
          <b>Halaman konten</b>
      </section>

      <!-- Main content -->
      
        <section class="content"> 
           <div class="box box-succes">
             <div class="box-header with border">
               <h3 class="box-title">Daftar user</h3>
               </div><!-- box header -->
               <?php echo validation_errors();?>
               <?php echo form_open_multipart('User/register')?>
                 <form class="form-horizontal" role="form">  
               <div class="box-body no-padding">
                 <div class="form-group">
                   <div class="text">
                   <label>Username</label>
                   </div>
                   <div class="size">
                   <input type="text" class="form-control" id="username" placeholder="input username" name="username">
                   </div><!--size-->
                   <div class="text">
                     <label>Password</label>
                   </div>
                   <div class="size">
                     <input type="password" class="form-control" id="password" placeholder="password" name="password">
                   </div>
                   <div class="text">
                     <label>Nama</label>
                    </div>
                    <div class="size">
                      <input type="text" class="form-control" id="name" placeholder="Input nama" name="name">
                    </div>
                    <div class="text">
                      <label>Email</label>
                     </div>
                     <div class="size">
                       <input type="text" class="form-control" placeholder="Masukan email" id="email" name="email">
                     </div>
                      <div class="text">
                     
                      <div class="text">
                         <label>gender</label> 
                      </div>
                      <div class="size">
                        <label class="radio-inline">
                        <input type="radio" name="gender"  value='Laki-laki' <?php echo set_radio('gender','Laki-laki', TRUE); ?>/>Laki-laki
                        </label>
                        <label class="radio-inline">
                        <input type="radio" name="gender"  value='perempuan' <?php echo set_radio('gender','Perempuan'); ?>>Perempuan
                        </label>
                      </div>
                     <div class="text">
                       <label>Level user</label>
                     </div> 
                     <div class="size">
                       <?php 
                          $option = array(
                              '11'=>'Super admin',
                              '99' =>'Admin',
                            );
                          $attr = array(
                            'class'=>'dropdown-menu'
                            );
                          echo form_dropdown('status',$option,$attr);
                       ?>
                       
                      </div>
                         <label>Upload gambar avatar</label>
                      </div>
                      <div class="size">
                      <input type="file" name="userfile">
                      </div>
                    </div><!--form group -->
                      <div class="size">
                        <input type="submit" name="submit" class="btn btn-primary">
                     </div>
                 </form>
               </div><!-- box body -->
           </div><!--box sukses -->

        </section><!-- /.content -->
     
  </div><!-- /.content-wrapper --> 
 </aside>  