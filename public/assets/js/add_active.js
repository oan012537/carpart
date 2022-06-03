	$(function() {
		var getPage = document.getElementById('pageName').value;
		$(".main_menu a").each(function() {
			var getMenu = $(this).attr("data-page");
			if (getPage == getMenu) {
				$(this).addClass('active-menu');
			}
		});

	});
