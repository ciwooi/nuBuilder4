<!DOCTYPE html>
<html>
<head>
<?php

require_once('nucommon.php');	

nuJSInclude('jquery/jquery.js');
nuJSInclude('nuselectclass.js');
nuJSInclude('nuformclass.js');
nuJSInclude('nuform.js');
nuJSInclude('nuformdrag.js');
nuJSInclude('nudrag.js');
nuJSInclude('nureportdrag.js');
nuJSInclude('nucalendar.js');
nuJSInclude('nucommon.js');
nuJSInclude('nuajax.js');       //-- calls to server
nuJSInclude('nureportjson.js');

nuCSSInclude('nubuilder4.css');
nuCSSInclude('nudrag.css');

?>

<style>

body  {
    background-image: url("graphics/grid.png");
}

</style>

<script>

	window.nuSuffix				= 1000;
	window.nuSQL				= new nuSelectObject();
	window.nuCurrentID			= '';
	window.nuY					= 0;
	window.nuX					= 0;
	
	function nuLoad(){
		
		if(!nuSQL.rebuildGraphic()){
			return;
		}

        $(document).mousemove(function(){
            nuMove(event);
        });
        $(document).mousedown(function(){
            nuDown(event);
        });
        $(document).mouseup(function(){
            nuUp(event);
        });
        $('body').css('zoom', Number(parent.$('#sse_resize').val()) / 100)
		.css('transform', Number(parent.$('#sse_resize').val()) / 100)
		
		parent.nuHasNotBeenEdited();
		
	}
	

</script>
</head><body onload='nuLoad()'></body></html>

