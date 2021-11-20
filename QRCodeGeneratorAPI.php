<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class QRCodeGenerator {

  protected $CI;

  public function __construct() {
    $this->CI = &get_instance();
    require_once 'application/third_party/phpqrcode/qrlib.php';
  }

  public function generate($token, $image_path)
  {
    //add the qr code generator parameters
    if ($token && $image_path) {
        QRcode::png($token,$image_path);		
        return $image_path;
    }
    else {
        return null;
    }
  }
    
}
