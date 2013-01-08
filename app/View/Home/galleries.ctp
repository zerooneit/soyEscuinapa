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

