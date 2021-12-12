<style>
body {
    background-color: #ace;
    font-family: Roboto;
    font-size: 24px;
    color: #fff;
    text-shadow: 0px 0px 2px #000;
}

a {
    font-size: 24px;
    text-decoration: none;
    color: #fff;
}

table {
    border: 2px solid #abba;
    border-radius: 8px;
    padding: 10px;
    box-shadow: 2px 2px 4px #000;
}


</style>
<div align="center">
<?php
$input_file = file('industrial-keywords.txt');
echo ' <table>'."\r\n".'  <tr>'."\r\n";

for ($i = 0; $i < 5; $i++) {

$random_word = $input_file[array_rand($input_file)];
$keyword = preg_replace('/[\r\n]+/','', $random_word);
$link = preg_replace('/[-]+/',' ', $random_word);

echo '   <th><a href="http://'.$_SERVER['HTTP_HOST'],'/',$keyword.'.php">',$link,'</a></th>',"\r\n";
}

echo '  </tr>'."\r\n".' </table>';
// Delete Me Later
?>
</div>
