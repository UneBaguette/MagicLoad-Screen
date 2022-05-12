<?php 

include('php/config.php');
include('php/lang/'.$language.'.php');

// Declaring defaults -- infos of map and others
$playerName = $defaultName;
$playerSteamID = $defaultSteamID;
$map = $defaultMapName;

$GMod = FALSE;
// SteamAPI -- To search user and view a list of datas like, their avatar, their name, etc...
$steamAPI = 'https://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/';
$steamApikey = '?key='.$APIKEY;

if (isset($_GET['steamid'])) {
    $data = $steamAPI.$steamApikey.'&steamids='.$_GET['steamid'];
    $f = file_get_contents($data);
    $arr = json_decode($f, true);
    $player = $arr['response']['players'][0];
    if (isset($player['personaname']))
       $playerName = $player['personaname'];
    if (isset($player['steamid']))
        $GMod = true;
        $playerSteamID = $player['steamid'];
}

$staffs = $staffMembers;
$staffsName = array();

if ($staffs) {
    foreach ($staffs as $staff) {
        $dataS = $steamAPI.$steamApikey.'&steamids='.$staff;
        $fS = file_get_contents($dataS);
        $arrS = json_decode($fS, true);
        $staffMember = $arrS['response']['players'][0]['personaname'];
        array_push($staffsName, $staffMember);
    }
}

function convertid64toSteamID($community_id) {
    $authserver = substr($community_id, -1) % 2;
    $steamid_1 = intval(substr($community_id, 0, 4)) - 7656;
    $steamid_2 = substr($community_id, 4) - 1197960265728;
    $steamid_2 = $steamid_2 - $authserver;
    return "STEAM_0:$authserver:" . (($steamid_1 + $steamid_2) / 2);
}

if (isset($_GET['mapname'])) {
    $map = $_GET['mapname'];
}

?>