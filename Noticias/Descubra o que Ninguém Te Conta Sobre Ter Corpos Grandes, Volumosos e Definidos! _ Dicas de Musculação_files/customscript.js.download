jQuery.fn.exists = function(callback) {
  var args = [].slice.call(arguments, 1);
  if (this.length) {
    callback.call(this, args);
  }
  return this;
};

/*----------------------------------------------------
/* Back to top smooth scrolling
/*--------------------------------------------------*/
jQuery(document).ready(function($) {
    jQuery('a[href=#blog]').click(function(){
        jQuery('html, body').animate({scrollTop:0}, 'slow');
        return false;
    });
});

/*----------------------------------------------------
/* Responsive Navigation
/*--------------------------------------------------*/
if (mts_customscript.responsive && mts_customscript.nav_menu != 'none') {
    jQuery(document).ready(function($){
        $('body').append('<div id="mobile-menu-overlay" />');
        // merge if two menus exist
        var menu_wrapper;
        if (mts_customscript.nav_menu == 'both') {
            menu_wrapper = $('.primary-navigation')
                .clone().attr('class', 'mobile-menu primary').wrap('<div id="mobile-menu-wrapper" />')
                .parent().hide()
                .appendTo('body');
            $('.footer-navigation').clone().attr('class', 'mobile-menu footer').appendTo(menu_wrapper);
        } else {
            menu_wrapper = $('.'+mts_customscript.nav_menu+'-navigation')
                .clone().attr('class', 'mobile-menu ' + mts_customscript.nav_menu)
                .wrap('<div id="mobile-menu-wrapper" />').parent().hide()
                .appendTo('body');
        }
    
        $('.toggle-mobile-menu').click(function(e) {
            e.preventDefault();
            e.stopPropagation();
            $('#mobile-menu-wrapper').show();

            if ( $('body').hasClass('mobile-menu-active') ) {

                var scrollTop = parseInt( $('html').css('top') );
                $('html').removeClass('noscroll');
                $('html,body').scrollTop( -scrollTop );
                $('body').removeClass('mobile-menu-active');
                $('#mobile-menu-overlay').fadeOut();

            } else {

                $('body').addClass('mobile-menu-active');
                if ( $(document).height() > $(window).height() ) {
                    var scrollTop = ( $('html').scrollTop() ) ? $('html').scrollTop() : $('body').scrollTop();
                    $('html').addClass('noscroll').css( 'top', -scrollTop );
                }
                $('#mobile-menu-overlay').fadeIn();
            }
        });
    }).click(function() {
        if ( !jQuery('body').hasClass('mobile-menu-active') ) {
            return;
        }

        jQuery('body').removeClass('mobile-menu-active');
        jQuery('html').removeClass('noscroll');
        jQuery('#mobile-menu-overlay').fadeOut();

        if ( jQuery('a#pull').css('display') !== 'none' ) { // if toggle menu button is visible ( small screens )
            var scrollTop = parseInt( jQuery('html').css('top') );
            jQuery('html,body').scrollTop( -scrollTop );
        }
    });
}
/*----------------------------------------------------
/*  Dropdown menu
/* ------------------------------------------------- */
jQuery(document).ready(function($) { 
	$('#navigation ul.sub-menu, #navigation ul.children').hide(); // hides the submenus in mobile menu too
	$('#navigation li').hover( 
		function() {
			$(this).children('ul.sub-menu, ul.children').slideDown('fast');
		}, 
		function() {
			$(this).children('ul.sub-menu, ul.children').hide();
		}
	);
});    

/*----------------------------------------------------
/* Social button scripts
/*---------------------------------------------------*/
jQuery(document).ready(function($){
      /* open share in popup window */
    $('.shareit a').on('click', function(){
        newwindow=window.open($(this).attr('href'),'','height=330,width=750');
        if (window.focus) {newwindow.focus()}
            return false;
    });
	(function(d, s) {
	  var js, fjs = d.getElementsByTagName(s)[0], load = function(url, id) {
		if (d.getElementById(id)) {return;}
		js = d.createElement(s); js.src = url; js.id = id;
		fjs.parentNode.insertBefore(js, fjs);
	  };
	jQuery('span.facebookbtn, .facebook_like').exists(function() {
	  load('//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3&appId=279900818687447', 'fbjssdk');
	});
	jQuery('span.gplusbtn').exists(function() {
	  load('https://apis.google.com/js/plusone.js', 'gplus1js');
	});
	jQuery('span.twitterbtn').exists(function() {
	  load('//platform.twitter.com/widgets.js', 'tweetjs');
	});
	jQuery('span.linkedinbtn').exists(function() {
	  load('//platform.linkedin.com/in.js', 'linkedinjs');
	});
	jQuery('span.pinbtn').exists(function() {
	  load('//assets.pinterest.com/js/pinit.js', 'pinterestjs');
	});
	jQuery('span.stumblebtn').exists(function() {
	  load('//platform.stumbleupon.com/1/widgets.js', 'stumbleuponjs');
	});
	}(document, 'script'));
});