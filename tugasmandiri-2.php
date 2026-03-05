<?php
echo "<h3>Program Hitung Diskon</h3>";

$jumlah_bayar = 120000;
$diskon = 0;

if ($jumlah_bayar >= 500000){
    $diskon = 50;
}
elseif ($jumlah_bayar >= 100000){
    $diskon = 10;
}
elseif ($jumlah_bayar >= 50000){
    $diskon = 5;
}
else{
    $diskon = 0;
}

$potongan = $jumlah_bayar * $diskon / 100;
$total_bayar = $jumlah_bayar - $potongan;

echo "Harga Normal : Rp " . $jumlah_bayar . "<br>";
echo "Diskon : " . $diskon . "%<br>";
echo "Nominal Potongan : Rp " . $potongan . "<br>";
echo "Harga Setelah Diskon : Rp " . $total_bayar;
?>