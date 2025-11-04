<?php
include ("koneksi.php")

?>

<!-- januari -->
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='01' AND post = 'kesehatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_kredit_januari=$row['sum'];
    }
 ?>

 <!-- februari -->
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='02' AND post = 'kesehatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_kredit_februari=$row['sum'];
    }
 ?>

 <!-- maret -->
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='03' AND post = 'kesehatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_kredit_maret=$row['sum'];
    }
 ?>

 <!-- april -->
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='04' AND post = 'kesehatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_kredit_april=$row['sum'];
    }
 ?>

 <!-- mei -->
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='05' AND post = 'kesehatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_kredit_mei=$row['sum'];
    }
 ?>

 <!-- juni -->
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='06' AND post = 'kesehatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_kredit_juni=$row['sum'];
    }
 ?>

 <!-- juli -->
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='07' AND post = 'kesehatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_kredit_juli=$row['sum'];
    }
 ?>

 <!-- agustus -->
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='08' AND post = 'kesehatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_kredit_agustus=$row['sum'];
    }
 ?>

 <!-- september -->
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='09' AND post = 'kesehatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_kredit_september=$row['sum'];
    }
 ?>

 <!-- oktober -->
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='10' AND post = 'kesehatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_kredit_oktober=$row['sum'];
    }
 ?>

 <!-- november -->
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='11' AND post = 'kesehatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_kredit_november=$row['sum'];
    }
 ?>

 <!-- desember -->
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='12' AND post = 'kesehatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_kredit_desember=$row['sum'];
    }
 ?>

 <!-- total -->
<?php
    $total_kesehatan=$output_kredit_januari+$output_kredit_februari+$output_kredit_maret+$output_kredit_april+$output_kredit_mei+$output_kredit_juni+$output_kredit_juli+$output_kredit_agustus+$output_kredit_september+$output_kredit_oktober+$output_kredit_november+$output_kredit_desember;
?>