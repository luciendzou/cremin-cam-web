@extends('index')
@section('content')
    <link href="{{ asset('css/product-ext.min.css') }}" rel="stylesheet" type="text/css" />
    <div class="section-header-products">
        <div class="text-head-product">
            <h1>Des Produits pour votre liberté financière</h1>
            <p>Embrassez un avenir où vos choix financiers ne sont plus limités. C'est notre engagement à vous fournir les
                outils et les solutions nécessaires pour prendre le contrôle total de votre argent.</p>

            <a href="#more-products" class="btn-heard-product">En savoir plus <i class="bi bi-arrow-right"></i> </a>
        </div>
        <div class="img-head-product" style="background-image: url({{ asset('images/products/particuliers-1.png') }})"></div>
    </div>

    <section class="section_products-uses" id="more-products">
        <div class="padding-global">
            <div class="container-medium">
                <div class="padding-section-small">
                    <h3 class="h2-heading text-align-center">Nos Solutions bancaires</h3>
                    <div class="padding-bottom padding-medium"></div>
                    <div class="product-country_component">
                        <div class="product-country_item">
                            <div class="product-country_icon-wrapper">
                                <img alt="" loading="lazy" src="https://www.svgrepo.com/show/513214/iphone.svg" />
                            </div>
                            <div class="padding-bottom padding-xxsmall"></div>
                            <h3 class="heading-style-h6 is-product"><a href="/products/crem-mobile-banking"
                                    class="link-product">Mobile Banking</a></h3>
                            <div class="padding-bottom padding-xsmall"></div>
                            <p class="text-size-small text-color-slategrey"><b>Solo by CREMIN-CAM</b> est notre nouvelle
                                solution faites pour vous<br /><br />
                                Fini les fils d'attente, faites vos transactions à partir de chez vous.</p>
                            <div class="padding-bottom padding-medium"></div>
                            <img sizes="(max-width: 479px) 100vw, (max-width: 767px) 84vw, 20vw"
                                srcset="{{ asset('images/products/product-1.png') }}"
                                src="{{ asset('images/products/product-1.png') }}" loading="lazy"
                                alt="user interface showing account details" class="product-country_image" />
                        </div>
                        <div class="product-country_item">
                            <div class="product-country_icon-wrapper">
                                <img alt="" loading="lazy"
                                    src="https://www.svgrepo.com/show/162217/visa-card.svg" />
                            </div>
                            <div class="padding-bottom padding-xxsmall"></div>
                            <h3 class="heading-style-h6 is-product"><a href="/products/crem-visa-card"
                                    class="link-product">Cartes Visa prépayées</a></h3>
                            <div class="padding-bottom padding-xsmall"></div>
                            <p class="text-size-small text-color-slategrey">Accedez à votre
                                argent quelque soit votre position dans le monde.<br /><br />Commandez vos produits depuis
                                votre salon, partout dans le monde.</p>
                            <div class="padding-bottom padding-medium"></div><img
                                sizes="(max-width: 479px) 100vw, (max-width: 767px) 84vw, 20vw"
                                srcset="{{ asset('images/products/product-2.png') }}"
                                src="{{ asset('images/products/product-2.png') }}" loading="lazy"
                                alt="user interface showing account details" class="product-country_image" />
                        </div>
                        <div class="product-country_item">
                            <div class="product-country_icon-wrapper">
                                <img alt="" loading="lazy" src="https://www.svgrepo.com/show/372061/savings.svg" />
                            </div>
                            <div class="padding-bottom padding-xxsmall"></div>
                            <h3 class="heading-style-h6 is-product"><a href="" class="link-product">Comptes
                                    d'Epargnes</a></h3>
                            <div class="padding-bottom padding-xsmall"></div>
                            <p class="text-size-small text-color-slategrey">La sécurité c'est aussi prévoir un bon avenir
                                pour soi et celle de sa génération future.
                                <br /><br />Épargnez dès maintenant !
                            </p>
                            <div class="padding-bottom padding-medium"></div><img
                                sizes="(max-width: 479px) 100vw, (max-width: 767px) 84vw, 20vw"
                                srcset="{{ asset('images/products/product-3.png') }}"
                                src="{{ asset('images/products/product-3.png') }}" loading="lazy"
                                alt="a chart showing balance information" class="product-country_image" />
                        </div>
                        <div class="product-country_item">
                            <div class="product-country_icon-wrapper">
                                <img alt="" loading="lazy"
                                    src="https://www.svgrepo.com/show/428903/account-balance-cash.svg" />
                            </div>
                            <div class="padding-bottom padding-xxsmall"></div>
                            <h3 class="heading-style-h6 is-product"><a href="" class="link-product">Ouverture de
                                    comptes</a></h3>
                            <div class="padding-bottom padding-xsmall"></div>
                            <p class="text-size-small text-color-slategrey">Prêt à simplifier votre gestion financière ?
                                Ouvrez votre compte bancaire en quelques étapes simples et rapides.<br /><br />Démarrez
                                votre parcours financier du bon pied ! Ouvrir un compte bancaire chez nous.</p>
                            <div class="padding-bottom padding-medium"></div><img
                                sizes="(max-width: 479px) 100vw, (max-width: 767px) 84vw, 20vw"
                                srcset="{{ asset('images/products/product-4.png') }}"
                                src="{{ asset('images/products/product-4.png') }}" loading="lazy"
                                alt="user interface showing transactions statement" class="product-country_image" />
                        </div>
                        <div class="product-country_item">
                            <div class="product-country_icon-wrapper">
                                <img alt="" loading="lazy"
                                    src="https://www.svgrepo.com/show/239389/stamp-postal.svg" />
                            </div>
                            <div class="padding-bottom padding-xxsmall"></div>
                            <h3 class="heading-style-h6 is-product"><a href="" class="link-product">CREMIN-CAM
                                    money</a></h3>
                            <div class="padding-bottom padding-xsmall"></div>
                            <p class="text-size-small text-color-slategrey">Par le biais de notre partenaire
                                <b>CAMPOST</b>,
                                Nous vous offrons un accès illimité à plusieurs services.<br /><br />Payez vos factures
                                (eau, electricité), la scolarité, frais de douane et même pour les impôts.
                            </p>
                            <div class="padding-bottom padding-medium"></div><img
                                sizes="(max-width: 479px) 100vw, (max-width: 767px) 84vw, 20vw"
                                srcset="{{ asset('images/products/product-5.png') }}"
                                src="{{ asset('images/products/product-5.png') }}" loading="lazy"
                                alt="user interface showing user beneficiaries" class="product-country_image" />
                        </div>
                        <div class="product-country_item">
                            <div class="product-country_icon-wrapper">
                                <img alt="" loading="lazy" src="https://www.svgrepo.com/show/476724/pay.svg" />
                            </div>
                            <div class="padding-bottom padding-xxsmall"></div>
                            <h3 class="heading-style-h6 is-product"><a href="" class="link-product">Comptes
                                    Salaires</a></h3>
                            <div class="padding-bottom padding-xsmall"></div>
                            <p class="text-size-small text-color-slategrey">Simplifiez la gestion de votre salaire ! Ouvrez
                                un compte salaire chez nous.<br /><br />Et profitez d'avantages conçus pour vous faciliter
                                la vie au quotidien.</p>
                            <div class="padding-bottom padding-medium"></div><img
                                sizes="(max-width: 479px) 100vw, (max-width: 767px) 84vw, 20vw"
                                srcset="{{ asset('images/products/product-6.png') }}"
                                src="{{ asset('images/products/product-6.png') }}" loading="lazy"
                                alt="a table dates of the week and when payments will be scheduled."
                                class="product-country_image" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section_services-client">
        <div class="carte-for-service">
            <div class="text-carte">
                <p>
                    Nous vous offrons aussi une variété de services pour vous accompagner dans la réalisation de vos
                    projets.
                </p>
                <p class="sub-desc">
                    Nous mettons à votre disposition une équipe d'experts dévoués pour vous conseiller et
                    vous guider à travers
                    chaque étape de votre parcours financier. Nous vous accompagnons à chaque étape, de la structuration de
                    votre concept à la réalisation de votre projet, en vous proposant des services financières
                    adaptées à vos besoins.
                </p>
                <a href="/crem-services">En savoir plus <i class="fa fa-arrow-right"></i></a>
            </div>
            <div class="img-carte"
                style="background: url('{{ asset('images/products/services-prods.jpg') }}');">
            </div>
        </div>
    </section>

    {{-- <section class="section_products-client" style="background-color: #01182e !important">
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
                                srcset="{{ asset('images/products/app-mob.png') }} 620w"
                                alt="iphone mockup showing account details" class="products_client-image" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
@endsection
