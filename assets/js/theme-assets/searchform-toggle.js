(function($, root, undefined) {
  $(function() {
    searchForm();

    function searchForm() {
      const $searchFormWrapper = $("#searchform-mobile-input-hidden");
      if (!$searchFormWrapper.length) {
        return;
      }
			const 
				$searchFormToggle = $("#searchform-toggle"),
				$searchForm = $(".search-form");
				
			toggleOnClick();
			closeOnOutsideClick();
			onKeyboardClick();

			function toggleOnClick(){
				$searchFormToggle.on("click tap touch", function(e) {
					$searchForm.toggleClass('active');
				});
			}

			function closeOnOutsideClick(){
				$(document).on("click tap touch", function(e) {
					if (
						!$searchFormWrapper.is(e.target) &&
						$searchFormWrapper.has(e.target).length === 0 &&
						$searchForm.is(':visible')					
					) {
						// $searchForm.fadeOut();
						$searchForm.removeClass('active');
					}
				});
			}
			
			function onKeyboardClick() {
				const ESCAPE_KEY_CODE = 27;
				window.addEventListener("keydown", function(event) {
					if ($searchForm.is(':visible') && event.keyCode === ESCAPE_KEY_CODE) {
						// $searchForm.fadeOut();
						$searchForm.removeClass('active');
					}
				});
			}

    }
  });
})(jQuery, this);
