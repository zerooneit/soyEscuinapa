$(document).ready(function(){
	
	$escuinapa = 'http://escuinapa.gob.mx/index.php/prensa?format=feed';
	$.ajax({
    	async:false, 
    	url:'http://ajax.googleapis.com/ajax/services/feed/load?v=1.0&num=25&output=json&q='+encodeURIComponent($escuinapa)+'&callback=?',
    	dataType:'json'
    }).done(function(data){
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
    		feed = data.responseData.feed;
        	console.log(feed);
    	});
	
});
