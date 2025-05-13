@extends('index')

@section('content')
    <link href="{{ asset('css/product-ext.min.css') }}" rel="stylesheet" type="text/css" />
    <div class="section-header-products">
        <div class="text-head-product">
            <h1>Carte visa prépayée CREMIN-CAM</h1>
            <p class="mt-5">Devenez moins soucieux, accedez à votre argent quelque soit votre position.rechargez, payez en
                ligne et en magasin partout dans le monde, sans les contraintes d'un compte bancaire traditionnel.</p>

            <a href="#more-products" class="btn-heard-product">En savoir plus <i class="bi bi-arrow-right"></i> </a>
        </div>
        <div class="img-head-product" style="background-image: url({{ asset('images/products/card-visa-1.png') }})">
        </div>
    </div>
@endsection
