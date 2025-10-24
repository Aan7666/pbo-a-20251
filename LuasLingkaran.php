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

class KelilingLingkaran
{
    public const phi = 3.14;
    public int $jari;
    public function __construct($isijari = 1)
    {
        $this->jari = $isijari;
    }

    public function tampilKl($nama = 'ban')
    {
        $rumus2 = KelilingLingkaran::phi * (2 * $this->jari);
        echo "Lingkaran " . ($nama) . " Hasil kelilingnya adalah: " . $rumus2 . "<br>";
    }

    public static function testing()
    {
        echo "</br>";
        echo "Ini testing static keliling<br>";
    }

    public function __destruct()
    {
        echo "</br>";
        echo "Udah capek keliling<br>";
    }
}

$Lingkaran2 = new KelilingLingkaran(10);
$Lingkaran2->tampilKl('ban');

$lingkaran = new LuasLingkaran(10);
$lingkaran->tampil('roda');
echo'<br>';
LuasLingkaran::testing();
KelilingLingkaran::testing();

// /hitammm
