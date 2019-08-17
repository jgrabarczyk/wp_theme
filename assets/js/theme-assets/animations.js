(function($, root, undefined) {
	jQuery.fn.extend({
		isInViewport: function() {
			windowTopOffset = $(window).scrollTop();
			windowBottomOffset = $(window).scrollTop() + self.innerHeight;
			elOffset = this.offset().top;
			return elOffset > windowTopOffset && elOffset <= windowBottomOffset;
		},
		wasTriggered: function() {			
			return this.is("[data-triggered]");
		},
		setAsTriggered: function() {
			$(this).attr("data-triggered", "true");
		},
		animate: function() {
			type = 'js-anim-' +  this.attr("data-anime");
      console.log(this);
			this.addClass(type);			
			this.setAsTriggered();
		}
	});

	$(document).ready(function() {
    $item = $("[data-anime]");
    $item.each(function(index, el) {
      $(el).parent().addClass('js-anim-parent');
    });
		$(window).on("scroll", function() {
			$item.each(function(index, el) {
				if ($(el).isInViewport() && !$(el).wasTriggered()) {
          $(el).animate();     
				}
			});
		});
	});

	///
})(jQuery, this);
