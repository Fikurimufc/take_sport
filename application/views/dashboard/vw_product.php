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

<script type="text/javascript">
 $('#content-wrapper').slimScroll({
 	height : '200px'
 });
</script>

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
      		<form class="form-horizontal" role="form">
      	  	  <div class="box-body no-padding">
      	  		<div class="text">
      	 			<label>Kode produk</label> 		
      	  		</div>
      	  		<div class="size">
      	  			<input type="text" class="form-control" placeholder="masukan kode produk" name="kode_produk">
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
      	  					<input type="text" class="form-control" id="exampleInputAmount" placeholder="Harga">
      	  					<div class="input-group-addon">.00</div>
      	  				</div><!-- input group-->
      	  			</div><!--size -->

      	  			<div class="text">
      	  				<label>Stock</label>
      	  			</div>
      	  			<div class="size">
      	  				<input type="text" class="form-control" style="width:100px">
      	  			</div>
      	  			<div class="text">
      	  				<label>Gambar</label>
      	  			</div>
      	  			<div class="size">
      	  				<input type="file">
      	  			</div>
      	  			<div class="text">
      	  				<label>Deskripsi tentang produk</label>
      	  			</div>
      	  			<div class="size">
      	  				<div class="box-body pad">
                     <textarea class="textarea" placeholder="Place some text here" style="width: 100%; height: 100px; font-size: 14px; 
      	  				   line-height: 18px; border: 1px solid #dddddd; margin-bottom:160px; padding: 10px;"></textarea>
      	  				</div>
                  
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
    
