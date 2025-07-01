@extends('index')
@section('content')
    <div class="section-header-products">
        <div class="text-head-product">
            <h1>Accompagnez vos projets avec CREMIN-CAM</h1>
            <p>
                Que ce soit pour moderniser votre exploitation agricole, acquérir un bien immobilier, ou développer votre
                entreprise, notre équipe d'experts vous accompagne. Nous vous aidons à structurer votre projet et à vous
                fournir le financement adapté pour le concrétiser.
            </p>

            <a href="#more-projects" class="btn-heard-product">En savoir plus <i class="bi bi-arrow-right"></i> </a>
        </div>
        <div class="img-head-product" style="background-image: url({{ asset('images/projects/entreprise.jpg') }})"></div>
    </div>
    <section class="projects" id="more-projects">
        <h1>Nos projets actuels</h1>
        <p>En tant que microfinance, nous sommes fiers de soutenir une multitude de projets qui contribuent au développement
            économique et social de nos communautés. Notre engagement se manifeste à travers un accompagnement personnalisé
            et des solutions de financement adaptées aux besoins spécifiques de chaque entrepreneur et de chaque initiative.
            Voici un aperçu des types de projets que nous finançons et des secteurs dans lesquels nous sommes
            particulièrement actifs.
        </p>
        <div class="row projects-list">
            <div class="col-4">
                <div class="carte-projects">
                    <h5>Projets Agricoles</h5>
                    <hr style="margin: 1rem 0 ">
                    <p>Nous soutenons les agriculteurs et les entreprises agricoles dans la modernisation de leurs
                        exploitations, l'acquisition de matériel, l'amélioration des rendements et la commercialisation de
                        leurs produits.</p>
                </div>
            </div>
            <div class="col-4">
                <div class="carte-projects">
                    <h5>Projets Immobiliers</h5>
                    <hr style="margin: 1rem 0 ">
                    <p>Nous finançons l'achat, la construction ou la rénovation de biens immobiliers, qu'il s'agisse de
                        logements individuels, de bâtiments commerciaux ou de projets de développement urbain.</p>
                </div>
            </div>
            <div class="col-4">
                <div class="carte-projects">
                    <h5>Projets d'Éducation et de Formation</h5>
                    <hr style="margin: 1rem 0 ">
                    <p>Nous investissons dans l'avenir en finançant des projets liés à l'éducation, tels que la construction
                        d'écoles, l'acquisition de matériel pédagogique ou le développement de programmes de formation
                        professionnelle.</p>
                </div>
            </div>
        </div>
    </section>
@endsection
