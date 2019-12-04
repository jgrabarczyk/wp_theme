(function($, root, undefined) {
  $(function() {    
    let menu = new MainMenu();    
  });
  class MainMenu {
    constructor() {
      (this.window = $(window)),
			(this.header = $(".header.header")),
			(this.menuWrapper = $(".main-nav")),
			(this.menuBox = $("#menu-body")),
			(this.menuBtn = $("#mobile-menu-handler"));

			this.onWindowEvents();
			this.onMouseClick();
			this.onKeyboardClick();
			this.handleSubMenu();
			this.trackMenuActive();
    }

    stickHeaderToTop() {
      let offset = this.header.height();
      let scrollTop = this.window.scrollTop();

      if (scrollTop > offset) {
        if (this.header.hasClass("sticky")) {
          return;
        }
        this.header.addClass("sticky");
        this.trackMenuActive();
      } else {
        this.header.removeClass("sticky");
        setTimeout(this.trackMenuActive, 1000);
      }
    }

    onWindowEvents = () => {
			let classThis = this; 
      this.window.on("scroll", function() {
        classThis.stickHeaderToTop();
      });
      this.window.on("resize", function() {
        classThis.stickHeaderToTop();
      });
    };

    trackMenuActive = () => {
      let $currentActiveEl = $(".current-menu-item");
      this.updateBarActivePosition($currentActiveEl);
			let classThis = this;
      $(".wp-header-menu li").on("mouseenter", function() {
        classThis.updateBarActivePosition($(this));
      });

      $(".wp-header-menu li").on("mouseleave", function() {
        classThis.updateBarActivePosition($currentActiveEl);
      });

      $(".wp-header-menu li").on("mouseup tap touch", function() {
        $(".wp-header-menu li").off("mouseleave");
      });
    };

    updateBarActivePosition = $el => {
      let $activeBorder = $("#menu-body .active-border");
      let top = this.header.hasClass("sticky")
        ? 0
        : $el.position().top - $el.find("a").height();
      let css = {
        left: $el.position().left,
        top: top,
        width: $el.width()
      };
      $activeBorder.css(css);
    };

    onMouseClick = () => {
			let classThis = this;
      $(document).on("click tap touch", function(e) {
        if (
          !classThis.menuWrapper.is(e.target) &&
          classThis.menuWrapper.has(e.target).length === 0
        ) {
          classThis.closeMainMenu();
        }
      });

      this.menuBtn.on("click tap touch", () => {
        this.toggleMainMenu();
      });
    };

    closeMainMenu = () => {
      if (
        !this.menuBtn.hasClass("active") &&
        !this.menuBox.hasClass("active")
      ) {
        return;
      }
      this.menuBtn.removeClass("active");
      this.menuBox.removeClass("active");
    };

    onKeyboardClick = () => {
			const ESCAPE_KEY_CODE = 27;
			let classThis = this;
      window.addEventListener("keydown", function(event) {
        if (
          classThis.menuBox.hasClass("active") &&
          event.keyCode === ESCAPE_KEY_CODE
        ) {
          classThis.closeMainMenu();
        }
      });
    };

    handleSubMenu = () => {
      this.addToggleArrowToSubMenu();
      this.animateArrowSubMenu();
    };

    addToggleArrowToSubMenu = () => {
      if ($("#menu-body ul li").children(".sub-menu").length > 0) {
        $(".sub-menu").before(
          '<span class="mobile-nav-arrow"><i class="fa fa-angle-down"></i></span>'
        );
      }
    };

    animateArrowSubMenu = () => {
      $(".mobile-nav-arrow").on("click tap touch", function() {
        $(this)
          .siblings(".sub-menu")
          .slideToggle("slow");
        $(this).toggleClass("rotate-arrow");
      });
		};

		updateBodyTopPadding = () => {
      $('body').css('padding-top', this.header.height() );
    }
  }
})(jQuery, this);
