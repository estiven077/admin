<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    // Muestra la vista de inicio de sesión
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Procesa el inicio de sesión
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended(route('home'));
        }

        return back()->withErrors([
            'email' => 'Las credenciales ingresadas no coinciden con nuestros registros.',
        ])->onlyInput('email');
    }

    // Muestra el formulario de registro
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    // Procesa el registro de nuevo usuario
    public function register(Request $request)
    {
        // 1. Validar los campos del formulario
        $request->validate([
            'name'            => 'required|string|max:255',
            'document_type'   => 'required|string',
            'document_number' => 'required|string|unique:users,document_number',
            'email'           => 'required|string|email|max:255|unique:users,email',
            'role'            => 'required|string',
            'ficha'           => 'nullable|string',
            'password'        => 'required|string|min:8|confirmed',
            'terms'           => 'accepted',
        ]);

        // 2. Crear el usuario en la base de datos
        $user = User::create([
            'name'            => $request->name,
            'document_type'   => $request->document_type,
            'document_number' => $request->document_number,
            'email'           => $request->email,
            'role'            => $request->role,
            'ficha'           => $request->ficha,
            'password'        => Hash::make($request->password),
        ]);

        // 3. Iniciar sesión automáticamente (opcional)
        Auth::login($user);

        // 4. Redirigir al inicio/dashboard
        return redirect()->route('home');
    }

    // Cierra la sesión
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}