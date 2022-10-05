"use strict";

$(function() {

	//! HAMBURGER;
	
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
	
	//! SELECT - OPTION;
	
	$("select[value]").each(function() {
		let self = this;
		let value = self.getAttribute('value');
		$(self).find('option').each(function(i) {
			if( this.hasAttribute('value') ) var option = this.getAttribute('value');
			else var option = this.innerText.trim();
			if( option == value ) {
				self.selectedIndex = i;
				self.dispatchEvent(new Event('change'));
			}
		});
	});

});