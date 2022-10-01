<?php
$az = 360;
$vmotor = 90;
echo "Jarak Kota A <strong>&ndash;</strong> Z = $az km<br/>";
echo "Kecepatan Motor = $vmotor<br/>";
echo "Motor = jarak/waktu<br/>";
$waktu = $az/$vmotor;
echo "Waktu Tempuh = $waktu Jam<br/>= ";
echo $waktu*60;
echo " Menit"
?>