<?php
// Random CSS - R. Seaverns
// Set CSS Solid Color Variables
$bgcolor = str_pad(mt_rand(0, 999999), 6, '0', STR_PAD_LEFT);
$txtcolor = str_pad(mt_rand(0, 999999), 6, '0', STR_PAD_LEFT);
$tblcolor = str_pad(mt_rand(0, 999999), 6, '0', STR_PAD_LEFT);
$thcolor = str_pad(mt_rand(0, 999999), 6, '0', STR_PAD_LEFT);
$boxshadow = str_pad(mt_rand(0, 999999), 6, '0', STR_PAD_LEFT);

// Build The Page
//echo '<meta http-equiv="refresh" content="5">';
echo '<style>' . "\r\n\r\n" . 'body {' . "\r\n" . ' background-color: #' . $bgcolor . ';' . "\r\n";
echo ' color: #' . $txtcolor . ';' . "\r\n";
echo ' font-family: Roboto ;' . "\r\n" . '}' . "\r\n\r\n";
echo 'table {' . "\r\n" . '  width:100%;' . "\r\n" . '  background-color: #000;' . "\r\n" . '  padding: 10px;' . "\r\n" . '  box-shadow: 2px 2px 8px #000 inset;' . "\r\n" . '}' . "\r\n\r\n";
echo '.table {' . "\r\n" . ' background-color: #' . $tblcolor . ';' . "\r\n" . ' padding: 5%;' . "\r\n" . ' border-radius: 12px;' . "\r\n" . '}' . "\r\n\r\n";
echo '.th {' . "\r\n" . ' background-color: #' . $thcolor . ';' . "\r\n" . ' border-radius: 8px;' . 'box-shadow: 2px 2px 5px #000 inset;' . "\r\n" . '}' . "\r\n\r\n";
echo '</style>' . "\r\n";
echo '<body style="overflow: hidden;">';
echo '<table width="100%" bgcolor="black" style="padding: 10px; box-shadow: 2px 2px 8px #' . $boxshadow . ';' . ' border-radius: 12px;"><th>';
echo '<h1>Solid Colors</h1>';
echo '<p>Background Color: #' . $bgcolor . '<br>';
echo '<strong>Text Color: #' . $txtcolor . '<br>';
echo 'Table Color: #' . $tblcolor . "\r\n" . '<br>' .  'Header Color: #' . $thcolor . '</p>';
echo '<table width="100%" border="2" class="table">';
echo '<tr><th height="40px" class="th">Table Header Color #' . $thcolor .'</th></tr></table>';
echo '</th></table><br>';
echo '</body></html>';
?>
<br>
<!-- There's that frakken <br> again... -->
