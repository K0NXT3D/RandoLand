<?php
// For Testing Purposes Only
// Generate Incoming Traffic Via HTTP Requests - Random Info Generator

// Display Errors ON
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


// Configuration
// File Locations

$randohost = file('meta/random-domains.txt');
$agents = file("meta/user-agents.txt");
$pages = file("meta/pageref.txt");
$prefixes = file("meta/prefix.txt");

// Assemble Random Identity

// Generate A Random IP Address
$ocet1 = str_pad(mt_rand(0, 254), 3, '1', STR_PAD_LEFT);
$ocet2 = str_pad(mt_rand(0, 254), 3, '1', STR_PAD_LEFT);
$ocet3 = str_pad(mt_rand(0, 254), 3, '1', STR_PAD_LEFT);
$ocet4 = str_pad(mt_rand(0, 254), 3, '1', STR_PAD_LEFT);
$ip = $ocet1.'.'.$ocet2.'.'.$ocet3.'.'.$ocet4;

// Generate Random Prefix and toss it into an Array.
$prefix = $prefixes[array_rand($prefixes)];

// Generate Random Hostname and toss it into an Array.
$hostname = $randohost[array_rand($randohost)];
$hostname = str_replace (".", "-", $hostname);
$hostnameR = $randohost[array_rand($randohost)];

// Select User Agents file and toss it into an Array.
$useragent = $agents[array_rand($agents)];

// Select Referring Page file and toss it into an Array.
$pageref = $pages[array_rand($pages)];

// Generate A Random Geo-Locaton
$long = str_pad(mt_rand(-90, 90), 2, '1', STR_PAD_LEFT);
$dd1 = str_pad(mt_rand(0, 99999), 3, '1', STR_PAD_LEFT);
$lat = str_pad(mt_rand(-90, 90), 2, '1', STR_PAD_LEFT);
$dd2 = str_pad(mt_rand(0, 99999), 3, '1', STR_PAD_LEFT);
$coord = $long.'.'.$dd1.', '.$lat.'.'.$dd2;

// Build Strings
$referrer = $prefix.$hostnameR.$pageref;
$referrer = str_replace ("\n", "", $referrer); // Output Fix
$uastring = $ip.' '.$ip.'.'.$hostname.' '.$referrer.' '.$useragent;

// Display Strings
echo $uastring;
echo "<p>IP Address: ".$ip."<br>";
echo "Hostname: ".$ip.'.'.$hostname."<br>";
echo "Referrer: ".$referrer."<br>";
echo "Browser: ".$useragent."<br>";
echo "Geo-Location: <a href=\"https://www.google.com/maps/place/".$coord."\" target=\"_blank\" />".$coord."</a></p>";
echo "<p><button onClick=\"window.location.href=window.location.href\"> Refresh </button></p>";
?>
