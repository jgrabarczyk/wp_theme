(function($, root, undefined) {
  $(function() {
    let sfToggler = new SearchFormToggler("#searchform-mobile-input-hidden");
  });
  class SearchFormToggler {
    constructor(formWrapperSelector) {
      this.searchFormWrapper =
        $(formWrapperSelector) || $("#searchform-mobile-input-hidden");

      if (this.searchFormWrapper.length) {
        (this.searchFormToggler = $("#searchform-toggle")),
				(this.searchForm = $(".search-form"));

        this.toggleOnClick();
        this.closeOnOutsideClick();
        this.onKeyboardClick();
      }
    }

    toggleOnClick = () => {
      this.searchFormToggler.on("click tap touch", e => {
        this.searchForm.toggleClass("active");
      });
    };

    closeOnOutsideClick() {      
      $(document).on("click tap touch", e => {
        if (
          !this.searchFormWrapper.is(e.target) &&
          this.searchFormWrapper.has(e.target).length === 0 &&
          this.searchForm.is(":visible")
        ) {
          this.searchForm.removeClass("active");
        }
      });
    }

    onKeyboardClick = () => {      
      const ESCAPE_KEY_CODE = 27;
      window.addEventListener("keydown", (event) => {
        if (
          this.searchForm.is(":visible") &&
          event.keyCode === ESCAPE_KEY_CODE
        ) {
          this.searchForm.removeClass("active");
        }
      });
    };
  }
})(jQuery, this);
