@extends('index')
@section('content')
    <div class="section-header-products">
        <div class="text-head-product">
            <h1>Accédez à des outils pensés pour votre avenir financier</h1>
            <p>Notre gamme complète de services est conçue pour vous offrir la flexibilité et le soutien nécessaires pour
                atteindre vos objectifs, qu'il s'agisse de gérer vos finances au quotidien, de planifier votre retraite ou
                de concrétiser un projet d'envergure.
            </p>

            <a href="#more-services" class="btn-heard-product">En savoir plus <i class="bi bi-arrow-right"></i> </a>
        </div>
        <div class="img-head-product" style="background-image: url({{ asset('images/services/services-1.jpg') }})"></div>
    </div>
    <section class="services-one" id="more-services">
        <div class="row">
            <div class="col-6">
                <h1>Nos Services bancaires</h1>
            </div>
            <div class="col-6">
                <p>Du premier projet jusqu’à sa réalisation. Que vous soyez entrepreneur,
                    salarié ou à la recherche d’un nouveau départ, notre
                    accompagnement personnalisé et nos outils digitaux vous
                    permettent d’agir, décider et progresser.</p>
            </div>
        </div>
        <div class="row services-list">
            <div class="col-4">
                <div class="carte-services">
                    <h5>Crédits Bancaires</h5>
                    <hr style="margin: 1rem 0 ">
                    <p>Réalisez vos projets personnels ou professionnels grâce à nos offres de crédit flexibles et
                        adaptées à votre capacité de remboursement.</p>
                </div>
            </div>
            <div class="col-4">
                <div class="carte-services">
                    <h5>Transferts d'argent</h5>
                    <hr style="margin: 1rem 0 ">
                    <p>Envoyez et recevez de l'argent en toute sécurité, localement et à l'international, grâce à nos
                        services de transfert rapides et fiables.</p>
                </div>
            </div>
            <div class="col-4">
                <div class="carte-services">
                    <h5>Encaissement Caisse</h5>
                    <hr style="margin: 1rem 0 ">
                    <p>Optimisez la gestion de votre trésorerie avec notre service d'encaissement sécurisé, garantissant
                        la protection et la traçabilité de vos fonds.</p>
                </div>
            </div>
            <div class="col-4">
                <div class="carte-services">
                    <h5>Bancassurance</h5>
                    <hr style="margin: 1rem 0 ">
                    <p>Protégez-vous et vos proches avec nos offres de bancassurance, alliant produits bancaires et
                        couvertures d'assurance pour une tranquillité d'esprit totale.</p>
                </div>
            </div>
            <div class="col-4">
                <div class="carte-services">
                    <h5>SMS Banking</h5>
                    <hr style="margin: 1rem 0 ">
                    <p>Restez informé en temps réel sur vos transactions et gérez votre compte en toute simplicité grâce à
                        nos alertes et services par SMS.</p>
                </div>
            </div>
            <div class="col-4">
                <div class="carte-services">
                    <h5>Ventes des Dévises</h5>
                    <hr style="margin: 1rem 0 ">
                    <p>Effectuez vos opérations de change en toute confiance. Nous vous proposons des taux compétitifs
                        pour l'achat et la vente de devises étrangères.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="section_services-client">
        <div class="carte-for-service">
            <div class="text-carte">
                <p>
                    Vous avez un projet agricole, immobilier ou toutes autres domaines ?
                </p>
                <p class="sub-desc">
                    Que ce soit pour moderniser votre exploitation ou acquérir un bien, notre équipe d'experts vous
                    accompagne. Nous vous aidons à structurer votre projet et à vous accompagner avec le financement adapté pour le
                    concrétiser
                </p>
                <a href="/crem-projets">En savoir plus <i class="fa fa-arrow-right"></i></a>
            </div>
            <div class="img-carte"
                style="background: url('{{ asset('images/products/services-prod.jpg') }}');">
            </div>
        </div>
    </section>
@endsection
