<div class="row">
	<div class="col-lg-12 text-center">
		<h2 class="section-heading" style="margin-bottom:5px">Portfolio</h2>
		<h3 class="section-subheading text-muted" style="color:black !important; margin-bottom:60px !important;">
			Confira algumas fotos dos projetos feitos pela nossa loja.
		</h3>
	</div>
</div>
<div class="container-fluid" style="margin-top:-3%;">
	<div class="row no-gutter popup-gallery">
<?php
		for( $i = 1; $i <= 27; $i++ ){
?>
			<div class="col-lg-3 col-sm-6" style="max-height:189.7px">
				<a class="portfolio-box" href="img/portfolio/<?php echo $i; ?>.jpg">
					<img class="img-fluid" src="img/portfolio/<?php echo $i; ?>.jpg" alt="" width="100%" height="100%" style="max-height:189.7px !important">
					<div class="portfolio-box-caption">
						<div class="portfolio-box-caption-content">
							<div class="project-category text-faded">
								Expandir
							</div>
							<div class="project-name">
								<!--Instalação de Centrais-->
							</div>
						</div>
					</div>
				</a>
			</div>
<?php
		}
?>
		
	</div>
</div>