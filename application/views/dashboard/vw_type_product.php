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
      			<h3 class="box-title">Buat tipe</h3>
      		</div><!-- box header -->
          <?php echo form_open('Dashboard/insert_type')?>
      		<div class="form-group">
      		  <div class="text">
      			<label>Input tipe produk</label>
      		  </div>
      			<div class="size">
      				<input type="text" class="form-control" placeholder="input tipe" name="tipe">	
      			</div>
      			<div class="size">
      				<input type="submit" class="btn btn-primary">
      			</div>
      		</div><!-- form tipe produk-->
      	</div><!-- box -->
      	<div class="box box-succes">
      		<div class="box-header with border">
      			<h3 class="box-title">Kelola Tipe produk</h3>
      		</div>
      		<table class="table table-bordered">
      			<tr>
      				<th>id</th>
      				<th>Nama tipe produk</th>
      				<th>Jumlah kategori</th>
      				<th>Jumlah produk</th>
      				<th>Aksi</th>
      			</tr>
            <tr>
            <?php foreach ($list_type->result() as $row) { ?>
              <th><?php echo $row->id_type; ?></th>
              <th><?php echo $row->name_type;?></th>
              <th>3</th>
              <th>4</th>
              <th><input type="submit" value="Update" name="update" class="btn btn-primary">&nbsp;&nbsp;&nbsp;
              <input type="submit" class="btn btn-primary" value="Delete" name="delete">
              </th>
            </tr>
            <?php }?>
      		</table>
      	</div><!-- box close -->
      </section>
       </div><!-- /.content-wrapper --> 
    </aside> 