<?php
$tawal = 150000;
$bunga = 12.5/100;
echo "Tabungan Awal = Rp $tawal<br/>";
echo "Bunga Setahun = 12,5 %<br/>";
$total = $tawal+($tawal*$bunga);
echo "Total Tabungan Setahun = Rp $total";
?>