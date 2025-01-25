<?php

namespace App\Http\Requests;

use App\Models\Client;
use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;

class StoreClientRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        //ToDo: Check if the user is authenticated
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
            'name' => ['required', 'string', 'max:255'],
            'logo' => ['nullable', 'string', 'max:255'],
            'primary_color' => ['nullable', 'string', 'max:255'],
            'secondary_color' => ['nullable', 'string', 'max:255'],
            //
        ];
    }
}
