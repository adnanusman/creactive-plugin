<?php
/** 
* Plugin Name: Custom Scripts
* Description: Custom Scripts created by Adnan Usman for Creactive Inc.
* Author: Adnan Usman
* Author URI: https://github.com/adnanusman/
* Plugin URI: https://github.com/adnanusman/creactive-plugin
* GitHub Plugin URI: https://github.com/adnanusman/creactive-plugin
* Version: 1.0.3
*/
add_action( 'wp_footer', 'creactive_scripts' );
function creactive_scripts(){
  ?>
<script type="text/javascript">

var creactiveApp = {

	fadeOut: function(el) {
		el.style.opacity = 1;
	
			(function fade() {
				if((el.style.opacity -= .1) < 0) {
				setTimeout(function() {el.style.display = "none";}, 1000);
				} else {
				requestAnimationFrame(fade);
				}
			})();
		},
	fadeIn: function(el, display) {
		el.style.opacity = 0;
		el.style.display = display || "block";
		
			(function fade() {
				var val = parseFloat(el.style.opacity);
				if (!((val += .1) > 1)) {
					el.style.opacity = val;
					requestAnimationFrame(fade);
				}
			})();
		},

	setupEventListeners: function () {
		var viewList = document.getElementsByClassName('viewlist');
		var app = this;

		for (var i = 0; i<viewList.length; i++) {
			viewList[i].addEventListener('click', function(event) {
				
				var hiddenListID = event.target.parentNode.nextElementSibling.id;
			
					if (hiddenListID.startsWith('hidden')) {
							
						var hiddenList = document.getElementById(hiddenListID);

						if(hiddenList.style.display == 'block') {
							app.fadeOut(hiddenList);
						} else {
							app.fadeIn(hiddenList);
						}

                                        } else {

                                        console.log('ID does not begin with hidden');

                                        }
			}, false);
		}
	}		
};

creactiveApp.setupEventListeners();

</script>
  <?php
}


