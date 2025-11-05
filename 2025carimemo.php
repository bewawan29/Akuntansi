<?php
session_start();
if(!isset($_SESSION["username"])){
  header("Location : index.php");
  exit;
}
include ("koneksi.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cari Memo</title>
    <link rel="stylesheet" href="styleversi.css">
</head>
<style>
        table{
            border-collapse:collapse;
            border:2px solid green;
            
        }
        th{
            background-color:steelblue;
            color:black;
            height:30px;
            border:1px solid green;
        }
        td{
            border:1px solid green;
        }
        .main{
            display: grid;
        }
        .main2{
            order: -1;
        }
        
        /* responsive */
        @media (max-width: 450px){
            /* judul */
            .judul{
                background-color: blue;
                color: white;
                font-size:0.7rem;
            }

            /* utama */
            .utama{
                display: grid;
                grid-template-columns: 1fr;
                gap: 0.5rem;
            }
            .side{
                font-size: 1rem;
                line-height: 1.5rem;
            }
            .main{
                display: grid;
                overflow: scroll;
            }
            .main2{
                order: -1;
                font-size: 0.8rem;
            }
        }
       
    </style>
<body>
    <div class="judul">
            <div class="judul1">ver_25_05</div>
            <div class="judul2"><h2>PENCARIAN MEMO 2025</h2></div>
            <div class="judul3"></div>           
    </div>

    <nav>
        <div class="menu">
            <a href="logout.php">LOGOUT</a>
            <a href="2025formmemo.php">BACK</a>
        </div>
        <div class="sub-menu">
            <?php echo date("l, d-M-Y"); ?>
            <div id="clock"></div>
            <!-- <div id="teksa"></div> -->
        </div>
        <script src="waktu.js"></script>
        <script src="mundur.js"></script>
    </nav>

    <div class="utama">
        <div class="side">
            <div class="side1">
                <form action="" method="post">
                
                <tr>
                    <td> Key </td><br>
                    <td> <input type="text" name="input"> </td> 
                </tr>
            </div>
            <div class="side2">
                <input type="submit" value="cari" name="proses">
            </div>
            
                <tr>
                    <td>  </td>
                </tr>
            </form>
        </div>
        <div class="main">
            <div class="main1">
                    
                <table>
                    <tr>
                        <th>Tanggal</th>
                        
                        <th>Hari</th>
                        <th>Memo</th>
                    </tr>
                

                    <?php
                    include ("koneksi.php");
                        if(isset($_POST['proses'])){
                        $sql="select * from tabel_memo where memo LIKE '%$_POST[input]%' order by tanggal DESC ";
                        $query=mysqli_query($koneksi,$sql);

                        while($trans=mysqli_fetch_array($query)){
                        echo"
                        <tr>
                        <td>$trans[tanggal]</td>
                        <td>$trans[hari]</td>
                        <td>$trans[memo]</td>
                        <td><a href='?kode=$trans[tanggal]'> Hapus </a> </td>
                        <td><a href='ubahtransaksi.php?kode=$trans[tanggal]'> Ubah </a> </td> 
                        </tr>";
                        }
                        }
                    ?>
                    
                </table>
            </div>
            
            <div class="main2">
                
            </div>
        </div>
    </div>
</body>
</html>