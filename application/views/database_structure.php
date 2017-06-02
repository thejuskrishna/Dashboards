
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>

<html lang="en">

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

<body>
    
            <a href="<?php echo base_url()?>'index.php/home_cont/deletedb/'">
            <i class="fa fa-edit">add coloumn</i>
            </a>
            <a href="<?php echo base_url()?>'index.php/home_cont/deletedb/'">
            <i class="fa fa-trash">delete table</i>
            </a>
            <br>
            
		}
        
    ?>
     <div class="box box-primary">
            <div class="box-header">
              <i class="ion ion-clipboard"></i>

              <h3 class="box-title">To Do List</h3>

              <div class="box-tools pull-right">
                <ul class="pagination pagination-sm inline">
                  <li><a href="#">&laquo;</a></li>
                  <li><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">&raquo;</a></li>
                </ul>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <ul class="todo-list">
                <?php
                $table_data = $this->session->flashdata('table_data');
                foreach ($table_data as $table => $fields) 
                {
                   
                    ?>
                <li>
                  <!-- drag handle -->
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                  <!-- checkbox -->
                  <input type="checkbox" value="">
                  <!-- todo text -->
                  <span class="text"><?php echo $table?></span>
                  <!-- Emphasis label -->
                  <small class="label label-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
                  <!-- General tools such as edit or delete-->
                  <div class="tools">
                   <a href="<?php echo base_url()?>'index.php/home_cont/deletedb/'">
                    <i class="fa fa-edit">add coloumn</i>
                    </a>
                    <a href="<?php echo base_url()?>'index.php/home_cont/deletedb/'">
                    <i class="fa fa-trash">delete table</i>
                    </a>
                    <i class="fa fa-edit"></i>
                    <i class="fa fa-trash-o"></i>
                  </div>
                </li>
                <?php
                    foreach ($fields as $field)
                    {
                       ?> 
                        
                    
            
                 <span class="text"><?php echo $field?></span>
                <?php
                }
                }
                ?>
              </ul>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix no-border">
              <button type="button" class="btn btn-default pull-right"><i class="fa fa-plus"></i> Add item</button>
            </div>
          </div>
</body>

</html>
