// 
//  script.js
//  app
//  
//  Created by gaspard on 2013-01-24.
//  Copyright 2013 __MyCompanyName__. All rights reserved.
// 
$(document).ready(function(){
	$('.cake-error').addClass('alert alert-error');
	$('.notice.success').addClass('alert alert-success');
	$('.notice').addClass('alert');
	$('.cake-sql-log').addClass('table table-bordered table-striped');
	
	$('.cake-debug-output > span').bind('click',function(e){
		$(this).siblings().toggle();
		e.preventDefault();
	});
	$('.pagination > ul > li').each(function(){
		if($(this).hasClass('current'))
			$(this).addClass('active');
			
		if(!$('a',this).length){
			var txt = $(this).html(),
				a  = $("<a>").attr('href','#').html(txt);
			$(this).empty().append(a);
		}
	})
});