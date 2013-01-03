$(document).ready(function(){
	
	$escuinapa = 'http://escuinapa.gob.mx/index.php/prensa?format=feed';
	$.ajax({
    	async:false, 
    	url:'http://ajax.googleapis.com/ajax/services/feed/load?v=1.0&num=25&output=json&q='+encodeURIComponent($escuinapa)+'&callback=?',
    	dataType:'json'
    }).done(function(data){
    	$('#mainNews').html('');
    	feed = data.responseData.feed;
    	html = '';
    	
    	for (i=0; i < 3; i++){
    		content = $(feed.entries[i].content);
    		entrie = feed.entries[i];
    		html += '<article class="news twelve columns">';
	        html += 	'<div class="three columns news-thumb"><img src="http://placehold.it/100x100&text=Image"></div>';
	        html += 	'<div class="nine columns news-body">';
	        html += 		'<h5><a class="news-title" target="_blank" href="'+entrie.link+'">'+entrie.title+'</a></h5>';
	        html += 		'<p>'+$(content[1]).html()+'</p>';
	        html += 	'</div>';
	        html += '</article>';
    	}
    	$('#mainNews').html(html);
    });
    
    $google = 'http://news.google.com.mx/news?hl=es&gl=mx&q=escuinapa&um=1&ie=UTF-8&output=rss';
    $.ajax({
    	async:false, 
    	url:'http://ajax.googleapis.com/ajax/services/feed/load?v=1.0&num=25&output=json&q='+encodeURIComponent($google)+'&callback=?',
    	dataType:'json'
    	
    }).done(function(data){
    		$('#secondary-news').html('');
    		feed = data.responseData.feed;
    		html = '';
        	
        	for (i =0; i < 6; i++){
        		content = $(feed.entries[i].content);
        		entrie = feed.entries[i];
        		html += '<li style="height: 450px;">';
	            html += 	'<img src="http://placehold.it/200x113&text=Image">';
	            html += 	'<h5><a class="news-title" target="_blank" href="'+entrie.link+'">'+entrie.title+'</a></h5>';
	            html += 	'<p>Donut danish chocolate cake tiramisu. Sweet roll brownie apple pie tart. Fruitcake jelly beans jelly sugar plum chocolate pudding macaroon liquorice. Sweet fruitcake pie ice cream muffin. Chocolate cake tootsie roll fruitcake cheesecake chocolate cupcake chupa chups gingerbread.[...]</p>';
	            html += '</li>';
        		
        		
        	}
        	$('#secondary-news').html(html);	
    	});
	
});
