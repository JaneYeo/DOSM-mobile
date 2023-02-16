<?php 

require_once('db.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Hammersmith+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Abhaya Libre" rel="stylesheet">
    <link rel="stylesheet" href="index.css">
	<link rel="manifest" href="manifest.json">
	<script src="app.js"></script>
    <title>DOSM Pahang Home Page</title>
</head>
<body>
    <h2 class="header">DOSM Pahang</h2>

<!--
    <a href="">
        <div class="search">
            <img src="Images & Icons/searchicon.png" alt="">
        </div>
    </a>
-->
    	 <?php 
            $sql = "select * from `Keluaran` where `Sektor Ekonomi` = 'KDNK'";
            $result = mysqli_query($con,$sql);
            if($row = mysqli_fetch_assoc($result)){
                $sector=$row['Sektor Ekonomi'];
                $num=$row['Bilangan'];
            }
        ?>
    <div class="content-kdnk">
        <div class="subheading-box">                     
            <p id="keluaran">KELUARAN DALAM <br/>NEGERI KASAR</p>
            <p id="year">2020</p>
            <p id="RM">RM</p>
            <p id="num"><?php echo number_format($num);?></p>
            <P id="juta">JUTA</P>
        </div>   

         <?php 
            $sql = "select * from `Keluaran` where `Sektor Ekonomi` = 'Pertanian'";
            $result = mysqli_query($con,$sql);
            if($row = mysqli_fetch_assoc($result)){
                //$year=$row['Tahun'];
                $sector=$row['Sektor Ekonomi'];
                $num=$row['Bilangan'];
            }
        ?>
<p class="subheading">SEKTOR EKONOMI (JUTA)</p> 
        <div class="item1">
            <div id="pertanian" class="item-box">
                <p id="RM">RM</p>
                <p id="num"><?php echo number_format($num) ?></p>
                <img src="Images & Icons/tractor.png" alt="" width="30">
            </div>
            <p>Pertanian</p>
        </div>

        <?php 
            $sql = "select * from `Keluaran` where `Sektor Ekonomi` = 'Perlombongan dan Pengangkutan'";
            $result = mysqli_query($con,$sql);
            if($row = mysqli_fetch_assoc($result)){
                //$year=$row['Tahun'];
                $sector=$row['Sektor Ekonomi'];
                $num=$row['Bilangan'];
            }
        ?>
        <div class="item2">
            <div id="perhubungan" class="item-box">
                <p id="RM">RM</p>
                <p id="num"><?php echo number_format($num) ?></p>
                <img src="Images & Icons/bus.png" alt="" width="30">
            </div>
            <p>Perhubungan & Pengangkutan</p>
        </div>

        <?php 
            $sql = "select * from `Keluaran` where `Sektor Ekonomi` = 'Pembuatan'";
            $result = mysqli_query($con,$sql);
            if($row = mysqli_fetch_assoc($result)){
                //$year=$row['Tahun'];
                $sector=$row['Sektor Ekonomi'];
                $num=$row['Bilangan'];
            }
        ?>
        <div class="item3">
            <div id="pembuatan" class="item-box">
                <p id="RM">RM</p>
                <p id="num"><?php echo number_format($num) ?></p>
                <img src="Images & Icons/factory.png" alt="" width="30">
            </div>
            <p>Pembuatan</p>
        </div>

        <?php 
            $sql = "select * from `Keluaran` where `Sektor Ekonomi` = 'Pembinaan'";
            $result = mysqli_query($con,$sql);
            if($row = mysqli_fetch_assoc($result)){
                //$year=$row['Tahun'];
                $sector=$row['Sektor Ekonomi'];
                $num=$row['Bilangan'];
            }
        ?>
        <div class="item4">
            <div id="pembinaan" class="item-box">
                <p id="RM">RM</p>
                <p id="num"><?php echo number_format($num) ?></p>
                <img src="Images & Icons/contractor.png" alt="" width="30">
            </div>
            <p>Pembinaan</p>
        </div>

        <?php 
            $sql = "select * from `Keluaran` where `Sektor Ekonomi` = 'Perkhidmatan'";
            $result = mysqli_query($con,$sql);
            if($row = mysqli_fetch_assoc($result)){
                //$year=$row['Tahun'];
                $sector=$row['Sektor Ekonomi'];
                $num=$row['Bilangan'];
            }
        ?>    
        <div class="item5">
            <div id="perkhidmatan" class="item-box">
                <p id="RM">RM</p>
                <p id="num"><?php echo number_format($num) ?></p>
                <img src="Images & Icons/service.png" alt="" width="30">
            </div>
            <p>Perkhidmatan</p>
        </div>
    </div>

    
    <div class="buttons">

        <a href="Penduduk.php">
            <div class="button1">
                <div id="penduduk" class="button-box">
                   <img src="Images & Icons/penduduk.png" alt="" width="30">
                </div>
                <p>Penduduk</p>
            </div>
        </a>
        
        <a href="Perumahan.php">
            <div class="button2">
                <div id="perumahan" class="button-box">
                    <img src="Images & Icons/house.png" alt="" width="30">
                </div>
                <p>Perumahan</p>
            </div>
        </a>
        
        <a href="Guna Tenaga.php">
            <div class="button3">
                <div id="guna_tenaga" class="button-box">
                    <img src="Images & Icons/worker.png" alt="" width="30">
                </div>
                <p>Guna Tenaga</p>
            </div>
        </a>
        
        <a href="Pendapatan.php">
            <div class="button4">
                <div id="pendapatan" class="button-box">
                    <img src="Images & Icons/income.png" alt="" width="30">
                </div>
                <p>Pendapatan </p>
            </div>
        </a>

        <div class="infographic">
            <h3>Infographic</h3>
            <img src="Images & Icons/infographic.png ">
        </div>
        <div class="padding-bottom"></div>
        <a href="Senarai Rujukan.html" id="source"><u>Rujukan: Statistik 2020 Jabatan Perangkaan Malaysia</u></a>
  
    </div>
</body>
</html>