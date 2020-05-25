<?php
global $Wcms;
?>
<!DOCTYPE HTML>
<html>
<head>
	<title><?= $Wcms->get('config', 'siteTitle') ?></title>
	<meta name="description" content="<?= $Wcms->page('description') ?>">
	<meta name="keywords" content="<?= $Wcms->page('keywords') ?>">
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<meta property="og:locale" content="en_US">
	<meta property="og:type" content="profile">
	<meta property="og:title" content="<?= $Wcms->get('config', 'siteTitle') ?>">
	<meta property="og:description" content="<?= $Wcms->page('description') ?>">
	<meta property="og:url" content="<?= $Wcms->url() ?>">
	<meta property="og:image" content="<?= $Wcms->asset('assets/img/avatar.jpg') ?>">
	<meta property="og:image:type" content="image/jpg">
	<meta property="og:image:width" content="200">
	<meta property="og:image:height" content="200">
	<meta property="og:image:alt" content="<?= $Wcms->get('config', 'siteTitle') ?>" />
	<meta property="profile:first_name" content="cagatay">
	<meta property="profile:last_name" content="guley">
	<link href="<?= $Wcms->asset('assets/img/avatar.jpg') ?>" rel="icon" sizes="180x180" type="image/jpg">
	<link href="<?= $Wcms->asset('assets/img/avatar.jpg') ?>" rel="apple-touch-icon">
	<link rel="canonical" href="<?= $Wcms->url() ?>">
	<link href="<?= $Wcms->asset('assets/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
	<link href="<?= $Wcms->asset('assets/vendor/icofont/icofont.min.css') ?>" rel="stylesheet">
	<link href="<?= $Wcms->asset('assets/vendor/remixicon/remixicon.css') ?>" rel="stylesheet">
	<link href="<?= $Wcms->asset('assets/vendor/owl.carousel/assets/owl.carousel.min.css') ?>" rel="stylesheet">
	<link href="<?= $Wcms->asset('assets/vendor/boxicons/css/boxicons.min.css') ?>" rel="stylesheet">
	<link href="<?= $Wcms->asset('assets/vendor/venobox/venobox.css') ?>" rel="stylesheet">
	<link href="<?= $Wcms->asset('assets/css/style.css') ?>" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<?php if($Wcms->loggedIn) { ?>
		<link rel="stylesheet" href="<?= $Wcms->asset('assets/css/adminPanel.bootstrap.min.css') ?>" />
		<link rel="stylesheet" href="<?= $Wcms->asset('assets/css/node-editor.bootstrap.min.css') ?>" />
		<link rel="stylesheet" href="<?= $Wcms->asset('assets/css/note-popover.bootstrap.min.css') ?>" />
	<?php } ?>
	<?= $Wcms->css() ?>
	<script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-WG4Z2F9');
	</script>
</head>
	
<body>
<?= $Wcms->settings() ?>
<?= $Wcms->alerts() ?>

    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WG4Z2F9" height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- ======= Header ======= -->
    <header id="header" class="header-tops">
        <div class="container">

            <h1><a href="/">cagatay guley</a></h1>
            <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            <h2>a <span>mining engineer</span> and <span>full-time developer</span></h2>

            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li class="active"><a href="#header">home</a></li>
                    <li><a href="#resume">resume</a></li>
                    <li><a href="https://mail.guley.com.tr" rel="nofollow">login</a></li>
                </ul>
            </nav>
            <!-- .nav-menu -->

            <div class="social-links">
                <a href="https://facebook.com/guleyc" target="_blank" rel="nofollow" class="facebook"><i class="icofont-facebook"></i></a>
                <a href="https://linkedin.com/in/guleyc/" target="_blank" rel="nofollow" class="linkedin"><i class="icofont-linkedin"></i></a>
            </div>

        </div>
    </header>
    <!-- End Header -->

    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
        <div class="container">

            <div class="section-title">
                <h2>resume</h2>
                <p>check my resume</p>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <h3 class="resume-title">summary</h3>
                    <div class="resume-item pb-0">
                        <h4>engineering summary</h4>
                        <p><?= $Wcms->block('whoami') ?></p>
						<p>
                            <ul>
                                <li><a href="mailto:cagatay@guley.com.tr">mail me</a> for a detailed resume</li>
                            </ul>
                        </p>
                    </div>

                    <h3 class="resume-title">education</h3>
                    <div class="resume-item">
                        <h4>msc &amp; mining engineering</h4>
                        <h5>2018 - 2021</h5>
                        <p><em>istanbul technical university, sariyer/istanbul</em></p>
                        <p></p>
                    </div>
                    <div class="resume-item">
                        <h4>bsc &amp; mining engineering</h4>
                        <h5>2013 - 2018</h5>
                        <p><em>istanbul technical university, sariyer/istanbul</em></p>
                        <p></p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h3 class="resume-title">professional experience</h3>
                    <div class="resume-item">
                        <h4>mining engineering</h4>
                        <h5>2019 - present</h5>
                        <p><em>merpa metal industry&amp;corp., istanbul, turkey </em></p>
						<p><em>merkür mining industry&amp;corp., istanbul, turkey </em></p>
						<p><?= $Wcms->block('newed') ?></p>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End Resume Section -->

    <div class="credits">
	<?= $Wcms->footer() ?>
    </div>
<!-- Vendor JS Files -->
	<script src="<?= $Wcms->asset('assets/vendor/jquery/jquery.min.js') ?>"></script>
	<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
	<script src="<?= $Wcms->asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
	<script src="<?= $Wcms->asset('assets/vendor/jquery.easing/jquery.easing.min.js') ?>"></script>
	<script src="<?= $Wcms->asset('assets/vendor/waypoints/jquery.waypoints.min.js') ?>"></script>
	<script src="<?= $Wcms->asset('assets/vendor/counterup/counterup.min.js') ?>"></script>
	<script src="<?= $Wcms->asset('assets/vendor/owl.carousel/owl.carousel.min.js') ?>"></script>
	<script src="<?= $Wcms->asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') ?>"></script>
	<script src="<?= $Wcms->asset('assets/vendor/venobox/venobox.min.js') ?>"></script>
	<script src="<?= $Wcms->asset('assets/js/main.js') ?>"></script>
	<script type="application/ld+json">{"@context":"http://schema.org/","@type":"Person","name":"Cagatay Guley","jobTitle":"Mining Engineering","address":{"@type":"PostalAddress","addressLocality":"Istanbul","addressRegion":"Besiktas"}}</script>
	<?= $Wcms->js() ?>
</body>
</html>
