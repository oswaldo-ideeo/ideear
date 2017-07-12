	$('.modal-dismis').on('click', function(){
		$('#sms, #mail, #call, #push, #impreso').fadeOut();
		$(this).fadeOut();
	})

	

	var call = '<li class="pruebc partes-diag">'+
		            '<div class="inicio-camp">'+
						'<div class="primero">'+
							'<div class="d-inblock">'+
								'<img src="images/call-icon.png" alt="">'+
							'</div>'+
							'<p class="titulo-c d-inblock">Call agradecimiento<span>ID:004</span></p>'+
						'</div>'+
						'<div class="segundo">'+
							'<div class="fa fa-calendar d-inblock"></div>'+
							'<div class="fa fa-bar-chart d-inblock porcent"><span>15%</span></div>'+
							'<div class="mas fa fa-plus-circle" id="unos"></div>'+
						'</div>'+
					'</div>'+
				'</li>'

	var sms = '<li class="pruebs partes-diag">'+
		            '<div class="inicio-camp">'+
						'<div class="primero">'+
							'<div class="d-inblock">'+
								'<img src="images/sms-icon.png" alt="">'+
							'</div>'+
							'<p class="titulo-c d-inblock">SMS Fase 1<span>ID:002</span></p>'+
						'</div>'+
						'<div class="segundo">'+
							'<div class="fa fa-calendar d-inblock"></div>'+
							'<div class="fa fa-bar-chart d-inblock porcent"><span>20%</span></div>'+
							'<div class="mas fa fa-plus-circle" id="unos"></div>'+
						'</div>'+
					'</div>'+
				'</li>'

	var impreso = '<li class="pruebi partes-diag">'+
		            '<div class="inicio-camp">'+
						'<div class="primero">'+
							'<div class="d-inblock">'+
								'<img src="images/impreso-icon.png" alt="">'+
							'</div>'+
							'<p class="titulo-c d-inblock">Impreso detonador<span>ID:001</span></p>'+
						'</div>'+
						'<div class="segundo">'+
							'<div class="fa fa-calendar d-inblock"></div>'+
							'<div class="fa fa-bar-chart d-inblock porcent"><span>10%</span></div>'+
							'<div class="mas fa fa-plus-circle" id="unos"></div>'+
						'</div>'+
					'</div>'+
				'</li>'

	var mail = '<li class="pruebm partes-diag">'+
		            '<div class="inicio-camp">'+
						'<div class="primero">'+
							'<div class="d-inblock">'+
								'<img src="images/mail-icon.png" alt="">'+
							'</div>'+
							'<p class="titulo-c d-inblock">Mailing invitación<span>ID:003</span></p>'+
						'</div>'+
						'<div class="segundo">'+
							'<div class="fa fa-calendar d-inblock"></div>'+
							'<div class="fa fa-bar-chart d-inblock porcent"><span>10%</span></div>'+
							'<div class="mas fa fa-plus-circle" id="unos"></div>'+
						'</div>'+
					'</div>'+
				'</li>'

	var push = '<li class="pruebp partes-diag">'+
		            '<div class="inicio-camp">'+
						'<div class="primero">'+
							'<div class="d-inblock">'+
								'<img src="images/push-icon.png" alt="">'+
							'</div>'+
							'<p class="titulo-c d-inblock">Mailing invitación<span>ID:005</span></p>'+
						'</div>'+
						'<div class="segundo">'+
							'<div class="fa fa-calendar d-inblock"></div>'+
							'<div class="fa fa-bar-chart d-inblock porcent"><span>75%</span></div>'+
							'<div class="mas fa fa-plus-circle" id="unos"></div>'+
						'</div>'+
					'</div>'+
				'</li>'



	$('#unos').on('click', function(){
		$('#desplegar-menu').slideToggle();
	})

	$('#m-sms').on('click', function(){
		$('#sms').fadeIn();
		$('.modal-dismis').show();
	})

	$('#m-mail').on('click', function(){
		$('#mail').fadeIn();
		$('.modal-dismis').show();
	})

	$('#m-call').on('click', function(){
		$('#call').fadeIn();
		$('.modal-dismis').show();
	})

	$('#m-impreso').on('click', function(){
		$('#impreso').fadeIn();
		$('.modal-dismis').show();
	})

	$('#m-push').on('click', function(){
		$('#push').fadeIn();
		$('.modal-dismis').show();
	})


//botones modales

	$('#sms-boton').on('click', function(){
		$('.items-campana').append(sms);
		$('.menu-item').hide();
		$('.modal-dismis, #sms').fadeOut();
	})

	$('#mail-boton').on('click', function(){
		$('.items-campana').append(mail);
		$('.menu-item').hide();
		$('.modal-dismis, #mail').fadeOut();
	})

	$('#call-boton').on('click', function(){
		$('.items-campana').append(call);
		$('.menu-item').hide();
		$('.modal-dismis, #call').fadeOut();
	})

	$('#impreso-boton').on('click', function(){
		$('.items-campana').append(impreso);
		$('.menu-item').hide();
		$('.modal-dismis, #impreso').fadeOut();
	})

	$('#push-boton').on('click', function(){
		$('.items-campana').append(push);
		$('.menu-item').hide();
		$('.modal-dismis, #push').fadeOut();
	})



	$('#uno').on('click', function(){
		$('.prueb').append(impreso);
	})

	$('.prueb').on('click', '.doss', function(){
		
		console.log('hola, funciona');
		$(this).after(m3);
	})





