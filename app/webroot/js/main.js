;(function($, window, undefined) {
	
	
	var app = function() {

		self = {};
		self.gob_feed = 'http://escuinapa.gob.mx/index.php/prensa?format=feed';
		self.google_feed = 'http://news.google.com.mx/news?hl=es&gl=mx&q=escuinapa&um=1&ie=UTF-8&output=rss';
		
		
		self.feeds = [];
		
		self.long_ads = function(){
			
		};
		
		self.init = function() {
			$('#mainNews').feeds({
				feeds: {
					feed1:self.gob_feed
				},
				max: 3,
				entryTemplate: '<article class="news twelve columns">'+
									'<div class="three columns news-thumb"><img src="/img/icons/news_main.png"></div>'+
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
									'<img src="/img/icons/news_second.png">'+
									'<div style="overflow-y:hidden; "><h5><a class="news-title" target="_blank" href="<!=link!>"><!=title!></a></h5></div>'+
									'<p><!=contentSnippet!></p>'+
								'</li>'
			});
			
			long_adverts = $(".advert-long");
			$(window).resize(function() {
				if (long_adverts.width() >= 468){
					long_adverts.find('.advert-wrapper').width('468');
				}else {
					long_adverts.find('.advert-wrapper').width('234');
				}
			});
			
			
		};
		
		
		
		
		
		return self;
	}
	
	window.app = new app();

	$(document).ready(function() {
		window.app.init();
	});

})(jQuery, this);
