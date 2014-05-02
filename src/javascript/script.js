$(document).ready(function(){

	var progWebUpdated = false;
	var progUpdated = false;
	var langUpdated = false;

	$('#tab_competences').on('shown.bs.tab', function () {

		if(!progWebUpdated){
			updateBar($('#html_css'), 60);
	  		updateBar($('#php'), 80);
	  		updateBar($('#js'), 60);
	  		updateBar($('#jee'), 60);
	  	}

  		progWebUpdated = true;
	});

	$('#prog').on('shown.bs.collapse', function () {

  		if(!progUpdated){
			updateBar($('#java'), 60);
	  		updateBar($('#c'), 40);
	  	}

  		progUpdated = true;
	});

	$('#langues').on('shown.bs.collapse', function () {

  		if(!langUpdated){
			updateBar($('#eng'), 60);
	  		updateBar($('#esp'), 20);
	  	}

  		langUpdated = true;
	});

	function updateBar(bar, value)
	{
		var v = 0;
		var i = setInterval(function(){
			if(v < value){
				v++;
				bar.css("width", v+"%");
				bar.attr('aria-valuenow', v);
				bar.html(v+"%");
			}
			else
				clearInterval(i);
		}, 25);
	}

});