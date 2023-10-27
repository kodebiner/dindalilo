<!DOCTYPE html>
<html dir="ltr" lang="id" vocab="http://schema.org/">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta http-equiv="Content-Type" content="text/html" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Error 404</title>
		<meta name="description" content="<?= lang('Errors.sorryCannotFind') ?>">
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
		<meta property="og:url" content="<?=base_url()?>" />
		<meta property="og:type" content="website" />
		<meta property="og:title" content="404" />
		<meta property="og:description" content="<?= lang('Errors.sorryCannotFind') ?>" />
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
        <div class="uk-width-1-1 uk-background-primary uk-inline" uk-height-viewport>
            <div class="uk-position-center">
                <div class="uk-margin uk-width-1-1 uk-flex uk-flex-center">
                    <img class="uk-width-1-3@m" src="images/logo.svg" uk-svg/>
                </div>
                <div class="uk-margin uk-text-center uk-h1 uk-light tm-handwrite">Error 404</div>
                <div class="uk-width-1-1 uk-text-center uk-h3 uk-light"><?= lang('Errors.sorryCannotFind') ?></div>
            </div>
            <footer class="uk-position-bottom uk-section uk-section-primary uk-section-small">
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
    </body>
</html>