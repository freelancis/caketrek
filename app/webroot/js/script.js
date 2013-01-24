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
	$('.cake-debug-output > span').bind('click',function(e){
		$(this).siblings().toggle();
		e.preventDefault();
	})
});