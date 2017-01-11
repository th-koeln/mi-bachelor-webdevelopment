var	tabs = {};
tabs.elements = {};
tabs.func = (function(){

	var exports = {};

	exports.init = function(){
		
		// Content ausblenden
		tabs.elements.content = {};
		var tabWraps = document.querySelectorAll('.is-tab-wrap');
		tabWraps.forEach(function(tabWrap) {
			tabContents = tabWrap.querySelectorAll('.is-tab-content');
			tabContents[1].classList.add('is-hidden');
			

		});
		
		
		
		// Tab Navi aktivieren
		var tabNavigations = document.querySelectorAll('.is-tab-navigation');
		
		tabNavigations.forEach(function(tabNavigation) {
			var tabs = tabNavigation.querySelectorAll('.tab-item');
			tabs[0].classList.add('is-active');
			
			tabs.forEach(function(tab) {
				tab.onclick = function() { 
					var target_id = tab.getAttribute('data-tab');
					var target = document.getElementById(target_id);
					
					// Content ausblenden
					var elements = target.parentElement.querySelectorAll('.is-tab-content');
					elements.forEach(function(element) {
						element.classList.add('is-hidden');
					});
					
					// gewählten Content einblenden
					target.classList.remove('is-hidden');
					
					// Aktiven Navipunkt markieren
					var elements = tab.parentElement.querySelectorAll('.tab-item');
					elements.forEach(function(element) {
						element.classList.remove('is-active');
					});					
					tab.classList.add('is-active');
					

				};
			});
			
		});
	}


	return exports;
})();


tabs.func.init();
