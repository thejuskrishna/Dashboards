
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css') ?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css') ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('dist/css/AdminLTE.min.css') ?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url('dist/css/skins/_all-skins.min.css') ?>">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url('plugins/iCheck/flat/blue.css') ?>">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php echo base_url('plugins/morris/morris.css') ?>">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url('plugins/jvectormap/jquery-jvectormap-1.2.2.css') ?>">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo base_url('plugins/datepicker/datepicker3.css') ?>">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url('plugins/daterangepicker/daterangepicker.css') ?>">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo base_url('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') ?>') ?>">
   <link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/font-awesome.min.css') ?>" rel="stylesheet">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b>LTE</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          
          <!-- Notifications: style can be found in dropdown.less -->
         
          <!-- Tasks: style can be found in dropdown.less -->
          <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">9</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 9 tasks</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Design some buttons
                        <small class="pull-right">20%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Create a nice theme
                        <small class="pull-right">40%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">40% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Some task I need to do
                        <small class="pull-right">60%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">60% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Make beautiful transitions
                        <small class="pull-right">80%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">80% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer">
                <a href="#">View all tasks</a>
              </li>
            </ul>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $this->session->userdata('username')?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  <?php echo $this->session->userdata('username')?>
                </p>
              </li>
              <!-- Menu Body -->
              
                <!-- /.row -->
              <!-- Menu Footer-->
             
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
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $this->session->userdata('username')?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Dashboards</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">4</span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> Top Navigation</a></li>
            <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i> Boxed</a></li>
            <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Fixed</a></li>
            <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>
          </ul>
        </li>
        <li>
          <a href="<?php echo base_url();?>index.php/home_cont/connectdatabase">
            <i class="fa fa-th"></i> <span>Create Dashboards</span>
          </a>
        </li>
         <li>
          <a href="<?php echo base_url();?>index.php/home_cont/connectdatabase">
            <i class="fa fa-th"></i> <span>Connect Database</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Your Databases</span>
          </a>
          <ul class="treeview-menu">
             <?php
        $dbs = $this->session->flashdata('dbs');
        foreach ($dbs as $row)
         {
            echo "<li><a href=".base_url().'index.php/home_cont/diplaydb/'.$row->id."><i class=\"fa fa-circle-o\"></i>".$row->host.'/'.$row->data_base."</a></li>";
          }
          ?>
            
          </ul>
        </li>
         <li>
          <a href="<?php echo base_url();?>index.php/home_cont/logout">
            <i class="fa fa-th"></i> <span>Logout</span>
          </a>
        </li>
       
          
          
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
   

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      
        <!-- ./col -->
       
        <!-- ./col -->
        
        
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-7 connectedSortable">
          <!-- Custom tabs (Charts with tabs)-->
        

          <!-- Chat box -->
         
          <!-- /.box (chat box) -->

          <!-- TO DO List -->
          
            <!-- /.box-header -->
           <div class="box box-primary">
            <div class="box-header">
              <i class="ion ion-clipboard"></i>

              <h3 class="box-title">Table List</h3>

              <div class="box-tools pull-right">
               
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <?php
              $field_data=$this->session->flashdata('field_data');
             
              ?>

  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable(
          javascript_array
        );

        var options = {
          title: 'Company Performance',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <?php
    $contents=$this->session->flashdata('contents');
    $j=0;
    foreach ($contents as $content) {
  $i=1;
  $php_array[0]=$j;
   foreach ($field_data as $key => $value) {
            $php_array[$i]=$content[$key]+0;
                $i=$i+1;
              }

              $parray[$j]=$php_array;
              $j=$j+1;
            }
           
            $i=1;
            $php_array[0]='';
            foreach ($field_data as $key => $value) {
            $php_array[$i]=$key;
                $i=$i+1;
              }
    ?>
    <script type='text/javascript'>
<?php
$javas_array = json_encode($php_array);
echo "var javascript_array = [".$javas_array;

foreach ($parray as $p_array) {
  

//$p_array = array('abc',600,'ghi');
$js_array = json_encode($p_array);
echo ",".$js_array;

}
echo "];";
?>
</script>
    <div id="curve_chart" style="width: 900px; height: 500px"></div>
  </body>
</html>
            </div>
            <!-- /.box-body -->
            
          </div>
          <!-- /.box -->

          <!-- quick email widget -->
         
        </section>
        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
      
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url('plugins/jQuery/jquery-2.2.3.min.js') ?>"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url('bootstrap/js/bootstrap.min.js') ?>"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="<?php echo base_url('plugins/morris/morris.min.js') ?>"></script>
<!-- Sparkline -->
<script src="<?php echo base_url('plugins/sparkline/jquery.sparkline.min.js') ?>"></script>
<!-- jvectormap -->
<script src="<?php echo base_url('plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') ?>"></script>
<script src="<?php echo base_url('plugins/jvectormap/jquery-jvectormap-world-mill-en.js') ?>"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url('plugins/knob/jquery.knob.js') ?>"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="<?php echo base_url('plugins/daterangepicker/daterangepicker.js') ?>"></script>
<!-- datepicker -->
<script src="<?php echo base_url('plugins/datepicker/bootstrap-datepicker.js') ?>"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') ?>"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url('plugins/slimScroll/jquery.slimscroll.min.js') ?>"></script>
<!-- FastClick -->
<script src="<?php echo base_url('plugins/fastclick/fastclick.js') ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('dist/js/app.min.js') ?>"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url('dist/js/pages/dashboard.js') ?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('dist/js/demo.js') ?>"></script>
</body>
</html>
