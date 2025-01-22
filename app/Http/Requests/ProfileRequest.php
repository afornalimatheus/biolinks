<?php

namespace App\Http\Requests;

use App\Rules\CheckHandler;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Http\UploadedFile;

/**
 * @property-read UploadedFile $photo
 */
class ProfileRequest extends FormRequest
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
            'name' => ['required', 'min:3', 'max:30'],
            'photo' => ['nullable', 'image'],
            'description' => ['nullable'],
            'handler' => [
                'required',
                Rule::unique('users')->ignoreModel($this->user()),
                new CheckHandler
            ]
        ];
    }
}
