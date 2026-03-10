<?php
interface pembayaran {
    public function prosespembayaran();
}

class transferbank implements pembayaran {
    public function prosespembayaran() {
        echo "Pembayaran melalui Transfer Bank";
    }
}

class ewallet implements pembayaran {
    public function prosespembayaran() {
        echo "Pembayaran melalui E-Wallet";
    }
}

class kartukredit implements pembayaran {
    public function prosespembayaran() {
        echo "Pembayaran melalui Kartu Kredit";
    }
}

$p1 = new transferbank();
$p2 = new ewallet();
$p3 = new kartukredit();

$p1->prosespembayaran();
echo "<br>";

$p2->prosespembayaran();
echo "<br>";

$p3->prosespembayaran();
?>