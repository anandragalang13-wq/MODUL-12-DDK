<?php
$nilai = 90;

if ($nilai >= 86 && $nilai <= 100) {
    echo "Nilai A  Sangat Baik";
} 
elseif ($nilai >= 76 && $nilai <= 85) {
    echo "Nilai B  Baik";
} 
elseif ($nilai >= 66 && $nilai <= 75) {
    echo "Nilai C  Cukup";
} 
elseif ($nilai >= 0 && $nilai <= 65) {
    echo "Nilai D  Kurang";
} 
else {
    echo "Nilai Diluar Range";
}
?>