/**
 * "Rules of Optimization:
 *     Rule 1: Don't do it.
 *     Rule 2 (for experts only): Don't do it yet.”
 *
 * ~ Michael A. Jackson
 */

(function (undefined) {
    require.config({
        baseUrl: 'js',
        paths: {
            jquery: 'vendor/jquery/jquery.min',
            superfish: 'vendor/superfish',
            fitvids: 'vendor/jquery.fitvids',
            isotope: 'vendor/jquery.isotope.min',
            tinynav: 'vendor/tinynav.min',
            theme: 'theme'
        },
        shim: {
            superfish: {
                deps: [
                    'jquery'
                ],
                exports: 'jQuery.fn.superfish'
            },
            fitvids: {
                deps: [
                    'jquery'
                ],
                exports: 'jQuery.fn.fitVids'
            },
            isotope: {
                deps: [
                    'jquery'
                ],
                exports: 'jQuery.fn.isotope'
            },
            tinynav: {
                deps: [
                    'jquery'
                ],
                exports: 'jQuery.fn.tinyNav'
            }
        }
    });

    require(['jquery', 'superfish', 'theme'], function ($, Superfish, Theme) {
        Theme.initialize();
        $(document).ready(onReady);

        return;

        function onReady() {
            console.log('document ready');

            $('ul.sf-menu').supersubs({
                minWidth: 8, // minimum width of sub-menus in em units
                maxWidth: 15, // maximum width of sub-menus in em units
                extraWidth: 1 // extra width can ensure lines don't sometimes turn over
                              // due to slight rounding differences and font-family
            }).superfish({
                delay: 400,
                animation: {
                    opacity: 'show',
                    height: 'show'
                },
                speed: 'fast',
                autoArrows: true,
                dropShadows: true
            });
        }
    });
}).call(this);
