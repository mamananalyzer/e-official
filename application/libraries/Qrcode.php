<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH . 'third_party/phpqrcode/qrlib.php';

class Qrcode {

    public function generate($data, $filename) {
        QRcode::png($data, $filename, 'H', 10, 2);
    }
}
