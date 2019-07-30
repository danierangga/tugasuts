<?php
 include "db.php";
 if(isset($_POST['update']))
 {
 $id=$_POST['id'];
 $nama=$_POST['nama'];
 $barang=$_POST['barang'];
 $jumlah=$_POST['jumlah'];
 $harga=$_POST['harga'];
 $garansi=$_POST['garansi'];
 $q=mysqli_query($con,"UPDATE `data` SET `nama`='$nama',`barang`='$barang',`jumlah`='$jumlah',`harga`='$harga',`garansi`='$garansi' where `id`='$id'");
 if($q)
 echo "success";
 else
 echo "error";
 }
 ?>
