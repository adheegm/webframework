(function(){
	$.ajax({
		url: 'php/api/menu.php',
		type: 'json',
		contentType: 'application/json',
		success: function(result){
			var json = $.parseJSON(result);
			var menu = json.menu;
			alert(JSON.stringify(menu));
		}
	});
})();