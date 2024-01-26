<!DOCTYPE html>
<html lang="en">

<head>
    <title>Nihaq Investments | Licensed Exclusive Distributor of Impra Tea in Nigeria</title>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="pziel">
    <meta name="description" content="Licensed Exclusive Distributor of Impra Tea in Nigeria">

    <!-- Dark mode -->
    <script>
        const storedTheme = localStorage.getItem('theme')

        const getPreferredTheme = () => {
            if (storedTheme) {
                return storedTheme
            }
            return window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light'
        }

        const setTheme = function(theme) {
            if (theme === 'auto' && window.matchMedia('(prefers-color-scheme: dark)').matches) {
                document.documentElement.setAttribute('data-bs-theme', 'dark')
            } else {
                document.documentElement.setAttribute('data-bs-theme', theme)
            }
        }

        setTheme(getPreferredTheme())

        window.addEventListener('DOMContentLoaded', () => {
            var el = document.querySelector('.theme-icon-active');
            if (el != 'undefined' && el != null) {
                const showActiveTheme = theme => {
                    const activeThemeIcon = document.querySelector('.theme-icon-active use')
                    const btnToActive = document.querySelector(`[data-bs-theme-value="${theme}"]`)
                    const svgOfActiveBtn = btnToActive.querySelector('.mode-switch use').getAttribute('href')

                    document.querySelectorAll('[data-bs-theme-value]').forEach(element => {
                        element.classList.remove('active')
                    })

                    btnToActive.classList.add('active')
                    activeThemeIcon.setAttribute('href', svgOfActiveBtn)
                }

                window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', () => {
                    if (storedTheme !== 'light' || storedTheme !== 'dark') {
                        setTheme(getPreferredTheme())
                    }
                })

                showActiveTheme(getPreferredTheme())

                document.querySelectorAll('[data-bs-theme-value]')
                    .forEach(toggle => {
                        toggle.addEventListener('click', () => {
                            const theme = toggle.getAttribute('data-bs-theme-value')
                            localStorage.setItem('theme', theme)
                            setTheme(theme)
                            showActiveTheme(theme)
                        })
                    })

            }
        })
    </script>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/logo&favicon/impra logo.png">


    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;700&amp;family=Rubik:wght@400;500;700&amp;display=swap" rel="stylesheet">

    <!-- Plugins CSS -->
    <link rel="stylesheet" type="text/css" href="assets/vendor/font-awesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/tiny-slider/tiny-slider.css">

    <!-- Theme CSS -->
    <link id="style-switch" rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<body>
    <!-- Pre loader -->
    <div class="preloader">
        <div class="preloader-item animate__animated "><img src="assets/logo&favicon/NIHAQ-INVESTMENTS-IMPRA-FAVICON-LOGO.png" class="light-mode-item" alt="nihaq logo icon" title="nihaq invesments logo">
            <img src="assets/logo&favicon/NIHAQ-INVESTMENTS-IMPRA-FAVICON-LOGO.png" class="dark-mode-item" alt="nihaq investments logo icon" title="nihaq logo">
        </div>
    </div>
    <header class="navbar-light navbar-sticky header-static">
        <!-- Logo Nav START -->
        <nav class="navbar navbar-expand-xl">
            <div class="container">
                <!-- Logo START -->
                <a class="navbar-brand" href="home.html">
                    <img class="navbar-brand-item light-mode-item" src="assets/logo&favicon/NIHAQ-INVESTMENTS-IMPRA-FAVICON-LOGO.png" alt="IMPRA TEA LOGO">
                    <img class="navbar-brand-item dark-mode-item" src="assets/logo&favicon/NIHAQ-INVESTMENTS-IMPRA-FAVICON-LOGO.png" alt="IMPRA TEA LOGO">
                </a>
                <!-- Logo END -->

                <!-- Responsive navbar toggler -->
                <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
				<span class="text-body h6 d-none d-sm-inline-block">Menu</span>
				<span class="navbar-toggler-icon"></span>
			</button>

                <!-- Main navbar START -->
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav navbar-nav-scroll ms-auto">

                        <!-- Nav item 1 Demos -->
                        <li class="nav-item dropdown">
                            <a class="nav-link active" href="home.html" id="homeMenu" aria-expanded="false">HOME</a>
                        </li>

                        <!-- Nav item 4 link-->
                        <li class="nav-item"> <a class="nav-link" href="about-nihaq-investments.html">ABOUT US</a></li>
                        <li class="nav-item"> <a class="nav-link" href="contact-us.html">CONTACTS</a></li>


                    </ul>
                </div>
                <!-- Main navbar END -->

                <div class="nav flex-nowrap align-items-center ms-3 ms-lg-4">
                    <!-- Dark mode options START -->
                    <div class="nav-item dropdown">
                        <!-- Dropdown items -->
                        <ul class="dropdown-menu min-w-auto dropdown-menu-end" aria-labelledby="bd-theme">
                            <li class="mb-1">
                                <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light">
								<svg width="16" height="16" fill="currentColor" class="bi bi-brightness-high-fill fa-fw mode-switch me-1" viewBox="0 0 16 16">
									<path d="M12 8a4 4 0 1 1-8 0 4 4 0 0 1 8 0zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
									<use href="#"></use>
								</svg>Light
							</button>
                            </li>
                            <li class="mb-1">
                                <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-moon-stars-fill fa-fw mode-switch me-1" viewBox="0 0 16 16">
									<path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"/>
									<path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/>
									<use href="#"></use>
								</svg>Dark
							</button>
                            </li>
                            <li>
                                <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle-half fa-fw mode-switch me-1" viewBox="0 0 16 16">
									<path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
									<use href="#"></use>
								</svg>Auto
							</button>
                            </li>
                        </ul>
                    </div>
                    <!-- Dark mode options END -->
                </div>
            </div>
        </nav>
        <!-- Logo Nav END -->
    </header>
    <!-- =======================
Header END -->

    <!-- **************** MAIN CONTENT START **************** -->
    <main>

        <!-- =======================
Main hero START -->
        <section class="bg-danger text-light">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Slider START -->
                        <div class="tiny-slider tns-nav-line rounded-3">
                            <div class="tiny-slider-inner" data-autoplay="true" data-hoverpause="true" data-arrow="false" data-dots="true" data-items="1">

                                <!-- Slider Item START -->
                                <div>
                                    <div class="row g-4 align-items-center">
                                        <div class="col-md-6 pe-md-0 pe-3">
                                            <h2 class="display-6 text-white">Licensed exclusive distributor of Impra Tea in Nigeria</h2>
                                            <p>Give yourself the right start to your day by indulging in a cup of green tea that’s sourced from our best estates.</p>

                                        </div>

                                        <!-- Image -->
                                        <div class="col-md-6 align-content-start float-md-start">
                                            <img src="assets/images/01 GET ORIGINAL IMPRA TEA FROM NIHAQ.COM AT NIHAQ INVESTMENTS.png" alt="GET ORIGINAL IMPRA TEA FROM NIHAQ AT NIHAQ INVESTMENTS" title="ORIGINAL IMPRA TEA FROM NIHAQ">
                                        </div>
                                    </div>
                                </div>
                                <!-- Slider Item END -->

                                <!-- Slider Item START -->
                                <div>
                                    <div class="row g-4 align-items-center px-3-md">
                                        <div class="col-md-6">
                                            <h2 class="display-5 text-white">Ceylon Black Tea</h2>
                                            <p> The real taste of tea where every sip has unique tea taste
                                            </p>

                                        </div>

                                        <!-- Image -->
                                        <div class="col-md-6 text-white">
                                            <img src="assets/images/quality ceylon black tea by Impra.png" alt="quality ceylon black tea by Impra" title="ceylon black tea">
                                        </div>
                                    </div>
                                </div>
                                <!-- Slider Item END -->

                                <!-- Slider Item START -->
                                <div>
                                    <div class="row g-4 align-items-center">
                                        <div class="col-md-6">
                                            <h2 class="display-5">Green and Black Tea</h2>
                                            <p>Indulge in the bold richness of our exquisite
                                                <b>Black Teas</b>, and the refreshing world of our vibrant
                                                <b>Green Teas</b></p>
                                            <!-- Rating star -->
                                            <ul class="list-inline">
                                                <li class="list-inline-item me-0"><i class="fas fa-star text-white"></i></li>
                                                <li class="list-inline-item me-0"><i class="fas fa-star text-white"></i></li>
                                                <li class="list-inline-item me-0"><i class="fas fa-star text-white"></i></li>
                                                <li class="list-inline-item me-0"><i class="fas fa-star text-white"></i></li>
                                                <li class="list-inline-item me-0 h6 text-light">4.0/5.0</li>
                                            </ul>
                                        </div>

                                        <!-- Image -->
                                        <div class="col-md-6">
                                            <img src="assets/images/02 GET ORIGINAL IMPRA TEA FROM NIHAQ.COM AT NIHAQ INVESTMENTS.png" alt="Green and Black teas distributing company | Nihaq" title="Impra Green and black tea">
                                        </div>
                                    </div>
                                </div>
                                <!-- Slider Item END -->
                            </div>
                        </div>
                        <!-- Slider END -->
                    </div>
                </div>
            </div>
        </section>
        <!-- =======================
Main hero END -->

        <!-- =======================
Features END -->
        <section>
            <div class="container">
                <div class="row g-4 g-xl-5">
                    <!-- Title -->
                    <div class="col-sm-6 col-lg-3">
                        <div class="d-flex align-items-center">
                            <div class="icon-lg fs-4 text-white bg-success rounded flex-shrink-0"> <i class="bi bi-truck"></i> </div>
                            <h6 class="mb-0 ms-3">Fast delivery service</h6>
                        </div>
                    </div>

                    <!-- Title -->
                    <div class="col-sm-6 col-lg-3">
                        <div class="d-flex align-items-center">
                            <div class="icon-lg fs-4 text-white bg-danger rounded flex-shrink-0"> <i class="bi bi-lightning-charge"></i> </div>
                            <h6 class="mb-0 ms-3">Product at affordable rate</h6>
                        </div>
                    </div>

                    <!-- Title -->
                    <div class="col-sm-6 col-lg-3">
                        <div class="d-flex align-items-center">
                            <div class="icon-lg fs-4 text-danger bg-danger bg-opacity-10 rounded flex-shrink-0"> <i class="bi bi-emoji-smile"></i> </div>
                            <h6 class="mb-0 ms-3">Topnotch customer relationship</h6>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- =======================
Features END -->


        <!-- =======================
Best selling product START -->
        <section class="pt-0 pt-md-5">
            <div class="container">
                <!-- Title -->
                <div class="d-sm-flex justify-content-between align-items-center mb-4">
                    <h2 class="m-0">Our Products &#9989;</h2>
                </div>

                <!-- Product START -->
                <div class="row g-4">

                    <!-- Product item START -->
                    <div class="col-sm-10 col-md-4 col-lg-4">
                        <div class="card border p-3 h-100">
                            <div class="position-relative">
                                <!-- Image -->
                                <a href="shop-detail.html" class="position-relative z-index-9"><img class="card-img" src="assets/images/black tea by impra.jpg" alt="buy herbal tea from the best impra tea distributor | nihaq investment in lagos nigeria" title="Impra black tea Apple cinnamon flavoured"></a>
                                <!-- Overlay -->
                                <div class="card-img-overlay p-0">
                                </div>
                            </div>

                            <!-- Card body -->
                            <div class="card-body text-center p-3 px-0">
                                <!-- Badge and price -->
                                <div class="d-flex justify-content-center mb-2">
                                    <ul class="list-inline mb-0">
                                        <li class="list-inline-item me-0 small"><i class="fas fa-star text-danger"></i></li>
                                        <li class="list-inline-item me-0 small"><i class="fas fa-star text-danger"></i></li>
                                        <li class="list-inline-item me-0 small"><i class="fas fa-star text-danger"></i></li>
                                        <li class="list-inline-item me-0 small"><i class="fas fa-star text-danger"></i></li>
                                    </ul>
                                </div>
                                <!-- Title -->
                                <h5 class="card-title"><a href="shop-detail.html">Black Tea <br>Apple Cinnamon Flavoured</a></h5>
                            </div>
                        </div>
                    </div>
                    <!-- Product item END -->

                    <!-- Product item START -->
                    <div class="col-sm-10 col-md-4 col-lg-4">
                        <div class="card border p-3 h-100">
                            <!-- Image -->
                            <a href="shop-detail.html"><img class="card-img" src="assets/images/green tea by impra.jpg" alt="buy green tea from the best impra tea distributor | nihaq investment in lagos nigeria" title="Impra green tea ginsen flavoured "></a>

                            <!-- Card body -->
                            <div class="card-body text-center p-3 px-0">
                                <!-- Badge and price -->
                                <div class="d-flex justify-content-center mb-2">
                                    <ul class="list-inline mb-0">
                                        <li class="list-inline-item me-0 small"><i class="fas fa-star text-danger"></i></li>
                                        <li class="list-inline-item me-0 small"><i class="fas fa-star text-danger"></i></li>
                                        <li class="list-inline-item me-0 small"><i class="fas fa-star text-danger"></i></li>
                                        <li class="list-inline-item me-0 small"><i class="fas fa-star text-danger"></i></li>
                                    </ul>
                                </div>
                                <!-- Title -->
                                <h5 class="card-title">
                                    <a href="shop-detail.html">Green Tea <br>Ginseng Flavoured</a>
                                </h5>
                            </div>

                        </div>
                    </div>
                    <!-- Product item END -->

                    <!-- Product item START -->
                    <div class="col-sm-10 col-md-4 col-lg-4">
                        <div class="card border p-3 h-100">
                            <!-- Image -->
                            <a href="shop-detail.html"><img class="card-img" src="assets/images/impra green tea pure ceylon flavoured at nihaq invesments.jpeg" alt="buy green tea from the best impra tea distributor | nihaq investment in lagos nigeria" title="Impra green tea pure ceylon flavoured "></a>

                            <!-- Card body -->
                            <div class="card-body text-center p-3 px-0">
                                <!-- Badge and price -->
                                <div class="d-flex justify-content-center mb-2">
                                    <ul class="list-inline mb-0">
                                        <li class="list-inline-item me-0 small"><i class="fas fa-star text-danger"></i></li>
                                        <li class="list-inline-item me-0 small"><i class="fas fa-star text-danger"></i></li>
                                        <li class="list-inline-item me-0 small"><i class="fas fa-star text-danger"></i></li>
                                        <li class="list-inline-item me-0 small"><i class="fas fa-star text-danger"></i></li>
                                        <li class="list-inline-item me-0 small"><i class="fas fa-star-half-alt text-danger"></i></li>
                                    </ul>
                                </div>
                                <!-- Title -->
                                <h5 class="card-title"><a href="shop-detail.html">Green Tea <br>Pure Ceylon Tea</a></h5>
                            </div>
                        </div>
                    </div>
                    <!-- Product item END -->
                    <!-- Product item START -->
                    <div class="col-sm-10 col-md-4 col-lg-4">
                        <div class="card border p-3 h-100">
                            <!-- Image -->
                            <a href="shop-detail.html"><img class="card-img" src="assets/images/impra black tea blackberry flavour at nihaq invesments.jpeg" alt="buy black tea from the best impra tea distributor | nihaq investment in lagos nigeria" title="Impra black tea blackberry flavoured"></a>

                            <!-- Card body -->
                            <div class="card-body text-center p-3 px-0">
                                <!-- Badge and price -->
                                <div class="d-flex justify-content-center mb-2">
                                    <ul class="list-inline mb-0">
                                        <li class="list-inline-item me-0 small"><i class="fas fa-star text-danger"></i></li>
                                        <li class="list-inline-item me-0 small"><i class="fas fa-star text-danger"></i></li>
                                        <li class="list-inline-item me-0 small"><i class="fas fa-star text-danger"></i></li>
                                        <li class="list-inline-item me-0 small"><i class="fas fa-star text-danger"></i></li>
                                    </ul>
                                </div>
                                <!-- Title -->
                                <h5 class="card-title">
                                    <a href="shop-detail.html">Black Tea <br> Blackberry Flavoured</a>
                                </h5>
                            </div>

                        </div>
                    </div>
                    <!-- Product item END -->
                    <!-- Product item START -->
                    <div class="col-sm-10 col-md-4 col-lg-4">
                        <div class="card border p-3 h-100">
                            <!-- Image -->
                            <a href="shop-detail.html"><img class="card-img" src="assets/images/impra black tea blueberry flavoured at nihaq invesments.jpeg" alt="buy black tea from the best impra tea distributor | nihaq investment in lagos nigeria" title="Impra black tea blueberry flavoured"></a>

                            <!-- Card body -->
                            <div class="card-body text-center p-3 px-0">
                                <!-- Badge and price -->
                                <div class="d-flex justify-content-center mb-2">
                                    <ul class="list-inline mb-0">
                                        <li class="list-inline-item me-0 small"><i class="fas fa-star text-danger"></i></li>
                                        <li class="list-inline-item me-0 small"><i class="fas fa-star text-danger"></i></li>
                                        <li class="list-inline-item me-0 small"><i class="fas fa-star text-danger"></i></li>
                                        <li class="list-inline-item me-0 small"><i class="fas fa-star text-danger"></i></li>
                                    </ul>
                                </div>
                                <!-- Title -->
                                <h5 class="card-title">
                                    <a href="shop-detail.html">Black Tea <br> Blueberry Flavoured</a>
                                </h5>
                            </div>

                        </div>
                    </div>
                    <!-- Product item END -->
                    <!-- Product item START -->
                    <div class="col-sm-10 col-md-4 col-lg-4">
                        <div class="card border p-3 h-100">
                            <!-- Image -->
                            <a href="shop-detail.html"><img class="card-img" src="assets/images/impra black tea combo pack at nihaq invesments.jpeg" alt="buy black tea from the best impra tea distributor | nihaq investment in lagos nigeria" title="Impra Black tea combo pack "></a>

                            <!-- Card body -->
                            <div class="card-body text-center p-3 px-0">
                                <!-- Badge and price -->
                                <div class="d-flex justify-content-center mb-2">
                                    <ul class="list-inline mb-0">
                                        <li class="list-inline-item me-0 small"><i class="fas fa-star text-danger"></i></li>
                                        <li class="list-inline-item me-0 small"><i class="fas fa-star text-danger"></i></li>
                                        <li class="list-inline-item me-0 small"><i class="fas fa-star text-danger"></i></li>
                                        <li class="list-inline-item me-0 small"><i class="fas fa-star text-danger"></i></li>
                                    </ul>
                                </div>
                                <!-- Title -->
                                <h5 class="card-title">
                                    <a href="shop-detail.html">Black Tea <br> Combo Pack</a>
                                </h5>
                            </div>

                        </div>
                    </div>
                    <!-- Product item END -->
                    <!-- Product item START -->
                    <div class="col-sm-10 col-md-4 col-lg-4">
                        <div class="card border p-3 h-100">
                            <!-- Image -->
                            <a href="shop-detail.html"><img class="card-img" src="assets/images/impra black tea mango flavoured at nihaq invesments.jpeg" alt="buy black tea from the best impra tea distributor | nihaq investment in lagos nigeria" title="Impra black tea mango flavoured "></a>

                            <!-- Card body -->
                            <div class="card-body text-center p-3 px-0">
                                <!-- Badge and price -->
                                <div class="d-flex justify-content-center mb-2">
                                    <ul class="list-inline mb-0">
                                        <li class="list-inline-item me-0 small"><i class="fas fa-star text-danger"></i></li>
                                        <li class="list-inline-item me-0 small"><i class="fas fa-star text-danger"></i></li>
                                        <li class="list-inline-item me-0 small"><i class="fas fa-star text-danger"></i></li>
                                        <li class="list-inline-item me-0 small"><i class="fas fa-star text-danger"></i></li>
                                    </ul>
                                </div>
                                <!-- Title -->
                                <h5 class="card-title">
                                    <a href="shop-detail.html">Black Tea <br> Mango Flavoured</a>
                                </h5>
                            </div>

                        </div>
                    </div>
                    <!-- Product item END -->
                    <!-- Product item START -->
                    <div class="col-sm-10 col-md-4 col-lg-4">
                        <div class="card border p-3 h-100">
                            <!-- Image -->
                            <a href="shop-detail.html"><img class="card-img" src="assets/images/impra black tea mint flavoured at nihaq invesments.jpeg" alt="buy black tea from the best impra tea distributor | nihaq investment in lagos nigeria" title="Impra black tea mint flavoured"></a>

                            <!-- Card body -->
                            <div class="card-body text-center p-3 px-0">
                                <!-- Badge and price -->
                                <div class="d-flex justify-content-center mb-2">
                                    <ul class="list-inline mb-0">
                                        <li class="list-inline-item me-0 small"><i class="fas fa-star text-danger"></i></li>
                                        <li class="list-inline-item me-0 small"><i class="fas fa-star text-danger"></i></li>
                                        <li class="list-inline-item me-0 small"><i class="fas fa-star text-danger"></i></li>
                                        <li class="list-inline-item me-0 small"><i class="fas fa-star text-danger"></i></li>
                                    </ul>
                                </div>
                                <!-- Title -->
                                <h5 class="card-title">
                                    <a href="shop-detail.html">Black Tea <br> Mint Flavoured</a>
                                </h5>
                            </div>

                        </div>
                    </div>
                    <!-- Product item END -->
                    <!-- Product item START -->
                    <div class="col-sm-10 col-md-4 col-lg-4">
                        <div class="card border p-3 h-100">
                            <!-- Image -->
                            <a href="shop-detail.html"><img class="card-img" src="assets/images/impra black tea pineapple flavoured at nihaq invesments.jpeg" alt="buy Black tea from the best impra tea distributor | nihaq investment in lagos nigeria" title="Impra Black tea Pineapple Flavoured"></a>

                            <!-- Card body -->
                            <div class="card-body text-center p-3 px-0">
                                <!-- Badge and price -->
                                <div class="d-flex justify-content-center mb-2">
                                    <ul class="list-inline mb-0">
                                        <li class="list-inline-item me-0 small"><i class="fas fa-star text-danger"></i></li>
                                        <li class="list-inline-item me-0 small"><i class="fas fa-star text-danger"></i></li>
                                        <li class="list-inline-item me-0 small"><i class="fas fa-star text-danger"></i></li>
                                        <li class="list-inline-item me-0 small"><i class="fas fa-star text-danger"></i></li>
                                    </ul>
                                </div>
                                <!-- Title -->
                                <h5 class="card-title">
                                    <a href="shop-detail.html">Black Tea <br> Pineapple Flavoured</a>
                                </h5>
                            </div>

                        </div>
                    </div>
                    <!-- Product item END -->
                    <!-- Product item START -->
                    <div class="col-sm-10 col-md-4 col-lg-4">
                        <div class="card border p-3 h-100">
                            <!-- Image -->
                            <a href="shop-detail.html"><img class="card-img" src="assets/images/impra black tea raspberry flavour at nihaq invesments.jpeg" alt="buy black tea from the best impra tea distributor | nihaq investment in lagos nigeria" title="Impra Black tea Raspberry Flavoured "></a>

                            <!-- Card body -->
                            <div class="card-body text-center p-3 px-0">
                                <!-- Badge and price -->
                                <div class="d-flex justify-content-center mb-2">
                                    <ul class="list-inline mb-0">
                                        <li class="list-inline-item me-0 small"><i class="fas fa-star text-danger"></i></li>
                                        <li class="list-inline-item me-0 small"><i class="fas fa-star text-danger"></i></li>
                                        <li class="list-inline-item me-0 small"><i class="fas fa-star text-danger"></i></li>
                                        <li class="list-inline-item me-0 small"><i class="fas fa-star text-danger"></i></li>
                                    </ul>
                                </div>
                                <!-- Title -->
                                <h5 class="card-title">
                                    <a href="shop-detail.html">Black Tea <br> Raspberry Flavoured</a>
                                </h5>
                            </div>

                        </div>
                    </div>
                    <!-- Product item END -->
                    <!-- Product item START -->
                    <div class="col-sm-10 col-md-4 col-lg-4">
                        <div class="card border p-3 h-100">
                            <!-- Image -->
                            <a href="shop-detail.html"><img class="card-img" src="assets/images/impra black tea strawberry flavoured at nihaq invesments.jpeg" alt="buy black tea from the best impra tea distributor | nihaq investment in lagos nigeria" title="Impra Black tea Strawberry Flavoured "></a>

                            <!-- Card body -->
                            <div class="card-body text-center p-3 px-0">
                                <!-- Badge and price -->
                                <div class="d-flex justify-content-center mb-2">
                                    <ul class="list-inline mb-0">
                                        <li class="list-inline-item me-0 small"><i class="fas fa-star text-danger"></i></li>
                                        <li class="list-inline-item me-0 small"><i class="fas fa-star text-danger"></i></li>
                                        <li class="list-inline-item me-0 small"><i class="fas fa-star text-danger"></i></li>
                                        <li class="list-inline-item me-0 small"><i class="fas fa-star text-danger"></i></li>
                                    </ul>
                                </div>
                                <!-- Title -->
                                <h5 class="card-title">
                                    <a href="shop-detail.html">Black Tea <br> Strawberry Flavoured</a>
                                </h5>
                            </div>

                        </div>
                    </div>
                    <!-- Product item END -->
                    <!-- Product item START -->
                    <div class="col-sm-10 col-md-4 col-lg-4">
                        <div class="card border p-3 h-100">
                            <!-- Image -->
                            <a href="shop-detail.html"><img class="card-img" src="assets/images/impra black tea with natural cloves at nihaq invesments.jpeg" alt="buy Black tea from the best impra tea distributor | nihaq investment in lagos nigeria" title="Impra Black tea with natural cloves"></a>

                            <!-- Card body -->
                            <div class="card-body text-center p-3 px-0">
                                <!-- Badge and price -->
                                <div class="d-flex justify-content-center mb-2">
                                    <ul class="list-inline mb-0">
                                        <li class="list-inline-item me-0 small"><i class="fas fa-star text-danger"></i></li>
                                        <li class="list-inline-item me-0 small"><i class="fas fa-star text-danger"></i></li>
                                        <li class="list-inline-item me-0 small"><i class="fas fa-star text-danger"></i></li>
                                        <li class="list-inline-item me-0 small"><i class="fas fa-star text-danger"></i></li>
                                    </ul>
                                </div>
                                <!-- Title -->
                                <h5 class="card-title">
                                    <a href="shop-detail.html">Black Tea <br> with Natural Cloves</a>
                                </h5>
                            </div>

                        </div>
                    </div>
                    <!-- Product item END -->
                    <!-- Product item START -->
                    <div class="col-sm-10 col-md-4 col-lg-4">
                        <div class="card border p-3 h-100">
                            <!-- Image -->
                            <a href="shop-detail.html"><img class="card-img" src="assets/images/impra green tea ginger flavoured at nihaq invesments.jpeg" alt="buy green tea from the best impra tea distributor | nihaq investment in lagos nigeria" title="Impra green tea Ginger Flavoured"></a>

                            <!-- Card body -->
                            <div class="card-body text-center p-3 px-0">
                                <!-- Badge and price -->
                                <div class="d-flex justify-content-center mb-2">
                                    <ul class="list-inline mb-0">
                                        <li class="list-inline-item me-0 small"><i class="fas fa-star text-danger"></i></li>
                                        <li class="list-inline-item me-0 small"><i class="fas fa-star text-danger"></i></li>
                                        <li class="list-inline-item me-0 small"><i class="fas fa-star text-danger"></i></li>
                                        <li class="list-inline-item me-0 small"><i class="fas fa-star text-danger"></i></li>
                                    </ul>
                                </div>
                                <!-- Title -->
                                <h5 class="card-title">
                                    <a href="shop-detail.html">Green Tea <br> Ginger Flavoured</a>
                                </h5>
                            </div>

                        </div>
                    </div>
                    <!-- Product item END -->
                </div>
                <!-- Product END -->
            </div>
        </section>
        <!-- =======================
Best selling product END -->
    </main>
    <!-- **************** MAIN CONTENT END **************** -->

    <!-- =======================
Footer START -->
    <footer class="pt-5" style="background-color: black;">
        <div class="container">

            <!-- Widgets START -->
            <div class="row pt-5">
                <!-- Footer Widget -->
                <div class="col-md-6 col-lg-3 mb-4">
                    <!-- Item -->
                    <div class="mb-4 position-relative">
                        <div>
                            <a href="home.html" class=" mb-2 align-items-center h3 text-danger">NIHAQ INVESTMENTS</a>
                        </div>
                    </div>
                </div>

                <!-- Footer Widget -->
                <div class="col-md-6 col-lg-2 mb-4">
                    <h6 class="mb-4 text-white">Quick Links</h6>
                    <div class="row">
                        <div class="col">
                            <ul class="nav flex-column text-primary-hover">
                                <li class="nav-item"><a class="nav-link pt-0" href="home.html">Home</a></li>
                                <li class="nav-item"><a class="nav-link" href="about-nihaq-investments.html">About Us</a></li>
                                <li class="nav-item"><a class="nav-link" href="contact-us.html">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Footer Widget -->
                <div class="col-sm-6 col-lg-4 mb-4">
                    <h6 class="mb-4 text-white">Contact us</h6>
                    <ul class="nav flex-column text-primary-hover">
                        <li class="nav-item"><a class="nav-link" href="contact-us.html"><i class="fs-5 bi bi-geo-alt me-3"></i>Shop A3108, 2nd Floor, Main Tejuosho Shopping Complex, Surulere, Lagos.</a></li>
                        <li class="nav-item"><a class="nav-link" href="mailto:info@nihaq.com"><i class="far fa-envelope fa-fw me-3"></i>info@nihaq.com</a></li>
                        <li class="nav-item"><a class="nav-link" href="tel:07040004215"><i class="fas fa-headphones-alt fa-fw me-3"></i> +234 809 675 5330, +234 809 675 5339, +234 809 675 5341</a></li>
                        <li class="nav-item"><i class="fas bi bi-clock me-3"></i> <span class="text-primary">Mon - Sat:</span> 08:30am - 18:30pm.<span class="text-primary">Sun:</span> Closed
                        </li>

                    </ul>
                </div>

                <!-- Footer Widget -->
                <div class="col-sm-6 col-lg-3 mb-4">
                    <h6 class="mb-3 text-white">Social media handles</h6>
                    <a href="https://wa.link/bcnhqi"><i class="fab fa-whatsapp fa-fw text-whatsapp fs-3 text-primary"></i> </a>
                    <a href="https://www.instagram.com/nihaqinv?igsh=ZTQxY2FuOGc1aGtr" target="_blank"><i class="fab fa-instagram fa-fw text-instagram fs-3 text-primary"></i> </a>
                    <a href="https://m.facebook.com/nihaqinvestment/" target="_blank"><i class="fab fa-facebook fa-fw text-facebook fs-3 text-primary"></i> </a>

                </div>
            </div>
            <!-- Widgets END -->
        </div>
        <hr>
        <!-- Footer copyright START -->
        <div class="bg-dark-overlay-3 mt-5">
            <div class="container">
                <div class="row align-items-center justify-content-md-between py-4">
                    <div class="col-md-6">
                        <!-- Copyright -->
                        <div class="text-center text-md-start text-primary-hover text-muted">Copyright © 2023 - 2024
                            <a href="https://www.pziel.com/" class="text-reset btn-link" target="_blank">NIHAQ INVESTMENTS</a>. All rights reserved.
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Footer copyright END -->
    </footer>
    <!-- =======================
Footer END -->
    <!-- =======================
JS libraries, plugins and custom scripts -->

    <!-- Bootstrap JS -->
    <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Vendors -->
    <script src="assets/vendor/tiny-slider/tiny-slider.js"></script>

    <!-- Template Functions -->
    <script src="assets/js/functions.js"></script>

</body>

<!-- Mirrored from blogzine.webestica.com/  printing-and-branding-company-in-lagos-nigeria-pzielng-home.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 18 Feb 2023 08:23:33 GMT -->

</html>