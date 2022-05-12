<?php
// Here Configure the server

// Your language - available --> fr
$language = "fr";

// Can be same as above -- verify if your language is same as above in HTML
$HTML_Language = "fr";

// This is the client language when loading
$clientLanguage = '';

// Disables the welcome message so only the title of your server appears if set to TRUE, change to FALSE to restore the welcome message
$noWelcomeMsg = FALSE;


// Steam needs an api key to use their datas you provide one yourself using this link below :
// Link : https://steamcommunity.com/dev/apikey
$APIKEY = "XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX";

// ---------------- THIS IS NOT NECESSARY -------------

// Icon next to Title of HTML
// Name of the file with an .ico extension, put the name of the file that you added in "/images" folder without the .ico at the end
$iconHTML = "baguette";
// Title of HTML page
$titleHTML = "🥖 BaguetteRP 🥖 Exclusive - Loading - GMod";

// ---------------- THIS IS NOT NECESSARY -------------

// // Default Values
// When loading page and/or joining game
// Will be overridden when joining a game
$defaultName = 'Loading...';
$defaultSteamID = 'Loading...';
$defaultMapName = 'Loading...';
$defaultFileName = 'Pending...';

// STAFF MEMBERS

// To add a staff member put the steamid64 of the staff seperated with a comma like this --> 
// array("-- Put steam ID --", "-- Put steam ID of second staff member --", etc...)
// This is for getting their name when you join your server
$staffMembers = array(
"76561198208414764",
);

// Rules -- put them in order like this --> array("-- first rule--", "-- Second rule --", etc...) 
// MAX 7 ! or after that number, it will not show up
$rules = array(
"Respecter les joueurs ainsi que les staffs",
"Interdit de freekill, carkill, freepunch, freetaze",
"Interdit de propkill, proppush, propsurf",
"Ne pas spammer le chat ni le chat vocal",
"Ne pas spawnkill",
"Ne pas troll",
"Ne pas violé le NLR",
);

// MUSIC

// MUSIC ON or OFF
// if set to true, music will play if any are in the folder
$musicOn = TRUE;
$volumeMusic = 0.03;
$loopMusic = TRUE;


// If the website is in development or not
// Change the value to false when you will be using it for your website
$dev = true;
?>