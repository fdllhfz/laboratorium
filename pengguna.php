<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WE CARE</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="tampilan.css">
  </head>

  <body>
    <nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <img alt="brand" src="1.png" height="40px" align="left">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      
      <a href="index.html" class="navbar-brand page-scroll"> WE CARE </a>
    </div>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="">AWAL</a></li>
         <li><a href="cdt.php">CEK DETAK JANTUNG</a></li>
        <li><a href="">GRAFIK DETAK JANTUNG</a></li>
        <li><a href="darurat.html">DARURAT</a></li>
        <li><a></a></li>

 <!-- jam dan tanggal -->
        <li><a ><script type='text/javascript'>
<!--
var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum&#39;at', 'Sabtu'];
var date = new Date();
var day = date.getDate();
var month = date.getMonth();
var thisDay = date.getDay(),
    thisDay = myDays[thisDay];
var yy = date.getYear();
var year = (yy < 1000) ? yy + 1900 : yy;
document.write(thisDay + ', ' + day + ' ' + months[month] + ' ' + year);
//-->
</script></a></li>



        <li><a></span><div id="clock"></div>
<script type="text/javascript">
function showTime() {
    var a_p = "";
    var today = new Date();
    var curr_hour = today.getHours();
    var curr_minute = today.getMinutes();
    var curr_second = today.getSeconds();
    if (curr_hour < 12) {
        a_p = "AM";
    } else {
        a_p = "PM";
    }
    if (curr_hour == 0) {
        curr_hour = 12;
    }
    if (curr_hour > 12) {
        curr_hour = curr_hour - 12;
    }
    curr_hour = checkTime(curr_hour);
    curr_minute = checkTime(curr_minute);
    curr_second = checkTime(curr_second);
 document.getElementById('clock').innerHTML=curr_hour + ":" + curr_minute + ":" + curr_second + " " + a_p;
    }

function checkTime(i) {
    if (i < 10) {
        i = "0" + i;
    }
    return i;
}
setInterval(showTime, 500);
//-->
</script></a></li>

 <!-- akhir waktu dan jam  -->
 <li><a href="proses_logout.php">Log Out</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
 <!-- jumbotron -->
 <br>
 <br>
 <div class="jumbotron text-center"><img src="smile.png" height="120px" align= "center">
  <h2> Selamat datang</h2>
  <h3>SEMOGA HARIMU MENYENANGKAN</h3>

  <div class='stickysocial' id='stickysocial_dock'>

<a href='https://plus.google.com/USERNAME' target='_blank' title='Follow us on Google+'><img alt='Google+' src='http://4.bp.blogspot.com/-gLJp4DLDSCs/UVvuJnD6t_I/AAAAAAAAX5k/r9WTrCFCTAU/s1600/g+.png' style='position:relative; width:37px'/></a> 

<a href='http://www.facebook.com/USERNAME' target='_blank' title='Follow us on Facebook'><img alt='Facebook' src='https://lh3.googleusercontent.com/-4A-w9bh9pdI/UOVvglcjUPI/AAAAAAAAT9g/mieZRe2D3x0/s40/facebook.png' style='position:relative; width:37px'/></a> 

<a href='http://twitter.com/USERNAME' target='_blank' title='Follow us on Twitter'><img alt='Twitter'  src='https://lh3.googleusercontent.com/-e_BiuZYOtmM/UJyyv8lLuUI/AAAAAAAANZM/gd42sWzL3KM/s40/twitter.png' style='position:relative; width:37px'/></a> 

<a href='http://feedburner.google.com/fb/a/mailverify?uri=ID FEEDBURNERANDA' target='_blank' title='News latters'><img alt='mail' src='https://lh6.googleusercontent.com/-VXLPa9GZq1Q/UJyyu0siW-I/AAAAAAAANY8/GEIS4T1jbe4/s40/mail.png' style='position:relative; width:37px'/></a> 

<a href='http://feeds.feedburner.com/USERNAME' target='_blank' title='Feed'><img alt='SC' src='https://lh6.googleusercontent.com/-mmd0UaE1A24/UJyyv5DqQwI/AAAAAAAANZQ/hxIo6ijm3iY/s40/rss.png' style='position:relative; width:37px'/></a> 

</div>

  <p><a class="btn btn-primary btn-lg" href="cdt.php" role="button">CEK DETAK JANTUNG YUK</a></p>
  <br>
  <br>
  <br>
    <br>
  <br>
  <br>
  <br>
  <h2>BAGAIMANA MOOD ANDA HARIINI ?</h2>
<button type="button" class="btn btn-primary" onclick="alert('Kamu bisa ceria setiap hari kalau mempertahankan optimisme dalam hati. Optimisme tidak selalu berarti dangkal, lho. Kemungkinan terburuk pun harus tetap kamu pikirkan. Tapi, semua itu hanya untuk membuatmu tetap waspada dan berjaga-jaga.Misalnya, kamu ditunjuk untuk jadi MC di acara kampus, padahal untuk bicara di depan kelas saja kamu tidak percaya diri. Kamu memutuskan untuk menerima tawaran tersebut dan optimis bisa melakukannya. Di sisi lain, kamu rutin berlatih bicara di depan cermin untuk mengantisipasi kemungkinan terburuk yang akan terjadi. Pokoknya, kamu tidak membiarkan rasa pesimis membatasi ruang berkembangmu.')">SENANG</button>

<button type="button" class="btn btn-success" onclick="alert('Tersenyumlah, bahkan kalau harimu runyam. Tersenyum itu tidak selalu berarti kamu sedang mengalami situasi yang menyenangkan. Tersenyum artinya kamu cukup kuat menghadapi apapun yang sedang kamu rasakan.Sebuah senyum kecil akan berpengaruh besar bagi suasana hatimu. Lebih besar lagi pengaruhnya pada orang-orang di sekitarmu. Jadi, ayo lebih banyak tersenyum!')" >SEDIH</button>

<button type="button" class="btn btn-info"    onclick="alert('Tahu tidak kalau berolahraga dapat mengangkat mood-mu secara signifikan? Saat berolahraga, tubuh mengeluarkan zat neurokimia yang dapat memperbaiki suasana hati dan membuat kita merasa lebih baik. Tubuh dan pikiran kita yang tadinya tegang pun dapat terasa lebih rileks. Tapi, yang paling penting adalah bentuk tubuhmu akan terlihat lebih ideal dan bugar dari sebelumnya.')" >GALAU</button>

<button type="button" class="btn btn-warning" onclick="alert('Siang hari adalah saat-saat genting. Bisa jadi cuaca begitu panas sehingga kita mudah mengantuk. Bisa jadi juga, kamu sudah berjam-jam duduk dan tubuhmu mulai merasa lelah. Rasanya kamu ingin mengeluh dan mengumpat saja.Nah, mood positifmu tidak akan bertahan jika kamu tak mengunci mulut. Sebaiknya, berdiamlah sejenak dan pikirkan satu hal – satu hal saja – yang kamu punya dan membuatmu bahagia')" >KECEWA</button>

<button type="button" class="btn btn-danger"  onclick="alert('Setiap orang pasti punya masalahnya masing-masing. Selalu bisa menjaga mood bukan berarti hidupmu lancar-lancar saja. Masalah tentu saja akan tetap hadir. Yang penting adalah bagaimana kita mengatasinya.Menunda penyelesaian masalah hanya akan membuat tanggung jawabmu bertumpuk. Selesaikan urusanmu sesegera mungkin, supaya tidak ada rasa stres yang berlarut-larut. Ingat, semakin kamu menunda masalah, akan semakin pusing pula kamu dibuatnya.')" >KESAL</button>
</div>
 <!-- Akhir jumbotron -->
 
  </body>
</html>