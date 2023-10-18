<!DOCTYPE html>
<html dir="ltr" lang="id" vocab="http://schema.org/">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta http-equiv="Content-Type" content="text/html" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?= $title; ?></title>
		<meta name="description" content="<?= $desc; ?>">
		<base href="<?= base_url(); ?>">
		<link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="favicon/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
		<link rel="manifest" href="favicon/manifest.json">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="favicon/ms-icon-144x144.png">
		<meta name="theme-color" content="#ffffff">
		<link rel="stylesheet" href="css/theme.css" />		
		<script src="js/core.min.js"></script>		
		<script src="js/uikit.min.js"></script>
		<script src="js/uikit-icons.min.js"></script>
		<script src="js/theme.js"></script>
	</head>
	<body>
		<div class="uk-width-1-1 uk-inline">
			<div id="cover" class="uk-width-1-1 uk-background-primary tm-cover uk-inline" uk-height-viewport>
				<div class="uk-position-large uk-position-top-center uk-text-center">
					<img class="uk-width-2-3" src="images/logo.svg" uk-svg/>
				</div>
				<div class="uk-hidden@m uk-position-center">
					<img class="uk-width-1-1" src="images/bg-2.png" />
				</div>
				<div class="uk-position-large uk-position-bottom-center">
					<!-- <div class="uk-card uk-card-default uk-card-hover uk-card-body"> -->
						<div class="uk-h4 uk-margin-remove-bottom uk-text-center">Kepada:</div>
						<div class="kepada uk-margin-remove-top uk-text-bold uk-text-center">Dismas Banar Purnandi</div>
					<!-- </div> -->
				</div>
			</div>
			<div class="uk-width-1-1">
				<div class="uk-width-1-1 uk-inline uk-background-secondary" uk-height-viewport>
					<img src="images/photo1.jpg" uk-cover />
					<div class="uk-light uk-position-large uk-position-top">
						<div class="date-header uk-text-center uk-text-uppercase">Sabtu, 11 November 2023</div>
						<div class="uk-grid-small uk-flex-center uk-child-width-auto" uk-grid uk-countdown="date: 2023-11-11T09:00:00+07:00">
							<div>
								<div class="uk-countdown-number uk-countdown-days uk-margin-remove"></div>
								<div class="uk-countdown-label uk-margin-small uk-text-center uk-visible@s">Hari</div>
							</div>
							<div class="uk-countdown-separator">:</div>
							<div>
								<div class="uk-countdown-number uk-countdown-hours uk-margin-remove"></div>
								<div class="uk-countdown-label uk-margin-small uk-text-center uk-visible@s">Jam</div>
							</div>
							<div class="uk-countdown-separator">:</div>
							<div>
								<div class="uk-countdown-number uk-countdown-minutes uk-margin-remove"></div>
								<div class="uk-countdown-label uk-margin-small uk-text-center uk-visible@s">Menit</div>
							</div>
							<div class="uk-countdown-separator">:</div>
							<div>
								<div class="uk-countdown-number uk-countdown-seconds uk-margin-remove"></div>
								<div class="uk-countdown-label uk-margin-small uk-text-center uk-visible@s">Detik</div>
							</div>
						</div>
					</div>
					<div class="uk-position-bottom uk-height-small" style="background-image:url(images/wave-1.svg); background-size: cover; background-repeat: no-repeat;"></div>
				</div>
				<div class="uk-width-1-1 uk-background-secondary uk-section">
					<div class="uk-container uk-container-small">
						<div class="uk-h4 uk-margin-remove-bottom uk-text-center">
							<q>Dan diantara tanda-tanda (kebesaran)-Nya ialah Dia menciptakan pasangan-pasangan untukmu dari jenismu sendiri, agar kamu cenderung dan merasa tenteram kepadanya, dan Dia menjadikan diantaramu rasa kasih dan sayang. Sungguh, pada yang demikina itu benar-benar terdapat tanda-tanda (kebesaran Allah) bagi kaum yang berpikir.</q>
						</div>
						<div class="uk-h4 uk-margin-remove-top uk-text-center">QS. Ar Ruum : 21</div>
					</div>
				</div>
			</div>
		</div>
		<script>
			var cover = document.getElementById('cover');
			cover.addEventListener('wheel', closeCover);
			cover.addEventListener('touchmove', closeCover);
			function closeCover() {
				UIkit.toggle(cover, {
					animation: 'uk-animation-slide-top',
					duration: 500
				});
				UIkit.toggle(cover).toggle();
			};
		</script>
	</body>
</html>