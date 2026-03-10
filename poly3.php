<?php
abstract class kendaraan {
    abstract public function berjalan();
}

class mobil extends kendaraan {
    public function berjalan() {
        echo "Mobil berjalan di jalan raya";
    }
}

class kapal extends kendaraan {
    public function berjalan() {
        echo "Kapal berjalan di laut";
    }
}

$mobil = new mobil();
$kapal = new kapal();

$mobil->berjalan();
echo "<br>";

$kapal->berjalan();
?>