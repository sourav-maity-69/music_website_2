<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    Welcome - <?php $_SESSION['username']?></title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M-music - Your favourite music is here</title>
    <link rel="stylesheet" href="all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
Welcome - <?php echo $_SESSION['username']?></title>

<nav>
    <ul>
        <li class="brand"><img src="images.jpg" alt="M-music">M-music</li>
        <li>Home</li>
</nav>

    <div class="container">
         <div Class="songList">
             <h2>Best of Hindi - Bollywood songs</h2>
             <div class="songItemContainer">
                 <div class="songItem">
                     <img alt="1">
                     <span class="songName">jai jai shivshankar</span>
                     <span class="songlistplay"><span class="timestamp"><i id="0" class="far songItemPlay fa-1x fa-play-circle"></i></span></span>
                 </div>
                 <div class="songItem">
                    <img alt="1">
                    <span class="songName">thodi jagah dede</span>
                    <span class="songlistplay"><span class="timestamp"><i id="1" class="far songItemPlay fa-1x fa-play-circle"></i></span></span>
                </div>
                <div class="songItem">
                    <img alt="1">
                    <span class="songName">jai jai shivshankar</span>
                    <span class="songlistplay"><span class="timestamp"><i id="2" class="far songItemPlay fa-1x fa-play-circle"></i></span></span>
                </div>
                <div class="songItem">
                    <img alt="1">
                    <span class="songName">jai jai shivshankar</span>
                    <span class="songlistplay"><span class="timestamp"><i id="3" class="far songItemPlay fa-1x fa-play-circle"></i></span></span>
                </div>
                <div class="songItem">
                    <img alt="1">
                    <span class="songName">jai jai shivshankar</span>
                    <span class="songlistplay"><span class="timestamp"><i id="4" class="far songItemPlay fa-1x fa-play-circle"></i></span></span>
                </div>
                <div class="songItem">
                    <img alt="1">
                    <span class="songName">jai jai shivshankar</span>
                    <span class="songlistplay"><span class="timestamp"><i id="5" class="far songItemPlay fa-1x fa-play-circle"></i></span></span>
                </div>
                <div class="songItem">
                    <img alt="1">
                    <span class="songName">jai jai shivshankar</span>
                    <span class="songlistplay"><span class="timestamp"><i id="6" class="far songItemPlay fa-1x fa-play-circle"></i></span></span>
                </div>
                <div class="songItem">
                    <img alt="1">
                    <span class="songName">jai jai shivshankar</span>
                    <span class="songlistplay"><span class="timestamp"><i id="7" class="far songItemPlay fa-1x fa-play-circle"></i></span></span>
                </div>
                <div class="songItem">
                    <img alt="1">
                    <span class="songName">jai jai shivshankar</span>
                    <span class="songlistplay"><span class="timestamp"><i id="8" class="far songItemPlay fa-1x fa-play-circle"></i></span></span>
                </div>
                <div class="songItem">
                    <img alt="1">
                    <span class="songName">jai jai shivshankar</span>
                    <span class="songlistplay"><span class="timestamp"><i id="9" class="far songItemPlay fa-1x fa-play-circle"></i></span></span>
                </div>
               <div class="songItem">
                    <img alt="1">
                    <span class="songName">jai jai shivshankar</span>
                    <span class="songlistplay"><span class="timestamp"><i id="10" class="far songItemPlay fa-1x fa-play-circle"></i></span></span>
               </div>
                <div class="songItem">
                    <img alt="1">
                    <span class="songName">jai jai shivshankar</span>
                    <span class="songlistplay"><span class="timestamp"><i id="11" class="far songItemPlay fa-1x fa-play-circle"></i></span></span>
               </div>
                <div class="songItem">
                <img alt="1">
                <span class="songName">jai jai shivshankar</span>
                <span class="songlistplay"><span class="timestamp"><i id="12" class="far songItemPlay fa-1x fa-play-circle"></i></span></span>
               </div>
               
             </div>
             </div>
               
             
        </div>
         <div class="songBanner"></div>
    </div>

    <div class="bottom">
        <input type="range" name="range" id="myProgressBar" min="0" value="0" max="100">
        <div class="icons">
            <!-- fontawesome icons -->
            <i class="fas fa-2x fa-step-backward" id="previous"></i>
            <i class="far fa-2x fa-play-circle" id="masterPlay"></i>
            <i class="fas fa-2x fa-step-forward" id="next"></i>
        </div>
        <div class="songinfo">
            <img src="Nt6v.gif" width="42px" alt="" id="gif"><span id="masterSongName">Jay-Jay-Shivshankar</span> 
        </div>
    </div>
    <script src="https://kit.fontawesome.com/26504e4a1f.js" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>
</html>
<!-- <img src="images (4).jpg" alt="" srcset=""> -->