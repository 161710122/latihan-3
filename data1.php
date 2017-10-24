<?php
require_once ('data.php');
$data = new data ('Aldhit','XI RPL 1','Laki Laki','BMI') ;
echo "<center> =============================<br> <center> Data Siswa </center>============================= <br>" ;
echo " Nama = ".$data->get_nama()."<br>" ;
echo " Kelas = ".$data->get_kelas()."<br>" ;
echo " Jenis Kelamin = ".$data->get_jenis_kelamin()."<br>" ;
echo " Alamat = ".$data->get_alamat()."<br>" ;
?>