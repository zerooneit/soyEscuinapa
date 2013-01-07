<?php
App::uses('AppHelper', 'View/Helper');

class MobileHelper extends AppHelper {
    public $helpers = array('Html');

    public function isMobile() {
    	App::import('Vendor', 'mobile_detect',array('file' => 'mobile'.DS.'Mobile_Detect.php'));
		$detect = new Mobile_Detect();
		
		return $detect->isMobile();
       
    }
}

?>
