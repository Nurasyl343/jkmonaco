<?php

namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;

class ApplicationCreateRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'phone_number' => 'required|string',
        ];
    }

    // Метод для определения пользовательских сообщений об ошибках
    public function messages()
    {
        return [
            'name.required' => 'Поле Имя обязательно для заполнения.',
            'name.string' => 'Поле Имя должно быть строкой.',
            'name.max' => 'Поле Имя не должно превышать :max символов.',
            'email.required' => 'Поле Электронная почта обязательно для заполнения.',
            'email.email' => 'Поле Электронная почта должно быть действительным адресом.',
            'email.max' => 'Поле Электронная почта не должно превышать :max символов.',
            'phone_number.required' => 'Поле Номер телефона обязательно для заполнения.',
            'phone_number.string' => 'Поле Номер телефона должно быть строкой.',
        ];
    }
}
