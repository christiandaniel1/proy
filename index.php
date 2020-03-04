
	<div class="banner">
		<div id="animation_container" style="background-color:rgba(255, 255, 255, 1.00); width:100%; height:595px">
			<canvas id="canvas" width="100%" height="595" style="position: absolute; display: none; background-color:rgba(255, 255, 255, 1.00);"></canvas>
			<div id="dom_overlay_container" style="pointer-events:none; overflow:hidden; width:1200px; height:595px; position: absolute; left: 0px; top: 0px; display: none;">
			</div>
		</div>
		<div id='_preload_div_' style='display: inline-block; height:595px; width: 1200px; vertical-align=middle;position:absolute;left:0px;top:0px;text-align: center;'>	<span style='display: inline-block; height: 100%; vertical-align: middle;'></span>	<img src=images/_preloader.gif style='vertical-align: middle;'/>
		</div>
	</div>

	<!-- IDEA: MOBILE -->
	<div class="opts-responsive none-on-desktop">
		<div class="opt-responsive" style="background-color:#c7d51f"><a href="<?php echo base_url('/marca') ?>">LA MARCA</a></div>
		<div class="opt-responsive open-responsive-products" style="background-color:#e86a1e"><a>PRODUCTOS</a></div>
		<div class="opt-opts-responsive" >
			<div class="opt-opt-responsive"><a href="<?php echo base_url('/productos') ?>">productos de acabado final</a></div>
			<div class="opt-opt-responsive"><a href="<?php echo base_url('/productos/linea-base') ?>">productos de preparación previa</a></div>
		</div>
		<div class="opt-responsive" style="background-color:#c01e7f"><a href="<?php echo base_url('/colores') ?>">COLORES</a></div>
		<div class="opt-responsive" style="background-color:#48aad5"><a href="<?php echo base_url('/contacto') ?>">CONTACTO</a></div>
		<div class="opt-responsive opt-responsive-place">
			<span>Ciudad de residencia</span>
			<div class="header-place-container">
				<p>
					crema
					<?php if (isset($_SESSION['city'])): ?>
						<?php echo $_SESSION['city'] ?>
						<?php else: ?>
							<?php echo 'Lima'; ?>
					<?php endif; ?>
				</p>	
					<img src="<?php echo base_url('assets/img/icons/arrow.png') ?>" alt="">
					<div data-where="home" class="slide-header">
						<div class="slider-header-opt"><a href="<?php echo base_url('ciudad?city=lima') ?>">Lima</a></div>
						<div class="slider-header-opt"><a href="<?php echo base_url('ciudad?city=trujillo') ?>">Trujillo</a></div>
						<div class="slider-header-opt"><a href="<?php echo base_url('ciudad?city=chimbote') ?>">Chimbote</a></div>
						<div class="slider-header-opt"><a href="<?php echo base_url('ciudad?city=chiclayo') ?>">Chiclayo</a></div>
						<div class="slider-header-opt"><a href="<?php echo base_url('ciudad?city=huacho') ?>">Huacho</a></div>
						<div class="slider-header-opt"><a href="<?php echo base_url('ciudad?city=ica') ?>">Ica</a></div>
						<div class="slider-header-opt"><a href="<?php echo base_url('ciudad?city=chincha') ?>">Chincha</a></div>
						<div class="slider-header-opt"><a href="<?php echo base_url('ciudad?city=pisco') ?>">Pisco</a></div>
						<div class="slider-header-opt"><a href="<?php echo base_url('ciudad?city=cañete') ?>">Cañete</a></div>
						<div class="slider-header-opt"><a href="<?php echo base_url('ciudad?city=arequipa') ?>">Arequipa</a></div>
						<div class="slider-header-opt"><a href="<?php echo base_url('ciudad?city=cusco') ?>">Cusco</a></div>
						<div class="slider-header-opt"><a href="<?php echo base_url('ciudad?city=huancayo') ?>">Huancayo</a></div>
						<div class="slider-header-opt"><a href="<?php echo base_url('ciudad?city=cajamarca') ?>">Cajamarca</a></div>
						<div class="slider-header-opt"><a href="<?php echo base_url('ciudad?city=juliaca') ?>">Juliaca</a></div>
						<div class="slider-header-opt"><a href="<?php echo base_url('ciudad?city=huanuco') ?>">Huanuco</a></div>
						<div class="slider-header-opt"><a href="<?php echo base_url('ciudad?city=tacna') ?>">Tacna</a></div>
						<div class="slider-header-opt"><a href="<?php echo base_url('ciudad?city=pucallpa') ?>">Pucallpa</a></div>
						<div class="slider-header-opt"><a href="<?php echo base_url('ciudad?city=piura') ?>">Piura</a></div>
						<div class="slider-header-opt"><a href="<?php echo base_url('ciudad?city=sullana') ?>">Sullana</a></div>
					</div>
				</div>
		</div>
		<div class="arrow-master">
			<img src="<?php echo base_url('assets/img/icons/arrow.png') ?>" alt="">
		</div>
	</div>

<!-- IDEA: ACABADO FINAL -->
<div class="slider-fast-product none-on-responsive">
	<div class="slider-fast-product-container">
		<div class="slider-fast-product-container-title">Acabado final</div>
		<div class="slider-fast-product-container-title-part welcome-fast-colors active">FAST COLORS</div>
		<!--<div class="slider-fast-product-container-title-part welcome-fast-fiesta">FIESTA</div>-->
	</div>
</div>
<div class="slider-options-fast-product clearfix none-on-responsive">
	<div class="container" style="position:relative;z-index:1">
		<div class="row">
			<div class="col-md-6 slider-options-fast-product-text">
				<div class="slider-options-fast-product-text-center">
						<div class="slider-options-fast-product-text-title">
							FAST <br>	COLORS
						</div>
						<div class="slider-options-fast-product-text-text">
							FAST es la VERDADERA Y ÚNICA PINTURA HECHA PARA GANADORES!! No sólo tiene una EXCELENTE FÓRMULA que la hace mejor que cualquier pintura económica del mercado, sino que además trae alegría a tu vida con sus COLORES INTENSOS Y VIBRANTES inpirados en nuestra diversa cultura, raices y costumbres.
						</div>
						<div class="slider-options-fast-product-text-button slider-options-fast-product-text-button-fast">
							<a href="<?php echo site_url('productos?product=1') ?>">ver producto</a>
						</div>
				</div>
			</div>
			<div class="col-md-6 slider-options-fast-product-img">
				<div class="slider-options-fast-product-img-container">
					<img src="<?php echo base_url('assets/img/balde.png') ?>" alt="">
				</div>
			</div>
		</div>
	</div>
	<!--<div class="fixed-background-welcome-text">
		<div class="container">
			<div class="col-md-6 fixed-background-welcome-text-relative">
				<div class="slider-options-fast-product-img-container">
					<img src="<?php //echo base_url('assets/img/balde-fiesta2.png') ?>" alt="">
				</div>
			</div>
			<div class="col-md-6 fixed-background-welcome-text-relative2 slider-options-fast-product-text">
				<div class="slider-options-fast-product-text-center">
						<div class="slider-options-fast-product-text-title">
							FIESTA <br>	COLOR
						</div>
						<div class="slider-options-fast-product-text-text">
							<p>FIESTA COLOR vuelve renovada como parte de la familia Fast. Regresa con nuevos colores y nueva presentación para brindarte una alternativa más en aquellos momentos importantes que decidas expresar tus logros con color.</p>
							<p>FIESTA COLOR llegó para llevar más color a muchos más peruanos.</p>
						</div>
						<div class="slider-options-fast-product-text-button slider-options-fast-product-text-button-fiesta">
							<a style="color:white;" href="<?php //echo site_url('productos?product=2') ?>">ver producto</a>
						</div>
				</div>
			</div>
		 </div>
	</div> 
	<div class="fixed-background-welcome ">
		<img src="<?php //echo base_url('assets/img/linea-welcome-fiestab.png') ?>" alt="">
	</div>
	<div class="fixed-background-welcome2">
		<img src="<?php //echo base_url('assets/img/linea-welcome-fiesta.png') ?>" alt="">
	</div>-->
	<div class="slider-options-fast-product-part slider-options-fast-product-part-first">
		<img src="<?php echo base_url('assets/img/linea2b.png') ?>" alt="">
	</div>
	<div class="slider-options-fast-product-part slider-options-fast-product-part-second">
		<img src="<?php echo base_url('assets/img/linea2.png') ?>" alt="">
	</div>
</div>
<div class="container productos-fast-colors-container none-on-desktop" style="background-color:#f0e728">
	<div class="image-fixed-responsive">
		<img src="<?php echo base_url('assets/img/linea2b.png') ?>" alt="">
	</div>
		<div class="col-md-6 productos-fast-colors-text" style="margin-top:30px;margin-bottom:30px">
			<div class="slider-options-fast-product-text-center " >
					<div class="slider-options-fast-product-text-title" style="margin: 20px 0px;">
						FAST <br>	COLORS
					</div>
					<div class="slider-options-fast-product-text-text">
						FAST es la VERDADERA Y ÚNICA PINTURA HECHA PARA GANADORES!! No sólo tiene una EXCELENTE FÓRMULA que la hace mejor que cualquier pintura económica del mercado, sino que además trae alegría a tu vida con sus COLORES INTENSOS Y VIBRANTES inpirados en nuestra diversa cultura, raices y costumbres.
					</div>
					<div class="slider-options-fast-product-text-button ">
						<a href="<?php echo site_url('productos?product=1') ?>">ver producto</a>
					</div>
			</div>

		</div>
	</div>
	<div class="container none-on-desktop" style="position:relative;">
		<div class="image-fixed-responsive"style="bottom:-10px">
			<img src="<?php echo base_url('assets/img/linea2.png') ?>" alt="">
		</div>
		<div class="col-md-6 productos-fast-colors-center-img">
			<div class="productos-fast-colors-container-balde">
				<img class="balde" src="<?php echo base_url('assets/img/balde-fast.png') ?>" alt="">
			</div>
		</div>
	</div>
	<!--<div class="container productos-fast-colors-container none-on-desktop" style="background-color:#bb126d">
		<div class="image-fixed-responsive">
			<img src="<?php //echo base_url('assets/img/linea-welcome-fiesta.png') ?>" alt="">
		</div>
			<div class="col-md-6 productos-fast-colors-text" style="margin-top:30px">
				<div class="slider-options-fast-product-text-center responsive-white">
						<div class="slider-options-fast-product-text-title" style="margin: 20px 0px">
							FIESTA <br>	COLOR
						</div>
						<div class="slider-options-fast-product-text-text">
							<p>FIESTA COLOR vuelve renovada como parte de la familia Fast. Regresa con nuevos colores y nueva presentación para brindarte una alternativa más en aquellos momentos importantes que decidas expresar tus logros con color.</p>
							<p>FIESTA COLOR llegó para llevar más color a muchos más peruanos.</p>
						</div>
						<div class="slider-options-fast-product-text-button" style="border:2px solid white">
							<a style="color:white;" href="<?php //echo site_url('productos?product=2') ?>">ver producto</a>
						</div>
				</div>

			</div>
		</div>-->
		<!--<div class="container none-on-desktop" style="position:relative;">
			<div class="image-fixed-responsive"style="bottom:-10px">
				<img src="<?php //echo base_url('assets/img/linea-welcome-fiestab.png') ?>" alt="">
			</div>
			<div class="col-md-6 productos-fast-colors-center-img">
				<div class="productos-fast-colors-container-balde">

					<img class="balde" src="<?php //echo base_url('assets/img/balde-fiesta.png') ?>" alt="">
				</div>
			</div>
		</div>-->
<!-- IDEA: PREPARACION PREVIA -->
<div class="container preparacionn-previa-container">
	<div class="slider-fast-product">
		<div class="slider-fast-product-container">
			<div class="slider-fast-product-container-title">Preparación previa</div>
		</div>
	</div>
	<div class="preparacionn-previa-container-part">
			<div class="preparacion-previa-container-part-img">
				<img src="<?php echo base_url('assets/img/slide1.png') ?>" alt="">
			</div>
			<div class="preparacionn-previa-container-part-link">
				<div class="preparacionn-previa-container-part-link-container preparacionn-previa-container-part-link-container-imprimante">
					<a href="<?php echo site_url('productos/linea-base?product=3') ?>">
					<img src="<?php echo base_url('assets/img/icons/link.png')?>" alt="">
					</a>
				</div>
			</div>
			<div class="preparacionn-previa-container-part-title">IMPRIMANTE</div>
			<div class="preparacionn-previa-container-part-text">Gran poder de relleno en poros y mejor adherencia</div>
	</div>
	<div class="preparacionn-previa-container-part">
			<div class="preparacion-previa-container-part-img">
				<img src="<?php echo base_url('assets/img/slide2.png') ?>" alt="">
			</div>
			<div class="preparacionn-previa-container-part-link">
				<div class="preparacionn-previa-container-part-link-container preparacionn-previa-container-part-link-container-sellador">
					<a href="<?php echo site_url('productos/linea-base?product=4') ?>">
					<img src="<?php echo base_url('assets/img/icons/link.png')?>" alt="">
					</a>
				</div>
			</div>
			<div class="preparacionn-previa-container-part-title">SELLADOR</div>
			<div class="preparacionn-previa-container-part-text">Buen promotor de adherencia. Secado rápido</div>
	</div>
	<div style="clear:both"></div>
	
		<div class="preparacionn-previa-container-part part3">
				<div class="preparacion-previa-container-part-img">
					<img src="<?php echo base_url('assets/img/slide3.png') ?>" alt="">
				</div>
				<div class="preparacionn-previa-container-part-link">
					<div class="preparacionn-previa-container-part-link-container preparacionn-previa-container-part-link-container-pasta">
						<a href="<?php echo site_url('productos/linea-base?product=5') ?>">
						<img src="<?php echo base_url('assets/img/icons/link.png')?>" alt="">
						</a>
					</div>
				</div>
				<div class="preparacionn-previa-container-part-title">PASTA MURAL</div>
				<div class="preparacionn-previa-container-part-text">Súper trabajable y fina textura</div>
		</div>
	

	
	<!--<div class="preparacionn-previa-container-part">
			<div class="preparacion-previa-container-part-img">
				<img src="<?php //echo base_url('assets/img/slide4.png') ?>" alt="">
			</div>
			<div class="preparacionn-previa-container-part-link">
				<div class="preparacionn-previa-container-part-link-container preparacionn-previa-container-part-link-container-temple">
					<a href="<?php //echo site_url('productos/linea-base?product=6') ?>">
					<img src="<?php //echo base_url('assets/img/icons/link.png')?>" alt="">
					</a>
				</div>
			</div>
			<div class="preparacionn-previa-container-part-title">TEMPLE</div>
			<div class="preparacionn-previa-container-part-text">Base económica con gran resistencia al cuarteamiento</div>
	</div>-->
</div>
<!-- IDEA: DESCARGAS -->
<div class="container home-descargas">
	<div class="slider-fast-product">
		<div class="slider-fast-product-container">
			<div class="slider-fast-product-container-title">Descargas</div>
		</div>
	</div>
	
		<div style="    padding: 0 120px">
			<div class="col-md-6 block-blue">
				<div class="home-descargas-container">
					<span><a target="_blank" href="<?php echo base_url('assets/pdf/manual-pintado.pdf') ?>">Descargar</a></span>
					<img src="<?php echo base_url('assets/img/descargas1.png') ?>" alt="">
					<div class="block-blue-container"><a target="_blank" href="<?php echo base_url('assets/pdf/manual-pintado.pdf') ?>"></a></div>
				</div>
				<div class="home-descargas-container-text">
					<div class="home-descargas-container-text-img">
						<div class="home-descargas-container-text-img-title">Manual de pintado</div>
						<div class="home-descargas-container-text-img-text">Que debemos saber, donde vamos a pintar, aplicación y recomendaciones</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 block-blue">
				<div class="home-descargas-container">
					<span><a target="_blank" href="<?php echo base_url('assets/pdf/guia-combinacion-fast.pdf') ?>">Descargar</a></span>
					<img src="<?php echo base_url('assets/img/descargas2.png') ?>" alt="">
					<div class="block-blue-container"><a target="_blank" href="<?php echo base_url('assets/pdf/guia-combinacion-fast.pdf') ?>"></a></div>
				</div>
				<div class="home-descargas-container-text">
					<div class="home-descargas-container-text-img">
						<img src="<?php echo base_url('assets/img/balde-thumbnail.png') ?>" alt="">
						<div class="home-descargas-container-text-img-title">Guía de combinación Fast Colors</div>
						<div class="home-descargas-container-text-img-text">guía fácil para poder revisar distintas combinaciones de colores en distintos ambientes de casa.</div>
					</div>
				</div>
			</div>
			<div style="clear:both"></div>
		</div>	
		<!--<div class="col-md-4 block-blue">
			<div class="home-descargas-container">
				<span><a target="_blank" href="<?php //echo base_url('assets/pdf/guia-combinacion-fiesta.pdf') ?>">Descargar</a></span>
				<img src="<?php //echo base_url('assets/img/descargas3.png') ?>" alt="">
				<div class="block-blue-container"><a target="_blank" href="<?php //echo base_url('assets/pdf/guia-combinacion-fiesta.pdf') ?>"></a></div>
			</div>
			<div class="home-descargas-container-text">
				<div class="home-descargas-container-text-img">
					<img src="<?php //echo base_url('assets/img/balde2-thumbnail.png') ?>" alt="">
					<div class="home-descargas-container-text-img-title">Guía de combinación Fiesta</div>
					<div class="home-descargas-container-text-img-text">guía fácil para poder revisar distintas combinaciones de colores en distintos ambientes de casa.
					</div>
				</div>
			</div>
		</div>-->

	
</div>
