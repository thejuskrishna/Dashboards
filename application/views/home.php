<!DOCTYPE html>
<html>
<head>
  <title>Homepage</title>
</head>
<style type="text/css">
  *{
    height:100%;
  }
  .optionstack
  {
    height: 100px;
    width: 100%;
    background-color: white;
    margin: auto;
    text-align: center;
    text-decoration: none;
    border: 2px;


  }
   a:hover{
    background-color: white;
    cursor:hand;
    cursor:pointer;
    color: white;
  }

</style>
<body >
<div style="margin: 0px; display: inline-flex; width: 100%;">
  <div style="width: 60%;height: 70%;background-color: #247333  ;margin: auto;min-width: 400px;min-height: 500px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.8), 0 6px 20px 0 rgba(0, 0, 0, 0.22);;">
    <div style="width: 50%;margin: 0px;float: left;height: 100%;">
     <div  class="optionstack" style="background-color: black;">
       <a href="<?php echo base_url();?>index.php/" style="text-decoration: none; font-size:20px;"><font color="grey">
       <span ><br>Create your dashboard</span></font>
       </div></a>
      <div class="optionstack" style="background-color: black">
      <a href="<?php echo base_url();?>index.php/home_cont/viewdatabase" style="text-decoration: none;font-size:20px"><font color="grey">
       <span><br>Your Databases</span></font>
       </div></a>
      
      <div class="optionstack" style="background-color: black">
      <a href="<?php echo base_url();?>index.php/" style="text-decoration: none;font-size:20px"><font color="grey">
       <span><br>Your Dashboard</span></font>
       </div></a>
      <div class="optionstack" style="background-color: black">
      <a href="<?php echo base_url();?>index.php/home_cont/connectdatabase" style="text-decoration: none;font-size:20px"><font color="grey">
       <span><br>Connect Your Databases</span></font>
       </div></a>
       <div class="optionstack" style="background-color: black">
      <a href="<?php echo base_url();?>index.php/home_cont/logout" style="text-decoration: none;font-size:20px"><font color="grey">
        <span><br>Logout</span></font>
       </div></a>
    </div>
    <div style="width: 50%;margin: 0px;float: left;height: 100%;display: inline-flex;">
    <?php $username=$this->session->userdata('username');?>
      <p style="margin: auto;height: 40px;width: 100%;text-align: center;color: black;font-size: 25px;">WELCOME,<br><br><?php echo $username ?></p>
    </div>


  </div>
</div>
</body>
</html>