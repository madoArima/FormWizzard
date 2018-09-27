//variables de estatus del formulario
var formPos=0;
var numeroControlExists=false;

//eventos
$(document).ready(function(){			//Evento de inicio
	$(".steps").eq(formPos).show();		//muestra la primera parte del wizzards
});

$("#adelante").click(function(){		//adelanta al siguiente formulario
	adelanteForm();
});

$("#atras").click(function(){			//regresa al anterior fornulario
	atrasForm();
});

$(".steps:eq(1) input").focus(function(e){		//lanza un evento cuando se coloco el foco en algun input
	if(!numeroControlExists){					//puedes colocar el foco en otro elemento solo si el numero de control existe
		console.log("foco");
		//$("#numeroControl").focus().select();
	}

});

$(".input-numeros").keydown(function(e){				//Validamos los elementos que solo acepten numeros
	// Desactivamos cualquier combinación con shift
        if(e.shiftKey)
            e.preventDefault();
        //No permite mas de 11 caracteres Numéricos
        if (e.keyCode != 46 && e.keyCode != 8 && e.keyCode != 37 && e.keyCode != 39)

        // Solo Numeros del 0 a 9
        if (e.keyCode < 48 || e.keyCode > 57)
            //Solo Teclado Numerico 0 a 9
            if (e.keyCode < 96 || e.keyCode > 105)
                /*
                    No permite ingresar pulsaciones a menos que sean los siguietes
                    KeyCode Permitidos
                    keycode 8 Retroceso
                    keycode 37 Flecha Derecha
                    keycode 39  Flecha Izquierda
                    keycode 46 Suprimir
                */
                if(e.keyCode != 46 && e.keyCode != 8 && e.keyCode != 37 && e.keyCode != 39)
                    e.preventDefault();

});

$(".rdUbicacionLaboral").change(function(){	// Checaremos los cambios en los radioButtons de parte 'Ubicacion laboral(PASO 4)'

		$('#panelTrabaja').hide();
		$('#panelEstudia').hide();

		switch ($(this).val()) {	//controlamos el flujo
			case 'Trab':
				$('#panelTrabaja').show();
				break;
			case 'Estu':
				$('#panelEstudia').show();
				break;
			case 'EYT':
				$('#panelEstudia').show();
				$('#panelTrabaja').show();
				break;
			case 'NENT':

				break;
			default:

		}
});

/*******/

function adelanteForm(){
	if(formPos>20){
		return;
	}
	$(".steps").eq(formPos).hide();
	$(".steps").eq(++formPos).show();
	focoNumeroControl();
}

function atrasForm(){
	if(formPos<0){
		formPos=0;
		return;
	}
	$(".steps").eq(formPos).hide();
	$(".steps").eq(--formPos).show();
}

function focoNumeroControl(){
	if(formPos==1){
		$("#numeroControl").focus();
	}
}

/*function consultaAjax(url,datos){
	var retorno=$.ajax({
	    // la URL para la petición
	    url : url,

	    // la información a enviar
	    // (también es posible utilizar una cadena de datos)
	    data : datos,

	    // especifica si será una petición POST o GET
	    type : 'POST',

	    // el tipo de información que se espera de respuesta
	    dataType : 'json',

	    // código a ejecutar si la petición es satisfactoria;
	    // la respuesta es pasada como argumento a la función
	    success : function(json) {
	        $('<h1/>').text(json.title).appendTo('body');
	        $('<div class="content"/>')
	            .html(json.html).appendTo('body');
	    },

	    // código a ejecutar si la petición falla;
	    // son pasados como argumentos a la función
	    // el objeto de la petición en crudo y código de estatus de la petición
	    error : function(xhr, status) {
	        alert('Disculpe, existió un problema');
	    },

	    // código a ejecutar sin importar si la petición falló o no
	    complete : function(xhr, status) {
	        alert('Petición realizada');
	    }
	})
	return retorno;
}*/
