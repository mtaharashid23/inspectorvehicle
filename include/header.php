<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Inspectorvehicle">
    <meta name="description" content="Get instant access to your vehicle’s accident, ownership, and service history using the VIN. Perfect for used car buyers and sellers.">
	<meta name="keywords" content="vehicle history report, VIN check, VIN lookup, car history report, used car check, accident report by VIN, mileage verification, stolen vehicle check, salvage title check, ownership history, motorcycle VIN check, boat VIN check, truck VIN report, VIN decoder, VIN number check online">
	<meta name="format-detection" content="telephone=no">
	<meta name="theme-color" content="#0073f0" />
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">	
    <meta name="google-site-verification" content="" />
    <meta name='dmca-site-verification' content='' />
    <title><?php echo isset($title) ? $title : 'Vehicle History Report';  ?> | Inspectorvehicle</title>
	<link rel="icon" href="assets/images/favicon/32.png" type="image/png">
	<link rel="shortcut icon" href="assets/images/favicon/32.png" type="image/png">
	<link rel="apple-touch-icon" sizes="32x32" href="assets/images/favicon/32.png">
	<link rel="icon" href="assets/images/favicon/64.png" type="image/png" sizes="64x64">
	<link rel="apple-touch-icon" sizes="64x64" href="assets/images/favicon/64.png">
	<link rel="icon" href="assets/images/favicon/128.png" type="image/png" sizes="128x128">
	<link rel="apple-touch-icon" sizes="128x128" href="assets/images/favicon/128.png">
	<link rel="icon" href="assets/images/favicon/152.png" type="image/png" sizes="152x152">
	<link rel="apple-touch-icon" sizes="152x152" href="assets/images/favicon/152.png">
	<link rel="icon" href="assets/images/favicon/167.png" type="image/png" sizes="167x167">
	<link rel="apple-touch-icon" sizes="167x167" href="assets/images/favicon/167.png">
	<link rel="icon" href="assets/images/favicon/180.png" type="image/png" sizes="180x180">
	<link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicon/180.png">
	<link rel="icon" href="assets/images/favicon/192.png" type="image/png" sizes="192x192">
	<link rel="apple-touch-icon" sizes="192x192" href="assets/images/favicon/192.png">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/custom.min.css" />
    <link rel="stylesheet" href="assets/css/responsive.css" />
    <link rel='manifest' href='manifest.json'>    
    <?php include 'include/css.php'; ?>    
</head>

<body>        
	<!-- HEADER -->
    <header class="header">
        <div class="container">
            <nav class="navbar navbar-expand-lg p-0">
                <a class="navbar-brand header-main__logo" href="/">
                    <img src="assets/images/logo.png" alt="image" class="img-fluid">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="fas fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto header-main__nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about">About</a>
                        </li>                        
                        <li class="nav-item">
                            <a class="nav-link" href="">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact">Contact</a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="#banner" class="themeBtn">Get Report</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
