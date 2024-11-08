<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Appointment;
use Illuminate\Http\Request;
use App\Mail\AppointmentCreatedMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class AppointmentController extends Controller
{
    public function index()
    {
        // Giriş yapan kullanıcının randevularını çekiyoruz
        $customerId = Auth::id();
        $appointments = Appointment::where('user_id', $customerId)->get();
        return view('appointments.index', compact('appointments'));
    }
    public function create($providerId = null)
    {
        // Eğer providerId varsa o id ile provider'ı getir, yoksa tüm provider'ları getir
        $provider = $providerId ? User::with('providerDetail')->findOrFail($providerId) : null;
        $providers = $provider ? null : User::where('role', 'provider')->with('providerDetail')->get();

        return view('appointments.create', compact('provider', 'providers'));
    }

    public function store(Request $request)
    {
        // Formdan gelen verileri doğrulama
        $request->validate([
            'provider_id' => 'required|exists:users,id',
            'appointment_date' => 'required|date',
            'notes' => 'nullable|string',
        ]);
        $provider = User::with('providerDetail')->findOrFail($request->provider_id);
        $customer = Auth::user();
        // Yeni randevu oluşturma
        $appointment =
        Appointment::create([
            'user_id' => $customer->id,
            'appointment_date' => $request->appointment_date,
            'notes' => $request->notes,

            // Müşteri bilgileri
            'customer_name' => $customer->name,
            'customer_email' => $customer->email,

            // Hizmet sağlayıcı bilgileri
            'provider_name' => $provider->name,
            'provider_specialty' => $provider->providerDetail->specialty,
            'provider_work_hours' => $provider->providerDetail->work_hours,
        ]);
        // Randevuyu oluşturan kullanıcıya e-posta gönder
        Mail::to($appointment->customer->email)->send(new AppointmentCreatedMail($appointment));

        return redirect()->route('appointments.index')->with('success', 'Randevunuz başarıyla oluşturuldu ve e-postası gönderildi.');
    }
    // public function createForProvider($providerId)
    // {
    //     $provider = User::with('providerDetail')->findOrFail($providerId);
    //     return view('appointments.create', compact('provider'));
    // }
}
