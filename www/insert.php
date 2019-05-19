<?php
 include "db.php";
 if(isset($_POST['insert']))
 {
 $nama=$_POST['nama'];
 $barang=$_POST['barang'];
 $jumlah=$_POST['jumlah'];
 $q=mysqli_query($con,"INSERT INTO `data` (`nama`,`barang`,`jumlah`) VALUES ('$nama','$barang','$jumlah')");
 if($q)
  echo "success";
 else
  echo "error";
 }
 ?>
