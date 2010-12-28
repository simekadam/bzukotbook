/**
 * AJAX Nette Framwork plugin for jQuery
 *
 * @copyright   Copyright (c) 2009 Jan Marek
 * @license     MIT
 * @link        http://nettephp.com/cs/extras/jquery-ajax
 * @version     0.2
 */

jQuery.extend({
    nette: {
        updateSnippet: function (id, html) {
            $("#" + id).html(html);
        },

        success: function (payload) {
            // redirect
            if (payload.redirect) {
                window.location.href = payload.redirect;
                return;
            }

            // snippets
            if (payload.snippets) {
                for (var i in payload.snippets) {
                    jQuery.nette.updateSnippet(i, payload.snippets[i]);
                }
            }
        }
    }
});

jQuery.ajaxSetup({
    success: jQuery.nette.success,
    dataType: "json"
});

$(function() {
    // apply AJAX unobtrusive way
    $("a.ajax").live("click", function(event) {
        $.get(this.href);
        $("div#mainContent").fadeTo(300, 0.01);
        // show spinner
        $('<div id="ajax-spinner"></div>').css({
            position : "absolute",
            top: '250px',
            left: '250px',
            display: "block"

        }).ajaxStop(function() {
            $(this).remove();
            $("div#mainContent").fadeTo(300,1);
        }).appendTo("body");

        return false;
    });
});

$('#clickMe').click(function() {
    $('html').animate({
        opacity: 0.25,
        left: '+=50',
        height: 'toggle'
    }, 5000, function() {
        // Animation complete.
    });
});