<?php
/**
 * Created by PhpStorm.
 * User: bartek
 * Date: 13.07.15
 * Time: 21:03
 */

include_once("Mobile.php");
include_once("MobileAdapter.php");

class ClientAdapter {
    private $mobile;
    private $mobileAdapter;

    public function __construct(){
        $this->mobile = new Mobile();
        $this->mobileAdapter = new MobileAdapter($this->mobile);
        $this->mobileAdapter->formatCSS();
        $this->mobileAdapter->formatGraphics();
        $this->mobileAdapter->horizontalLayout();
    }
}
$worker = new ClientAdapter();