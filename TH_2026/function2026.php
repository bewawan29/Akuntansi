<?php
    function sesi(){
        session_start();
        include "koneksi2026.php";
    }

?>

<!-- tabel transaksi -->
<?php

    function tabel_transaksi(){
        
        include("koneksi2026.php");
        $sql="select * from tabel_transaksi order by no DESC";
        $query=mysqli_query($koneksi,$sql);
        
        while($trans=mysqli_fetch_array($query)){
            
            echo"
            <tr>
            <td>$trans[no]</td>
            <td>$trans[tanggal]</td>
            <td>$trans[bulan]</td>
            <td>$trans[debit]</td>
            <td>$trans[kredit]</td>
            <td>$trans[transaksi]</td>
            <td>$trans[type]</td>
            <td>$trans[bank]</td>
            <td>$trans[bagian]</td>
            <td>$trans[post]</td>
            <td><a href='?kode=$trans[no]'> Hapus </a> </td>
            <td><a href='2026ubahtransaksi.php?kode=$trans[no]'> Ubah </a> </td> 
            </tr>";
        }
        hapus_transaksi();
        
    echo "Total Data :";
    echo mysqli_num_rows($query);
    }
?>

<!-- hapus transaksi -->
<?php
    function hapus_transaksi(){
        global $koneksi;
        if (isset($_GET['kode'])){
            mysqli_query($koneksi, "delete from tabel_transaksi where no ='$_GET[kode]' ");
            
            echo "Data terhapus";
            echo "<meta http-equiv=refresh content=0;URL='2026formtransaksi.php'>";
            // header ("location:2026formtransaksi.php");
        }
    }
?>

<!-- simpan transaksi -->
<?php
    function simpan_transaksi(){
        global $koneksi;
        if(isset($_POST['proses'])){
            mysqli_query($koneksi,"insert into tabel_transaksi set
            no = '$_POST[no]',
            tanggal = '$_POST[tanggal]',
            bulan = '$_POST[bulan]',
            debit = '$_POST[debit]',
            kredit = '$_POST[kredit]',
            transaksi = '$_POST[transaksi]',
            type = '$_POST[type]',
            bank = '$_POST[bank]',
            bagian = '$_POST[bagian]',
            post = '$_POST[post]'");
            
            echo "Data telah tersimpan";
            echo "<meta http-enquiv=refresh content=0;URL:'2026formtransaksi.php'>";
            // header ("location:2026formtransaksi.php");
        }
    }
?>	

<!-- tabel memo -->
 <?php
    
   function tabel_memo(){
    global $koneksi;
        $sql="select * from tabel_memo order by tanggal DESC";
        $query=mysqli_query($koneksi,$sql);

        while($trans=mysqli_fetch_array($query)){
        echo"
        <tr>
            <td>$trans[tanggal]</td>
            <td>$trans[hari]</td>
            <td>$trans[memo]</td>
            <td><a href='?kode=$trans[tanggal]'> hapus </a> </td>
            <td><a href='2025ubahmemo.php?kode=$trans[tanggal]'>Ubah</a></td>
        </tr>";
        }
        if (isset($_GET['kode'])){
        mysqli_query($koneksi, "delete from tabel_memo where tanggal='$_GET[kode]' ");
        
        echo "Data terhapus";
        echo "<meta http-equiv=refresh content=0;URL='2025formmemo.php'>";
        header ("location: 2025formmemo.php");
            
        }
        echo "Total Data : ";
        echo mysqli_num_rows ($query);
   }
    
?>

<!-- simpan memo -->
<?php
    function simpan_memo(){
        global $koneksi;
        if(isset($_POST['proses'])){
            mysqli_query($koneksi,"insert into tabel_memo set
            tanggal = '$_POST[tanggal]',
            hari = '$_POST[hari]',
            memo = '$_POST[memo]'");
            
            echo "Data telah tersimpan";
            echo "<meta http-enquiv=refresh content:2;URL='2025formmemo.php'>";
            // header ("location:2025formmemo.php");
        }
    }
?>

<!-- tabel transaksi gabung -->
 <?php
    function tabel_transaksi_gabung(){
        global $koneksi;
        if(isset($_POST['proses2'])){
            $sql1="select * from tabel_transaksi where tanggal = '$_POST[input]' order by no DESC";
            $query1=mysqli_query($koneksi,$sql1);

            while($trans1=mysqli_fetch_array($query1)){
                echo"
                <tr>
                    <td>$trans1[no]</td>
                    <td>$trans1[tanggal]</td>
                    <td>$trans1[bulan]</td>
                    <td>$trans1[debit]</td>
                    <td>$trans1[kredit]</td>
                    <td>$trans1[transaksi]</td>
                    <td>$trans1[type]</td>
                    <td>$trans1[bank]</td>
                    <td>$trans1[bagian]</td>
                    <td>$trans1[post]</td>
                    <td><a href='?kode=$trans1[no]'> Hapus </a> </td>
                    <td><a href='2025ubahtransaksi.php?kode=$trans1[no]'> Ubah </a> </td> 
                    </tr>";
                    }
        }
    }
?>