	//graceful rendering of banner image, creating the required elements on the fly
	jQuery('#banner').append(jQuery('<a>')
							.attr('href', '/stratus').append(jQuery('<img>')
															.attr('id','banner_image')));
	jQuery('#banner').hide();
	jQuery('#banner_image').attr({
									src: "/stratus/custom/printBanner.php",
									alt: "Banner"
								});
	jQuery('#banner').delay('1500').fadeIn('slow');