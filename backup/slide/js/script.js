$ (function () {
		$ ("#slideshow").css ("overflow", "hidden");

		 $ ("#slide ul").cycle ({
			 fx: 'fade',
			 speed: 2000,
			 timeout: 4000,
			 prev: '#previous',
			 next: '#next',
			 pager: $('.pager').css("overflow", "hidden"),
			 pagerAnchorBuilder: function(index, DOMelement){
				 return '<a></a>';
			 },
				activePagerClass: 'sliderAtivo'
			 
		 }); 
	});