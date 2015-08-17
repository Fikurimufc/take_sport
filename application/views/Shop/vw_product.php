<br>
<br>
<br>
<div class="row">
                    <?php foreach($product->result() as $row): ?>    
                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="<?php echo base_url()?>asset/img/product/<?php echo $row->img;?>" alt="">
                            <div class="caption">
                                <h4 class="pull-right">IDR <?php echo $row->price;?></h4>
                                <h4><a href="<?php echo base_url()?>product/detail_product?product_code=<?php echo $row->product_code;?>"><?php echo $row->product_name;?></a>
                                </h4>
                                <p><?php echo $row->description;?></p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">15 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php endforeach;?>
                  
                    <!-- close product-->
                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <h4><a href="#">Like this template?</a>
                        </h4>
                        <p>If you like this template, then check out <a target="_blank" href="http://maxoffsky.com/code-blog/laravel-shop-tutorial-1-building-a-review-system/">this tutorial</a> on how to build a working review system for your online store!</p>
                        <a class="btn btn-primary" target="_blank" href="http://maxoffsky.com/code-blog/laravel-shop-tutorial-1-building-a-review-system/">View Tutorial</a>
                    </div>
                </div><!--close row -->
            </div><!--col md-9-->
       
    </div>
    <!-- /.container -->