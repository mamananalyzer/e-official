<?php defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH . 'third_party/BaconQrCode/Writer.php';
require_once APPPATH . 'third_party/BaconQrCode/Renderer/Image/Png.php';

use BaconQrCode\Renderer\Image\Png;
use BaconQrCode\Writer;

class Baconqrcode {

    public function generate($data, $filename) {
        $renderer = new Png();
        $renderer->setWidth(256);
        $renderer->setHeight(256);
        $writer = new Writer($renderer);

        $result = $writer->writeString($data);

        file_put_contents($filename, $result);
    }
}
?>
