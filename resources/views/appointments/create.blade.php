@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h2 class="mb-0 text-center">Yeni Randevu Al</h2>
        </div>
        <div class="card-body">
            <form action="{{ route('appointments.store') }}" method="POST">
                @csrf

                <div class="row mb-3">
                    <label for="provider_id" class="form-label col-12 text-center">Hizmet Sağlayıcı:</label>
                    <div class="col-md-3 mx-auto">
                        @if(isset($provider))
                            <input type="hidden" name="provider_id" value="{{ $provider->id }}">
                            <p class="form-control-plaintext text-center">{{ $provider->name }} - {{ $provider->providerDetail->specialty }}</p>
                        @else
                            <select name="provider_id" id="provider_id" class="form-select" required>
                                @foreach($providers as $providerOption)
                                    <option value="{{ $providerOption->id }}">{{ $providerOption->name }} - {{ $providerOption->providerDetail->specialty }}</option>
                                @endforeach
                            </select>
                        @endif
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="appointment_date" class="form-label col-12 text-center">Randevu Tarihi:</label>
                    <div class="col-md-3 mx-auto">
                        <input type="text" name="appointment_date" id="appointment_date" class="form-control" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="notes" class="form-label col-12 text-center">Notlar:</label>
                    <div class="col-md-6 mx-auto">
                        <textarea name="notes" id="notes" class="form-control" rows="3" placeholder="Randevu ile ilgili notlarınızı buraya yazabilirsiniz..."></textarea>
                    </div>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-lg">Randevu Al</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
