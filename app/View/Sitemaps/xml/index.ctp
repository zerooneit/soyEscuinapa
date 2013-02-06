
<urlset xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd" xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url> 
        <loc><?php echo Router::url('/',true); ?></loc> 
        <changefreq>daily</changefreq> 
        <priority>1.0</priority> 
    </url> 
       
    <!-- Galerias -->
    <url> 
        <loc><?php echo Router::url(array('controller'=>'galleries','action'=>'index'),true); ?></loc> 
        <changefreq>daily</changefreq> 
        <priority>1.0</priority> 
    </url>  
        
   <?php foreach ($galleries as $gallery):?> 
    <url> 
        <loc><?php echo Router::url(array('controller'=>'galleries','action'=>'galleries','slug'=>Inflector::slug($gallery['Gallery']['gallery_name'])),true); ?></loc> 
        <lastmod><?php echo $this->time->toAtom($gallery['Gallery']['gallery_modified']); ?></lastmod> 
        <priority>0.8</priority> 
       
    </url> 
   <?php endforeach; ?>
</urlset> 