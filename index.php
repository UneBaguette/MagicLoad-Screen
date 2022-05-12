<?php include('php/request.php'); ?>
<!DOCTYPE html>
<html lang=<?php echo $HTML_Language ?>>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/images/<?php echo $iconHTML ?>.ico" type="image/x-icon">
    <title><?php echo $titleHTML ?></title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <noscript>
        <div style="position: fixed; top: 0px; left: 0px; z-index: 30000000; 
                    height: 100%; width: 100%; background-color: #FFFFFF">
            <p style="margin-left: 10px; color: #000;">You need to enable JavaScript to run this page.</p>
        </div>
    </noscript>
    <main>
        <?php if($musicOn) { ?>
            <div class="music-box">
                <audio id="music" src="/content/swedish_house_mafia-home.ogg" autoplay loop></audio>
                <div class="image-music">
                    <img src="/content/swedish_house_mafia-home.jpg" alt="music image" width="70">
                </div>
                <div class="infos-music">
                    <h5 class="music-info"><?php echo $musicField ?></h5>
                    <h4 class="title-music">Home</h4>
                    <p class="artist">Swedish House Mafia</p>
                </div>
            </div>
        <?php } ?>
        <div class="rec-title">
            <h1 class="title">nameserver</h1>
        </div>
        <div class="panels">
            <div class="left-panel">
                <h2 class="title-player"><?php echo $titlePlayer ?></h2>    
                <div class="info-player">
                    <div class="name-info">
                        <img src="images/user-96.png" alt="user" width="50">
                        <p class="name"><?php echo $namePlayerField ?></p>
                        <span id="name"><?php echo $playerName ?></span>
                    </div>
                    <div class="steam-info">
                        <img src="/images/steam-ico.svg" alt="steam" width="50">
                        <p class="idsteam"><?php echo $steamidPlayerField ?></p>
                        <span id="steamid"><?php if ($dev) { echo convertid64toSteamID("76561198208414764");} else { echo convertid64toSteamID($playerSteamID);} ?></span>
                    </div>
                    <div class="file-info">
                        <img src="/images/download.svg" alt="download" width="50">
                        <p class="filedl"><?php echo $filedlPlayerField ?></p>
                        <span id="file"></span>
                    </div>
                </div>
                <h2 class="title-server"><?php echo $titleServer ?></h2>
                <div class="info-server">
                    <div class="map-info">
                        <img src="/images/map-grid.png" alt="map-grid" width="50">
                        <p class="map-field"><?php echo $mapField ?></p>
                        <span id="map"><?php echo $map ?></span>
                    </div>
                    <div class="slot-info">
                        <img src="/images/person.png" alt="people" width="50">
                        <p class="slots-field"><?php echo $slotField ?></p>
                        <span id="slots"></span>
                    </div>
                    <div class="mode-info">
                        <img src="/images/controller.png" alt="controller" width="50">
                        <p class="mode-field"><?php echo $modeField ?></p>
                        <span id="mode"></span>
                    </div>
                </div>
            </div>
            <div class="right-panel">
                <h2 class="rule-title"><?php echo $titleRule ?></h2>
                <div class="info-rules">
                    <div class="rule-1">
                        <h5 class="1">1.</h5>
                        <p class="rule">Respecter les joueurs ainsi que les staffs</p>
                    </div>
                    <div class="rule-2">
                        <h5 class="2">2.</h5>
                        <p class="rule">Interdit de freekill, carkill, freepunch, freetaze</p>
                    </div>
                    <div class="rule-3">
                        <h5 class="3">3.</h5>
                        <p class="rule">Interdit de propkill, proppush, propsurf</p>
                    </div>
                    <div class="rule-4">
                        <h5 class="4">4.</h5>
                        <p class="rule">Ne pas spammer le chat ni le chat vocal</p>
                    </div>
                    <div class="rule-5">
                        <h5 class="5">5.</h5>
                        <p class="rule">Ne pas spawnkill</p>
                    </div>
                    <div class="rule-6">
                        <h5 class="6">6.</h5>
                        <p class="rule">Ne pas troll</p>
                    </div>
                    <div class="rule-7">
                        <h5 class="7">7.</h5>
                        <p class="rule">Ne pas violé le NLR</p>
                    </div>
                </div>
                <h2 class="title-staff">Staffs</h2>
                <div class="box">
                    <div class="profile">
                        <img src="/images/profil.jpg" alt="profil pic" width="50">
                    </div>
                    <div class="infos">
                        <h4 class="name"><?php echo $staffsName[0] ?></h4>
                        <p class="role">Fondateur</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="loading-bar">
            <div class="status">
                <h4 id="status"><?php echo $statusField ?></h4>
            </div>
            <div class="percent">
                <h4></h4>
            </div>
        </div>
    </main>
    <?php include('js/app.php'); ?>
</body>
</html>