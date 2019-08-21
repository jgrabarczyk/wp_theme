let menuOffset = jQuery('.wp-header-menu').height() + 25; // menu selector + custom additional space

jQuery(document).ready(function () {
    setTimeout(function () {
        if (location.hash) {
            window.scrollTo(0, 0);
            target = location.hash.split('#');
            scrollToTarget(jQuery('#' + target[1]));
        }
    }, 0.5);
    scrollInsidePage();
});

function scrollInsidePage() {
    jQuery('[href*="#"]').not('[href="#"]').not('[href="#0"]').click(function () {
        if (isPageLink(this)) {
            scrollToTarget(jQuery(this.hash), true);
        }
    });
}

function scrollToTarget(target, preventDefault = false) {
    target = target.length ? target : jQuery('[name=' + this.hash.slice(1) + ']');
    if (target.length === 0 ) return; 
    if (preventDefault) { event.preventDefault(); }
    jQuery('html, body').animate({
        scrollTop: target.offset().top - menuOffset
    }, 1000);
}

function isPageLink(that) {
    return isPagelink = (location.pathname.replace(/^\//, '') == that.pathname.replace(/^\//, '') && location.hostname == that.hostname) ? true : false;     
}