<?php
$tanggal = mktime(date("m"), date("d"), date("Y"));
date_default_timezone_set('Asia/Jakarta');
$jam = date("H:i:s");
$a = date("H");
if (($a >= 3) && ($a <= 9)) {
    echo "<b>Selamat Pagi</b>";
} else if (($a > 9) && ($a <= 15)) {
        echo "<b>Selamat Siang </b>";
    } else if (($a > 15) && ($a <= 18)) {
    echo "<b>Selamat Sore</b>";
} else {
    echo "<b> Selamat Malam </b>";
}
echo "<br>";

