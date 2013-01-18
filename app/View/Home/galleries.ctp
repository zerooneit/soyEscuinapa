<br /><br /><br /><br /><br /><br />
<pre>
<?php
	
	//echo print_r($galleries, true);
	
?>
</pre>
<div class="row">
	<h4><? echo str_replace('Galer&iacute;a - ', '', $title_for_layout) ; ?></h4>
	<p><?=utf8_encode($data['Gallery']['gallery_description']);?></p>
	<div class="row">
		<div class="eight columns">
	      <div id="slider">
	      	<?php 
	      	foreach ($data['Media'] as $media): 
				$img = json_decode($media['media_object']);
				
				echo $this->Html->image($img->url, array('alt' => $img->alt));
	      	endforeach; 
	      	?>
	      </div>
	      
	     
	    </div>
	    <br>
	    <div class="four columns">
	    	<ul class="block-grid four-up mobile-five-up">
	    	<?php 
	      	foreach ($data['Media'] as $media): 
				$img = json_decode($media['media_object']);
				echo '<li><a href="#">',$this->Html->image($img->url, array('alt' => $img->alt)),'</a></li>';
	      	endforeach; 
	      	?>
	    	</ul>
	    </div>
    	
	</div>
	
	
	
	
</div>

<br />
<br />


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


