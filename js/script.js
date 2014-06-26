$(document).ready(function(){


	$("#info-nav li:first").addClass("current");
	
	$("#info-nav li a").hover(function()
		{
			$(this).addClass("hovering");
		}, 
		function()
		{
			$(this).removeClass("hovering");
		}
	);
	

	
	$("#info-nav li").click(function()
		{
			$("#info-nav li").removeClass("current");
			$(this).addClass("current");
			
			var activeTab = $(this).find("a").attr("href");
			if(activeTab == "#new")
				$('#new').load('index.php #new');
			else
				$('#new').load(activeTab + ' #settings');
			return false;
		}); 
		

	
    
});