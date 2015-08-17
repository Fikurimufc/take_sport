<?php 
$this->load->view('dashboard/asset');
$this->load->view('dashboard/vw_side'); ?>
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
          <b>Halaman Produk</b>
      </section>
      <section class="content">
      <div class="box box-succes">
      	<div class="box-header with border">
      	<button class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>	
      		<h3 class="box-title">kelola produk</h3>
      	</div>
      <table class="table table-bordered">
 		<tr>
 			<th><b>kode produk</b></th>
 			<th>Nama produk</th>
 			<th>Harga</th>
 			<th>Stok barang</th>
 			<th>Aksi</th>
 		</tr>
 		<?php foreach ($get_product->result() as $row): ?>	     	
      	<tr>
      		<th><?php echo $row->product_code; ?></th>
      		<th><?php echo $row->product_name;?></th>
      		<th><?php echo $row->price; ?></th>
      		<th><?php echo $row->stock;?></th>
      		<th><button class="btn btn-primary" name="update">Update</button></th>
      	</tr>
      	<?php endforeach;?>
      </table>	
      </div><!-- box succes--> 
      </section>
      </div><!-- /.content-wrapper --> 
</aside> 