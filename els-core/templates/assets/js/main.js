"use strict";

$(function() {

	$(".hamburger[data-bs-target]").each(function() {
		let target = this.dataset.bsTarget;
		let hamburger = this;
		$( target ).on('hide.bs.collapse', function() {
			$(hamburger).removeClass('is-active');
		});
		$( target ).on('show.bs.collapse', function() {
			$(hamburger).addClass('is-active');
		});
	});

});