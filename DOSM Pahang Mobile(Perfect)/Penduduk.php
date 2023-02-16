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
    
    <link rel="manifest" href="manifest.json">
    <link rel="stylesheet" href="Penduduk.css">
    <title>Penduduk</title>
</head>
<body>
    <a href="index.php">
        <div class="HomeIcon">
            <span class="dot"></span>
            <img src="Images & Icons/house.png" alt="">
        </div>
    </a>

    <div class="header"><h3>Penduduk</h3></div>


    <div class="Jantina">
        <p id="jantina">Jantina</p>
        <div class="content-jantina">
            <p id="lelaki">Lelaki</p>
            <p id="perempuan">Perempuan</p>
            <div class="w3-bar-block1 w3-black" style="width:120px">
                <div class="w3-bar-item-lelaki"><img src="Images & Icons/male.png" alt=""></div>
                <div class="w3-bar-item-perempuan"><img src="Images & Icons/female.png" alt=""></div>
            </div>
            <?php 
                $sql = "select * from `Jantina Penduduk` where `Jantina` = 'Lelaki'";
                $result = mysqli_query($con,$sql);
                if($row = mysqli_fetch_assoc($result)){
                    $gender=$row['Jantina'];
                    $num=$row['Bilangan'];
                    $percentage=$row['Peratusan (%)'];

            ?>
            <p id="lelaki_num"><?php echo number_format($num) ?></p>
            <p id="lelaki_per"><?php echo "(" , $percentage , "%)" ?></p>
            <?php 
                }
            ?>

            <?php 
                $sql = "select * from `Jantina Penduduk` where `Jantina` = 'Perempuan'";
                $result = mysqli_query($con,$sql);
                if($row = mysqli_fetch_assoc($result)){
                    $gender=$row['Jantina'];
                    $num=$row['Bilangan'];
                    $percentage=$row['Peratusan (%)'];

            ?>
            <p id="perempuan_num"><?php echo number_format($num) ?></p>
            <p id="perempuan_per"><?php echo "(" , $percentage , "%)" ?></p>
            <?php 
                }
            ?>
        </div>
    </div>

    <div class="Warganegara">
        <p id="warganegara">Warganegara</p>
        <div class="content-warganegara">
           <div class="semi-donut">
            <div class="border" style="--percentage : 95.1;"></div></div>
            <?php 
                $sql = "select * from `Kewarganegaraan Penduduk` where `Kewarganegaraan` = 'Warganegara'";
                $result = mysqli_query($con,$sql);
                if($row = mysqli_fetch_assoc($result)){
                    $citizenship=$row['Kewarganegaraan'];
                    $num=$row['Bilangan'];
                    $percentage=$row['Peratusan (%)'];

            ?>
            <p id="war">Warganegara</p>
            <p id="war_num"><?php echo number_format($num) ?></p>
            <p id="war_per"><?php echo "(" , $percentage , "%)" ?></p>
            <div id="dashed1"></div>
            <?php 
                }
            ?>

            <?php 
                $sql = "select * from `Kewarganegaraan Penduduk` where `Kewarganegaraan` = 'Bukan Warganegara'";
                $result = mysqli_query($con,$sql);
                if($row = mysqli_fetch_assoc($result)){
                    $citizenship=$row['Kewarganegaraan'];
                    $num=$row['Bilangan'];
                    $percentage=$row['Peratusan (%)'];

            ?>
            <p id="non-war">Bukan Warganegara</p>
            <p id="non-war_num"><?php echo number_format($num) ?></p>
            <p id="non-war_per"><?php echo "(" , $percentage , "%)" ?></p>
            <div id="dashed2"></div>
            <?php 
                }
            ?>
        </div>
    </div>

    <div class="Etnik">
        <p id="etnik">Etnik</p>
        <div class="content-etnik">
            <div class="pie-chart" style="--bumiputera-lain: 6.1;--cina: 14.7; --india: 3.7; --lain-lain: 0.6"></div>

            <div class="chart-summary">
            <?php 
                $sql = "select * from `Etnik Penduduk` where `Etnik` = 'Melayu'";
                $result = mysqli_query($con,$sql);
                if($row = mysqli_fetch_assoc($result)){
                    $ethicity=$row['Etnik'];
                    $num=$row['Bilangan'];
                    $percentage=$row['Peratusan (%)'];

            ?>
                <span id="blue"></span>
                <p id="bumi_melayu">Bumiputera (Melayu)</p>
                <p id="bumi_melayu_num"><?php echo number_format($num) ?></p>
                <p id="bumi_melayu_per"><?php echo "(" , $percentage , "%)" ?></p>
            <?php 
                }
            ?>      
            
            <?php 
                $sql = "select * from `Etnik Penduduk` where `Etnik` = 'Bumiputera Lain'";
                $result = mysqli_query($con,$sql);
                if($row = mysqli_fetch_assoc($result)){
                    $ethicity=$row['Etnik'];
                    $num=$row['Bilangan'];
                    $percentage=$row['Peratusan (%)'];

            ?>
                <span id="yellow"></span>
                <p id="bumi_lain">Bumiputera (Lain)</p>
                <p id="bumi_lain_num"><?php echo number_format($num) ?></p>
                <p id="bumi_lain_per"><?php echo "(" , $percentage , "%)" ?></p>
            <?php 
                }
            ?>

            <?php 
                $sql = "select * from `Etnik Penduduk` where `Etnik` = 'Cina'";
                $result = mysqli_query($con,$sql);
                if($row = mysqli_fetch_assoc($result)){
                    $ethicity=$row['Etnik'];
                    $num=$row['Bilangan'];
                    $percentage=$row['Peratusan (%)'];

            ?>
                <span id="red"></span>
                <p id="cina">Cina</p>
                <p id="cina_num"><?php echo number_format($num) ?></p>
                <p id="cina_per"><?php echo "(" , $percentage , "%)" ?></p>
            <?php 
                }
            ?>

            <?php 
                $sql = "select * from `Etnik Penduduk` where `Etnik` = 'India'";
                $result = mysqli_query($con,$sql);
                if($row = mysqli_fetch_assoc($result)){
                    $ethicity=$row['Etnik'];
                    $num=$row['Bilangan'];
                    $percentage=$row['Peratusan (%)'];

            ?>
                <span id="orange"></span>
                <p id="india">India</p>
                <p id="india_num"><?php echo number_format($num) ?></p>
                <p id="india_per"><?php echo "(" , $percentage , "%)" ?></p>
            <?php 
                }
            ?>

            <?php 
                $sql = "select * from `Etnik Penduduk` where `Etnik` = 'Lain-lain'";
                $result = mysqli_query($con,$sql);
                if($row = mysqli_fetch_assoc($result)){
                    $ethicity=$row['Etnik'];
                    $num=$row['Bilangan'];
                    $percentage=$row['Peratusan (%)'];

            ?>
                <span id="green"></span>
                <p id="lain">Lain-lain</p>
                <p id="lain_num"><?php echo number_format($num) ?></p>
                <p id="lain_per"><?php echo "(" , $percentage , "%)" ?></p>
            <?php 
                }
            ?>
            </div>
        </div>
    </div>

    <div class="Umur">
        <p id="umur">Umur</p>
        <div class="content-umur">
            <p id="kanak">0-14 Tahun</p>
            <p id="dewasa">15-64 Tahun</p>
            <p id="orangtua">65> Tahun</p>
            <div class="w3-bar-block2 w3-black">
                <div class="w3-bar-item-kanak"><img src="Images & Icons/child.png" alt=""></div>
                <div class="w3-bar-item-dewasa"><img src="Images & Icons/adult.png" alt=""></div>
                <div class="w3-bar-item-orangtua"><img src="Images & Icons/eldery.png" alt=""></div>
            </div>

        <?php 
            $sql = "select * from `Umur Penduduk` where `Umur` = '0-14 Tahun'";
            $result = mysqli_query($con,$sql);
            if($row = mysqli_fetch_assoc($result)){
                $age=$row['Umur'];
                $num=$row['Bilangan'];
                $percentage=$row['Peratusan (%)'];

        ?>
            <p id="kanak_num"><?php echo number_format($num) ?></p>
            <p id="kanak_per"><?php echo "(" , $percentage , "%)" ?></p>
        <?php 
            }
        ?>

        <?php 
            $sql = "select * from `Umur Penduduk` where `Umur` = '15-64 Tahun'";
            $result = mysqli_query($con,$sql);
            if($row = mysqli_fetch_assoc($result)){
                $age=$row['Umur'];
                $num=$row['Bilangan'];
                $percentage=$row['Peratusan (%)'];

        ?>
            <p id="dewasa_num"><?php echo number_format($num) ?></p>
            <p id="dewasa_per"><?php echo "(" , $percentage , "%)" ?></p>
        <?php 
            }
        ?>

        <?php 
            $sql = "select * from `Umur Penduduk` where `Umur` = '65> Tahun'";
            $result = mysqli_query($con,$sql);
            if($row = mysqli_fetch_assoc($result)){
                $age=$row['Umur'];
                $num=$row['Bilangan'];
                $percentage=$row['Peratusan (%)'];

        ?>
            <p id="orangtua_num"><?php echo number_format($num) ?></p>
            <p id="orangtua_per"><?php echo "(" , $percentage , "%)" ?></p>
        <?php 
            }
        ?>
        </div>
        <div class="padding-bottom"></div>
    </div>
   
    

   
</div>
</body>
</html>