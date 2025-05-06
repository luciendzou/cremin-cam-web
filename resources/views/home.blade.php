@extends('index')
@section('content')
    <div class="section-regular">
        <div class="container-regular">
            <div class="header-flex-row">
                <div>
                    <div data-w-id="71a25650-46b5-b891-5424-370df6257e90" class="header-title-wrap">
                        <div class="margin-bottom-24">
                            <h1 class="h2-heading">La meilleure MICROFINANCE qui soit au Cameroun</h1>
                        </div>
                        <div class="margin-bottom-64 hero-home">
                            <p class="paragraph-small">Nous vous accompagnons à chaque étape, de la structuration de votre
                                concept à la réalisation de votre projet, en vous proposant des offres et solutions
                                financières adaptées à vos besoins.</p>
                        </div><a href="/crem-contact-us" class="button-primary-right-icon-2 w-inline-block">
                            <div>Contactez nous</div>
                            <div class="icon-regular button w-embed">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none">
                                    <path
                                        d="M15.187 11.2362L11.0895 7.13873L12.1696 6.05859L18.1111 12.0001L12.1696 17.9416L11.0895 16.8615L15.187 12.764H5.88892V11.2362H15.187Z"
                                        fill="currentColor" />
                                </svg>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="header-right-wrap">
                    <div class="header-image-wrap-small" id="image-slideshow-container">
                        <img src="{{ asset('images/home/option-1.jpg') }}" loading="lazy" alt="Financial planning meeting"
                            class="image-cover-2 slideshow-image active" />

                        {{-- Image 2: No 'active' class --}}
                        <img src="{{ asset('images/home/option-2.jpg') }}" loading="lazy" alt="Customer receiving service"
                            class="image-cover-2 slideshow-image" />

                        {{-- Image 3: No 'active' class --}}
                        <img src="{{ asset('images/home/option-3.jpg') }}" loading="lazy" alt="Investment growth chart"
                            class="image-cover-2 slideshow-image" />

                        {{-- Image 4: No 'active' class --}}
                        <img src="{{ asset('images/home/option-4.jpg') }}" loading="lazy" alt="Business handshake agreement"
                            class="image-cover-2 slideshow-image" />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="partner">
        <h2>La confiance de plus de 10 clients et de plus de 5000 clients</h2>
        <span>Notre expertise et notre fiabilité sont reconnues. Faites
            confiance à notre savoir-faire pour répondre à vos besoins avec efficacité et professionnalisme.</span>
        <div class="partner-scroll-container">
            <div class="grid">
                <div class="grid-item">
                    <img src="{{ asset('images/partner/minfi.png') }}" alt="Partner 1">
                </div>
                <div class="grid-item">
                    <img src="{{ asset('images/partner/logodgtcfm.jpeg') }}" alt="Partner 2">
                </div>
                <div class="grid-item">
                    <img src="{{ asset('images/partner/mutresor.png') }}" alt="Partner 3">
                </div>
                <div class="grid-item">
                    <img src="{{ asset('images/partner/reccucam.png') }}" alt="Partner 4">
                </div>
                <div class="grid-item">
                    <img src="{{ asset('images/partner/nfc.jpg') }}" alt="Partner 5">
                </div>
                <div class="grid-item">
                    <img src="{{ asset('images/partner/saar.jpg') }}" alt="Partner 6">
                </div>

                <div class="grid-item">
                    <img src="{{ asset('images/partner/bf_life_insurance.png') }}" alt="Partner 1">
                </div>
                <div class="grid-item">
                    <img src="{{ asset('images/partner/bicec.png') }}" alt="Partner 2">
                </div>
                <div class="grid-item">
                    <img src="{{ asset('images/partner/ecobank.png') }}" alt="Partner 3">
                </div>
                <div class="grid-item">
                    <img src="{{ asset('images/partner/UBA-logo-2.png') }}" alt="Partner 4">
                </div>
                <div class="grid-item">
                    <img src="{{ asset('images/partner/wafacash.png') }}" alt="Partner 5">
                </div>
                <div class="grid-item">
                    <img src="{{ asset('images/partner/Ria.png') }}" alt="Partner 6">
                </div>

                <div class="grid-item">
                    <img src="{{ asset('images/partner/fodecc.jpg') }}" alt="Partner 1">
                </div>
                <div class="grid-item">
                    <img src="{{ asset('images/partner/woldremit.png') }}" alt="Partner 2">
                </div>
                <div class="grid-item">
                    <img src="{{ asset('images/partner/paytop.png') }}" alt="Partner 3">
                </div>
                <div class="grid-item">
                    <img src="{{ asset('images/partner/Campost_logo.png') }}" alt="Partner 4">
                </div>
                <div class="grid-item">
                    <img src="{{ asset('images/partner/Orange-Money.jpg') }}" alt="Partner 5">
                </div>
                <div class="grid-item">
                    <img src="{{ asset('images/partner/mobile-money.jpg') }}" alt="Partner 6">
                </div>
            </div>
        </div>
    </section>

    <div id="about" class="section-about-header">
        <div class="container-regular">
            <div data-w-id="77ea9046-7f1a-c6ac-33b1-f8cfd084d020" class="w-layout-grid about-header">
                <div class="header-content">
                    <h1 class="h1-heading sobre text-white">Votre satisfaction, notre priorité</h1>
                </div>
                <p class="paragraph-large text-white">
                    Nous vous offrons des services et solutions bancaires rapides et efficaces, de l'ouverture d'un
                    compte (salaire, épargne, parrainé, junior, entreprise) à la demande et d'obtention de votre prêt.
                    Ouvrez votre compte et profitez d'une expérience bancaire souriante et sans tracas.
                </p>
            </div>
            <div class="flex-row">
                <div class="option" style="background-image: url({{ asset('images/home/option-1.jpg') }})"></div>
                <div class="option" style="background-image: url({{ asset('images/home/option-2.jpg') }})"></div>
                <div class="option" style="background-image: url({{ asset('images/home/option-3.jpg') }})"></div>
                <div class="option" style="background-image: url({{ asset('images/home/option-4.jpg') }})"></div>
            </div>

        </div>
        <div class="about-header-bg"></div>
    </div>
    <div class="section-regular" style="margin-top: 6%; margin-bottom: 1% !important;">
        <div data-w-id="697c3703-c243-502c-9917-758c8360a7bc" class="about-content-background-color"></div>
        <div class="container-regular">
            <div class="w-layout-grid about-content-grid">
                <div id="w-node-_697c3703-c243-502c-9917-758c8360a7bf-172c3d36"
                    data-w-id="697c3703-c243-502c-9917-758c8360a7bf">
                    <div class="margin-bottom-24">
                        <h2 class="h3-heading">Vos objectifs financiers sont importants</h2>
                    </div>
                    <p class="paragraph-regular">Imaginez un avenir où vos objectifs financiers ne
                        sont plus de simples rêves, mais des réalités tangibles.
                        Que vous souhaitiez <b>épargner</b> pour l'avenir de vos enfants,
                        réaliser un <b>investissement immobilier</b>, ou développer
                        votre <b>entreprise</b>, nous sommes là pour transformer vos aspirations en succès.
                        <br />
                        Votre sérénité financière est notre priorité absolue. Dans un monde en
                        constante évolution, nous comprenons l'importance de protéger et de
                        renforcer votre patrimoine. Au <b>CREMIN-CAM</b>, nous vous offrons bien
                        plus que des produits financiers ; nous vous offrons la <b>tranquillité d'esprit</b>.
                    </p>
                    <p style="margin-top: 2%">Découvrer nos <a href="/" class="link">solutions bancaires</a> pour
                        en
                        savoir.</p>
                </div>
                <div data-w-id="697c3703-c243-502c-9917-758c8360a7c8" class="w-layout-grid about-content-image-grid">
                    <div id="w-node-_697c3703-c243-502c-9917-758c8360a7c9-172c3d36"
                        class="about-content-image-bottom-left">
                        <img src="{{ asset('images/home/services-2.jpg') }}" loading="lazy"
                            id="w-node-_697c3703-c243-502c-9917-758c8360a7ca-172c3d36" sizes="90vw" alt=""
                            srcset="{{ asset('images/home/services-2.jpg') }}" class="image-cover" />
                    </div>
                    <div id="w-node-_697c3703-c243-502c-9917-758c8360a7cb-172c3d36" class="about-content-image-top-right">
                        <img src="{{ asset('images/home/services-1.jpg') }}" loading="lazy"
                            id="w-node-_697c3703-c243-502c-9917-758c8360a7cc-172c3d36" alt=""
                            class="image-cover" />
                    </div>
                    <div id="w-node-_697c3703-c243-502c-9917-758c8360a7cd-172c3d36">
                        <img src="{{ asset('images/home/services-3.jpg') }}" loading="lazy" alt=""
                            class="image-cover" />
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="section-regular-2 mt-4" style="background-color: rgba(230, 230, 230, 0.288); padding: 40px 5% 10px 5% !important">
        <h1 class="h3-heading">Pourquoi choisir CREMIN-CAM</h1>
        <div class="container">
            <div class="card-container">
                <div class="card">
                    <div class="card-header">
                        <i class="fa-solid fa-basketball"></i>
                        <h3>Offres adaptées</h3>
                    </div>
                    <div class="card-body">
                        <p>Nous mettons à votre disposition des offres efficaces et adaptées à vos besoins.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <i class="fa-solid fa-file-zipper"></i>
                        <h3>Services de qualité</h3>
                    </div>
                    <div class="card-body">
                        <p>Quelqu'en soit votre situation, nous vous offrons un service de qualité.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <i class="fa-solid fa-tachograph-digital"></i>
                        <h3>Projets reussis</h3>
                    </div>
                    <div class="card-body">
                        <p>Vous avez un projet, nous vous accompagnons de la mise en place jusqu'à sa
                            reussite.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <i class="fa-solid fa-globe"></i>
                        <h3>Disponibilité</h3>
                    </div>
                    <div class="card-body">
                        <p>Nous sommes disponibles dans les points strategiques pour être plus proche de
                            vous.</p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="choose surface-border about" id="about" data-aos="fade-up">
        <div class="row justify-content-end" style="background: white; margin: 1% 0%">
            <div class="col-lg-11">
                <div class="row justify-content-end">

                    <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                        <div class="count-box py-5">
                            <i class="bi bi-emoji-smile"></i>
                            <span data-purecounter-start="0" data-purecounter-end="6000" class="purecounter">0</span>
                            <p>Clients satisfaits</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                        <div class="count-box py-5">
                            <i class="bi bi-journal-richtext"></i>
                            <span data-purecounter-start="0" data-purecounter-end="300" class="purecounter">0</span>
                            <p>Projets financés</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                        <div class="count-box py-5">
                            <i class="bi bi-clock"></i>
                            <span data-purecounter-start="0" data-purecounter-end="15" class="purecounter">0</span>
                            <p>Années d'Expériences</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                        <div class="count-box py-5">
                            <i class="bi bi-award"></i>
                            <span data-purecounter-start="0" data-purecounter-end="22" class="purecounter">0</span>
                            <p>Awards</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
