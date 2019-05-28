<?php
if(isset($_POST['simpan'])){
 $Nim = $_POST['Nim'];
 $Password = $_POST['Password'];

 $conn = mysqli_connect('localhost', 'root', '', 'db_laboran');
  if(mysqli_connect_errno()){
   echo "Koneksi Ke Server Gagal";
   exit();
  }

 $sql="select * from daftar where Nim='".$Nim."'AND Password='".$Password."'";
    $result=mysqli_query($conn, $sql);
    $num_rows=mysqli_num_rows($result);
    $row=mysqli_fetch_row($result);
    if($num_rows>0){
       
        echo "<script>location='index.html';</script>";
    } else {
        echo "<script>alert('Username atau Password Admin tidak benar !!!');</script>";
        echo "<script>location='login.php';</script>";
    }
}
?>