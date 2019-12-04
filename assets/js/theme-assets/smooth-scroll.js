jQuery(document).ready(function() {
  let smoothScroll = new SmoothScroll();
});
class SmoothScroll {
  constructor() {
    this.menuOffset = jQuery(".wp-header-menu").height() + 25;
    setTimeout(this.onInit, 500);
  }
  onInit = () => {
    let classThis = this;

    if (!location.hash) return;
    window.scrollTo(0, 0);
    classThis.scrollToTarget(jQuery(location.hash));
  };

  scrollInsidePage = () => {
    let classThis = this;
    jQuery('[href*="#"]')
      .not('[href="#"]')
      .not('[href="#0"]')
      .click(function() {
        if (!classThis.isPageLink(this)) return;
        classThis.scrollToTarget(jQuery(this.hash), true);
      });
	};
	
  isPageLink = that => {
    return (
      location.pathname.replace(/^\//, "") ==
        that.pathname.replace(/^\//, "") && location.hostname == that.hostname
    );
  };

  scrollToTarget(target, preventDefault = false) {
    let classThis = this;
    target = target.length
      ? target
      : jQuery("[name=" + this.hash.slice(1) + "]");
    if (target.length === 0) return;
    if (preventDefault) {
      event.preventDefault();
    }
    jQuery("html, body").animate(
      {
        scrollTop: target.offset().top - classThis.menuOffset
      },
      1000
    );
  }
}
