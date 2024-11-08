@extends('layouts.app')

@section('content')
    <h2 class="mb-4">Hizmet Sağlayıcıları</h2>

    <div class="row">
        @foreach($providers as $provider)
            <div class="col-md-4 mb-3">
                <a href="{{ route('providers.show', $provider->id) }}" class="text-decoration-none text-dark">
                    <div class="card border-0 shadow-sm hover-card">
                        <div class="card-body text-center">
                            <h5 class="card-title">{{ $provider->name }}</h5>
                            <p class="card-text">Uzmanlık: {{ $provider->providerDetail->specialty }}</p>
                            <p class="card-text">Hizmet Detayları: {{ $provider->providerDetail->provider_description }}</p>
                            <p class="card-text">Çalışma Saatleri: {{ $provider->providerDetail->work_hours }}</p>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
@endsection
