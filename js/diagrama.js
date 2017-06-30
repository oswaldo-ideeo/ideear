	$('.modal-dismis').on('click', function(){
		$('#sms, #mail, #call, #push, #impreso').fadeOut();
		$(this).fadeOut();
	})

	var call = '<div class="pruebc">'+
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
				'</div>'

	var sms = '<div class="pruebs">'+
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
				'</div>'

	var impreso = '<div class="pruebi">'+
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
				'</div>'

	var mail = '<div class="pruebm">'+
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
				'</div>'

	var push = '<div class="pruebp">'+
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
				'</div>'



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
		$('.prueb').after(sms);
		$('.menu-item').hide();
		$('.modal-dismis, #sms').fadeOut();
	})

	$('#mail-boton').on('click', function(){
		$('.prueb').after(mail);
		$('.menu-item').hide();
		$('.modal-dismis, #mail').fadeOut();
	})

	$('#call-boton').on('click', function(){
		$('.prueb').after(call);
		$('.menu-item').hide();
		$('.modal-dismis, #call').fadeOut();
	})

	$('#impreso-boton').on('click', function(){
		$('.prueb').after(impreso);
		$('.menu-item').hide();
		$('.modal-dismis, #impreso').fadeOut();
	})

	$('#push-boton').on('click', function(){
		$('.prueb').after(push);
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





