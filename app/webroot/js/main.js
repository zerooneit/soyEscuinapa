;(function($, window, undefined) {
	$.template('main_news', '<article class="news twelve columns">'+
								'<div class="three columns news-thumb"><img src="${image}"></div>'+
								'<div class="nine columns news-body">'+
								'<h5><a class="news-title" target="_blank" href="${url}">${title}</a></h5>'+
								'<p>${description}</p>'+
								'</div>'+
							'</article>');
							
	$.template('second_news','<li style="height: 450px;">'+
								'<img src="${image}">'+
								'<h5><a class="news-title" target="_blank" href="${url}">${title}</a></h5>'+
								'<p>{{html description}}</p>'+
							'</li>');
	
	var app = function() {

		self = {};
		self.gob_feed = 'http://escuinapa.gob.mx/index.php/prensa?format=feed';
		self.google_feed = 'http://news.google.com.mx/news?hl=es&gl=mx&q=escuinapa&um=1&ie=UTF-8&output=rss';
		
		
		self.feeds = [];
		
		self.init = function() {
			self.getFeed(self.gob_feed);
			self.getFeed(self.google_feed,'google');
			
		};
		
		
		
		self.getFeed = function(url, type) {
			if (type == undefined || type == 'gob') {
				callback = function(data) {
					$('#mainNews').html('');
					feed = data.responseData.feed;
					html = [];

					for ( i = 0; i < 3; i++) {
						content = $(feed.entries[i].content);
						entrie = feed.entries[i];
						
						html.push({
							title : entrie.title,
							description : $(content[1]).html(),
							url : entrie.link,
							image: 'http://placehold.it/100x100&text=News'
						});
					}
					
					$.tmpl('main_news',html).appendTo('#mainNews');
				};
			} else {
				callback = function(data) {
					$('#secondary-news').html('');
					feed = data.responseData.feed;
					html = [];

					for ( i = 0; i < 6; i++) {
						content = $(feed.entries[i].content);
						content_table = content.find('td').children();

						content_image = $(content_table[0]).html();
						content_text = $($($(content_table[1]).find('div')[1]).children('font')[1]).html();

						image = 'http://placehold.it/200x113&text=News';

						entrie = feed.entries[i];
						

						html.push({
							title : entrie.title,
							description : content_text,
							url : entrie.link,
							image: image
						});
					}
					$.tmpl('second_news',html).appendTo('#secondary-news');
				};
			}

			$.ajax({
				async : false,
				url : 'http://ajax.googleapis.com/ajax/services/feed/load?v=1.0&num=25&output=json&q=' + encodeURIComponent(url) + '&callback=?',
				dataType : 'json'
			}).done(callback);
		}
		
		return self;
	}
	
	window.app = new app();

	$(document).ready(function() {
		window.app.init();
	});

})(jQuery, this);
