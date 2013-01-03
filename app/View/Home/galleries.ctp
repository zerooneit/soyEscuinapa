<br /><br /><br /><br /><br /><br />
<div class="row">
	<h4><? echo str_replace('Galer&iacute;a - ', '', $title_for_layout) ; ?></h4>
	
	<div class="row">
		<div class="eight columns">
	      <div id="slider">
	        <img src="http://placehold.it/854x480&text=[img 1]" />
	        <img src="http://placehold.it/854x480&text=[img 2]" />
	        <img src="http://placehold.it/854x480&text=[img 3]" />
	        <img src="http://placehold.it/854x480&text=[img 4]" />
	        <img src="http://placehold.it/854x480&text=[img 5]" />
	        <img src="http://placehold.it/854x480&text=[img 6]" />
	        <img src="http://placehold.it/854x480&text=[img 7]" />
	      </div>
	      
	     
	    </div>
	    <br>
	    <div class="four columns">
	    	<ul class="block-grid four-up mobile-five-up">
	    		<?php for ($i = 0 ; $i < 20 ; $i++): ?>
	    		<li> <img src="http://placehold.it/72x72&text=[thumb <?=$i;?>]" /></li>
	    		<?php endfor; ?>
	    	</ul>
	    </div>
    	
	</div>
	
	<pre><?php echo print_r($path,true); ?></pre>	
</div>

