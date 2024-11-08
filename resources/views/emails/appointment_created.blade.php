<!DOCTYPE html>
<html>
<head>
    <title>Randevu Onayı</title>
</head>
<body>
    <h1>Randevunuz Onaylandı</h1>
    <p>Merhaba {{ $appointment->customer->name }},</p>
    <p>{{ \Carbon\Carbon::parse($appointment->appointment_date)->locale('tr')->isoFormat('D MMMM YYYY - HH:mm') }} tarihinde {{ $appointment->provider_name }} ile randevunuz onaylanmıştır.</p>
</body>
</html>
