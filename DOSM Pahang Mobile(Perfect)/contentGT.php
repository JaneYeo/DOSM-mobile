<?php 

require_once('db.php');

$idClicked = $_POST['valueGunaTenaga'];
$area = $idClicked;

/*
fetchYear('Kuantan');
fetchArea('Kuantan');
fetchLabour('Kuantan');
fetchWork('Kuantan');
fetchUnemployed('Kuantan');
fetchPerWork('Kuantan');
fetchPerUnemployed('Kuantan');

/*
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["lastname"]. "<br>";
    }
} 

mysqli_close($conn);
*/
/*
function fetchYear($area){
    
    require_once('db.php');
    $con = mysqli_connect("localhost","root","","dosm pahang");
    $sql = "select * from `Guna Tenaga` where `Daerah` = '$area'";
    $result = mysqli_query($con,$sql);
    if($row = mysqli_fetch_assoc($result)){
        $year=$row['Tahun'];
            echo $year;      
    }
}
*/
function fetchArea($area){
    
    require_once('db.php');
    $con = mysqli_connect("10.26.30.17:3306","rc21128","rc21128","rc21128");
    $sql = "select * from `Guna Tenaga` where `Daerah` = '$area'";
    $result = mysqli_query($con,$sql);
    if($row = mysqli_fetch_assoc($result)){
        $area=$row['Daerah'];
            echo strtoupper($area);      
    }
}

function fetchLabour($area){
    
    require_once('db.php');
    $con = mysqli_connect("10.26.30.17:3306","rc21128","rc21128","rc21128");
    $sql = "select * from `Guna Tenaga` where `Daerah` = '$area'";
    $result = mysqli_query($con,$sql);
    if($row = mysqli_fetch_assoc($result)){
        $labour=$row['Tenaga Buruh'];
            echo number_format($labour);      
    }
}

function fetchLabour2($area){
    
    require_once('db.php');
    $con = mysqli_connect("10.26.30.17:3306","rc21128","rc21128","rc21128");
    $sql = "select * from `Guna Tenaga` where `Daerah` = '$area'";
    $result = mysqli_query($con,$sql);
    if($row = mysqli_fetch_assoc($result)){
        $labour=$row['Tenaga Buruh'];
            echo $labour;      
    }
}

function fetchWork($area){
    
    require_once('db.php');
    $con = mysqli_connect("10.26.30.17:3306","rc21128","rc21128","rc21128");
    $sql = "select * from `Guna Tenaga` where `Daerah` = '$area'";
    $result = mysqli_query($con,$sql);
    if($row = mysqli_fetch_assoc($result)){
        $workpopulation=$row['Penduduk Bekerja'];
            echo number_format($workpopulation);      
    }
}


function fetchWork2($area){
    
    require_once('db.php');
    $con = mysqli_connect("10.26.30.17:3306","rc21128","rc21128","rc21128");
    $sql = "select * from `Guna Tenaga` where `Daerah` = '$area'";
    $result = mysqli_query($con,$sql);
    if($row = mysqli_fetch_assoc($result)){
        $workpopulation=$row['Penduduk Bekerja'];
            echo $workpopulation;      
    }
    
}

function fetchUnemployed($area){
    
    require_once('db.php');
    $con = mysqli_connect("10.26.30.17:3306","rc21128","rc21128","rc21128");
    $sql = "select * from `Guna Tenaga` where `Daerah` = '$area'";
    $result = mysqli_query($con,$sql);
    if($row = mysqli_fetch_assoc($result)){
        $unemployed=$row['Penganggur'];
            echo number_format($unemployed);      
    }
}

function fetchUnemployed2($area){
    
    require_once('db.php');
    $con = mysqli_connect("10.26.30.17:3306","rc21128","rc21128","rc21128");
    $sql = "select * from `Guna Tenaga` where `Daerah` = '$area'";
    $result = mysqli_query($con,$sql);
    if($row = mysqli_fetch_assoc($result)){
        $unemployed=$row['Penganggur'];
            echo $unemployed;      
    }
}

function fetchPerWork($area){
    
    require_once('db.php');
    $con = mysqli_connect("10.26.30.17:3306","rc21128","rc21128","rc21128");
    $sql = "select * from `Guna Tenaga` where `Daerah` = '$area'";
    $result = mysqli_query($con,$sql);
    if($row = mysqli_fetch_assoc($result)){
        $per_workpopulation=$row['Kadar Penyertaan Tenaga Buruh (%)'];
            echo $per_workpopulation , "%";      
    }
}

function fetchPerUnemployed($area){
    
    require_once('db.php');
    $con = mysqli_connect("10.26.30.17:3306","rc21128","rc21128","rc21128");
    $sql = "select * from `Guna Tenaga` where `Daerah` = '$area'";
    $result = mysqli_query($con,$sql);
    if($row = mysqli_fetch_assoc($result)){
        $per_unemployed=$row['Kadar Pengangguran (%)'];
            echo $per_unemployed , "%";      
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js" integrity="sha512-CEiA+78TpP9KAIPzqBvxUv8hy41jyI3f2uHi7DGp/Y/Ka973qgSdybNegWFciqh6GrN2UePx2KkflnQUbUhNIA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js" integrity="sha512-d8F1J2kyiRowBB/8/pAWsqUl0wSEOkG5KATkVV4slfblq9VRQ6MyDZVxWl2tWd+mPhuCbpTB4M7uU/x9FlgQ9Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="jquery-3.6.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    
    
    <link rel="manifest" href="manifest.json">
    <link rel="stylesheet" href="Guna Tenaga.css">
    <title>Guna Tenaga</title>
</head>
<body>

    <script>
        function getId(idClicked){
            $(document).ready(function(){
                //var value = idClicked; // value to be sent
                $.post("contentGT.php", { valueGunaTenaga: idClicked }, function(data){
                     $('.update').html(data);
                });
                        
            });
        
        }
            
    </script>
  
    <script>
       //WorkPopulation in Daerah
       var db = <?php fetchLabour2($area);?>;
       var dpb = <?php fetchWork2($area);?>;
       var width_dpb = dpb / db * 100;
       document.documentElement.style
       .setProperty('--dpb', width_dpb + "%");
       console.log(width_dpb);

       //Unemployed in Daerah
       var dp = <?php fetchUnemployed2($area);?>;
       var width_dp = dp / db * 100;
       document.documentElement.style
       .setProperty('--dp', width_dp + "%");
       console.log(width_dp);
   </script>
   
   <div class="update">
        <p id="gunatenaga">Guna Tenaga di Daerah 2020</p>
        <div class="content-daerah">
            <div class="btn">
                <button id="bentong" onClick="getId(this.id)">Bentong</button>
                <button id="jerantut" onClick="getId(this.id)">Jerantut</button>
                <button id="kuantan" onClick="getId(this.id)">Kuantan</button>
                <button id="lipis" onClick="getId(this.id)">Lipis</button>
                <button id="pekan" onClick="getId(this.id)">Pekan</button>
                <button id="raub" onClick="getId(this.id)">Raub</button>
                <button id="temerloh" onClick="getId(this.id)">Temerloh</button>
                <button id="rompin" onClick="getId(this.id)">Rompin</button>
                <button id="cameron highlands" onClick="getId(this.id)">Cameron Highlands</button>
                <button id="maran" onClick="getId(this.id)">Maran</button>
                <button id="bera" onClick="getId(this.id)">Bera</button>
            </div>
            
            <p id="tenagaburuh">TENAGA BURUH DAERAH</p>
            <p id="daerah"><?php fetchArea($area);?></p>
            <p id="daerah_year">2020<?php// fetchYear($area);?></p>
            <p id="daerah_num" class="number"><?php fetchLabour($area);?></p>
            <script>
                let text = document.getElementById("daerah").innerHTML;

                if(text == "CAMERON HIGHLANDS"){
                    document.getElementById("daerah").style.fontSize = "11px";
                    document.getElementById("daerah").style.lineHeight = "16px";
                }

            </script>

            <p id="pendudukbekerja_daerah">Penduduk Bekerja</p>
            <p id="penganggur_daerah">Penganggur</p>
            <p id="kadar_buruh_daerah">Kadar Penyertaan Tenaga Buruh</p>
            <p id="kadar_penggangguran_daerah">Kadar Pengangguran</p>

            <div class="w3-bar-block2 w3-black">
                <div class="w3-bar-item-pendudukbekerja-daerah items"></div>
                <div class="w3-bar-item-penganggur-daerah items"></div>
                <div class="w3-bar-item-kadar_buruh-daerah items" style="--dkb:<?php fetchPerWork($area);?>; "></div>
                <div class="w3-bar-item-kadar_penggangguran-daerah items" style="--dkp:<?php fetchPerUnemployed($area);?>; "></div>
            </div>

            <p id="pendudukbekerja_daerah_num" class="number"><?php fetchWork($area); ?></p>
            <p id="penganggur_daerah_num" class="number"><?php fetchUnemployed($area); ?></p>
            <p id="buruh_daerah_per" class="number"><?php fetchPerWork($area); ?></p>
            <p id="pengangguran_daerah_per" class="number"><?php fetchPerUnemployed($area); ?></p>
        </div>

    </div>

    <div class="padding-bottom"></div>

    <script>
        $(document).ready(function(){
            $('.number').counterUp({
                time: 800
            });
        });
    </script>
   
</body>
</html>

