<?php
$nilai = 80;

switch (true) {

    case ($nilai >= 86 && $nilai <= 100):
        echo "Nilai A  Sangat Baik";
        break;

    case ($nilai >= 76 && $nilai <= 85):
        echo "Nilai B  Baik";
        break;

    case ($nilai >= 66 && $nilai <= 75):
        echo "Nilai C  Cukup";
        break;

    case ($nilai >= 0 && $nilai <= 65):
        echo "Nilai D  Kurang";
        break;

    default:
        echo "Nilai Diluar Range";
}
?>