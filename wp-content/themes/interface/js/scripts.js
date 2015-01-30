jQuery( function() {

    // Search toggle.
    jQuery( '.search-toggle' ).on( 'click', function( event ) {
        var that = jQuery( this ), wrapper = jQuery( '#search-box' );

        that.toggleClass( 'active' );
        wrapper.toggleClass( 'hide' );

        if( that.is( '.active' ) || jQuery( '.search-toggle' )[ 0 ] === event.target ) {
            wrapper.find( '.s' ).focus();
        }
    } );

    // Enable menu toggle for small screens.
    (function() {
        var nav = jQuery( '#access' ), button, menu;
        if( !nav ) {
            return;
        }

        button = nav.find( '.menu-toggle' );
        if( !button ) {
            return;
        }

        // Hide button if menu is missing or empty.
        menu = nav.find( '.nav-menu' );
        if( !menu || !menu.children().length ) {
            button.hide();
            return;
        }

        jQuery( '.menu-toggle' ).on( 'click', function() {
            nav.toggleClass( 'toggled-on' );
        } );
    })();

    (function() {
        jQuery( document ).on( 'scroll', function() {
            var $this = jQuery( this ), $header = jQuery( '#topnav' ), $infoBarTop = jQuery( '.info-bar' ), $pageTitle = jQuery( '.page-title-wrap' ), $mainWrap = jQuery( '#main' ), $mobileNav = jQuery( '#access' );

            if( $this.scrollTop() > ($infoBarTop.innerHeight() + $header.innerHeight()) ) {
                $header.addClass( 'shrink' );
                $pageTitle.addClass( 'shrink' );
                $mainWrap.addClass( 'shrink' );
                $mobileNav.removeClass( 'toggled-on' );
            }
            else {
                $header.removeClass( 'shrink' );
                $pageTitle.removeClass( 'shrink' );
                $mainWrap.removeClass( 'shrink' );
            }
        } );
    })();

    (function() {
        var dk = jQuery( '.dk' ), lt = jQuery( '.lt' ), height;
        height = Math.max( dk.height(), lt.height() );
        dk.height( height );
        lt.height( height );
    })();
} );