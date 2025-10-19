<!-- total -->
<?php
include ("koneksi.php")
?>

<?php
$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi";
$query_result=mysqli_query($koneksi, $query);
while($row=mysqli_fetch_assoc($query_result)){
	$output=$row['sum'];
}
?>

<?php
    $query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output2=$row['sum'];
    }
?>

        <!-- rumah total-->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where post = 'rumah'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_debit_rumah=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where post = 'rumah'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_kredit_rumah=$row['sum'];
    }
 ?>

 <!-- makan total-->
 <?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where post = 'makan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_debit_makan=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where post = 'makan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_kredit_makan=$row['sum'];
    }
 ?>

<!-- kesehatan -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where post = 'kesehatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_debit_kesehatan=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where post = 'kesehatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_kredit_kesehatan=$row['sum'];
    }
 ?>

<!-- lain-lain -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where post = 'lain-lain'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_debit_lain=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where post = 'lain-lain'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_kredit_lain=$row['sum'];
    }
 ?>

<!-- rumah umum-->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bagian = 'umum' AND post = 'rumah'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_debit_rumah=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bagian = 'umum' AND post = 'rumah'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_kredit_rumah=$row['sum'];
    }
 ?>

<!-- makan umum -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bagian = 'umum' AND post = 'makan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_debit_makan=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bagian = 'umum' AND post = 'makan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_kredit_makan=$row['sum'];
    }
 ?>

<!-- kesehatan umum -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bagian = 'umum' AND post = 'kesehatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_debit_kesehatan=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bagian = 'umum' AND post = 'kesehatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_kredit_kesehatan=$row['sum'];
    }
 ?>

<!-- pendapatan umum -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bagian = 'umum' AND post = 'pendapatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_debit_pendapatan=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bagian = 'umum' AND post = 'pendapatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_kredit_pendapatan=$row['sum'];
    }
 ?>

<!-- gaji umum -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bagian = 'umum' AND post = 'gaji'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_debit_gaji=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bagian = 'umum' AND post = 'gaji'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_kredit_gaji=$row['sum'];
    }
 ?>

<!-- lain-lain umum -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bagian = 'umum' AND post = 'lain-lain'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_debit_lain=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bagian = 'umum' AND post = 'lain-lain'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_kredit_lain=$row['sum'];
    }
 ?>


<!-- rumah umum-->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bagian = 'pribadi' AND post = 'rumah'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_debit_rumah=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bagian = 'pribadi' AND post = 'rumah'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_kredit_rumah=$row['sum'];
    }
 ?>

<!-- makan pribadi -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bagian = 'pribadi' AND post = 'makan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_debit_makan=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bagian = 'pribadi' AND post = 'makan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_kredit_makan=$row['sum'];
    }
 ?>

<!-- kesehatan pribadi -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bagian = 'pribadi' AND post = 'kesehatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_debit_kesehatan=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bagian = 'pribadi' AND post = 'kesehatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_kredit_kesehatan=$row['sum'];
    }
 ?>

<!-- pendapatan pribadi -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bagian = 'pribadi' AND post = 'pendapatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_debit_pendapatan=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bagian = 'pribadi' AND post = 'pendapatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_kredit_pendapatan=$row['sum'];
    }
 ?>

<!-- gaji pribadi -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bagian = 'pribadi' AND post = 'gaji'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_debit_gaji=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bagian = 'pribadi' AND post = 'gaji'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_kredit_gaji=$row['sum'];
    }
 ?>

<!-- lain-lain pribadi -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bagian = 'pribadi' AND post = 'lain-lain'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_debit_lain=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bagian = 'pribadi' AND post = 'lain-lain'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_kredit_lain=$row['sum'];
    }
 ?>

 <!-- total BCA -->
  <?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bank = 'BCA'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$bca_debit=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bank = 'BCA' ";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$bca_kredit=$row['sum'];
    }
 ?>

 <!-- total BSI -->
  <?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bank = 'bsi'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$bsi_debit=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bank = 'bsi' ";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$bsi_kredit=$row['sum'];
    }
 ?>

 <!-- total BRI -->
  <?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bank = 'bri'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$bri_debit=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bank = 'bri' ";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$bri_kredit=$row['sum'];
    }
 ?>

 <!-- total Niaga -->
  <?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bank = 'niaga'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$niaga_debit=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bank = 'niaga' ";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$niaga_kredit=$row['sum'];
    }
 ?>

 <!-- total cash -->
  <?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where type = 'Cash'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$cash_debit=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where type = 'Cash' ";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$cash_kredit=$row['sum'];
    }
 ?>

 <!-- total pribadi -->
  <?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bagian = 'pribadi'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_debit=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bagian = 'pribadi' ";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_kredit=$row['sum'];
    }
 ?>

 <!-- total umum -->
  <?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bagian = 'umum'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_debit=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bagian = 'umum' ";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_kredit=$row['sum'];
    }
 ?>

<?php
    $saldo=$output-$output2;
    $saldo_rumah = $output_debit_rumah - $output_kredit_rumah ;
    $saldo_makan = $output_debit_makan - $output_kredit_makan ;
    $saldo_kesehatan = $output_debit_kesehatan - $output_kredit_kesehatan ;
    $saldo_lain = $output_debit_lain - $output_kredit_lain ;

    $umum_rumah = $umum_debit_rumah - $umum_kredit_rumah ;
    $umum_makan = $umum_debit_makan - $umum_kredit_makan ;
    $umum_kesehatan = $umum_debit_kesehatan - $umum_kredit_kesehatan ;
    $umum_pendapatan = $umum_debit_pendapatan - $umum_kredit_pendapatan ;
    $umum_gaji = $umum_debit_gaji - $umum_kredit_gaji ;
    $umum_lain = $umum_debit_lain - $umum_kredit_lain ;

    $pribadi_rumah = $pribadi_debit_rumah - $pribadi_kredit_rumah ;
    $pribadi_makan = $pribadi_debit_makan - $pribadi_kredit_makan ;
    $pribadi_kesehatan = $pribadi_debit_kesehatan - $pribadi_kredit_kesehatan ;
    $pribadi_pendapatan = $pribadi_debit_pendapatan - $pribadi_kredit_pendapatan ;
    $pribadi_gaji = $pribadi_debit_gaji - $pribadi_kredit_gaji ;
    $pribadi_lain = $pribadi_debit_lain - $pribadi_kredit_lain ;

    $bca_output = $bca_debit - $bca_kredit ;
    $bsi_output = $bsi_debit - $bsi_kredit ;
    $niaga_output = $niaga_debit - $niaga_kredit ;
    $bri_output = $bri_debit - $bri_kredit ;
    $cash_output = $cash_debit - $cash_kredit ;
    $pribadi_output = $pribadi_debit - $pribadi_kredit ;
    $umum_output = $umum_debit - $umum_kredit ;
?>