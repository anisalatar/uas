<?php
 //syntax php untuk simpan ke database
 if (isset($_POST['simpan'])) {
  # code...
  $query=mysql_query("INSERT INTO mahasiswa(`nim`, `nama`, `jurusan`, 'alamat') VALUES('".$_POST['nim']."','".$_POST['nama']."','".$_POST['jurusan']."')");
  if ($query) {
   # code...
   echo "data berhasil disimpan";
  }else{
   echo "data gagal disimpan".mysql_error();
  }
 }
?>