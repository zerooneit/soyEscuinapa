     <div id="right-sidebar" class="three columns  sidebar">
        <div class="widget row">
          <h5>Galer&iacuteas</h5>
          <div id="gallery-container">
          	<?php foreach ($this->Html->getGalleries() as $Gallery): ?>
          	<a href="/gallery/<?=Inflector::slug($Gallery['Gallery']['gallery_name']);?>" alt="<?=utf8_encode($Gallery['Gallery']['gallery_name']);?>" class="gallery row">
	          	<div class="gl-title"><?=$Gallery['Gallery']['gallery_name']?></div>
	          	<?php 
	          	$authors = $this->Html->getAuthorsFromGallery(intval($Gallery['Gallery']['gallery_id']));
	          	if (count($authors) > 1){
	          		$Author	= 'Varios';
	          	}else{
	          			
	          		$Author	= $authors[0]['Author']['author_name'].' '.$authors[0]['Author']['author_lastname'];
	          	} 
	          	?>
	          	<div class="gl-author">por <strong><?=$Author;?></strong></div>
	          	<div class="gl-body">
	          		<?php
	          		$media = $this->Html->getGalleryFirstMedia(intval($Gallery['Gallery']['gallery_id']));
	          		if (count($media) > 0):
	          			$img = json_decode($media[0]['Media']['media_object']);
	          		?>
	          		<div class="four columns gl-img"><img src="<?=$img->url;?>" > </div>
	          		<?php
					else:
					?>
	          		<div class="four columns gl-img"><img src="http://placehold.it/150x150/&text=ad"> </div>
	          		<?php
					endif;
					?>
	          		<div class="eight columns gl-descrip"><p><?=utf8_encode($Gallery['Gallery']['gallery_description']);?></p></div>
	          	</div>
          	</a>
          	<?php endforeach; ?>	
          </div>
        </div>
        
		<!-- TO DO: Improvements Events
        <div class="widget row">
        	<h5>Eventos</h5>
        	<ul class="side-nav">
	            <li><a href="#">Evento 1</a></li>
		        <li><a href="#">Evento 2</a></li>
		        <li><a href="#">Evento 3</a></li>
		        <li><a href="#">Evento 4</a></li>
		        <li><a href="#">Evento n</a></li>
          	</ul>
        </div>
       -->
        <!-- Adverts -->
        <br />
        <div class="widget row"><center>
        	<script type="text/javascript"><!--
			google_ad_client = "ca-pub-6512492483734639";
			/* right-advert */
			google_ad_slot = "2520005899";
			google_ad_width = 180;
			google_ad_height = 150;
			//-->
			</script>
			<script type="text/javascript"
			src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
			</script></center>
        </div>
        <br />
        <div class="widget row">
          <h5>Twitter</h5>
          <div id="twitter-feed"></div>
        </div>
        
        <div class="widget row">
          <div id="ads-container">
          	<article class="sidebar-ads row">
          		<div class="sb-ads-title">¿Te gustar&iacute;a anunciarte?</div>
          		<div class="sb-ads-url">Escuinapa</div>
          		<div class="sb-ads-body">
          			<div class="four columns sb-ads-img"><img src="img/advert.jpg" /> </div>
          			<div class="eight columns sb-ads-content"><p>Anunciate con nosotros de manera gratuita, aqu&iacute; te decimos como.</p></div>
          		</div>
          	</article>
          	
          	
           
          </div>
        </div>
        

     </div> 
     <!-- END Right Sidebar -->