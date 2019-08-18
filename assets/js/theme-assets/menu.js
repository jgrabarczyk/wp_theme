/*
 *  
 *
 */

(function($, root, undefined) {
  $(function() {
    mainMenu();
  });

  function mainMenu() {
    const 
      $window = $(window),
      $header = $(".header.header"); 
      $menuWrapper = $(".nav"),
      $menuBox = $("#menu-body"),
      $menuBtn = $("#mobile-menu-handler"),

    onWindowEvents();
    onMouseClick();
    onKeyboardClick();
    handleSubMenu();
    updateBodyTopPadding();

    function onWindowEvents() {
      $window.on("scroll resize", function() {
        stickHeaderToTop();        
      });
    }

    function onMouseClick() {
      $(document).on("click tap touch", function(e) {
        if (
          !$menuWrapper.is(e.target) &&
          $menuWrapper.has(e.target).length === 0
        ) {
          closeMainMenu();
        }
      });

      $menuBtn.on("click tap touch", () => {
        toggleMainMenu();
      });
    }

    function onKeyboardClick() {
      const ESCAPE_KEY_CODE = 27;
      window.addEventListener("keydown", function(event) {
        if ($menuBox.hasClass("active") && event.keyCode === ESCAPE_KEY_CODE) {
          closeMainMenu();
        }
      });
    }

    function handleSubMenu() {
      addToggleArrowToSubMenu();
      animateArrowSubMenu();
    }

    function toggleMainMenu() {
      $(this).toggleClass("active");
      $menuBox.toggleClass("active");
    }

    function closeMainMenu() {
      if (!$menuBtn.hasClass("active") && !$menuBox.hasClass("active")) {
        return;
      }
      $menuBtn.removeClass("active");
      $menuBox.removeClass("active");
    }

    function stickHeaderToTop() {
      let offset = $header.height();
      let scrollTop = $window.scrollTop();

      if (scrollTop > offset) {
        if ($header.hasClass("sticky")) {
          return;
        }
        $header.addClass("sticky"); 
      } else {
        $header.removeClass("sticky");                
      }
    }

    function addToggleArrowToSubMenu() {
      if ($("#menu-body ul li").children(".sub-menu").length > 0) {
        $(".sub-menu").before(
          '<span class="mobile-nav-arrow"><i class="fa fa-angle-down"></i></span>'
        );
      }
    }

    function animateArrowSubMenu() {
      $(".mobile-nav-arrow").on("click tap touch", function() {
        $(this)
          .siblings(".sub-menu")
          .slideToggle("slow");
        $(this).toggleClass("rotate-arrow");
      });
    }

    function updateBodyTopPadding(){
      $('body').css('padding-top', $header.height() );             
    }
  }
})(jQuery, this);
