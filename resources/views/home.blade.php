@extends('layouts.app')

@section('content')
    <div class="text-center">
        <h1 class="mb-4">Online Randevu Yönetim Sistemine Hoş Geldiniz</h1>
        <p class="lead">Randevu almak veya geçmiş randevularınızı görüntülemek için giriş yapın.</p>
        @auth
        <a href="{{ route('appointments.create') }}" class="btn btn-success">Yeni Randevu Al</a>
        <a href="{{ route('appointments.index') }}" class="btn btn-primary">Randevularımı Görüntüle</a>
        <a href="{{ route('providers.index') }}" class="btn btn-warning">Hizmet Sağlayıcılar</a>
        @else
            <a href="{{ route('login') }}" class="btn btn-primary">Giriş Yap</a>
            <a href="{{ route('register') }}" class="btn btn-secondary">Kayıt Ol</a>
        @endauth
    </div>
@endsection
