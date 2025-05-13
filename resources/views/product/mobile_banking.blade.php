@extends('index')

@section('content')
    <link href="{{ asset('css/product-ext.min.css') }}" rel="stylesheet" type="text/css" />
    <div class="section-header-products">
        <div class="text-head-product">
            <img src="{{ asset('images/products/solo.png') }}" loading="lazy }}" alt="" style="width: 30%">
            <p class="mt-5">Libérez-vous des soucis financiers et accédez à votre argent en toute circonstance. Notre
                Mobile Banking vous offre une gestion simple et sécurisée.</p>

            <a href="#more-products" class="btn-heard-product">En savoir plus <i class="bi bi-arrow-right"></i> </a>
        </div>
        <div class="img-head-product" style="background-image: url({{ asset('images/products/particuliers-1.png') }})">
        </div>
    </div>

    <section class="section_solo-uses" id="more-products">
        <div class="padding-global">
            <div class="container-medium">
                <div class="padding-section-small">
                    <h3 class="h2-heading text-align-center">Solo by CREMIN-CAM</h3>
                    <p class="subtitle">Découvrez toutes les fonctionnalités de notre application bancaire</p>
                    <div class="padding-bottom padding-medium"></div>
                    <div class="row">
                        <div class="col-3">
                            <div class="card">
                                <div class="card-body">
                                    <i class="fa-solid fa-gear"></i>
                                    <span>Consultation du solde</span>
                                    <p>Consulter votre solde en toute sérénité sans vous déplacez, tout étant chez vous.</p>
                                </div>
                                <img src="{{ asset('images/products/solo-1.png') }}" alt="" class="mt-2">
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card">
                                <div class="card-body">
                                    <i class="fa-solid fa-gear"></i>
                                    <span>Demande de découvert</span>
                                    <p>Faites vos différentes demandes sans venir en agence et recevez votre argent en un
                                        clic.</p>
                                </div>
                                <img src="{{ asset('images/products/solo-1.png') }}" alt="" class="mt-2">
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card">
                                <div class="card-body">
                                    <i class="fa-solid fa-gear"></i>
                                    <span>Demande de crédit</span>
                                    <p>Lancez votre procédure de demande de crédit étant chez vous, gagnez en energie.</p>
                                </div>
                                <img src="{{ asset('images/products/solo-1.png') }}" alt="" class="mt-2">
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card">
                                <div class="card-body">
                                    <i class="fa-solid fa-gear"></i>
                                    <span>Historique de compte</span>
                                    <p>Faites votre demande d'historisque de compte et recevez cela en quelques minutes.</p>
                                </div>
                                <img src="{{ asset('images/products/solo-1.png') }}" alt="" class="mt-2">
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card">
                                <div class="card-body">
                                    <i class="fa-solid fa-gear"></i>
                                    <span>Bank to wallet</span>
                                    <p>Transferez de l'argent de votre compte bancaire à votre portefeuille electronique.
                                    </p>
                                </div>
                                <img src="{{ asset('images/products/solo-1.png') }}" alt="" class="mt-2">
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card">
                                <div class="card-body">
                                    <i class="fa-solid fa-gear"></i>
                                    <span>Wallet to bank</span>
                                    <p>Transferez de l'argent de votre portefeuille electronique à votre compte.</p>
                                </div>
                                <img src="{{ asset('images/products/solo-1.png') }}" alt="" class="mt-2">
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card">
                                <div class="card-body">
                                    <i class="fa-solid fa-gear"></i>
                                    <span>Tansfert entre comptes</span>
                                    <p>Transferez de l'argent entre vos différents comptes ou un ami en toute sécurité.</p>
                                </div>
                                <img src="{{ asset('images/products/solo-1.png') }}" alt="" class="mt-2">
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card">
                                <div class="card-body">
                                    <i class="fa-solid fa-gear"></i>
                                    <span>Consultation transactions</span>
                                    <p>Consulter vos dernières transactions en toute sécurité et sans vous déplacez.</p>
                                </div>
                                <img src="{{ asset('images/products/solo-1.png') }}" alt="" class="mt-2">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section_products-client" style="background-color: #01182e !important">
        <div class="padding-global">
            <div class="container-medium">
                <div class="padding-section-small">
                    <div class="products_clients-component">
                        <div class="products_client-content">
                            <div class="heading-style-h1 text-color-white">Solo by CREMIN-CAM</div>
                            <div class="padding-bottom padding-small"></div>
                            <p class="text-color-white text-size-large">Toutes vos opérations bancaires sur votre mobile.
                                Simplifiez votre quotidien bancaire avec notre appli mobile, accédez à vos services
                                bancaires en un clin d'œil.</p>
                            <div class="padding-bottom padding-small"></div>
                            <img src="{{ asset('images/products/logo-solo.png') }}" loading="lazy" alt="Solo logo"
                                class="products_client-logo" />
                            <div class="row">
                                <div class="col-6">
                                    <a href="https://play.google.com/apps/test/com.cagecfi.pmobile_cremincam_client/27"
                                        class="btn-solo-product">
                                        <i class="fa-brands fa-google-play"></i>
                                        Telecharger l'application
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="products_client-image-wrapper"><img src="{{ asset('images/products/app-mob.png') }}"
                                loading="lazy"
                                sizes="(max-width: 479px) 63vw, (max-width: 767px) 38vw, (max-width: 991px) 46vw, 220.25px"
                                srcset="{{ asset('images/products/app-mob-2.png') }} 620w"
                                alt="iphone mockup showing account details" class="products_client-image" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="orther-solutions">
        <div class="padding-global">
            <h1 class="heading-style-h1">Les solutions qui pourraient vous intéresser</h1>
            <div class="row mt-5">
                <div class="col-3">
                    <a href="/products/crem-visa-card">
                        <div class="card">
                            <div class="card-body">
                                <span class="other-solutions-title">Carte Visa prepayée</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-3">
                    <div class="card">
                        <div class="card-body">
                            <span class="other-solutions-title">Comptes d'Epargnes</span>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card">
                        <div class="card-body">
                            <span class="other-solutions-title">Ouverture de comptes</span>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card">
                        <div class="card-body">
                            <span class="other-solutions-title">CREMIN-CAM money</span>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card">
                        <div class="card-body">
                            <span class="other-solutions-title">Comptes Salaires</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
