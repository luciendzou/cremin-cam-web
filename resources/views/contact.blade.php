@extends('index')

@section('content')
<section class="contact-us py-5">
    <style>
        .card--no-shadow { box-shadow: none !important; transition: none !important; }
        .card--no-shadow:hover { box-shadow: none !important; transform: none !important; }
    </style>

    <div class="container" style="padding: 3rem 6%; margin-bottom: 8rem;">
        <div class="row g-4">
            <div class="col-lg-5">
                <div class="carte border-0 card--no-shadow">
                    <div class="card-body">
                        <h2 class="h4 mb-3">Contactez‑nous</h2>
                        <p class="text-muted">Pour toute question ou demande d'information, utilisez le formulaire ou nos coordonnées ci‑dessous.</p>

                        <ul class="list-unstyled mb-0">
                            <li class="mb-2"><strong>Téléphone:</strong> (+237) 697 04 69 25</li>
                            <li class="mb-2"><strong>Email:</strong> <a href="mailto:info.cremincam@cremincam.com">info.cremincam@cremincam.com</a></li>
                            <li><strong>Adresse:</strong> Messa‑mokolo, Yaoundé, Cameroun</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-7">
                <div class="carte border-0 card--no-shadow">
                    <div class="card-body">
                        <h3 class="h5 mb-3">Envoyer un message</h3>

                        @if(session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif

                        @if($errors->any())
                            <div class="alert alert-danger">
                                {{ $errors->first() }}
                            </div>
                        @endif

                        <form method="POST" action="{{ route('contact.submit') }}" novalidate>
                            @csrf

                            <div class="mb-3">
                                <label for="destination" class="form-label">Destination *</label>
                                <select id="destination" name="destination" class="form-select @error('destination') is-invalid @enderror" required>
                                    <option value="general" {{ old('destination')=='general' ? 'selected' : '' }}>Direction générale — info.cremincam@cremincam.com</option>
                                    <option value="yaounde" {{ old('destination')=='yaounde' ? 'selected' : '' }}>Agence Yaoundé — info.cremincamyaounde@cremincam.com</option>
                                    <option value="douala" {{ old('destination')=='douala' ? 'selected' : '' }}>Agence Douala — info.cremincamdouala@cremincam.com</option>
                                    <option value="garoua" {{ old('destination')=='garoua' ? 'selected' : '' }}>Agence Garoua — info.cremincamgaroua@cremincam.com</option>
                                </select>
                                @error('destination') <div class="invalid-feedback">{{ $message }}</div> @enderror
                            </div>

                            <div class="mb-3">
                                <label for="name" class="form-label">Nom complet *</label>
                                <input id="name" name="name" type="text" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" required>
                                @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Email *</label>
                                <input id="email" name="email" type="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required>
                                @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
                            </div>

                            <div class="mb-3">
                                <label for="subject" class="form-label">Sujet</label>
                                <input id="subject" name="subject" type="text" class="form-control" value="{{ old('subject') }}">
                            </div>

                            <div class="mb-3">
                                <label for="message" class="form-label">Message *</label>
                                <textarea id="message" name="message" rows="6" class="form-control @error('message') is-invalid @enderror" required>{{ old('message') }}</textarea>
                                @error('message') <div class="invalid-feedback">{{ $message }}</div> @enderror
                            </div>

                            <div class="d-flex flex-wrap gap-2">
                                <button type="submit" class="btn btn-primary">Envoyer le message</button>
                                <button type="reset" class="btn btn-outline-secondary">Réinitialiser</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection