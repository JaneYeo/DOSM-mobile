<?php 

require_once('db.php');

function fetch($area){
    
    require_once('db.php');
    $con = mysqli_connect("10.26.30.17:3306","rc21128","rc21128","rc21128");
    $sql = "select * from `Perumahan` where `Daerah` = '$area'";
    $result = mysqli_query($con,$sql);
    if($row = mysqli_fetch_assoc($result)){
        $num=$row['Bilangan'];

        echo number_format($num);
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Hammersmith+One" rel="stylesheet">
    
   
    <link rel="manifest" href="manifest.json">
    <link rel="stylesheet" href="Perumahan.css">
    <title>Perumahan</title>
</head>
<body>
    <a href="index.php">
        <div class="HomeIcon">
            <span class="dot"></span>
            <img src="Images & Icons/house.png" alt="">
        </div>
    </a>

    <div class="header"><h3>Perumahan</h3></div>

    <?php 
        $sql = "select * from `Perumahan` where `Daerah` = 'Pahang'";
        $result = mysqli_query($con,$sql);
        if($row = mysqli_fetch_assoc($result)){
            //$year=$row['Tahun'];
            $area=$row['Daerah'];
            $num=$row['Bilangan'];

    ?>
    <div class="content-kediaman">
        <p id="kediaman">KEDIAMAN SEDIA ADA 
            NEGERI PAHANG</p>
        <p id="year">2020<?php //echo $year?></p>
        <p id="kediaman_num" class="number"><?php echo number_format($num) ?></p>
        <p id="unit">UNIT</p>
    </div>
    <?php 
        }
    ?>

    <div class="content-daerah">
        <p id="kuantan">Kuantan</p>
        <p id="temerloh">Temerloh</p>
        <p id="bentong">Bentong</p>
        <p id="maran">Maran</p>
        <p id="raub">Raub</p>
        <p id="rompin">Rompin</p>
        <p id="pekan">Pekan</p>
        <p id="bera">Bera</p>
        <p id="jerantut">Jerantut</p>
        <p id="cameron">Cameron Highlands</p>
        <p id="lipis">Lipis</p>

        <div class="w3-bar-block w3-black">
            <div class="w3-bar-item-kuantan items"></div>
            <div class="w3-bar-item-temerloh items"></div>
            <div class="w3-bar-item-bentong items"></div>
            <div class="w3-bar-item-maran items"></div>
            <div class="w3-bar-item-raub items"></div>
            <div class="w3-bar-item-rompin items"></div>
            <div class="w3-bar-item-pekan items"></div>
            <div class="w3-bar-item-bera items"></div>
            <div class="w3-bar-item-jerantut items"></div>
            <div class="w3-bar-item-cameron items"></div>
            <div class="w3-bar-item-lipis items"></div>
        </div>

        <p id="kuantan_num" class="number"><?php fetch('Kuantan');?></p>
        <p id="temerloh_num" class="number"><?php fetch('Temerloh');?></p>
        <p id="bentong_num" class="number"><?php fetch('Bentong');?></p>
        <p id="maran_num" class="number"><?php fetch('Maran');?></p>
        <p id="raub_num" class="number"><?php fetch('Raub');?></p>
        <p id="rompin_num" class="number"><?php fetch('Rompin');?></p>
        <p id="pekan_num" class="number"><?php fetch('Pekan');?></p>
        <p id="bera_num" class="number"><?php fetch('Bera');?></p>
        <p id="jerantut_num" class="number"><?php fetch('Jerantut');?></p>
        <p id="cameron_num" class="number"><?php fetch('Cameron Highlands');?></p>
        <p id="lipis_num" class="number"><?php fetch('Lipis');?></p>

    </div>

    <script>
        $(document).ready(function(){
            $('.number').counterUp({
                time: 800
            });
        });
    </script>
    
    <img src="Images & Icons/Perumahan.png" alt="">
    <div class="padding-bottom"></div>
</body>
</html>