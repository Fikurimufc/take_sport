<?php $this->load->helper('url'); 
$user = $this->session->userdata('logged_in');
?>

<script type="text/javascript">
  $(function(){
      $('#sidebar-menu').ajaxStart(function(){
        $(this).fadeIn();
      }).ajax.Stop(function(){
        $(this).fadeOut();
      });
      
  $('#menu2 header a').click(function(){
    var url = $(this).attr('href');
    $('#container').load(url);
    return false;
  });
  });

</script>
<body class="skin-blue sidebar-mini">
    <div class="wrapper">

      <!-- Main Header -->
      <header class="main-header">

        <!-- Logo -->
        <a href="index2.html" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>T</b>S</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Take</b>Sport</span>
        </a>

        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- User Account Menu -->
              <li class="dropdown user user-menu">
                <!-- Menu Toggle Button -->
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <!-- The user image in the navbar-->
                  <img src="<?php echo base_url()?>asset/img/user/<?php echo $user['img'];?>" class="user-image" alt="User Image" />
                  <!-- hidden-xs hides the username on small devices so only the image appears. -->
                  <span class="hidden-xs"><?php echo $user['username'];?>&nbsp;<i class="fa fa-user"></i></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- The user image in the menu -->
                  <li class="user-header">
                    <img src="<?php echo base_url()?>asset/img/user/<?php echo $user['img'];?>" class="img-circle" alt="User Image" />
                    <p>
                      <!-- Nama user di sini -->
                      <small>Member since <?php echo $user['register']; ?></small>
                    </p>
                  </li>
                 
                 
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="<?php echo base_url()?>Dashboard/logout" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
           
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

          <!-- Sidebar user panel (optional) -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="<?php echo base_url()?>asset/img/user/<?php echo $user['img'];?>" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
              <p><?php echo $user['name']; ?></p>
              <!-- Status -->
           
            </div>
          </div>

          <!-- search form (Optional) -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search..." />
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->

          <!-- Sidebar Menu -->
          <ul class="sidebar-menu">
            <li class="header">HEADER</li>
            <!-- Optionally, you can add icons to the links -->
           <li><a href="<?php echo base_url()?>Dashboard"><i class="fa fa-link"></i> <span>Dashboard</span></a></li>
             <li class="treeview">
                <a href="#"><i class="fa fa-link"></i><span>menu produk</span></a>
                <ul class="treeview-menu">
                  <li><a href="#">Buat produk baru</a></li>
                  <li><a href="#">Kelola produk</a></li>
                </ul>
              </li><!--Menu produk -->
              <li class="header"><h5><b>Menu Super Admin</b></h5></li>
            <li class="treeview">
              <a href="#"><i class="fa fa-user"></i> <span>Menu User</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="<?php echo base_url()?>User/register"><i class="">Create User</i></a></li>
                <li><a href="#">Kelola User</a></li>
              </ul>
            </li><!--Menu user -->
             <li class="treeview">
                <a href="<?php echo base_url()?>Dashboard/category"><i class=""></i><span>Menu kategori</span></a>
             </li>
             <li class="treeview">
                <a href="<?php echo base_url()?>Dashboard/type"><i></i><span>Menu type</span></a>  
             </li> 
            <li><a href="<?php echo base_url()?>Dashboard/content"><span>Update konten</span></a></li>    
           </ul><!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
      </aside>

    
     <!-- Content Wrapper. Contains page content -->
        <?php /*

     
       <aside class="right-side">
 
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
      <section class="content-header">
          
      </section>
       

      </div><!-- /.content-wrapper --> 
    </aside> 
   
    */?>
      
   <!-- Optionally, you can add Slimscroll and FastClick plugins.
          Both of these plugins are recommended to enhance the
          user experience. Slimscroll is required when using the
          fixed layout. -->
  </body>
</html>
