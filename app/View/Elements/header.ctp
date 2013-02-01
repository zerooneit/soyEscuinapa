<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?php echo $title_for_layout; ?></title>
    
    <?php
    echo $this->Html->meta(array('name'=>'viewport' , 'content' => 'width=device-width'));
	
	foreach ($meta_tags as $name => $content){
		echo $this->Html->meta(array('name'=>$name,'content'=>$content));	
	} 
	
	foreach ($fb_tags as $property => $content){
		echo $this->Html->meta(array('property'=>$property,'content'=>$content));	
	}
	
	foreach ($tw_tags as $property => $content){
		echo $this->Html->meta(array('name'=>$property,'content'=>$content));	
	}    
    /**
     * Common Styles
     **/
        echo $this->Html->css('foundation'); 
        echo $this->Html->css('app'); 
    /**
     * Extra Styles
     **/
        if (isset($extra_styles) && !empty($extra_styles) && is_array($extra_styles)){
            foreach ($extra_styles as $f) {
                echo $this->Html->css($f);
            }
        }
        echo $this->Html->script('modernizr.foundation'); 

    ?>
        
</head>
<body>
       
<!-- Navigation -->

<nav class="top-bar fixed">
  <ul>
    <li class="name"><h1><a href="/">Escuin@pa</a></h1></li>
    <li class="toggle-topbar"><a href="#"></a></li>
  </ul>
  <!--	
  <section>
    <ul class="left">
      <li><a href="#">Link</a></li>
      <li><a href="#">Link</a></li>
      <li><a href="#">Link</a></li>
    </ul>

    <ul class="right">
      <li class="has-dropdown">
        <a href="#">Link</a>

        <ul class="dropdown">
          <li><a href="#">Dropdown Link</a></li>
          <li><a href="#">Dropdown Link</a></li>
          <li><a href="#">Dropdown Link</a></li>
        </ul>
      </li>
    </ul>
  </section>
  -->
</nav>

<!-- End Navigation -->