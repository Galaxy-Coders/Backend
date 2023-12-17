<?php

namespace App\Http\Controllers;

use App\Models\User;
use Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AuthController extends Controller
{
    public function authenticate(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            if (auth()->user()->role[0]->name == 'superAdmin') {
                return redirect('admin');
            } else {
                return redirect()->intended();
            }
            // return redirect()->intended();
        }
        return back()->withErrors([
            'login' => 'The provided credentials do not match our records.',
        ])->onlyInput('login');
    }
    public function register_store(Request $request)
    {
        $user = User::create([
            'name' => $request->name,
            'surname' => $request->surname,
            'phone' => $request->phone,
            'email' => $request->email,
            'password' => $request->password
        ]);
        $user->role()->attach(1);
        auth()->login($user);
        return redirect('/');
    }
    public function showProfile($id)
    {
        $user = Auth::user();
        return view('profile')->with('user', $user);
    }
    public function updateProfile(Request $request, $id)
    {
        Auth::user()->update([
            'name' => $request->name,
            'login' => $request->login,
        ]);
        return redirect('/');
    }
    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
