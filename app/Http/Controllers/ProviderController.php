<?php

namespace App\Http\Controllers;

use App\Models\User;

class ProviderController extends Controller
{
    public function index()
    {
        $providers = User::where('role', 'provider')->get(); // Sadece 'provider' rolüne sahip kullanıcıları getir
        return view('providers.index', compact('providers'));
    }
    public function show($id)
    {
        $provider = User::with('providerDetail')->findOrFail($id); // ID üzerinden sağlayıcıyı getir
        return view('providers.show', compact('provider'));
    }
}
