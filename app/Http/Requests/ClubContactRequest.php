<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClubContactRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name'    => ['required', 'string', 'max:255'],
            'email'   => ['required', 'email'],
            'message' => ['required', 'string', 'min:10'],
        ];
    }

    public function messages(): array
    {
        return [
            'name.required'    => 'Поле «Ім\'я» не може бути порожнім.',
            'email.required'   => 'Поле «Email» не може бути порожнім.',
            'email.email'      => 'Введіть коректну адресу електронної пошти.',
            'message.required' => 'Поле «Повідомлення» не може бути порожнім.',
            'message.min'      => 'Текст повідомлення має містити щонайменше 10 символів.',
        ];
    }
}
