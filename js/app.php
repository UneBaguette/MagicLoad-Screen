<script>
<?php include('php/config.php'); ?>

// Server info
const v = document.querySelector('.title');

// Client info
const f = document.querySelector('#file'), s = document.querySelector('#status'), i = document.querySelector('#slots'), y = document.querySelector('#mode');

let Gmod = false;
let player;
let playerName;
let playerSteamID;

if (!Gmod) f.innerHTML = <?php echo "'$defaultFileName'" ?>; i.innerHTML = "64"; y.innerHTML = "sandbox";

const staff = {};
staff[0] = "76561198208414764";

const detailStaff = {
    name: "0",
    avatar: "1",
    steamid: "2",
};

// ----------------- OLD -----------------
// const apiCall = async function(a) {
//     const response = await fetch(steamAPI+APIKEY+steamIDs+a,{method: 'GET',});
//     const data = await response.json();
//     player = data.response.players[0];
// 	playerName = player.personaname;
// 	playerSteamID = player.steamid;
// };
// ----------------- OLD -----------------

<?php if ($musicOn) {
$loopMusic = $loopMusic ? "true" : "false";
echo "const music = document.querySelector('#music'); music.volume = ".$volumeMusic."; music.loop = ".$loopMusic;
}
?>

function GameDetails( servername, serverurl, mapname, maxplayers, steamid, gamemode, volume, language ) {
	Gmod = true;
	v.innerHTML = <?php if ($noWelcomeMsg) {echo "servername;";} else {echo "'$welcomeMsg'+"."' <br> '"."+servername;";} ?>
    i.innerHTML = maxplayers;
    y.innerHTML = gamemode;
};

const test = "Zoupi zoup";

v.innerHTML = <?php if ($noWelcomeMsg) {echo "test;";} else {echo "'$welcomeMsg'+"."' <br> '"."+test;";} ?>

function SetFilesTotal( total ) {

};

function DownloadingFile( fileName ) {
	f.innerText = fileName;
};

function SetStatusChanged( status ) {
	s.innerText = status;
};

function SetFilesNeeded( needed ) {

};

const load = document.querySelector('.loading-bar')<?php if ($dev) {echo ".style.display = 'none'";} else { echo ";";}?>

</script>