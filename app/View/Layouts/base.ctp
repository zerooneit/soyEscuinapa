<?php 
echo $this->element('header', array($extra_styles)); 
echo $this->fetch('content'); 
echo $this->element('footer', array($extra_values,$extra_classes,$extra_plugins));  
?>