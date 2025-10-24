<?php

class LuasLingkaran{

    public const phi = 3.14;
    public int $jari;
}

$lingkaran = new LuasLingkaran();
$lingkaran->jari = 10;
$rumus = LuasLingkaran::phi * ($Lingkaran->jari * $Lingkaran->jari);
echo "luas lingkaran dengan jari jari adalah". $rumus;
//echo LuasLingkaran::phi;