<div class="container">
	<div class="row">
		<div class="col-lg-12 text-center">
			<h2 class="section-heading">Downloads</h2>
			<h3 class="section-subheading text-muted" style="color:black !important; margin-bottom: 35px !important;">
				Faça download dos Cd's lançados pela nossa loja.
			</h3>
		</div>
	</div>
	<div class="row text-center">

<?php
	$path_download = "http://www.ricardoautosomms.com.br/downloads/";

	/*$cd_titulo = array(	"Ricardo Auto Som Dance Revolution",
					   	"Ricardo Auto Som Especial Dj Ricardo Hari",
					    "Ricardo Auto Som Especial de Pancada",
					    "Ricardo Auto Som Especial de Racha",
					    "Ricardo Auto Som Especial Sertanejo 2015",
					    "Ricardo Auto Som Vol. 08",  
					    "Ricardo Auto Som Vol. 07",
					    "Ricardo Auto Som Vol. 06",
					    "Ricardo Auto Som Vol. 05",
					    "Ricardo Auto Som Vol. 04",
					    "Ricardo Auto Som Vol. 03");
	$cd_subtitulo = array(	"Uma super seleção das tendências eletrônicas feita pelo DJ Alessandro Flores para a equipe nº 1 de Bonito/MS.",
						  	"As top musicas de pancadão estão nessa seleção feita especialmente pelo DJ Iago Bala para a loja conceito de Bonito/MS.",
							"Para aqueles que gostam de rachar e utilizar seu som no limite, esse CD feito pelo DJ Maicon contém as top músicas de racha de som automotivo.",
						  	"As músicas mais tops do sertanejo raiz e universitário da atualidade oferecemos nessa seleção top",
						  	"Nessa super produção de fim de ano feita pelo DJ Charles Piter, temos tops músicas para todos nossos clientes e amigos",
						  	"Mostrando mais uma vez que somos a loja e equipe número 1 de Bonito, essa super produção traz os tops Dances para nossos clientes e amigos",
						  	"Nesse CD produzido pelo DJ Charles Piter, foi feita uma seleção dos melhores Dances com top mixagens para todos nossos clientes e amigos",
						  	"Uma seleção mista de músicas tops feita pelo DJ Maicon para todos nossos clientes e amigos");
	*/

	$cd_titulo = array(	"Ricardo Auto Som Dance Eletro",
						"Ricardo Auto Som Dance Revolution",
						"Ricardo Auto Som Dj Ricardo Hari",
						"Ricardo Auto Som Especial de Pancada",					
						"Ricardo Auto Som Especial de Racha",
					    "Ricardo Auto Som Especial Sertanejo",
						"Ricardo Auto Som Dj Diego Matos",
						"Ricardo Auto Som Vol. 08",  
					    "Ricardo Auto Som Vol. 07",
					    "Ricardo Auto Som Vol. 06",
					    "Ricardo Auto Som Vol. 05",
					    "Ricardo Auto Som Vol. 04");
	$cd_subtitulo = array(
	"Ano de Lançamento: 2017 <br> Dj: Maicon <br> Estilo: Dance <br> Faixas: 16",
	"Ano de Lançamento: 2017 <br> Dj: Alessandro Flores <br> Estilo: Dance <br> Faixas: 17",
	"Ano de Lançamento: 2016 <br> Dj: Ricardo Hari <br> Estilo: Diversos <br> Faixas: 14",
	"Ano de Lançamento: 2016 <br> Dj: Iago Bala <br> Estilo: Pancadão <br> Faixas: 69",
	"Ano de Lançamento: 2015 <br> Dj: Maicon <br> Estilo: Pancadão <br> Faixas: 33",
	"Ano de Lançamento: 2015 <br> Dj: <br> Estilo: Sertanejo <br> Faixas: 26",
	"Ano de Lançamento: 2014 <br> Dj: Diego Matos <br> Estilo: Eletro Pancadão <br> Faixas: 27",
	"Ano de Lançamento: 2013 <br> Dj: Charles Piter <br> Estilo: Eletro Dance <br> Faixas: 26",
	"Ano de Lançamento: 2012 <br> Dj: Charles Piter <br> Estilo: Eletro Dance <br> Faixas: 28",
	"Ano de Lançamento: 2011 <br> Dj: Charles Piter <br> Estilo: Eletro Dance <br> Faixas: 25",
	"Ano de Lançamento: 2010 <br> Dj: Charles Piter <br> Estilo: Eletro Dance <br> Faixas: 28",
	"Ano de Lançamento: 2008 <br> Dj: Charles Piter <br> Estilo: Eletro Dance <br> Faixas: 28");

	for( $k = 0; $k < count($cd_titulo); $k++ ){
?>
		<div class="col-lg-3 col-md-4 col-sm-12" style="max-height:301px !important; margin-bottom: 20px">

			<div class="card text-center">
				<div class="card-header" style="background-color:#34495e; color: white;">
					<?php echo $cd_titulo[$k]; ?>
				</div>
				<div class="card-block">
					<!--<h4 class="card-title">O CD Ricardo Auto Som Volume 04</h4>-->
					<p class="card-text" style="min-height:120px; max-height:120px; text-align:left; padding: 4%">
						<?php echo $cd_subtitulo[$k]; ?>
					</p>
					<a href="<?php echo $path_download.$cd_titulo[$k].'.zip'; ?>" target="_blank" class="btn btn-primary" style="margin-bottom:2%;" download="<?php echo $cd_titulo[$k].'.zip'; ?>">
						Baixar CD
					</a>
				</div>
				<!--<div class="card-footer text-muted">
					Postado a X dias
				</div>-->
			</div>

		</div>
<?php
	}
?>
	</div>
</div>