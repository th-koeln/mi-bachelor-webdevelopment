var	tabs = {};
tabs.elements = {};
tabs.func = (function(){

	var exports = {};

	exports.init = function(){
		
		// Content ausblenden
		tabs.elements.content = {};
		var tabWraps = document.querySelectorAll('.is-tab-wrap');
		
		//if(tabWraps.length <= 1){ return false; }
		
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

var	more = {};
more.elements = {};
more.func = (function(){

	var exports = {};

	exports.init = function(){

		var elements = document.querySelectorAll('[data-target]');
		
		for(i=0; i<elements.length; i++){
			
			var ele = elements[i];

			var item = document.createElement("i");
			item.classList.add("fa");
			item.classList.add("fa-angle-down");
			item.classList.add("fa-lg");
			item.classList.add("more-button");

			item.onclick = function(){

				if(this.classList.contains("active")){
					var target = this.parentElement.getAttribute("data-target");
					this.classList.remove("active");
					document.getElementById(target).classList.add('is-hidden');

				}else{
					var target = this.parentElement.getAttribute("data-target");
					this.classList.add("active");
					document.getElementById(target).classList.remove('is-hidden');
				}
				

			}
			ele.appendChild(item);
		}
		


	}


	return exports;
})();




more.func.init();
tabs.func.init();
