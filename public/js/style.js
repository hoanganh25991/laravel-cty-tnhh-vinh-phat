function aminate(el, x) {
	$(el)
		
};

var bounceAnimate = 'bounce animated';
const animateEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';

$('.caption-title').hover(function(){
	$(this)
		.removeClass(bounceAnimate)
		.addClass(bounceAnimate)
		.one(animateEnd,
			function(){
				$(this).removeClass(bounceAnimate);
			});
});

// var preNavLi;
//
// $('#navList').find('li').each(function(){
// 	var li = $(this);
// 	if(preNavLi){
// 		preNavLi.removeClass('active');
// 	}
//
// 	li.on('click', function(){
// 		preNavLi = li;
// 		li.addClass('active');
// 	});
// });

var url = $(location).attr('href');
//remove trailing "/" on url
url = url.replace(/\/$/, "");

$('#navList').find('li').each(function(){
	var li = $(this);
	var aHref = li.find('a').attr('href');

	console.log('url', 'aHref');
	console.log(url, aHref);

	var activeOn;

	//handle for "Sản phẩm"
	if(url.includes('products')){
		activeOn = $('#productCat');
	}

	//normal case
	if(url == aHref){
		activeOn = li;
	}

	if(activeOn){
		activeOn.addClass('active');
	}
});