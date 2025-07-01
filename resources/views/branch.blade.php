@extends('index')
@section('content')
    <div class="section-header-products">
        <div class="text-head-product">
            <h1>Nos Agences</h1>
            <p>
                Découvrez nos agences et trouvez celle qui est la plus proche de vous. Notre réseau d'agences est conçu
                pour vous offrir un accès facile et pratique à tous nos services financiers, où que vous soyez.
            </p>

            <a href="#more-agences" class="btn-heard-product">En savoir plus <i class="bi bi-arrow-right"></i> </a>
        </div>
        <div class="img-head-product" style="background-image: url({{ asset('images/agences/agences-3.jpg') }})"></div>
    </div>
    <section class="agences"id="more-agences">
        <h1>Nos différentes Agences et Guichets <br>classées par région</h1>
        <div class="row mt-4">
            <div class="col-8 pe-4">
                <div class="row">
                    <div class="col-12">
                        <div class="carte-agences">
                            <div class="text-block">
                                <h3>Centre</h3>
                                <p>
                                    <b>Agence Yaoundé</b> <br>
                                    Face Camp Sic, Messa-mokolo, Yaoundé <br>
                                    (+237) 656 85 12 62 <br>
                                    info.cremincamyaounde@cremincam.com
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="carte-agences">
                            <div class="text-block">
                                <h3>Nord</h3>
                                <p>
                                    <b>Agence de Garoua</b> <br>
                                    Face Camp Sic, Messa-mokolo, Yaoundé <br>
                                    (+237) 697 04 69 25 <br>
                                    info.cremincamgaroua@cremincam.com
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="carte-agences">
                            <div class="text-block">
                                <h3>Littoral</h3>
                                <p>
                                    <b>Agence Yaoundé</b> <br>
                                    Akwa Douala <br>
                                    (+237) 655 71 73 86 <br>
                                    info.cremincamdouala@cremincam.com
                                </p>
                                <p>
                                    <b>Guichet de Nkongsamba</b> <br>
                                    Face Congelcam, Immeuble La Sabine <br>
                                    (+237) 655 71 73 86 <br>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="carte-agences">
                            <div class="text-block">
                                <h3>Êxtrème-Nord</h3>
                                <p>
                                    <b>Guichet de Maroua</b> <br>
                                    Domayo, Carrefour Foyer des Jeunes <br>
                                    (+237) 675 42 75 22 <br>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4 img-agences" style="background-image: url({{ asset('images/agences/agences-2.jpg') }})">
            </div>
        </div>
    </section>
@endsection
