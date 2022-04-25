<?php
  $connect = mysqli_connect("localhost", "root", "");
  mysqli_select_db($connect, "latihandb") or die ("Tidak dapat konek ke database");
  // echo "Koneksi Berhasil";
?>