;(function($, window, undefined) {
	
	var trimText = function( string, length ){
		length = length-3;
		var newst = string.split(" ");
		var contador = 0;
		var finalstr = '';
		 
		for(var lar=0; lar<newst.length; ++lar) {
			if(contador >= length)
				break;
			else{
				contador += newst[lar].length;
				finalstr += newst[lar]+' ';
				if(finalstr.length-1 > length){
					finalstr = finalstr.substr(0, finalstr.indexOf(newst[lar], 0));
					break;
				}
			}
		}
		return (finalstr != string) ?
				finalstr.substr(0, finalstr.length-1)+'…' :
				finalstr;	
	};
	
	var app = function() {

		self = {};
		self.gob_feed = 'http://escuinapa.gob.mx/index.php/prensa?format=feed';
		self.google_feed = 'http://news.google.com.mx/news?hl=es&gl=mx&q=escuinapa&um=1&ie=UTF-8&output=rss';
		self.twitter = 'http://search.twitter.com/search.rss?q=from:Escuinapa&rpp=100';
		
		
		self.feeds = [];
		
		self.long_ads = function(){
			
		};
		
		self.init = function() {
			$('#mainNews').feeds({
				feeds: {
					feed1:self.gob_feed
				},
				max: 3,
				loadingTemplate: '<p>Cargando Entradas</p>',
				preprocess: function( feed ){
					this.title = trimText(this.title, 50);
				},
				entryTemplate: '<article class="news twelve columns">'+
									'<div class="three columns news-thumb"><img src="http://placehold.it/106x106/ffffff/333333/&text=Noticia"></div>'+
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
				max: 10,
				loadingTemplate: '<p>Cargando Entradas</p>',
				preprocess: function( feed ){
					this.title = trimText(this.title, 50);
					this.contentSnippet = trimText(this.contentSnippet, 100);
				},
				entryTemplate: 	'<li style="height: 275px;" >'+
									'<img src="http://placehold.it/128x72/ffffff/333333/&text=Noticia">'+
									'<div style="overflow-y:hidden; "><h5><a class="news-title" target="_blank" href="<!=link!>"><!=title!></a></h5></div>'+
									'<p><!=contentSnippet!></p>'+
								'</li>'
			});
			
			$('#twitter-feed').twitterfeed('escuinapa_', {
					limit: 5,
					tweettime: false
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
