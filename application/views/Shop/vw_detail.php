<style type="text/css">
 .dot{border-bottom:1px dotted #666666;}

.font{ 
font-size: 15px;
font-family: verdana;
}
th
.marg{
    margin-top: 20px;
}      
</style>

<?php $this->load->view('shop/asset'); ?>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Take sport</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">Main</a>
                    </li>
                    <li>
                        <a href="#">Cara melakukan transaksi</a>
                    </li>
                    <li>
                        <a href="#">Reseller</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <br>
    <br>
    <br>
    <br>
    <br>
    <!-- Page Content -->
<div class="container">

        <div class="row">

            <div class="col-md-3">
                <p class="lead">Kategori</p>ssss
                <div class="list-group">
                <?php foreach($list->result() as $row): ?>
                    <a href="#" class="list-group-item"><?php echo $row->name_type;?></a>
                <?php endforeach;?>
                </div>
            </div>
     <?php foreach ($product->result() as $row):?>       
    <div class="col-md-4">
            <h2><?php echo $row->product_name?></h2>
    <div class="row">
        <div class="col-xs-6 col-md3">
            <img src="<?php echo base_url()?>asset/img/product/<?php echo $row->img?>" width="300" height="400">
        </div><!-- col xs 6-->
    </div><!--row -->
    </div><!--col md 4-->
        <br><br><br>
    <div class="col-md-4">
    <table>
        <tr>
           <th><div class="dot">Kode produk</div></th>
           <th>&nbsp;</th>
           <th>:</th>
           <th>&nbsp;<?php echo $row->product_code;?></th> 
        </tr>
        <tr>
           <th><div class="marg"><div class="dot">Nama produk</div></div></th>
           <th>&nbsp;</th>
           <th><div class="marg">:</div></th> 
           <th><div class="marg"><?php echo $row->product_name;?></div></th>
        </tr>
        <tr>
            <th><div class="marg">Harga</div></th>
            <th>&nbsp;</th>
            <th><div class="marg">:</div></div></th>
            <th><div class="marg"><?php echo $row->price;?></div></th>
        </tr>
        <tr><th><div class="marg"><button class="btn btn-primary"><span class="glyphicon glyphicon-shopping-cart"></span>Tambah ke keranjang</button></div></th></tr>
    </table>
    </div>
    </div><!-- first row-->
    <?php endforeach;?>