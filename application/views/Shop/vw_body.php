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
                <p class="lead">Kategori</p>
                <div class="list-group">
                <?php foreach($list->result() as $row): ?>
                    <a href="<?php echo base_url()?>Product?id_type=<?php echo $row->id_type;?>" class="list-group-item"><?php echo $row->name_type;?></a>
                <?php endforeach;?>
                </div>
            </div>

            <div class="col-md-9">

                <div class="row carousel-holder">

                    <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>
                              <div class="carousel-inner">
                                <div class="item active">
                                    <img class="slide-image" src="<?php echo base_url()?>asset/img/product/Adidas-There-will-be-haters.jpg" widht="800" height="300" alt="">
                                </div>
                                <div class="item">
                                      <img class="slide-image" src="<?php echo base_url()?>asset/img/product/Adidas-There-will-be-haters.jpg" widht="800" height="300" alt="">
                                </div>
                                <div class="item">
                                      <img class="slide-image" src="<?php echo base_url()?>asset/img/product/Adidas-There-will-be-haters.jpg" widht="800" height="300" alt="">
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>

                </div><!-- close carousel -->
                 <!-- product page-->   
               
