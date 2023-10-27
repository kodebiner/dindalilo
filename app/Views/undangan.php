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
		<meta property="og:url" content="<?=$uri?>" />
		<meta property="og:type" content="website" />
		<meta property="og:title" content="<?= $title; ?>" />
		<meta property="og:description" content="<?= $desc; ?>" />
		<meta property="og:locale" content="id_ID" />
		<meta property="og:image" content="<?=base_url()?>images/fb-share.jpg" />
		<meta property="og:image:secure_url" content="<?=base_url()?>images/fb-share.jpg" />
		<meta property="og:image:alt" content="Dinda & Lillo" />
		<meta property="og:image:type" content="image/jpeg" />
		<meta property="og:image:width" content="700px" />
		<meta property="og:image:height" content="470px" />
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
				<div class="uk-position-large uk-position-bottom-center">
					<!-- <div class="uk-card uk-card-default uk-card-hover uk-card-body"> -->
						<div class="uk-light uk-h4 uk-margin-remove-bottom uk-text-center">Kepada:</div>
						<div class="uk-light kepada uk-margin-remove-top uk-text-bold uk-text-center"><?=$guest['name']?></div>
						<div class="uk-text-center">
							<button class="uk-button uk-button-primary" type="button" uk-toggle="target: #cover; animation: uk-animation-slide-top; duration: 500;" style="border-radius: 5px;" id="BGMusic" onclick="playPause()">
								<audio src="music/bg.mp3" autoplay loop></audio>
								Buka Undangan
							</button>
						</div>
					<!-- </div> -->
				</div>
			</div>
			<div class="uk-width-1-1">
				<div class="uk-width-1-1 uk-inline uk-background-secondary" uk-height-viewport>
					<img src="images/header.jpg" uk-cover />
					<!-- <div class="uk-light uk-position-large uk-position-top">
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
					</div> -->
					<div class="uk-position-large uk-position-top-center uk-text-center uk-margin-medium-top">
						<div class="uk-width-1-1 uk-h1 tm-handwrite uk-light">The Wedding of</div>
						<img class="uk-width-2-3" src="images/logo.svg" uk-svg/>
					</div>
					<div class="uk-position-bottom uk-height-small" style="background-image:url(images/wave-1.svg); background-size: cover; background-repeat: no-repeat;"></div>
				</div>
				<div class="uk-width-1-1 uk-background-secondary uk-section">
					<div class="uk-margin-large uk-container uk-container-small uk-margin-medium-bottom">
						<div class="uk-h4 uk-margin-remove-bottom uk-text-center">
							<q>Dan diantara tanda-tanda (kebesaran)-Nya ialah Dia menciptakan pasangan-pasangan untukmu dari jenismu sendiri, agar kamu cenderung dan merasa tenteram kepadanya, dan Dia menjadikan diantaramu rasa kasih dan sayang. Sungguh, pada yang demikina itu benar-benar terdapat tanda-tanda (kebesaran Allah) bagi kaum yang berpikir.</q>
						</div>
						<div class="uk-h3 uk-margin-remove-top uk-text-center">QS. Ar Ruum : 21</div>
					</div>
					<div class="uk-margin uk-container uk-container-small">
						<p class="uk-h3 uk-text-center uk-margin-remove"><em>Assalamualaikum Warahmatullahi Wabarakatuh.</em></p>
						<p class="uk-h4 uk-text-center uk-margin-remove">Dengan memohon Rahmat dan Ridho Allah SWT, kami mengharap doa restu dan kehadiran Bapak/Ibu/Saudara pada acara pernikahan kami.</p>
					</div>
					<div class="uk-margin uk-container uk-container-large">
						<div class="date-header uk-text-center uk-text-uppercase">Sabtu, 11 November 2023</div>
						<div class="uk-grid-small uk-flex-center uk-child-width-auto" uk-grid uk-countdown="date: 2023-11-11T09:00:00+07:00">
							<div>
								<div class="uk-countdown-number uk-countdown-days uk-margin-remove"></div>
								<div class="uk-countdown-label uk-margin-small uk-text-center uk-visible@s uk-text-emphasis">Hari</div>
							</div>
							<div class="uk-countdown-separator">:</div>
							<div>
								<div class="uk-countdown-number uk-countdown-hours uk-margin-remove"></div>
								<div class="uk-countdown-label uk-margin-small uk-text-center uk-visible@s uk-text-emphasis">Jam</div>
							</div>
							<div class="uk-countdown-separator">:</div>
							<div>
								<div class="uk-countdown-number uk-countdown-minutes uk-margin-remove"></div>
								<div class="uk-countdown-label uk-margin-small uk-text-center uk-visible@s uk-text-emphasis">Menit</div>
							</div>
							<div class="uk-countdown-separator">:</div>
							<div>
								<div class="uk-countdown-number uk-countdown-seconds uk-margin-remove"></div>
								<div class="uk-countdown-label uk-margin-small uk-text-center uk-visible@s uk-text-emphasis">Detik</div>
							</div>
						</div>
					</div>
					<div class="uk-margin-large uk-container uk-container-large">
						<div class="uk-position-relative uk-child-width-1-3@m uk-flex-around" uk-grid>
							<div uk-scrollspy="cls: uk-animation-slide-right; delay: 1000">
								<img class="uk-width-1-1" src="images/lillo.png" alt="Lillo" title="Lillo" />
								<div class="tm-title uk-text-center">~ Lillo ~</div>
								<div class="uk-h3 uk-margin-remove uk-text-center">Lillo Adhiguno, S.H., M.Kn.</div>
								<div class="uk-h5 uk-text-center uk-margin-remove">Putra dari</div>
								<div class="uk-h4 uk-text-center uk-margin-remove">Bapak Muhun Nugraha, S.H., M. Hum.</div>
								<div class="uk-h4 uk-text-center uk-margin-remove">Ibu dr. Titi Endarty</div>
								<div class="uk-margin uk-child-width-1-4 uk-flex-center" uk-grid>
									<div class="uk-text-center">
										<a>
											<img class="uk-width-1-1" src="images/instagram.svg" uk-svg />
										</a>
									</div>
									<div class="uk-text-center">
										<a>
											<img class="uk-width-1-1" src="images/tiktok.svg" uk-svg />
										</a>
									</div>
									<div class="uk-text-center">
										<a>
											<img class="uk-width-1-1" src="images/x.svg" uk-svg />
										</a>
									</div>
								</div>
							</div>
							<div uk-scrollspy="cls: uk-animation-slide-left; delay: 1000">
								<img class="uk-width-1-1" src="images/dinda.png" alt="Dinda" title="Dinda" />
								<div class="tm-title uk-text-center">~ Dinda ~</div>
								<div class="uk-h3 uk-margin-remove uk-text-center">dr. Hajar Admira Widiatninda</div>
								<div class="uk-h5 uk-text-center uk-margin-remove">Putri dari</div>
								<div class="uk-h4 uk-text-center uk-margin-remove">Bapak Bambang Wijanarka, S.E., M.M.</div>
								<div class="uk-h4 uk-text-center uk-margin-remove">Ibu Ir. Supriyati</div>
								<div class="uk-margin uk-child-width-1-4 uk-flex-center" uk-grid>
									<div class="uk-text-center">
										<a>
											<img class="uk-width-1-1" src="images/instagram.svg" uk-svg />
										</a>
									</div>
									<div class="uk-text-center">
										<a>
											<img class="uk-width-1-1" src="images/tiktok.svg" uk-svg />
										</a>
									</div>
									<div class="uk-text-center">
										<a>
											<img class="uk-width-1-1" src="images/x.svg" uk-svg />
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div data-src="/images/home-schedule-bg.svg" uk-img class="uk-background-norepeat uk-background-top-center uk-background-image@m uk-section uk-section-large">
					<div class="uk-position-relative">
						<div class="uk-grid-margin uk-container uk-container-expand">
							<div class="tm-grid-expand" uk-grid>
								<div class="uk-grid-item-match uk-flex-middle uk-width-1-2@m">
									<div class="uk-panel uk-width-1-1">
										<div class="uk-panel uk-margin-remove-first-child uk-margin uk-width-large uk-margin-auto">
											<div class="el-meta uk-text-meta uk-margin-top">Sabtu</div>
											<h2 class="el-title uk-h1 uk-text-primary uk-margin-top uk-margin-remove-bottom">Akad Nikah</h2>
										</div>
										<div class="uk-h6 uk-text-primary uk-width-large uk-margin-auto">
											09:00 WIB - 10:00 WIB<br/>
											Rocket Convention Hall
										</div>
									</div>
								</div>
								<div class="uk-grid-item-match uk-flex-middle uk-width-1-2@m">
									<div class="uk-panel uk-width-1-1">
										<div class="uk-margin uk-width-2xlarge@m uk-margin-auto" uk-parallax="x: 0,30; easing: 1; media: @l">
											<picture>
												<source type="image/webp" srcset="/images/akad-768.webp 768w, /images/akad-900.webp 900w, /images/akad-1024.webp 1024w, /images/akad-1366.webp 1366w, /images/akad-1600.webp 1600w" sizes="(min-width: 900px) 900px">
												<img src="/images/akad.jpg" width="900" height="604" class="el-image" alt="" loading="lazy">
											</picture>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="uk-grid-margin uk-container uk-container-expand">
							<div class="tm-grid-expand uk-grid-large" uk-grid>
								<div class="uk-grid-item-match uk-flex-middle uk-width-1-2@m">
									<div class="uk-panel uk-width-1-1">
										<div class="uk-panel uk-margin-remove-first-child uk-margin uk-width-large uk-margin-auto">
											<div class="el-meta uk-text-meta uk-margin-top">Sabtu</div>
											<h2 class="el-title uk-h1 uk-text-primary uk-margin-top uk-margin-remove-bottom">Resepsi</h2>
										</div>
										<div class="uk-h6 uk-text-primary uk-width-large uk-margin-auto">
											11:00 WIB - SELESAI<br/>
											Rocket Convention Hall
										</div>
									</div>
								</div>
								<div class="uk-grid-item-match uk-width-1-2@m uk-flex-first@m">
									<div class="uk-tile-secondary uk-tile uk-tile-large uk-flex uk-flex-middle">
										<div class="uk-panel uk-width-1-1">
											<div class="uk-margin uk-width-2xlarge@m uk-margin-auto" uk-parallax="x: 160,90; easing: 1; media: @l">
												<picture>
													<source type="image/webp" srcset="/images/resepsi-768.webp 768w, /images/resepsi-900.webp 900w, /images/resepsi-1024.webp 1024w, /images/resepsi-1366.webp 1366w, /images/resepsi-1600.webp 1600w" sizes="(min-width: 900px) 900px">
													<img src="/images/resepsi.jpg" width="900" height="600" class="el-image" alt="" loading="lazy">
												</picture>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="uk-section-default uk-section uk-section-large uk-padding-remove-top">
					<div class="uk-margin-xlarge uk-container uk-container-expand">
						<div class="tm-grid-expand uk-grid-collapse" uk-grid>
							<div class="uk-grid-item-match uk-width-1-2@m">
								<div class="uk-flex">
									<div data-src="/images/home-location-bg.svg" uk-img class="uk-background-norepeat uk-background-top-center uk-background-image@l uk-tile uk-width-1-1 uk-position-relative">
										<div class="uk-panel uk-margin-remove-first-child uk-margin uk-width-xlarge uk-margin-auto" uk-parallax="y: 500,550; easing: 1; media: @l">
											<div class="el-meta uk-text-meta uk-margin-top">Rocket Convention Hall</div>
											<h2 class="el-title uk-heading-small uk-text-primary uk-margin-top uk-margin-remove-bottom">Lokasi<br class="uk-visible@m"/> Pernikahan</h2>
											<div class="el-content uk-panel uk-margin-top">Sidomoyo, Godean, Kab. Sleman, Provinsi Daerah Istimewa Jogjakarta</div>
											<div class="uk-margin-top">
												<a href="https://maps.app.goo.gl/VTAZDiYrdvxGz1xw9" class="el-link uk-button uk-button-text" target="_blank">Google Maps</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="uk-grid-item-match uk-width-1-2@m">
								<div class="uk-tile-primary uk-preserve-color uk-tile  uk-tile-large">
									<div class="uk-position-relative uk-position-z-index uk-dark uk-margin" style="height: 560px; position: relative; overflow: hidden;" uk-map uk-parallax="x: -150,-100; easing: 1; media: @l">
										<iframe class="tm-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.3193640827917!2d110.31687667578271!3d-7.755912976911537!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7af7d190c67ae1%3A0x38454d7098ac6001!2sRocket%20Convention%20Hall!5e0!3m2!1sen!2sid!4v1697738375712!5m2!1sen!2sid" height="560" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="uk-section uk-section-small uk-section-secondary">
					<div class="uk-container uk-container-xlarge">
						<div class="uk-child-width-1-2 uk-child-width-1-4@m" uk-grid="masonry: pack" uk-lightbox="animation: slide">
							<?php foreach ($galleries as $gallery) { ?>
								<div>
									<a class="uk-inline" href="<?=$gallery?>">
										<img class="uk-width-1-1" src="<?=$gallery?>" />
									</a>
								</div>
							<?php } ?>
						</div>
					</div>
				</div>
				<footer class="uk-section uk-section-primary uk-section-small">
					<?php
					function auto_copyright($year = 'auto'){
						if(intval($year) == 'auto'){ $year = date('Y'); }
						if(intval($year) == date('Y')){ echo intval($year); }
						if(intval($year) < date('Y')){ echo intval($year) . ' - ' . date('Y'); }
						if(intval($year) > date('Y')){ echo date('Y'); }
					}
					?>
					<div class="uk-text-center">&copy copyright <?php auto_copyright("2023"); ?><br/><a href="binary111.com" class="uk-link-reset uk-text-bold" target="_blank">PT. Kodebiner Teknologi Indonesia</a></div>
				</footer>
			</div>
		</div>
		<!-- <div class="uk-position-small uk-position-bottom-left uk-overlay">
			<a class="uk-icon-button" uk-icon="play-circle" id="BGMusic" onClick="playPause()"></a>
		</div> -->
		<script>
			// var cover = document.getElementById('cover');
			// cover.addEventListener('wheel', closeCover);
			// cover.addEventListener('touchmove', closeCover);
			// function closeCover() {
			// 	UIkit.toggle(cover, {
			// 		animation: 'uk-animation-slide-top',
			// 		duration: 500
			// 	});
			// 	UIkit.toggle(cover).toggle();
			// };

			var aud = document.getElementById("BGMusic").children[0];
			var isPlaying = false;
			aud.pause();
			function playPause() {
				if (isPlaying) {
					aud.pause();
				} else {
					aud.play();
				}
				isPlaying = !isPlaying;
			}
		</script>
	</body>
</html>