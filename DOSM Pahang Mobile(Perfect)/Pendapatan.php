<?php 

require_once('db.php');

/*
function fetchYear($area){
    
    require_once('db.php');
    $con = mysqli_connect("localhost","root","","dosm pahang");
    $sql = "select * from `Pendapatan` where `Daerah` = '$area'";
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
    $sql = "select * from `Pendapatan` where `Daerah` = '$area'";
    $result = mysqli_query($con,$sql);
    if($row = mysqli_fetch_assoc($result)){
        $area=$row['Daerah'];
            echo $area;      
    }
}

function fetchPenengah($area){
    
    require_once('db.php');
    $con = mysqli_connect("10.26.30.17:3306","rc21128","rc21128","rc21128");
    $sql = "select * from `Pendapatan` where `Daerah` = '$area'";
    $result = mysqli_query($con,$sql);
    if($row = mysqli_fetch_assoc($result)){
        $intermediate=$row['Penengah'];
            echo number_format($intermediate);      
    }
}

function fetchPenengah2($area){
    
    require_once('db.php');
    $con = mysqli_connect("10.26.30.17:3306","rc21128","rc21128","rc21128");
    $sql = "select * from `Pendapatan` where `Daerah` = '$area'";
    $result = mysqli_query($con,$sql);
    if($row = mysqli_fetch_assoc($result)){
        $intermediate=$row['Penengah'];
            echo $intermediate;      
    }
}

function fetchPurata($area){
    
    require_once('db.php');
    $con = mysqli_connect("10.26.30.17:3306","rc21128","rc21128","rc21128");
    $sql = "select * from `Pendapatan` where `Daerah` = '$area'";
    $result = mysqli_query($con,$sql);
    if($row = mysqli_fetch_assoc($result)){
        $average=$row['Purata'];
            echo number_format($average);      
    }
}

function fetchPurata2($area){
    
    require_once('db.php');
    $con = mysqli_connect("10.26.30.17:3306","rc21128","rc21128","rc21128");
    $sql = "select * from `Pendapatan` where `Daerah` = '$area'";
    $result = mysqli_query($con,$sql);
    if($row = mysqli_fetch_assoc($result)){
        $average=$row['Purata'];
            echo $average;      
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
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js" integrity="sha512-CEiA+78TpP9KAIPzqBvxUv8hy41jyI3f2uHi7DGp/Y/Ka973qgSdybNegWFciqh6GrN2UePx2KkflnQUbUhNIA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js" integrity="sha512-d8F1J2kyiRowBB/8/pAWsqUl0wSEOkG5KATkVV4slfblq9VRQ6MyDZVxWl2tWd+mPhuCbpTB4M7uU/x9FlgQ9Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="js/md5.min.js"></script>
    
  
    <link rel="manifest" href="manifest.json">
    <link rel="stylesheet" href="Pendapatan.css">
    <title>Pendapatan</title>
</head>
<body>

<script>
    //Penengah & Purata in Pahang
    var penengah = <?php fetchPenengah2('Pahang')?>;
    var purata = <?php fetchPurata2('Pahang')?>;
    var total = penengah + purata;
    var height_penengah = penengah / total * 100;
    var height_purata = purata / total * 100;
    document.documentElement.style
    .setProperty('--penengah', height_penengah * 2 + "px");
    document.documentElement.style
    .setProperty('--purata', height_purata * 2 + "px");
</script>

    <a href="index.php">
        <div class="HomeIcon">
            <span class="dot"></span>
            <img src="Images & Icons/house.png" alt="">
        </div>
    </a>

    <div class="header"><h3>Pendapatan</h3></div>

    <p id="pendapatan">PENDAPATAN BULANAN NEGERI PAHANG</p>
    <p id="year">2020<?php// fetchYear('Pahang');?></p>

    <script>
        //const $ = require('jquery');

        $(document).ready(function(){
            $('.number').counterUp({
                time: 800
            });
        });
    </script>

    <div class="content-pendapatan">
        <p id="penengah">Penengah</p>
        <p id="purata">Purata</p>

        <div class="w3-bar-block1 w3-black">
            <div class="w3-bar-item-penengah items">
                <p class="penengah_RM">RM</p>
                <p class="penengah_RM number"><?php fetchPenengah('Pahang'); ?></p>
            </div>
            <div class="w3-bar-item-purata items">
                <p class="purata_RM">RM</p>
                <p class="purata_RM number"><?php fetchPurata('Pahang'); ?></p>
            </div>
        </div>
   
    
    </div>

    <div class="update">
        <p id="pendapatan_daerah">Pendapatan Bulanan di Daerah <?php fetchArea('Kuantan');?></p>
        <div class="content-daerah">
            <div class="btn">
                <button id="Bentong" onClick="getId(this.id)">Bentong</button>
                <button id="Jerantut" onClick="getId(this.id)">Jerantut</button>
                <button id="Kuantan" onClick="getId(this.id)" Checked>Kuantan</button>
                <button id="Lipis" onClick="getId(this.id)">Lipis</button>
                <button id="Pekan" onClick="getId(this.id)">Pekan</button>
                <button id="Raub" onClick="getId(this.id)">Raub</button>
                <button id="Temerloh" onClick="getId(this.id)">Temerloh</button>
                <button id="Rompin" onClick="getId(this.id)">Rompin</button>
                <button id="Cameron Highlands" onClick="getId(this.id)">Cameron Highlands</button>
                <button id="Maran" onClick="getId(this.id)">Maran</button>
                <button id="Bera" onClick="getId(this.id)">Bera</button>
            </div>
            
            <p id="penengah_daerah">Penengah</p>
            <p id="purata_daerah">Purata</p>

            <div class="w3-bar-block2 w3-black">
                <div class="w3-bar-item-penengah-daerah items">
                    <p class="penengah_daerah_RM">RM</p>
                    <p class="penengah_daerah_RM number"><?php fetchPenengah('Kuantan'); ?></p>
                </div>
                <div class="w3-bar-item-purata-daerah items">
                    <p class="purata_daerah_RM">RM</p>
                    <p class="purata_daerah_RM number"><?php fetchPurata('Kuantan'); ?></p>
                </div>
            </div>

            
            
        </div>
    </div>

    <script>
        //Penengah & Purata in Daerah
        var dpenengah = <?php fetchPenengah2('Kuantan')?>;
        var dpurata = <?php fetchPurata2('Kuantan')?>;
        var dtotal = dpenengah + dpurata;
        var height_dpenengah = dpenengah / dtotal * 100;
        var height_dpurata = dpurata / dtotal * 100;
        document.documentElement.style
        .setProperty('--dpenengah', height_dpenengah * 2 + "px");
        document.documentElement.style
        .setProperty('--dpurata', height_dpurata * 2 + "px");
    </script>
    
    <script>
        function getId(idClicked){
            
           // document.cookie = "idClicked=" + idClicked;
            $(document).ready(function(){
                //var value = idClicked; // value to be sent
                $.post("contentP.php", { valuePendapatan: idClicked }, function(data){
                    $('.update').html(data);
                });
            });

            
           // $(".update").load("content.php",idClicked);
           // console.log("Hello");
        }
            
    </script>

   
</body>
</html>