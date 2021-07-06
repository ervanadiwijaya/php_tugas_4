<?php

$buy = 8000;
$sell = 7500;

$profit = 300;

$totBuy = ceil(($buy - $sell) / $profit);

echo "Harga Beli = Rp ${buy}</br>";
echo "Harga Beli = Rp ${sell}</br>";
echo "Keuntungan = Rp ${profit}</br>";
echo "Berapa jumlah kambing yang dobeli ? </br>";
echo "Jawaban : ${totBuy} ekor";
