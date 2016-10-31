$(document).foundation();

$(window).bind("load", adjust_footer());

var resizeTimer;

$(window).resize( function() {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(adjust_footer, 10);
});

function adjust_footer () {
    var footer = $("#footer");
    var pos = footer.position();
    var height = $(window).height();
    height = height - pos.top - footer.height() - 30; //extra blue padding
    if (height > 0) {
        footer.css({
            'margin-top': height + 'px'
        });
    }
}
