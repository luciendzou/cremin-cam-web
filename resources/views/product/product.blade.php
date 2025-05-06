@extends('index')
@section('content')
    <div class="section-header-products">
        <div class="text-head-product">
            <h1>Des Produits pour votre liberté financière</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere fuga dolor, animi eos velit distinctio
                blanditiis dolores, accusantium, tempore officia quibusdam quam. Perspiciatis asperiores nemo tempore
                obcaecati voluptates provident odit?</p>

            <a href="#more-products" class="btn-heard-product">En savoir plus <i class="bi bi-arrow-right"></i> </a>
        </div>
        <div class="img-head-product" style="background-image: url({{ asset('images/home/services-1.jpg') }})"></div>
    </div>
@endsection
