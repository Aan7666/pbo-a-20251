<?php

class LuasLingkaran{

    public const phi = 3.14;
    public int $jari;
public function __construct($isiJari = 1){
   $this->jari = $isiJari;
}

public function tampil($nama = 'ban'){
    $rumus = LuasLingkaran::phi * ($this->jari * $this->jari);
echo "luas lingkaran {$nama} ini adalah: {$rumus}";
    }
    public static function testing() {
        echo "ini testing static";
    }
    public function __destruct(){
        echo"<br>";
        echo"udah ah cape";
    }
}
$lingkaran = new LuasLingkaran(10);
$lingkaran->tampil('roda');
echo'<br>';
LuasLingkaran::testing();