$(function() {
	$('html').removeClass('client-nojs');
    $('#menu-toggle').click(function(e) {
        e.preventDefault();
        $('#wrapper').toggleClass("toggled");
        if($('#wrapper').hasClass('toggled')){
            localStorage.setItem('menu-toggle','toggled')
        }else{
            localStorage.setItem('menu-toggle','')
        }
    });
    $('#preftoc').addClass('nav nav-tabs');
	$('a[href^=#][role!=tab]').click(function(e){
		e.preventDefault();
		var target = $(this).attr('href').replace(/\./g, '\\.');
		$('html, body').animate({
			scrollTop: $( target ).offset().top - 200   
		}, 250);                                                                                                                                                                                                  
	});
	$('#follow').on('click', function(){
		$.ajax({
		    url: '/follow.php',
		    dataType: 'json',
		    data: {
		    	site : wgServer,
		    	user : wgUserId
		    },
		    success: function(data){
		        $('#follow').removeClass('mw-ui-progressive').addClass('mw-ui-icon mw-ui-icon-before mw-ui-icon-ok').value('已关注');
		    }
		});
	});

	$( document ).on('change', '#subnav-select', function() {
		window.location = $(this).val();
	});

	$('table')
		.not('#toc')
		.not('.mw-specialpages-table')
		.each(function() {
			var $el = $(this);

			if( $el.closest('form').length == 0 ) {
				if ( $el.hasClass('info-box') ) {
					$el.addClass('table')
						 .addClass('table-bordered');
				} else {
					$el.addClass('table')
						 .addClass('table-striped')
						 .addClass('table-bordered');
				}//end else
			}//end if
		});

	$('pre:not([data-raw="true"])').addClass('prettyprint linenums');
	$('.jumbotron pre').removeClass('prettyprint linenums');

	$('.editButtons').addClass('well');
	$('input[type=submit],input[type=button],input[type=reset]').addClass('btn');
	$('input[type=submit]').addClass('btn-primary');

	// $('input[type=checkbox],input[type=radio]').each(function() {
	// 	var $el = $(this);

	// 	var id = $el.attr('id');
	// 	$( 'label[for=' + id + ']' ).each(function() {
	// 		var $label = $(this);
	// 		if( $.trim( $label.text() ) != '' ) {
	// 			$el.prependTo( $label );
	// 		}//end if

	// 		$label.wrap( '<div class="checkbox"/>' );
	// 	});

	// 	$el.closest('label').addClass($el.attr('type'));
	// });

	//Temperory fix
	$('.mw-ui-vform-field div').removeClass('mw-ui-checkbox');
	$('#wpRemember').css('margin-right','5px');

	$('.tip').tooltip();
	$('[data-toggle="popover"]').popover();

	if ( $('.toc-sidebar').length > 0 ) {
		if ( 0 === $('#toc').length ) {
			$('.toc-sidebar').remove();
			
		} else {
			$('.wiki-body-section').removeClass('col-md-12').addClass('col-md-10');
			$('.toc-sidebar').removeClass('hidden-md').addClass('col-md-2');
			// $('.toc-sidebar').append('<h3>摘要</h3>');
			$('#toc').each(function() {
				$(this).find('ul:first').appendTo( '.toc-sidebar' );
				$(this).remove();
			});
			$('nav.toc-sidebar > ul').append('<li><a href="#top">回到顶部</a></li>');
			$('nav.toc-sidebar > ul').addClass('hidden-sm hidden-xs hidden-print').attr('data-spy','affix').attr('data-offset-top','0').attr('data-offset-bottom','250');
			$('nav.toc-sidebar ul').addClass('nav nav-list');
			$('.toc-sidebar').attr('id', 'toc');
			$('body').scrollspy({target: '#toc', offset:230}); 
		}//end else
	} else {
		$('#toc').each(function() {
			var $toc = $(this);
			var $title = $toc.find('#toctitle');
			var $links = $title.siblings('ul');

			$('.page-header').prepend('<ul class="nav nav-pills pull-right"><li class="dropdown" id="page-contents"><a class="dropdown-toggle" data-toggle="dropdown"><i class="icon-list"></i> Contents <span class="caret"></span></a> <ul class="dropdown-menu"></ul></li></ul>');

			$('.page-header #page-contents').find('.dropdown-menu').html( $links.html() );
		});

		if( $('.page-header .nav').length === 0 ) {
			$('.page-header').prepend('<ul class="nav nav-pills pull-right"></li></ul>');
		}//end if

		var $header = $('.page-header');
		var $hero = $('.hero-unit');
		var $edit = $('.navbar .content-actions .edit');
		if( $edit.length > 0 ) {
			if( $hero.length ) {
				if( ! $hero.find('.nav-pills').length ) {
					$hero.prepend('<ul class="nav nav-pills pull-right"></ul>');
				}//end if

				$edit.closest('li').clone().prependTo( $hero.find('.nav-pills') );
			} else {
				$edit.closest('li').clone().prependTo( $header.find('.nav-pills') );
			}//end else
		}//end if
	}//end if

	prettyPrint();

	$('#wiki-body .body a[title="Special:UserLogin"]').click();
	$('.dropdown-toggle').dropdown();
	// Hide Header on on scroll down
	var didScroll;
	var lastScrollTop = 0;
	var delta = 5;
	var navbarHeight = $('header').outerHeight();

	$(window).scroll(function(event){
	    didScroll = true;
	});

	setInterval(function() {
	    if (didScroll) {
	        hasScrolled();
	        didScroll = false;
	    }
	}, 250);

	function hasScrolled() {
	    var st = $(this).scrollTop();
	    
	    // Make sure they scroll more than delta
	    if(Math.abs(lastScrollTop - st) <= delta)
	        return;
	    
	    // If they scrolled down and are past the navbar, add class .nav-up.
	    // This is necessary so you never see what is "behind" the navbar.
	    if (st > lastScrollTop && st > navbarHeight){
	        // Scroll Down
	        $('.subnav').removeClass('subnav-down').addClass('subnav-up');
	        // $('.navbar').removeClass('nav-down').addClass('nav-up');
	        $('#sidebar-wraper').removeClass('sidebar-wraper-down').addClass('sidebar-wraper-up');
	    } else {
	        // Scroll Up
	        if(st + $(window).height() < $(document).height()) {
	            $('.subnav').removeClass('subnav-up').addClass('subnav-down');
	            // $('.navbar').removeClass('nav-up').addClass('nav-down');
	            $('#sidebar-wraper').removeClass('sidebar-wraper-up').addClass('sidebar-wraper-down');
	        }
	    }
	    
	    lastScrollTop = st;
	}
});
