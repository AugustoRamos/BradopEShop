function PhotoBookGallery(){
	jQuery('.wcp-loader').show();
	if (initiated) { jQuery('.flipbook').booklet('destroy'); };
	jQuery('.flipbook').css('width', '100%');	
	jQuery('.flipbook').find('img').css('width', '100%');

	var width = jQuery('.flipbook').find('img').width();
	var height = jQuery('.flipbook').find('img').height()/2;
	var autoplay = false;
	var bookarrows = false;
	var booktabs = false;
	var closedbook = false;
	var delay = "2000";
	var keyboardcontrols = true;
	var manualcontrol = false;
	var pagenumbers = false;
	var pagepadding = 0;
	var readingdirection = "LTR";
	var speedofturn = 1000;
	var startingpage = 1;
	var manual =  true;

	if (book.width != '') { width = book.width * 2; }
	if (book.height != '') { height = book.height; }
	if (book.autoplay == 'true') { autoplay = true; }
	if (book.bookarrows == 'true') { bookarrows = true; }
	if (book.booktabs == 'true') { booktabs = true; }
	if (book.closedbook == 'true') { closedbook = true; }
	if (book.delay != '') { delay = book.delay; }
	if (book.keyboardcontrols == 'false') { keyboardcontrols = false; }
	if (book.manualcontrol == 'true') { manualcontrol = true; manual = false; }
	if (book.pagenumbers == 'true') { pagenumbers = true; }
	if (book.pagepadding != '') { pagepadding = book.pagepadding; }
	if (book.readingdirection != '') { readingdirection = book.readingdirection; }
	if (book.speedofturn != '') { speedofturn = book.speedofturn; }
	if (book.startingpage != '') { startingpage = book.startingpage; }

	jQuery('.flipbook').booklet({
        width:  width,
        height: height,
		auto: autoplay,
		arrows: bookarrows,
		tabs: booktabs,
        closed: closedbook,
        autoCenter: closedbook,
        delay: delay,
        keyboard: keyboardcontrols,
        overlays: manualcontrol,
        manual: manual,
        pageNumbers: pagenumbers,
		pagePadding: pagepadding,
		direction: readingdirection,
		speed: speedofturn,
		startingPage: startingpage,
	});
	jQuery('.wcp-loader').hide();
	initiated = true;
}
var initiated = false;
jQuery( window ).on("resize", function() {
	PhotoBookGallery();
});

jQuery(window).load(function($) {
	jQuery(window).trigger('resize');
    if (book.zoomonhover == 'true') {
	    setTimeout(function() {
			jQuery('.flipbook').find('img').each(function(index, el) {
				jQuery(this).closest('div').zoom({magnify: book.zoomdepth});
			});
	    }, 50);
    };
});