<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\ValidationException;

class LoginFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'email' => "required|email|max:50",
            'password' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'required' => ":attributes Tidak boleh kosong",

        ];
    }
    public function attributes()
    {
        return [
            'email' => "Alamat Email",
            'password' => "Kata Sandi"
        ];
    }
    public function authenticated()
    {
        $user = $this->validated();
        if (!Auth::attempt($user, $this->boolean('remember_me'))) {
            throw ValidationException::withMessages([
                'email' => trans('auth.failed'),
            ]);
        }
    }
}
