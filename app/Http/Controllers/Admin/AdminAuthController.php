<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;

class AdminAuthController extends Controller
{

    public function showRegisterForm()
    {
        return view('unauth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name'     => 'required|string|max:255',
            'email'    => 'required|email|unique:admins,email',
            'password' => 'required|min:6|confirmed',
        ]);

        $admin = Admin::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Auth::login($admin);

        return redirect()->route('admin.dashboard');
    }


    public function showLoginForm()
    {
        return view('unauth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        $admin = Admin::where('email', $request->email)->first();

        if ($admin && Hash::check($request->password, $admin->password)) {
            Auth::login($admin);
            return redirect()->route('admin.dashboard');
        }

        return back()->withErrors(['email' => 'Invalid email or password']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('unauth.login');
    }
     public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/'); // or redirect to homepage if preferred
    }
}
