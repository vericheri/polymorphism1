<?php

class bangundatar {
    public function hitungluas() {
        return 0;
    }
}

class persegi extends bangundatar {
    private $sisi;

    public function __construct($sisi) {
        $this->sisi = $sisi;
    }

    public function hitungluas() {
        return $this->sisi * $this->sisi;
    }
}

class lingkaran extends bangundatar {
    private $r;

    public function __construct($r) {
        $this->r = $r;
    }

    public function hitungLuas() {
        return pi() * $this->r * $this->r;
    }
}

class segitiga extends bangundatar {
    private $a;
    private $t;

    public function __construct($a, $t) {
        $this->a = $a;
        $this->t = $t;
    }

    public function hitungLuas() {
        return 0.5 * $this->a * $this->t;
    }
}

$p = new persegi(3);
$l = new lingkaran(2);
$s = new segitiga(9, 13);

echo "Luas Persegi: " . $p->hitungluas()."<br>";
echo "Luas Lingkaran: " . $l->hitungluas()."<br>";
echo "Luas Segitiga: " . $s->hitungLuas() . "<br>";
?>