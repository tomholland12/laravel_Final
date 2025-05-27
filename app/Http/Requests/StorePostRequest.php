<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest {
    public function authorize(): bool {
        return true; // allow public use
    }

    public function rules(): array {
        return [
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ];
    }
}