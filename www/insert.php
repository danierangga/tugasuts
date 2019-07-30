<?php
 include "db.php";
 if(isset($_POST['insert']))
 {
 $nama=$_POST['nama'];
 $barang=$_POST['barang'];
 $jumlah=$_POST['jumlah'];
 $harga=$_POST['harga'];
 $garansi=$_POST['garansi'];
 $q=mysqli_query($con,"INSERT INTO `data` (`nama`,`barang`,`jumlah`,`harga`,`garansi`) VALUES ('$nama','$barang','$jumlah','$harga','$garansi')");
 if($q)
  echo "success";
 else
  echo "error";
 }
 ?>
