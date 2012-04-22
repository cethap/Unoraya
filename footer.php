			<footer role="contentinfo">
			
				<div id="inner-footer" class="clearfix">
		          
		          <div id="widget-footer" class="clearfix row-fluid">
		            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer1') ) : ?>
		            <?php endif; ?>
		            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer2') ) : ?>
		            <?php endif; ?>
		            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer3') ) : ?>
		            <?php endif; ?>
		          </div>
					
					<nav class="clearfix">
						<?php bones_footer_links(); // Adjust using Menus in Wordpress Admin ?>
					</nav>
					
					<p class="pull-right"><a href="http://320press.com" id="credit320" title="By the dudes of 320press">320press</a></p>
			
					<p class="attribution">&copy; <?php bloginfo('name'); ?></p>
				
				</div> <!-- end #inner-footer -->
				
			</footer> <!-- end footer -->
		
		</div> <!-- end #container -->
		<div style="position:relative; overflow:hidden;">
			<img class="my_rotator" src="<?php echo get_template_directory_uri()."/site-img/dd.png" ?>" style="bottom: 0; float: right; left: 185px; position: relative;">
		</div>
		<!-- scripts are now optimized via Modernizr.load -->	
		<script src="<?php echo get_template_directory_uri(); ?>/library/js/scripts.js"></script>
		
		<!--[if lt IE 7 ]>
  			<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
  			<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
		<![endif]-->
		
		<?php wp_footer(); // js scripts are inserted using this function ?>
		<script>


/** 
 * @author bipsa 
 * @class CSS3 Jquery Plugin and Mobile handlers. 
 */ 
;(function($){ 
    
   $.fn.isCSSAnimable = function (){ 
      return true; 
   } 
    
   /** 
    * @author Sebastian Romero 
    * @param {Object} options 
    */ 
   $.fn.CSS3Animate = function(options){ 
      var defaults = { 
         "class" : "in", 
         "oncomplete": null, 
         "time": 300000, 
         "property": "opacity", 
         "css" : {}, 
         "transition": "ease-in-out", 
         "delay" : 1 
      }; 
      var settings = $.extend({}, defaults, options); 
      this.each(function(index, current){ 
         var element = $(this); 
         if ($("body").isCSSAnimable()) { 
            if (typeof settings.property === "object")  
               settings.property = settings.property.join(",") 
            var cssApply = $.extend({}, { 
               "-webkit-animation-timing-function": settings.transition, 
               "-webkit-transition-duration": (settings.time / 1000) + "s", 
               "-webkit-transition-property": settings.property, 
               "-webkit-transition-delay": (settings.delay / 1000) + "s", 
               "-moz-transition-duration": (settings.time / 1000) + "s", 
               "-moz-transition-property" : settings.property 
            }, settings.css); 
            element.css(cssApply).addClass(settings["class"]); 
            if (settings.oncomplete)  
               element.transitionEnded(settings.oncomplete); 
         } else { 
            if(settings.oncomplete) 
               element.animate(settings.css, settings.oncomplete); 
            else  
               element.animate(settings.css); 
         } 
      }); 
      return this; 
   }; 
    
       
   /** 
    * @author bipsa 
    * @param {Function} onComplete 
    */ 
   $.fn.transitionEnded = function(onComplete){ 
      this.each(function(index, current){ 
         var element = $(this); 
         var action = function (event) { 
            if (onComplete) { 
               onComplete(event, element); 
               if((jQuery.browser.webkit != true)) 
                  element.get(0).removeEventListener('transitionend', action, false); 
               else  
                  element.get(0).removeEventListener('webkitTransitionEnd', action, false); 
            } 
         }; 
         if((jQuery.browser.webkit == true)) 
            element.get(0).addEventListener('webkitTransitionEnd', action, false); 
         else if (jQuery.browser.mozilla && (parseFloat(jQuery.browser.version.substr(0, 3)) > 1.9)) { 
            element.get(0).addEventListener('transitionend', action, false); 
         } else  
            onComplete(null, element); 
      }); 
      return this; 
   };    
})(jQuery);



$(".my_rotator").CSS3Animate({
   "property": ["-moz-transform", "webkit-transform"],
   "transition-duration": 1000,
   "css": {
      "-moz-transform" : "rotate(3050deg) scale(1) rotate(0deg)",
      "webkit-transform" : "rotate(3050deg) scale(1) rotate(0deg)"
   }
});


		</script>
	</body>

</html>