<?php

class hewan {
    public function suara() {
        echo "hewan mengeluarkan suara";
    }
}
    class kucing extends hewan {
        public function suara() {
            echo "meong";
        }
    }

    class anjing extends hewan {
        public function suara() {
            echo "guk guk";
        }
    }

$kucing = new kucing();
$anjing = new anjing();

$kucing->suara();
echo "<br>";

$anjing->suara();
?>   