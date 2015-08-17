<?php $user = $this->session->userdata('logged_in');?>
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


<aside classs="right-side">
 	  <div class="content-wrapper">
        <!-- Content Header (Page header) -->
      <section class="content-header">
          <b>Halaman Kelola Produk</b>
      </section>
      <section class="content">
      	<div class="box box-succes">
      		<div class="box-header with border">
      			<h3 class="box-tittle">Buat produk</h3>
      		</div><!--box header-->
          <?php 
          $attr = array(
                'class'=>'alert alert-danger',
                'role' =>'alert',
            );
          echo validation_errors($attr)?>
          
        
          <?php echo form_open_multipart('Dashboard/save_product');
               
          ?>
      		<form class="form-horizontal" role="form">
      	  	  <div class="box-body no-padding">
      	  		<div class="text">
      	 			<label>Kode produk</label> 		
      	  		</div>
      	  		<div class="size">
      	  			<input type="text" class="form-control" placeholder="masukan kode produk" name="kode_produk">
      	  		</div>
              <div class="text">
                  <label>Kategori Produk</label>
              </div>
              <div class="size" id="type">
                <?php echo form_dropdown("type",$type,"","id_type='id_type'"); ?>
              </div>
              <div class="text">
                <label>Label</label>
              </div>
              <div class="size" id="category">
                <input type="text" class="form-control" placeholder="masukan label" name="label">
              </div>
      	  		<div class="text">
      	  			<label>Nama produk</label>
      	  		</div>
      	  		<div class="size">
      	  			<input type="text" class="form-control" placeholder="Input nama produk" name="product_name">
      	  		</div>

      	  		<div class="text">
      	  			<label>Harga</label>
      	  		</div>
      	  		<div class="size">
      	  			<label class="sr-only" for="exampleInputAmount">Harga</label>
      	  			<div class="input-group">
      	  				<div class="input-group-addon">IDR</div>
      	  					<input type="text" class="form-control" name="harga" id="exampleInputAmount" placeholder="Harga">
      	  					<div class="input-group-addon">.00</div>
      	  				</div><!-- input group-->
      	  			</div><!--size -->

      	  			<div class="text">
      	  				<label>Stock</label>
      	  			</div>
      	  			<div class="size">
      	  				<input type="text" class="form-control" style="width:100px" name="stock">
      	  			</div>
      	  			<div class="text">
      	  				<label>Gambar</label>
      	  			</div>
      	  			<div class="size">
      	  				<input type="file" class="btn btn-default" name="userfile">
      	  			</div>
      	  			<div class="text">
      	  				<label>Deskripsi tentang produk</label>
      	  			</div>
                <div style="margin-left:40px;">
                <textarea id="elm2" name="desc" style="  margin-left: 300px;  margin-top: 10px; width: 500px; height: 100px;"  placeholder="Place some text here"></textarea>             
      	  		   </div>  
      	  			<div class="size">
      	  				<input type="submit" class="btn btn-primary">
      	  			</div>
      	  			
      	  			
      	  		</div><!-- box body -->
      	  		</form>
      	  	</div><!-- box sukses-->
      	  </div><!-- box-->
      </section>
     </div><!-- /.content-wrapper --> 
</aside> 

<script type="text/javascript">


tinymce.init({
    selector: "textarea#elm2",
    theme: "modern",
    width: 900,
    height: 400,
    plugins: [
         "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
         "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
         "save table contextmenu directionality emoticons template paste textcolor"
   ],
   content_css: "css/content.css",
   toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons", 
   style_formats: [
        {title: 'Bold text', inline: 'b'},
        {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
        {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
        {title: 'Example 1', inline: 'span', classes: 'example1'},
        {title: 'Example 2', inline: 'span', classes: 'example2'},
        {title: 'Table styles'},
        {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
    ]
 });   
</script>    
<script type="text/javascript">

     $("#type").change(function(){
                var id_type = {id_type:$("#category_id").val()};
                $.ajax({
                        type: "POST",
                        url : "<?php echo site_url('Dashboard/select_category')?>",
                        data: type_id,
                        success: function(msg){
                            $('#category_id').html(msg);
                        }
                    });
        }); 

/*  $("#id_type").change(function(){
                var selectValues = $("#id_type").val();
                if (selectValues == 0){
                    //var msg = "province / Region :<br><select name=\"category_id\" disabled><option value=\"Pilih province / Kabupaten\">Pilih country Dahulu</option></select>";
                    $('#category').html(msg);
                }else{
                    var id_type = {type_id:$("#id_type").val()};
                    $('#category_id').attr("disabled",true);
                    $.ajax({
                            type: "POST",
                            url : "<?php echo site_url('Dashboard/select_category')?>",
                            data: type_id,
                            success: function(msg){
                                $('#category').html(msg);
                            }
                    });
                }
        }); */
    </script>