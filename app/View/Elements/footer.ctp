
            
        
       
              
        <?php  // Scripts Block
            echo $this->Html->script("vendor/jquery-1.8.2.min");
            echo $this->Html->script("foundation.min"); 

            if (isset($extra_values) && !empty($extra_values) && is_array($extra_values)){
                foreach ($extra_values as $f) {
                    echo $this->Html->script('values/'.$f);
                }
            }

            if (isset($extra_classes) && !empty($extra_classes) && is_array($extra_classes)){
                foreach ($extra_classes as $f) {
                    echo $this->Html->script('classes/'.$f);
                }
            }

            if (isset($extra_plugins) && !empty($extra_plugins) && is_array($extra_plugins)){
                foreach ($extra_plugins as $f) {
                    echo $this->Html->script('plugins/'.$f);
                }
            }
			
			if (isset($extra_templates) && !empty($extra_templates) && is_array($extra_templates)){
                foreach ($extra_templates as $f) {
                    echo $this->Html->tag('script','', array('type'=>'text/x-jquery-tmpl', 'id' => $f, 'src' => '/js/templates/'.$f.'.js'));
               	}
            }
			
			if (isset($extra_scripts) && !empty($extra_scripts) && is_array($extra_scripts)){
               // foreach ($extra_scripts as $f) {
                    echo $this->Html->script($extra_scripts);
               // }
            }

            echo $this->Html->script("app"); 
        ?>

               
        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
    </body>
</html>