<style>
body {
    background-color: #000;
}

.divideo {
    position: fixed;
    z-index: -99;
    width: 100%;
    height: 100%
}
</style>
<div class="divideo">
<?php
$ytlinks = array(
    "https://www.youtube.com/embed/N7jDefb8ISI",
    "https://www.youtube.com/embed/sSessndT8DI",
    "https://www.youtube.com/embed/9dgW6ucP0w4",
    "https://www.youtube.com/embed/MP5m5-wcPEw",
    "https://www.youtube.com/embed/18BfqlxmZF8",
    "https://www.youtube.com/embed/v-3B0OJfB44"
    );

$ytlink = $ytlinks[array_rand($ytlinks)];
$ytlink = str_replace ("\n", "", $ytlink);
echo '<iframe frameborder="0" height="98%" width="100%" src="'.$ytlink.'?autoplay=1"></iframe>';
?>
</div>
