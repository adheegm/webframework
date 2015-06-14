(function($){
	//render main menu left 
	$.ajax({
			url: 'php/api/menu.php',
			type: 'json',
			contentType: 'application/json',
			success: function(result){
				var $jsonMenu = $.parseJSON(result);
				$.each($jsonMenu.main_menu_left, function(index, value){
					$('#main-menu-left').append('<li><a href="' + value.link + '">' + value.text + '</a></li>');
				});
				$.each($jsonMenu.main_menu_right, function(index, value){
					$('#main-menu-right').append('<li><a href="' + value.link + '">' + value.text + '</a></li>');
				});				
			}
		});
})(jQuery);