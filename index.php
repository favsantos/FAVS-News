			<?php 
				$cabecalho_title = "FAVS News";
				include("header.php");
			?>

			<!-- Beggining of Sidebar -->
			<aside id="sidebar" class="sidebar">
				<section class="search">
					<h2>Search</h2>

					<form>
						<input type="search">
						<input type="image" src="img/busca.png">
					</form>
				</section><!-- fim .busca -->

				<section class="menu-departamentos">
					<h2>Departamentos</h2>

					<nav>
						<ul>
							<li><a href="#">Blusas e Camisas</a></li>
							<li><a href="#">Calças</a></li>
							<li><a href="#">Saias</a></li>
							<li><a href="#">Vestidos</a></li>
							<li><a href="#">Sapatos</a></li>
							<li><a href="#">Bolsas e Carteiras</a></li>
							<li><a href="#">Acessórios</a></li>
						</ul>
					</nav>
				</section><!-- fim .menu-departamentos -->
			</aside><!-- fim .container .side -->

			<!-- Main content / News -->
			<div id="main" class="main">
				<section id="carousel" class="news highlights">
					<h2>Highlights</h2>
					<a href="#">
						<figure>
							<img src="img/destaque-home.png" max-width="100%">
							<figcaption>Here goes legend for highlight</figcaption>		
						</figure>
					</a>
				</section><!-- fim section .painel .novidades -->
				
				<section class="news latest">
					<h2>Latest News</h2>
					<!-- First new -->
					<article class="news-item">
						<h3>First News Post</h3>
						<a href="produto.php">
							<img src="img/produtos/miniatura1.png">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sit amet facilisis eros. Sed cursus porta sagittis. Vestibulum congue imperdiet interdum. Mauris auctor sit amet mauris at fermentum. Nunc mauris mauris, finibus tempus auctor eget, imperdiet quis libero. Donec eu cursus eros.(...)</p>
						</a>
					</article>
					<article class="news-item">
						<h3>Second News Post</h3>
						<a href="produto.php">
							<img src="img/produtos/miniatura1.png">
							<p>Mauris pretium tincidunt odio id suscipit. In turpis enim, tempor eu sapien nec, convallis mattis tellus. Nullam non aliquam est, sit amet scelerisque metus. Aliquam erat volutpat. Ut fringilla purus nec risus condimentum fermentum. Aliquam erat volutpat. Sed accumsan semper tellus a rutrum. (...)</p>
						</a>
					</article>
					<article class="news-item">
						<h3>Third News Post</h3>
						<a href="produto.php">
							<img src="img/produtos/miniatura1.png">
							<p>Vestibulum convallis sed est dignissim feugiat. Integer malesuada laoreet leo, nec elementum nulla semper vitae. Suspendisse potenti. Pellentesque libero ante, finibus in purus ut, accumsan hendrerit risus. Ut ac congue ex, pellentesque pretium justo. Donec tincidunt, mi non rutrum vehicula, nisl metus commodo leo, ac convallis libero nunc vel leo. (...)</p>
						</a>
					</article>
					<article class="news-item">
						<h3>Fourth News Post</h3>
						<a href="produto.php">
							<img src="img/produtos/miniatura1.png">
							<p>Integer non lectus id purus suscipit egestas. Cras vehicula accumsan venenatis. Maecenas mauris ipsum, euismod sed quam sit amet, congue cursus dui. Sed vel semper ipsum, aliquam finibus lacus. Vivamus auctor dolor enim, vitae accumsan massa facilisis vel. Quisque euismod lacus eu tellus aliquet euismod. (...)</p>
						</a>
					</article>
					<article class="news-item">
						<h3>Fifth News Post</h3>
						<a href="produto.php">
							<img src="img/produtos/miniatura1.png">
							<p>Suspendisse augue massa, placerat nec accumsan eu, imperdiet sed odio. Duis id tellus et massa tempus ornare. Nam non lobortis mi. Nullam augue enim, condimentum nec lacinia quis, blandit quis metus. Mauris a dolor erat. In volutpat vel enim blandit lacinia. Duis viverra leo id varius gravida. (...)</p>
						</a>
					</article>
				</section><!-- fim section .painel .novidades -->
			</div><!-- End of .content -->

			<!-- Beggining Footer -->
			
			<?php include("footer.php"); ?>

			<!-- End of Footer -->
			<script src="js/jquery.js"></script>
			<script src="js/home.js"></script>
		</div>
	</body>
</html>