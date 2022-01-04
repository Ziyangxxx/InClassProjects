jQuery(document).ready(function(){
    setMenu();
    jQuery(window).resize(function(){
        setMenu();
    });
});

function setMenu() {
    if(jQuery(window).width() < 768) {
        jQuery('ul.navbar-nav').hide();
    } else {
        jQuery('ul.navbar-nav').show();
    }
}

jQuery('a.menu_toggle').click(function(){
    jQuery('ul.navbar-nav').toggle();
});