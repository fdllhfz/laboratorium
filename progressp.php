<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Monitoring Perangkat</title>
    <link href="css1/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="progress.css">
  </head>

  <body>
    <nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <img alt="brand" src="gembok.png" height="40px" align="left">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      
      <a href="index.html" class="navbar-brand page-scroll"> SAS SECURITY SYSTEM
      <ul class="nav navbar-nav navbar-right">
          <ul class="nav navbar-nav navbar-right">
          
         <li role="presentation"><a href="index.html">HOME</a></li>
           <li role="presentation" class="active"><a href="proyek.html">MONITORING</a></li>
        <li><a></a></li>
       

      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
 <!-- jumbotron -->
 <br>
 <br>
 <div class="jumbotron text-center" style="min-height: 1600px><img src="gembok.png" height="120px" align= "center">
  <h2>  STATUS SAAT INI   </h2>
  <h2>TELECOMMUNICATION NETWORKING LABORATORY</h2>
  <section class="container">
 <br>
 <br>
 <br>
<body bgcolor="#CCCCCC">
<?php 
    include 'koneksi.php';
    $no = 1;
    $data = mysqli_query($koneksi,"select * from tb_progres");
    while($d = mysqli_fetch_array($data)){
      ?>

<h2><strong><p align="center">DATA</p></strong></h2>
<table width="807" border="1" cellpadding="0" cellspacing="0" align="center">
  <tr>
    <td width="112" height="29" align="center" valign="middle" bgcolor="#483D8B">NOMOR</td>
    <td width="176" align="center" valign="middle" bgcolor="#DEB887">NAMA ALAT</td>
    <td width="252" align="center" valign="middle" bgcolor="#5F9EA0">STATUS</td>
    <td width="134" align="center" valign="middle" bgcolor="#6495ED">KETERANGAN</td>
   </tr>
<?php
$data = mysqli_query($koneksi, "select * from tb_progres");
  foreach ($data as $data){
?>
  <tr>
    
    <td p align="center" bgcolor="#483D8B"><?php echo $data['No']; ?></td>
    <td p align="center" bgcolor="#DEB887"><?php echo $data['Nama']; ?></td>
    <td p align="center" bgcolor="#5F9EA0"><?php echo $data['Status']; ?></td>
    <td p align="center" bgcolor="#6495ED"><?php echo $data['Keterangan']; ?></td>
</div></td>
   
  </td>

  </tr>
 <?php 
    }
    ?>
</table>
</body>
</html>