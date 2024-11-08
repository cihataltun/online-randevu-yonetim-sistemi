@extends('layouts.app')

@section('content')
    <h2>{{ $provider->name }} - Detay Sayfası</h2>
    <p>Uzmanlık: {{ $provider->providerDetail->specialty }}</p>
    <p>Hizmet Detayları: {{ $provider->providerDetail->service_details }}</p>
    <p>Çalışma Saatleri: {{ $provider->providerDetail->work_hours }}</p>

    <!-- Randevu Al Butonu -->
    <a href="{{ route('appointments.createWithProvider', $provider->id) }}" class="btn btn-primary mt-4">Randevu Al</a>

    @endsection
