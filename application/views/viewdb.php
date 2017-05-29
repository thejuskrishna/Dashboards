
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>project</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/font-awesome.min.css') ?>" rel="stylesheet">

   

</head>

<body>
    <?php
        $dbs = $this->session->userdata('dbs');
        foreach ($dbs as $row)
        {
            echo $row->data_base.'  '.$row->host.'  '.$row->username;?>
            <div>
                 <a href=<?php echo base_url().'index.php/home_cont/diplaydb/'.$row->id?> >
            <i class="fa fa-eye"></i>
            </a>
            
            </div>
            <div>
                 <a href=<?php echo base_url().'index.php/home_cont/deletedb/'.$row->id?> >
            <i class="fa fa-trash"></i>
            </a>
            </div>
    <?php   echo  "<br>";
        }
    ?>
</body>

</html>
