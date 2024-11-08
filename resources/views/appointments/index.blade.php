@extends('layouts.app')

@section('content')
    <h2 class="mb-4">Randevularım</h2>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    @if($appointments->isEmpty())
        <div class="alert alert-info">Henüz randevunuz bulunmamaktadır.</div>
    @else
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Hizmet Sağlayıcı</th>
                    <th>Tarih</th>
                    <th>Notlar</th>
                </tr>
            </thead>
            <tbody>
                @foreach($appointments as $appointment)
                    <tr>
                        <td>{{ $appointment->provider_name }}</td>
                        <td>{{ \Carbon\Carbon::parse($appointment->appointment_date)->locale('tr')->isoFormat('D MMMM YYYY - HH:mm') }}</td>
                        <td>{{ $appointment->notes }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection
