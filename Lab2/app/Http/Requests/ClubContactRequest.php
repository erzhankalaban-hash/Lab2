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
            'phone'   => ['required', 'string', 'regex:/^\+?[0-9]{10,15}$/'],
            'date'    => ['required', 'date', 'after_or_equal:today'],
            'message' => ['required', 'string', 'min:10'],
        ];
    }
}
