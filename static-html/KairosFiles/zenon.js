/* <![CDATA[ */
//TRITON JavaScript 
jQuery(window).load(function($) {
jQuery("#topmenu ul.menu").tinyNav();
jQuery('#footer:has(.widgets ul:empty)').hide();
	
//IE SELECTORS
jQuery('#related #output li:eq(3), .lay1 .hentry:eq(2), .lay1 .hentry:eq(5), .lay1 .hentry:eq(8), .lay1 .hentry:eq(11), .lay1 .hentry:eq(14), .lay1 .hentry:eq(17), .lay2 .hentry:eq(2), .lay2 .hentry:eq(5), .lay2 .hentry:eq(8), .lay2 .hentry:eq(11), .lay2 .hentry:eq(14), .lay2 .hentry:eq(17), .ads-125x125 a:eq(1) img, .ads-125x125 a:eq(3) img').css({'margin-Right':'0px'});
jQuery('.midrow_block:last-child .mid_block_content, #sidebar .widgets .widget li:last-child').css({'border':'none'});

jQuery('.skew_bottom_big').transform({rotate: '1deg'}); 
jQuery('.skew_bottom_right').transform({rotate: '51deg'});

jQuery('.skew_top_big').transform({rotate: '1deg'}); 
jQuery('.skew_top_right').transform({rotate: '-35deg'});


jQuery('.midrow_blocks_wrap').equalWidths(); 

	//SHARE
	if (jQuery.support.opacity) {
	jQuery('.social li').css({'opacity': '0.3'});
 	jQuery('.social li').hoverIntent(function(){
	jQuery(this).animate({ 'opacity': '1'}, 200);
	}, function(){
	jQuery(this).animate({'opacity': '0.3'}, 100);	
	});
	}
	
	//MENU Animation
	jQuery('#topmenu ul > li').hoverIntent(function(){
	jQuery(this).find('.sub-menu:first, ul.children:first').slideDown({ duration: 200});
	}, function(){
	jQuery(this).find('.sub-menu:first, ul.children:first').slideUp({ duration: 200});	
	});
	jQuery('#topmenu ul li').not('#topmenu ul li ul li').hover(function(){
	jQuery(this).addClass('menu_hover');
	}, function(){
	jQuery(this).removeClass('menu_hover');	
	});
	jQuery('#topmenu li').has("ul").addClass('zn_parent_menu');
	jQuery('.zn_parent_menu > a').append("<span></span>");


//Layout1 Animation

var divs = jQuery(".lay1 .hentry");
for(var i = 0; i < divs.length; i+=3) {
  divs.slice(i, i+3).wrapAll("<div class='zn_row'></div>");
}


	jQuery('.lay1 .hentry, .lay2 .hentry ').hover(function(){
		jQuery(this).find('.date_meta').stop().animate({'right':'0px'}, 300);
		jQuery(this).find('.block_comm').stop().animate({'left':'0px'}, 300);
	}, function(){
		jQuery(this).find('.date_meta').stop().animate({'right':'-300px'}, 300);
		jQuery(this).find('.block_comm').stop().animate({'left':'-200px'}, 300);
	});


//Comment Form
jQuery('.comment-form-author, .comment-form-email, .comment-form-url').wrapAll('<div class="field_wrap" />');

jQuery(".comment-reply-link").click(function () {
      jQuery('#respond_wrap .single_skew_comm, #respond_wrap .single_skew').hide();
    });
jQuery("#cancel-comment-reply-link").click(function () {
      jQuery('#respond_wrap .single_skew_comm, #respond_wrap .single_skew').show();
    });	

});


//JQUERY MASONRY in Footer Widgets
jQuery(window).load(function($) {
jQuery('#footer').masonry({ itemSelector: '.widget' });

});



/* ]]> */