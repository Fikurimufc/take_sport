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
          <b>Halaman Profile</b>
      </section>
       <!--main content-->
      <section class="content">
      	<div class="box box-succes">
      	
      	 <button class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>	
      		
      		<div class="box-header with border">
      			<h3 class="box-title">Update Avatar</h3>
      		</div>
      	<div class="box-body pad">
      		<?php foreach($profile->result() as $row):?>
      			<div class="avatar"><img src="<?php echo base_url()?>asset/img/user/<?php echo $row->img;?>" width="160" height="160"></div>	
      		<div class="size">
      			<input type="file" name="userfile">
      		</div>
      		<div class="size">
      			<input type="submit" name="submit" value="upload" class="btn btn-primary">
      		</div>
      	</div>
      	</div><!--box succes -->
      	<div class="box box-succes">
      		<div class="box-header with border">
      		 <button class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>	
      		 	<h3 class="box-title">Update Profile</h3>
      		</div>
      		<div class="box-body pad">
      			<div class="text">
      				<label>Username</label>
      			</div>
      			<div class="size">
      				<input type="text" class="form-control" name="username" value="<?php echo $row->username?>">
      			</div>
      			<div class="text">
      				<label>Password</label>
      			</div>
      			<div class="size">
      				<input type="password" name="password" class="form-control" value="<?php echo $row->password?>">
      			</div>
      		</div>
      	</div><!-- box succes-->	
      </section><!-- class content-->        
  <?php endforeach; ?>
      </div><!-- /.content-wrapper --> 
</aside> 
   