<br /><br /><br /><br /><br /><br />

<div class="container row">
	
	<div class="nine columns">
	<div class="row">
		<div class="alert-box">
		 <p style="font-size: 13px; color: white;">
		 ¿Te gustar&iacute;a apoyarnos con tus fotografía para crearte una galer&iacute;a con nosotros?,¿Te gustar&iacute;a presentar aqui tu exposici&oacute;n?.
		 Cont&aacute;cta con nosotros a la siguiente direcci&oacute;n de correo electr&oacute;nico <a style="font-weight: bold; color: white;" href="mailto:webmaster@escuinapense.com.mx">webmaster@escuinapense.com.mx</a>.
		 Ap&oacute;yanos para traer mas contenido.
		 </p> 
		</div>	
	</div>
	<br /><br />
	
	<div class="row">
		<ul class="block-grid three-up mobile">
		  <?php
		  foreach ($this->Html->indexGalleries() as $gallery):
			  $media = $this->Html->getGalleryFirstMedia(intval($gallery['Gallery']['gallery_id']));
		  ?>
		  <li><a href="<?='/gallery/'.Inflector::slug($gallery['Gallery']['gallery_name']);?>"><article class="gallery-index">
		  	<h5><?=Inflector::humanize($gallery['Gallery']['gallery_name']);?></h5>
		  	
		  	<div style="height: 180px;"	>
		  	<?php
		  	if (count($media) > 0):
	        	$img = json_decode($media[0]['Media']['media_object']);
	        ?>
	        	<img src="<?=$img->url;?>"  width="250" > 
	        <?php
			else:
			?>
	        	<img src="http://placehold.it/150x150/&text=ad" >
	        <?php
			endif;
			?>
		  	</div>
		  	<p><?=utf8_encode($gallery['Gallery']['gallery_description']);?></p>	
		  </article></a></li>
		  <?php
		  endforeach;
		  ?>
		  
		  
		</ul>
	</div>
	<br /><br />
	<div class="row">
		<div class="columns three"><h5>Comparte</h5></div>
		<div class="columns nine">
			<a href="https://twitter.com/share" class="twitter-share-button" data-via="escuinapa_" data-lang="es" data-size="large" 
			  	   data-count="true" data-related="diegoresendez" data-hashtags="Escuinapa" data-align="left" data-dnt="true" class="pull-left">Twittear</a>
			<div class="fb-like" data-href="<?=Router::url(null, true);?>" data-send="true" data-layout="standart" data-width="250" data-show-faces="false" data-font="lucida grande"></div>
		</div>  	   
	</div>
	<br /><br />	
	<div class="row">
		<div id="disqus_thread"></div>
		    <script type="text/javascript">
		        /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
		        var disqus_shortname = 'escuinapa'; // required: replace example with your forum shortname
		        var disqus_developer = 1; // developer mode is on
		
		        /* * * DON'T EDIT BELOW THIS LINE * * */
		        (function() {
		            var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
		            dsq.src = 'http://' + disqus_shortname + '.disqus.com/embed.js';
		            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
		        })();
		    </script>
		    <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
		    <a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>
		    
		</div>
	</div>
	<?=$this->element('right_sidebar', array($extra_values,$extra_classes,$extra_plugins)); ?>
</div>
