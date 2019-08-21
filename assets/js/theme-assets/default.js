(function($, root, undefined) {
  $(function() {
    "use strict";
    // DOM ready, take it away
    set_footer();
  });

  function set_footer() {
    let main = $("body main");
    let headerHeight = $("header.header").height();
    let footerHeight = $("footer.footer").height();
    let windowHeight = $(window).height();
    let busy_space_h = headerHeight + footerHeight;
    let diff = windowHeight - busy_space_h;
    main.height() < diff ? main.css("min-height", diff + "px") : "";
  }
})(jQuery, this);