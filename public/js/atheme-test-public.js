(function ($) {
	"use strict";

	$(document).ready(function () {
		$("body").on(
			"added_to_cart",
			function (event, fragments, cart_hash, $button) {
				console.log({
					event,
					fragments,
					cart_hash,
					$button,
				});

				$("#atheme-test-added-to-cart")
					.removeClass("hide animate__animated animate__slideOutRight")
					.addClass("animate__animated animate__slideInRight");
			}
		);

		$("body").on("click", "#atheme-test-added-to-cart .close", function () {
			$("#atheme-test-added-to-cart")
				.removeClass("animate__animated animate__slideInRight")
				.addClass("animate__animated animate__slideOutRight");
		});
	});
})(jQuery);
