;(function($, window, undefined) {
	
	
	var app = function() {

		self = {};
		self.gob_feed = 'http://escuinapa.gob.mx/index.php/prensa?format=feed';
		self.google_feed = 'http://news.google.com.mx/news?hl=es&gl=mx&q=escuinapa&um=1&ie=UTF-8&output=rss';
		
		
		self.feeds = [];
		
		self.init = function() {
			$('#mainNews').feeds({
				feeds: {
					feed1:self.gob_feed
				},
				max: 3,
				entryTemplate: '<article class="news twelve columns">'+
									'<div class="three columns news-thumb"><img src="http://placehold.it/100x100&text=News"></div>'+
									'<div class="nine columns news-body">'+
									'<h5><a class="news-title" target="_blank" href="<!=link!>"><!=title!></a></h5>'+
									'<p><!=contentSnippet!></p>'+
									'</div>'+
								'</article>'
			});
			
			$('#secondary-news').feeds({
				feeds: {
					feed1:self.google_feed
				},
				max: 9,
				entryTemplate: 	'<li style="height: 350px;" >'+
									'<img src="http://placehold.it/200x113&text=News">'+
									'<div style="overflow-y:hidden; height: 130px"><h5><a class="news-title" target="_blank" href="<!=link!>"><!=title!></a></h5></div>'+
									'<p><!=contentSnippet!></p>'+
								'</li>'
			});
			
			
		};
		
		
		
		
		
		return self;
	}
	
	window.app = new app();

	$(document).ready(function() {
		window.app.init();
	});

})(jQuery, this);
