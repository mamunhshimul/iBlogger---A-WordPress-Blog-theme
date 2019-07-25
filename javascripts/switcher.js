(function($){

    /*!
     * jQuery Cookie Plugin
     * https://github.com/carhartl/jquery-cookie
     *
     * Copyright 2011, Klaus Hartl
     * Dual licensed under the MIT or GPL Version 2 licenses.
     * http://www.opensource.org/licenses/mit-license.php
     * http://www.opensource.org/licenses/GPL-2.0
     */

    $.cookie = function(key, value, options) {
        // key and at least value given, set cookie...
        if (arguments.length > 1 && (!/Object/.test(Object.prototype.toString.call(value)) || value === null || value === undefined)) {
            options = $.extend({}, options);

            if (value === null || value === undefined) {
                options.expires = -1;
            }

            if (typeof options.expires === 'number') {
                var days = options.expires, t = options.expires = new Date();
                t.setDate(t.getDate() + days);
            }

            value = String(value);

            return (document.cookie = [
                encodeURIComponent(key), '=', options.raw ? value : encodeURIComponent(value),
                options.expires ? '; expires=' + options.expires.toUTCString() : '', // use expires attribute, max-age is not supported by IE
                options.path    ? '; path=' + options.path : '',
                options.domain  ? '; domain=' + options.domain : '',
                options.secure  ? '; secure' : ''
            ].join(''));
        }

        // key and possibly options given, get cookie...
        options = value || {};
        var decode = options.raw ? function(s) { return s; } : decodeURIComponent;

        var pairs = document.cookie.split('; ');
        for (var i = 0, pair; pair = pairs[i] && pairs[i].split('='); i++) {
            if (decode(pair[0]) === key) return decode(pair[1] || ''); // IE saves cookies with empty string as "c; ", e.g. without "=" as opposed to EOMB, thus pair[1] may be undefined
        }
        return null;
    };


    // copy class of the above in order to add a class in the footer
    function dom_class( el, prefix, newClass ) {
        // remove all app- prefixed classes
        $( el ).removeClass (function (index, css) {

            var re = new RegExp( "\\b" + prefix + "\\S+", "g" );
            return (css.match (re) || []).join(' ');
        });
        $( el ).addClass( newClass );
        $.cookie( prefix + 'smartbox', newClass, { path : '/', expires : 7 } );
    }

    $(document).ready(function() {

        var switcher = $( '#style-switcher' );

        // check if we have a cookie for the pattern
        var pattern = $.cookie( 'pattern-smartbox');
        if( pattern !== null ) {
            dom_class('body', 'pattern-', $.cookie( 'pattern-smartbox') );
        }
        else {
            // load default
            dom_class('body', 'pattern-', 'pattern-bedge-grunge' );
        }

        if( $.cookie( 'theme-color-smartbox') !== null ) {
            dom_class('body', 'theme-color-', $.cookie( 'theme-color-smartbox') );
        }

        if( $.cookie( 'theme-smartbox') !== null ) {
            dom_class( 'footer , #top-bar','theme-', $.cookie( 'theme-smartbox') );
        }

        if( $.cookie( 'font-smartbox') !== null ) {
            dom_class( 'body','font-', $.cookie( 'font-smartbox') );
        }

        if( $.cookie( 'width-smartbox') !== null ) {
            setFullWidth( $.cookie( 'width-smartbox') );
        }

        if( $.cookie( 'header-smartbox') !== null ) {
            setHeader( $.cookie( 'header-smartbox') );
        }

        // set pattern clicks
        switcher.find( '.pattern-switch' ).click( function() {
            var $link = $( this );
            var pattern = $link.data('pattern');
            var fontcolor = $link.data('theme');
            dom_class( 'body', 'pattern-', pattern );
            dom_class( 'footer , #top-bar','theme-', fontcolor );
        });

        // set colour clicks
        switcher.find( '.colour-switch' ).click( function() {
            var $link = $( this );
            var color = $link.data('color');
            dom_class( 'body', 'theme-', color );
        });

        // set nav bar clicks
        switcher.find( '.navbar-switch' ).click( function() {
            var $link = $( this );
            var header = $link.data('header');
            setHeader( header );
            $.cookie( 'header-smartbox', header, { path : '/', expires : 7 } );
        });

        function setHeader( header ) {
            if( header === 'inverse' ) {
                $( '.navbar-static-top' ).addClass( 'navbar-inverse' );
            }
            else {
                $( '.navbar-static-top' ).removeClass( 'navbar-inverse' );
            }
        }

        // set width clicks
        switcher.find( '.width-switch' ).click( function() {
            var $link = $( this );
            var width = $link.data('width');
            setFullWidth( width );
            $.cookie( 'width-smartbox', width, { path : '/', expires : 7 } );
        });

        function setFullWidth( width ) {
            if( width === 'fullwidth' ) {
                $( 'body' ).addClass( 'fullwidth' );
            }
            else {
                $( 'body' ).removeClass( 'fullwidth' );
            }
        }

        // set font clicks
        switcher.find( '.font-switch' ).click( function() {
            var $link = $( this );
            var font = $link.data('font');
            dom_class( 'body', 'font-', font );
        });

        // make switcher toggle
        var bt = switcher.find('.handle');
        bt.on('click', function(e) {
            switcher.toggleClass('open');
            if ( switcher.hasClass('open') ) {
                switcher.animate({
                    left: 0
                }, 400);
            } else {
                switcher.animate({
                    left: -240
                }, 400);
            }
            e.preventDefault();
        });
    });
})(jQuery);
