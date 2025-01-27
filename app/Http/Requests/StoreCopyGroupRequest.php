<?php

namespace App\Http\Requests;

use App\Models\CopyGroup;
use Illuminate\Foundation\Http\FormRequest;

class StoreCopyGroupRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return $this->user()->can('create', CopyGroup::class);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
            'name' => ['required', 'string', 'max:255'],
            'channel_id' => ['required', 'integer'],
            'campaign_id' => ['required', 'integer'],
            'status' => ['nullable', 'string'],
            'description' => ['nullable', 'string', 'max:255'],
        ];
    }
}
