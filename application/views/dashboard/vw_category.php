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
 	 <div class="content-wrapper">
        <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>Tipe produk</h1>
      </section>
      <section class="content">
      	<div class="box box-succes">
      		<div class="box-header with border">
      			<h3 class="box-title">Buat kategori produk</h3>
      		</div><!-- box header -->
          <?php echo form_open('Dashboard/insert_category'); ?>
      		<div class="form-group">
           <div class="text">
            <label>Pilih tipe produk</label>
          </div>
          <div class="size">
            <?php 
               echo form_dropdown('type_id',$list_type);
            ?>
          </div>
           <div class="text">
      			<label>Input nama kategori produk</label>
      		  </div>
      			<div class="size">
      				<input type="text" class="form-control" placeholder="input category produk" name="category">	
      			</div>
      			<div class="size">
      				<input type="submit" class="btn btn-primary">
      			</div>
      		</div><!-- form tipe produk-->
      	</div><!-- box -->
      	<div class="box box-succes">
      		<div class="box-header with border">
      			<h3 class="box-title">Kelola Kategori Produk</h3>
      		</div>
      		<table class="table table-bordered">
      			<tr>
      				<th>#</th>
      				<th>Nama Kategori produk</th>
      		    <th>Jumlah produk</th>
      				<th>Aksi</th>
      			</tr>
      		</table>
      	</div><!-- box close -->
      </section>
       </div><!-- /.content-wrapper --> 
    </aside> 