<html> 

<head>
    <title>Login</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="form.css">
</head> 
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
      
      <a href="index.html" class="navbar-brand page-scroll"> SAS SECURITY SYSTEM </a>
    </div>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.html">HOME</a></li>
        <li><a href="riset.html">RISET</a></li>
        <li><a href="carakerja.html">CARA KERJA</a></li>
        <li><a href="kontak.html">KONTAK</a></li>
        <li><a></a></li>
        <li><a href="daftar.php"><span class="glyphicon glyphicon-user"></span> DAFTAR </a></li>

      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="vid-container">
  <video id="Video1" class="bgvid back" autoplay="false" muted="muted" preload="auto" loop>
      <source src="loop.mp4" type="video/mp4">
  </video>
  <div class="inner-container">
    <video id="Video2" class="bgvid inner" autoplay="false" muted="muted" preload="auto" loop>
      <source src="loop.mp4" type="video/mp4">
    </video>
    <div class="box">
      <h1>Login</h1>
      <form method="post" action="index.html">
      <input type="text" placeholder="Nim" name="Nim" />
      <input type="password" placeholder="Password" name="Password" />
      <button name="simpan">Login</button>
      </form>
      <p>Not a member? <span><a href="daftar.php" >daftar</a></span></p>
    </div>
    <div class="large-6 medium-6 small-12 columns counting">

  </div>
</div>