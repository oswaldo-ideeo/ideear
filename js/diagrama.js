


	var	m1 = '<div class="inicio-camp">'+
				'<div class="primero"><div class="circulo d-inblock"></div><p class="titulo-c d-inblock">Impreso detonador</p>		</div><div class="segundo"><div class="fa fa-calendar d-inblock"></div><div class="fa fa-bar-chart d-inblock"></div>			<div class="mas" id="unos">+</div></div></div>';

	var m2 = '<div class="dos-level-camp d-inblock"><div class="primero"><div class="circulo naranja d-inblock"></div><p class="titulo-c d-inblock">Impreso detonador</p>		</div><div class="segundo"><div class="fa fa-calendar d-inblock"></div><div class="fa fa-bar-chart d-inblock"></div>			<div class="mas doss">+</div></div>';

	var m3 = '<div class="tres-level-camp"><div class="primero"><div class="circulo pink d-inblock"></div><p class="titulo-c d-inblock">Impreso detonador</p>		</div><div class="segundo"><div class="fa fa-calendar d-inblock"></div><div class="fa fa-bar-chart d-inblock"></div>			<div class="mas">+</div></div></div>';
	

	$('#unos').on('click', function(){
		$('.prueb').append(m2);
	})

	$('.prueb').on('click', '.doss', function(){
		
		console.log('hola, funciona');
		$(this).after(m3);
	})





