jQuery(document).ready(function($) {

	// Efecto Buscador
	$('#movil-lupa').click(function (event) {
		$(this).hide();
		$('#movil-submit').css('display', 'table-cell');
		$('#movil-input').fadeIn(300).focus();
	});
	$('#desktop-lupa').click(function (event) {
		$(this).hide();
		$('#desktop-submit').css('display', 'table-cell');
		$('#desktop-input').animate({width: "210px", paddingLeft: "12px", paddingRight: "12px"}, 300).focus();
		$('.barrasup .busca-campos').animate({width: "250px"}, 300).focus();
	});
	$('#desktop-lupa-oculto').click(function (event) {
		$(this).hide();
		$('#desktop-submit-oculto').css('display', 'table-cell');
		$('#desktop-input-oculto').animate({width: "210px", paddingLeft: "12px", paddingRight: "12px"}, 300).focus();
		$('.escoge-oculto .busca-campos').animate({width: "250px"}, 300).focus();
	});

	// Efecto de cabecera fija
	$('.wrapper-logos').affix({
		offset: {top: 190}
	});
	$('.wrapper-menu-prin').affix({
		offset: {top: 190}
	});
	$('.wrapper-logos-blank').affix({
		offset: {top: 190}
	});
	$('.wrapper-menu-prin-blank').affix({
		offset: {top: 190}
	});

	// Autoheight
	$('.submenu-1 > .container-fluid > .row >.submenu-bloque').matchHeight();
	$('.submenu-1 > .container-fluid > .row >.submenu-bloque .submenu-bloque').matchHeight();
	$('.submenu-2 > .container-fluid > .row >.submenu-bloque').matchHeight();
	$('.submenu-2 > .container-fluid > .row >.submenu-bloque .submenu-bloque').matchHeight();
	$('.submenu-3 > .container-fluid > .row >.submenu-bloque').matchHeight();
	$('.submenu-3 > .container-fluid > .row >.submenu-bloque .submenu-bloque').matchHeight();
	$('.submenu-4 > .container-fluid > .row >.submenu-bloque').matchHeight();
	$('.submenu-4 > .container-fluid > .row >.submenu-bloque .submenu-bloque').matchHeight();
	$('.submenu-5 > .container-fluid > .row >.submenu-bloque').matchHeight();
	$('.submenu-5 > .container-fluid > .row >.submenu-bloque .submenu-bloque').matchHeight();
	$('.submenu-6 > .container-fluid > .row >.submenu-bloque').matchHeight();
	$('.submenu-6 > .container-fluid > .row >.submenu-bloque .submenu-bloque').matchHeight();
	$('.eventos-home-lista .eventos-home-item a').matchHeight();
	//$('.directorio-mod').matchHeight();
	$('.wrapper-decanos .modu-decanos-text').matchHeight();
	$('.not-rel-modus').matchHeight();

	$(window).resize(function () {
		$.fn.matchHeight._update();
	});

	// Alineacion
	$('.landing-items').masonry({
		// options
		itemSelector: '.landing-item'
	});
	// Tetris de modulos
	$('#tablas-bloque').masonry({
		itemSelector: '.tablas-item'
	});
	$('#lista-organos').masonry({
		itemSelector: '.organos-bloque'
	});

	// Superdestacado
	$('.desta-abre').click(function(event) {
		if($(this).parent().hasClass('plegado')){
			$('.super-destacado').slideDown(250, function(){
				$('.desta-abre').parent().removeClass('plegado');
			});
		}else{
			$('.super-destacado').slideUp(250, function(){
				$('.desta-abre').parent().addClass('plegado');
			});
		}
	});
	(function(){
		alto1 = $('.wrapper-barrasup').innerHeight();
		alto2 = $('.wrapper-logos').innerHeight();
		alto3 = $('.wrapper-menu-prin').innerHeight();
		alto4 = $('.wrapper-barra-uni').innerHeight();
		alto5 = $('.wrapper-super-destacado .super-azul').innerHeight();
		alto6 = $('.wrapper-super-destacado .barra-blanca').innerHeight();
		alto_resto = alto1 + alto2 + alto3 + alto4 + alto5 + alto6;
		alto_window = $( window ).height();
		nuevo_alto = alto_window - alto_resto;
		$('.wrapper-super-destacado .img-super').innerHeight(nuevo_alto);
	})();

});