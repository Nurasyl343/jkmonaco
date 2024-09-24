<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password'); // Исправлено: вызов only на $request, а не на $validated

        if (Auth::attempt($credentials)) {
            // Успешный вход, регенерируем сессию
            $request->session()->regenerate();

            return redirect()->route('admin')->with('success', 'Успешный вход');
        }

        // В случае ошибки возвращаем пользователя обратно с ошибкой и сохраняем email в поле
        return redirect()->route('login')->with('error', 'Неверный email или пароль')->onlyInput('email');
    }
}
