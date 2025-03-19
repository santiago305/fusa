$(document).ready(function(){
	$('.secciones article').hide();
	$('.secciones article:first').show();
	$('ul.tabs li a').click(function(){
		$('ul.tabs li a').removeClass('active-a');
		$(this).addClass('active-a');
		$('.secciones article').hide();

		var activeTab = $(this).attr('href');
		$(activeTab).show();
		return false;
	});
	var hash = window.location.hash;

        // Si hay un fragmento y es un ID de sección válido, muestra esa sección
        if (hash && $(hash).length > 0) {
			$('.secciones article').hide();

        	// Muestra la sección correspondiente al hash
        	$(hash).show();            
            // También podrías resaltar el botón correspondiente si lo deseas
            $('.button-menu[href="' + hash + '"]').addClass('active-a');
			
        }else{
			$('ul.tabs li a:first').addClass('active-a');
		}
});


