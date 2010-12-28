/**
 * AJAX form plugin for jQuery
 *
 * @copyright  Copyright (c) 2009 Jan Marek
 * @license    MIT
 * @link       http://nettephp.com/cs/extras/ajax-form
 * @version    0.1
 */

jQuery.fn.extend({
	ajaxSubmit: function (callback) {
		var form;
		var sendValues = {};

		// submit button
		if (this.is(":submit")) {
			form = this.parents("form");
			sendValues[this.attr("name")] = this.val() || "";

		// form
		} else if (this.is("form")) {
			form = this;

		// invalid element, do nothing
		} else {
			return null;
		}

		// validation
		if (form.get(0).onsubmit && !form.get(0).onsubmit()) return null;

		// get values
		var values = form.serializeArray();

		for (var i = 0; i < values.length; i++) {
			var name = values[i].name;

			// multi
			if (name in sendValues) {
				var val = sendValues[name];

				if (!(val instanceof Array)) {
					val = [val];
				}

				val.push(values[i].value);
				sendValues[name] = val;
			} else {
				sendValues[name] = values[i].value;
			}
		}

		// send ajax request
		var ajaxOptions = {
			url: form.attr("action"),
			data: sendValues,
			type: form.attr("method") || "get"
		};

		if (callback) {
			ajaxOptions.success = callback;
		}

		return jQuery.ajax(ajaxOptions);
	}

});
$(document).ready(function () {
        // odeslání na formulářích
        $("form").submit(function () {
                $(this).ajaxSubmit(
                    function(){
                        $("html").fadeOut(500, function(){
                            $("html").fadeIn(500);
                        });
                        
                    }
        );
                return false;
        });

        // odeslání pomocí tlačítek
        $("form :submit").click(function () {
                $(this).ajaxSubmit(function(payload){
                        $.nette.success(payload);
                        window.setTimeout(function(){
                        $('#snippet--flashMesagesHomePage').fadeOut(1000, function(){
                            $('#snippet--flashMesagesHomePage').remove();
                        });
                            },3000);
                    }
        );
                return false;
        });
});