


<!-- Header -->
  <header>
    <img src="/img/header.jpg" >
  </header><br /><br /><br />
<!-- End Header -->
     
 
<!-- Main Section -->
<section id="container" class="row" style="padding: 10px;">
  <div class="twelve columns">
  	
    <?=$this->element('left_sidebar', array($extra_values,$extra_classes,$extra_plugins)); ?>   

    <div class="six columns pull-one" >
      <div  class="row">
        <h4>Noticias</h4>
        <div id ="mainNews">
	        
        </div>
      </div>
      <br />
      <br />
	  	
      <div class="advert-long" >
      	<center>
      	<div class="center advert-wrapper">
	        <script type="text/javascript"><!--
				google_ad_client = "ca-pub-6512492483734639";
				/* escuinapa-longad */
				google_ad_slot = "4427168291";
				google_ad_width = 468;
				google_ad_height = 60;
				//-->
			</script>
			<script type="text/javascript"
				src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
			</script>
		</div>
		</center>
      </div>
      <br />
      <br />
          
        
      <div>
        <ul id ="secondary-news" class="block-grid two-up ">
          
        </ul>
      </div>
    </div> 

	<?=$this->element('right_sidebar', array($extra_values,$extra_classes,$extra_plugins)); ?>  

  </div> 
</section>
<pre>
<?=print_r($prueba);?>
</pre>
<!-- End Main Section -->
  

