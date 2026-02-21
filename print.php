<!-- Main home page -->
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" 
		      content="width=device-width, intial-scale=1.0" />
		
		<title>Designer1</title>
		<link rel="icon" type="image/x-icon" href="./favicon.svg" />

		<link rel="stylesheet" 
		      href="./style/common.css" />
		<!-- Bootstrap (CSS) -->
		<link href="./vendor/twbs/bootstrap/dist/css/bootstrap.min.css"
			  rel="stylesheet" />
		<script src="./js/common.js"
				defer>
		</script>
		<!-- Bootstrap (JS) -->
		<script src="./vendor/twbs/bootstrap/dist/js/bootstrap.bundle.min.js" 
				defer>
		</script>

	</head>
	<body>
		<main id="ctnr-main" class="row">
			<!-- Navigation side bar -->
			<div id="ctnr-sidebar" class="bg-primary col-2 p-3 d-flex flex-column flex-shrink-0 text-white">
				<h2 class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
					Designer1
				</h2>
				<hr>
				<ul class="nav nav-pills flex-column mb-auto">
					<li class="nav-item">
						<a href="./" class="nav-link active" aria-current="page">
							<svg class="bi me-2" width="16" height="16">
								<use xlink:href="#home">
									<symbol id="home" viewBox="0 0 16 16">
										<path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"></path>
									</symbol>
								</use>
							</svg>
							Menu
						</a>
					</li>
					<li class="nav-item">
						<a href="./build.php" class="nav-link active" aria-current="page">
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi me-2 bi-pencil" viewBox="0 0 16 16">
								<path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325"/>
							</svg>
							Construire
						</a>
					</li>
					<li class="nav-item">
						<a href="./print.php" class="nav-link active" aria-current="page">
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi me-2 bi-printer" viewBox="0 0 16 16">
								<path d="M2.5 8a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1"/>
								<path d="M5 1a2 2 0 0 0-2 2v2H2a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h1v1a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-1h1a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-1V3a2 2 0 0 0-2-2zM4 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2H4zm1 5a2 2 0 0 0-2 2v1H2a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1v-1a2 2 0 0 0-2-2zm7 2v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1"/>
							</svg>
							Imprimer
						</a>
					</li>
				</ul>
			</div>

			<!-- Main text -->
			<div id="ctnr-text" class="bg-light col p-3">
				<h1 id="ttl-main-title">
					RENDU
					<span class="badge bg-warning">Phase 2</span>
				</h1>
				<h4 onclick="window.print();"> Test print </h4>

			</div>


		</main>









	</body>
</html>