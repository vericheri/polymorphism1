<?php
interface notifikasi {
    public function kirim();

}

class whatsapp implements notifikasi {
    public function kirim() {
        echo "Notifikasi dikirim melalui WhatsApp";
    }
}

class email implements notifikasi {
    public function kirim() {
        echo "Notifikasi dikirim melalui Email";
    }
}

class sms implements notifikasi {
    public function kirim() {
        echo "Notifikasi dikirim melalui SMS";
    }
}

$w = new whatsapp();
$e = new email();
$s = new sms();

$e->kirim();
echo "<br>";

$s->kirim();
echo "<br>";

$w->kirim();
?>